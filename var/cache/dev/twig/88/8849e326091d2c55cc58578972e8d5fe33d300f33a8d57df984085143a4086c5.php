<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_cb35c9a2683abd7e904d7d6be5c7df3d3cb40fae336f4797e420ca11f43a6c8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e9c805507346e31de5321397abe83f7dbcff4561b47c1d44ebe9c0bbfb80901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9c805507346e31de5321397abe83f7dbcff4561b47c1d44ebe9c0bbfb80901->enter($__internal_2e9c805507346e31de5321397abe83f7dbcff4561b47c1d44ebe9c0bbfb80901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_9ba7929d30de70b4ec24adb9cace30b28677956c9417e1afd10601ad45e0cfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba7929d30de70b4ec24adb9cace30b28677956c9417e1afd10601ad45e0cfcb->enter($__internal_9ba7929d30de70b4ec24adb9cace30b28677956c9417e1afd10601ad45e0cfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_2e9c805507346e31de5321397abe83f7dbcff4561b47c1d44ebe9c0bbfb80901->leave($__internal_2e9c805507346e31de5321397abe83f7dbcff4561b47c1d44ebe9c0bbfb80901_prof);

        
        $__internal_9ba7929d30de70b4ec24adb9cace30b28677956c9417e1afd10601ad45e0cfcb->leave($__internal_9ba7929d30de70b4ec24adb9cace30b28677956c9417e1afd10601ad45e0cfcb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/Library/WebServer/Documents/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
