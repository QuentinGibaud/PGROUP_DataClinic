<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ee38b5059b5f1c07f36908c21120aee5804c8b4b2d64f2165fbccaf4aae1cd56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a79b2c7665515eb350bb42deeb4819f9bbc610167fdf4bf8f030726a01b087a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a79b2c7665515eb350bb42deeb4819f9bbc610167fdf4bf8f030726a01b087a->enter($__internal_6a79b2c7665515eb350bb42deeb4819f9bbc610167fdf4bf8f030726a01b087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b9d2ab0585e615a521df5a803ce9202ae90fe6f9b553350215c01788264dc513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d2ab0585e615a521df5a803ce9202ae90fe6f9b553350215c01788264dc513->enter($__internal_b9d2ab0585e615a521df5a803ce9202ae90fe6f9b553350215c01788264dc513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a79b2c7665515eb350bb42deeb4819f9bbc610167fdf4bf8f030726a01b087a->leave($__internal_6a79b2c7665515eb350bb42deeb4819f9bbc610167fdf4bf8f030726a01b087a_prof);

        
        $__internal_b9d2ab0585e615a521df5a803ce9202ae90fe6f9b553350215c01788264dc513->leave($__internal_b9d2ab0585e615a521df5a803ce9202ae90fe6f9b553350215c01788264dc513_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae5e2a27974c0d272d796d297a8d8d13ec6d64fd917d33809a5328497ca9cf5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5e2a27974c0d272d796d297a8d8d13ec6d64fd917d33809a5328497ca9cf5d->enter($__internal_ae5e2a27974c0d272d796d297a8d8d13ec6d64fd917d33809a5328497ca9cf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_73b8694e73b83a0b955f00daa504e51e7ebdb450a9c5d96327b26b7f23d9faaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b8694e73b83a0b955f00daa504e51e7ebdb450a9c5d96327b26b7f23d9faaa->enter($__internal_73b8694e73b83a0b955f00daa504e51e7ebdb450a9c5d96327b26b7f23d9faaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_73b8694e73b83a0b955f00daa504e51e7ebdb450a9c5d96327b26b7f23d9faaa->leave($__internal_73b8694e73b83a0b955f00daa504e51e7ebdb450a9c5d96327b26b7f23d9faaa_prof);

        
        $__internal_ae5e2a27974c0d272d796d297a8d8d13ec6d64fd917d33809a5328497ca9cf5d->leave($__internal_ae5e2a27974c0d272d796d297a8d8d13ec6d64fd917d33809a5328497ca9cf5d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Library/WebServer/Documents/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
