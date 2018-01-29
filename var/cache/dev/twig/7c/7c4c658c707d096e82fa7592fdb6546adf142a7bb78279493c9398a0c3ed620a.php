<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_de7c9b3f820e3da97bc82d5e676c6c0673cf120645d11b6dc58da939415e3bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f318ba7c65ed246fb9599feeee8ad6522aa95f59340bb50420041a7f3dc593e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f318ba7c65ed246fb9599feeee8ad6522aa95f59340bb50420041a7f3dc593e6->enter($__internal_f318ba7c65ed246fb9599feeee8ad6522aa95f59340bb50420041a7f3dc593e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_14159a9f23f08c6e5e3578d9f46424a170a0b0d8e7335c3b7873d6ea0d678ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14159a9f23f08c6e5e3578d9f46424a170a0b0d8e7335c3b7873d6ea0d678ead->enter($__internal_14159a9f23f08c6e5e3578d9f46424a170a0b0d8e7335c3b7873d6ea0d678ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f318ba7c65ed246fb9599feeee8ad6522aa95f59340bb50420041a7f3dc593e6->leave($__internal_f318ba7c65ed246fb9599feeee8ad6522aa95f59340bb50420041a7f3dc593e6_prof);

        
        $__internal_14159a9f23f08c6e5e3578d9f46424a170a0b0d8e7335c3b7873d6ea0d678ead->leave($__internal_14159a9f23f08c6e5e3578d9f46424a170a0b0d8e7335c3b7873d6ea0d678ead_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0384023b1e88cb29ba59efeb8308dc3eba41581e1b07fd337d727e452b4998ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0384023b1e88cb29ba59efeb8308dc3eba41581e1b07fd337d727e452b4998ce->enter($__internal_0384023b1e88cb29ba59efeb8308dc3eba41581e1b07fd337d727e452b4998ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_07fc81baee466cbc9d4cb8ede3941c818c937fba5be11c22e08a294f7fa7cb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fc81baee466cbc9d4cb8ede3941c818c937fba5be11c22e08a294f7fa7cb0c->enter($__internal_07fc81baee466cbc9d4cb8ede3941c818c937fba5be11c22e08a294f7fa7cb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07fc81baee466cbc9d4cb8ede3941c818c937fba5be11c22e08a294f7fa7cb0c->leave($__internal_07fc81baee466cbc9d4cb8ede3941c818c937fba5be11c22e08a294f7fa7cb0c_prof);

        
        $__internal_0384023b1e88cb29ba59efeb8308dc3eba41581e1b07fd337d727e452b4998ce->leave($__internal_0384023b1e88cb29ba59efeb8308dc3eba41581e1b07fd337d727e452b4998ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab2fc14091cd4dce0c2e4b7e88ad0a4ef8a82e217c998b355387528621741ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2fc14091cd4dce0c2e4b7e88ad0a4ef8a82e217c998b355387528621741ce0->enter($__internal_ab2fc14091cd4dce0c2e4b7e88ad0a4ef8a82e217c998b355387528621741ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7d572ccf26722d090c6343b873dff760e782c991f598a14e828fc26cf5cec3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d572ccf26722d090c6343b873dff760e782c991f598a14e828fc26cf5cec3c6->enter($__internal_7d572ccf26722d090c6343b873dff760e782c991f598a14e828fc26cf5cec3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7d572ccf26722d090c6343b873dff760e782c991f598a14e828fc26cf5cec3c6->leave($__internal_7d572ccf26722d090c6343b873dff760e782c991f598a14e828fc26cf5cec3c6_prof);

        
        $__internal_ab2fc14091cd4dce0c2e4b7e88ad0a4ef8a82e217c998b355387528621741ce0->leave($__internal_ab2fc14091cd4dce0c2e4b7e88ad0a4ef8a82e217c998b355387528621741ce0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f79229b345adaa81877bb9b105438966db7bd65babdc148896a6d90eea06fa60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79229b345adaa81877bb9b105438966db7bd65babdc148896a6d90eea06fa60->enter($__internal_f79229b345adaa81877bb9b105438966db7bd65babdc148896a6d90eea06fa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_545fba48676149bf6f5d8a58c3a10187e07f087993a5e960d0587d3138abcfac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545fba48676149bf6f5d8a58c3a10187e07f087993a5e960d0587d3138abcfac->enter($__internal_545fba48676149bf6f5d8a58c3a10187e07f087993a5e960d0587d3138abcfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_545fba48676149bf6f5d8a58c3a10187e07f087993a5e960d0587d3138abcfac->leave($__internal_545fba48676149bf6f5d8a58c3a10187e07f087993a5e960d0587d3138abcfac_prof);

        
        $__internal_f79229b345adaa81877bb9b105438966db7bd65babdc148896a6d90eea06fa60->leave($__internal_f79229b345adaa81877bb9b105438966db7bd65babdc148896a6d90eea06fa60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Library/WebServer/Documents/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
