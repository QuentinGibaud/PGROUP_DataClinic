<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Resource;

/**
 * ClassExistenceResource represents a class existence.
 * Freshness is only evaluated against resource existence.
 *
 * The resource must be a fully-qualified class name.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ClassExistenceResource implements SelfCheckingResourceInterface, \Serializable
{
    private $resource;
    private $exists;

    private static $autoloadLevel = 0;
    private static $existsCache = array();

    /**
     * @param string    $resource The fully-qualified class name
     * @param bool|null $exists   Boolean when the existency check has already been done
     */
    public function __construct($resource, $exists = null)
    {
        $this->resource = $resource;
        if (null !== $exists) {
            $this->exists = (bool) $exists;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->resource;
    }

    /**
     * @return string The file path to the resource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh($timestamp)
    {
        $loaded = class_exists($this->resource, false) || interface_exists($this->resource, false) || trait_exists($this->resource, false);

        if (null !== $exists = &self::$existsCache[$this->resource]) {
            $exists = $exists || $loaded;
        } elseif (!$exists = $loaded) {
            if (!self::$autoloadLevel++) {
                spl_autoload_register(__CLASS__.'::throwOnRequiredClass');
            }

            try {
                $exists = class_exists($this->resource) || interface_exists($this->resource, false) || trait_exists($this->resource, false);
            } catch (\ReflectionException $e) {
                $exists = false;
            } finally {
                if (!--self::$autoloadLevel) {
                    spl_autoload_unregister(__CLASS__.'::throwOnRequiredClass');
                }
            }
        }

        if (null === $this->exists) {
            $this->exists = $exists;
        }

        return $this->exists xor !$exists;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        if (null === $this->exists) {
            $this->isFresh(0);
        }

        return serialize(array($this->resource, $this->exists));
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized)
    {
        list($this->resource, $this->exists) = unserialize($serialized);
    }

    /**
     * @throws \ReflectionException When $class is not found and is required
     */
    private static function throwOnRequiredClass($class)
    {
        $e = new \ReflectionException("Class $class does not exist");
        $trace = $e->getTrace();
        $autoloadFrame = array(
            'function' => 'spl_autoload_call',
            'args' => array($class),
        );
        $i = 1 + array_search($autoloadFrame, $trace, true);

        if (isset($trace[$i]['function']) && !isset($trace[$i]['class'])) {
            switch ($trace[$i]['function']) {
                case 'get_class_methods':
                case 'get_class_vars':
                case 'get_parent_class':
                case 'is_a':
                case 'is_subclass_of':
                case 'class_exists':
                case 'class_implements':
                case 'class_parents':
                case 'trait_exists':
                case 'defined':
                case 'interface_exists':
                case 'method_exists':
                case 'property_exists':
                case 'is_callable':
                    return;
            }
        }

        throw $e;
    }
}
