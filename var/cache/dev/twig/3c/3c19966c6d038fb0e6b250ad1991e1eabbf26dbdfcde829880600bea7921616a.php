<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_bc20455b156b6fbbf0ad1c5ed5fd3870e94fe1d6f1c3875794819a58c46aab28 extends Twig_Template
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
        $__internal_7d92d891794a6c95c85b7051dca6b56d7e57092e4740b633ee88c352d0e08dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d92d891794a6c95c85b7051dca6b56d7e57092e4740b633ee88c352d0e08dde->enter($__internal_7d92d891794a6c95c85b7051dca6b56d7e57092e4740b633ee88c352d0e08dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_6f4cc92a70759c15150a3c641d36e04ea953b5b3abfaaa7a6d35688e8b295c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4cc92a70759c15150a3c641d36e04ea953b5b3abfaaa7a6d35688e8b295c37->enter($__internal_6f4cc92a70759c15150a3c641d36e04ea953b5b3abfaaa7a6d35688e8b295c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7d92d891794a6c95c85b7051dca6b56d7e57092e4740b633ee88c352d0e08dde->leave($__internal_7d92d891794a6c95c85b7051dca6b56d7e57092e4740b633ee88c352d0e08dde_prof);

        
        $__internal_6f4cc92a70759c15150a3c641d36e04ea953b5b3abfaaa7a6d35688e8b295c37->leave($__internal_6f4cc92a70759c15150a3c641d36e04ea953b5b3abfaaa7a6d35688e8b295c37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Library/WebServer/Documents/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
