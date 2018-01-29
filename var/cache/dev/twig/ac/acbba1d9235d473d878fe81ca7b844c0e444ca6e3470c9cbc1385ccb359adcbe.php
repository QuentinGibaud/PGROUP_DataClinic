<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8bd5edbfd29f3e939e921db485e54e78eaf2ca2efc1a47455521b9c66b7017de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a120f17e74f2d16bd1e85a873ded6f35570ea9050259ae2dc44b7c458b4660e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a120f17e74f2d16bd1e85a873ded6f35570ea9050259ae2dc44b7c458b4660e->enter($__internal_6a120f17e74f2d16bd1e85a873ded6f35570ea9050259ae2dc44b7c458b4660e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7ab337a50cc845c3bc891aebbe22929f5678a5df27b4116bb6730d43eb7183b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab337a50cc845c3bc891aebbe22929f5678a5df27b4116bb6730d43eb7183b3->enter($__internal_7ab337a50cc845c3bc891aebbe22929f5678a5df27b4116bb6730d43eb7183b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a120f17e74f2d16bd1e85a873ded6f35570ea9050259ae2dc44b7c458b4660e->leave($__internal_6a120f17e74f2d16bd1e85a873ded6f35570ea9050259ae2dc44b7c458b4660e_prof);

        
        $__internal_7ab337a50cc845c3bc891aebbe22929f5678a5df27b4116bb6730d43eb7183b3->leave($__internal_7ab337a50cc845c3bc891aebbe22929f5678a5df27b4116bb6730d43eb7183b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1241398f683e2b6779e46c92bd3f5642d02cfac64a4cc1ce728ad229becdd5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1241398f683e2b6779e46c92bd3f5642d02cfac64a4cc1ce728ad229becdd5ba->enter($__internal_1241398f683e2b6779e46c92bd3f5642d02cfac64a4cc1ce728ad229becdd5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf325e3e0e92dc3a4854ff7a1fb5472db3219a4b89b81095be87c3e3882295c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf325e3e0e92dc3a4854ff7a1fb5472db3219a4b89b81095be87c3e3882295c0->enter($__internal_cf325e3e0e92dc3a4854ff7a1fb5472db3219a4b89b81095be87c3e3882295c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cf325e3e0e92dc3a4854ff7a1fb5472db3219a4b89b81095be87c3e3882295c0->leave($__internal_cf325e3e0e92dc3a4854ff7a1fb5472db3219a4b89b81095be87c3e3882295c0_prof);

        
        $__internal_1241398f683e2b6779e46c92bd3f5642d02cfac64a4cc1ce728ad229becdd5ba->leave($__internal_1241398f683e2b6779e46c92bd3f5642d02cfac64a4cc1ce728ad229becdd5ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce6c23c419e6b11bb1dc62bd7ca435f3b1ebd14d512fb497d51c9d72307a38e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6c23c419e6b11bb1dc62bd7ca435f3b1ebd14d512fb497d51c9d72307a38e2->enter($__internal_ce6c23c419e6b11bb1dc62bd7ca435f3b1ebd14d512fb497d51c9d72307a38e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8406dcfe168208e0a42abb34f12392e0a5f622729dad69f0e3773c44cec0b155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8406dcfe168208e0a42abb34f12392e0a5f622729dad69f0e3773c44cec0b155->enter($__internal_8406dcfe168208e0a42abb34f12392e0a5f622729dad69f0e3773c44cec0b155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8406dcfe168208e0a42abb34f12392e0a5f622729dad69f0e3773c44cec0b155->leave($__internal_8406dcfe168208e0a42abb34f12392e0a5f622729dad69f0e3773c44cec0b155_prof);

        
        $__internal_ce6c23c419e6b11bb1dc62bd7ca435f3b1ebd14d512fb497d51c9d72307a38e2->leave($__internal_ce6c23c419e6b11bb1dc62bd7ca435f3b1ebd14d512fb497d51c9d72307a38e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fee6c40f3f0fff61c48245b59508461876c5eeba72a714ae8bc7673261f751e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee6c40f3f0fff61c48245b59508461876c5eeba72a714ae8bc7673261f751e5->enter($__internal_fee6c40f3f0fff61c48245b59508461876c5eeba72a714ae8bc7673261f751e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f903653eeb39b6d49a90aaffeace9bd43c9e63e6f8dd882c56b095403eed1173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f903653eeb39b6d49a90aaffeace9bd43c9e63e6f8dd882c56b095403eed1173->enter($__internal_f903653eeb39b6d49a90aaffeace9bd43c9e63e6f8dd882c56b095403eed1173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f903653eeb39b6d49a90aaffeace9bd43c9e63e6f8dd882c56b095403eed1173->leave($__internal_f903653eeb39b6d49a90aaffeace9bd43c9e63e6f8dd882c56b095403eed1173_prof);

        
        $__internal_fee6c40f3f0fff61c48245b59508461876c5eeba72a714ae8bc7673261f751e5->leave($__internal_fee6c40f3f0fff61c48245b59508461876c5eeba72a714ae8bc7673261f751e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Library/WebServer/Documents/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
