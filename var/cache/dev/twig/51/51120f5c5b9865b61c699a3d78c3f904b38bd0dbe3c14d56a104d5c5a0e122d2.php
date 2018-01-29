<?php

/* base.html.twig */
class __TwigTemplate_84c4c96af16d0a6477c1cd3c65932c32613cd8d8fe91947d48bc4b7057c60a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc7b50505b31a3c7d063dc67d240de055a48e155380a41416121bf34c1918787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7b50505b31a3c7d063dc67d240de055a48e155380a41416121bf34c1918787->enter($__internal_bc7b50505b31a3c7d063dc67d240de055a48e155380a41416121bf34c1918787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2b542491f4f8355097ff384e205f179247b07c473c743b47668b80991b5fd83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b542491f4f8355097ff384e205f179247b07c473c743b47668b80991b5fd83b->enter($__internal_2b542491f4f8355097ff384e205f179247b07c473c743b47668b80991b5fd83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bc7b50505b31a3c7d063dc67d240de055a48e155380a41416121bf34c1918787->leave($__internal_bc7b50505b31a3c7d063dc67d240de055a48e155380a41416121bf34c1918787_prof);

        
        $__internal_2b542491f4f8355097ff384e205f179247b07c473c743b47668b80991b5fd83b->leave($__internal_2b542491f4f8355097ff384e205f179247b07c473c743b47668b80991b5fd83b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebe0a47d682267b6e864fd7b18edb985de0f06c490dd8a6f31d280f741c512e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe0a47d682267b6e864fd7b18edb985de0f06c490dd8a6f31d280f741c512e9->enter($__internal_ebe0a47d682267b6e864fd7b18edb985de0f06c490dd8a6f31d280f741c512e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_940bfcd8e35a7c48cfa3e24e37e7706d24ef056a057f37d411757bf1f868a6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940bfcd8e35a7c48cfa3e24e37e7706d24ef056a057f37d411757bf1f868a6e1->enter($__internal_940bfcd8e35a7c48cfa3e24e37e7706d24ef056a057f37d411757bf1f868a6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_940bfcd8e35a7c48cfa3e24e37e7706d24ef056a057f37d411757bf1f868a6e1->leave($__internal_940bfcd8e35a7c48cfa3e24e37e7706d24ef056a057f37d411757bf1f868a6e1_prof);

        
        $__internal_ebe0a47d682267b6e864fd7b18edb985de0f06c490dd8a6f31d280f741c512e9->leave($__internal_ebe0a47d682267b6e864fd7b18edb985de0f06c490dd8a6f31d280f741c512e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b3e96fb5f16ecd491c0411a8160423812305e379c353d9c5bd007b6b72ae062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3e96fb5f16ecd491c0411a8160423812305e379c353d9c5bd007b6b72ae062->enter($__internal_5b3e96fb5f16ecd491c0411a8160423812305e379c353d9c5bd007b6b72ae062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_10c616998258ff9566e5d8f9971703cd31bfa64fefc38d024993275b2e26f08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c616998258ff9566e5d8f9971703cd31bfa64fefc38d024993275b2e26f08d->enter($__internal_10c616998258ff9566e5d8f9971703cd31bfa64fefc38d024993275b2e26f08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_10c616998258ff9566e5d8f9971703cd31bfa64fefc38d024993275b2e26f08d->leave($__internal_10c616998258ff9566e5d8f9971703cd31bfa64fefc38d024993275b2e26f08d_prof);

        
        $__internal_5b3e96fb5f16ecd491c0411a8160423812305e379c353d9c5bd007b6b72ae062->leave($__internal_5b3e96fb5f16ecd491c0411a8160423812305e379c353d9c5bd007b6b72ae062_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b500bf50f9ae4a83e24d4b13fd573f5584a95016a56e61d611dae81158d21803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b500bf50f9ae4a83e24d4b13fd573f5584a95016a56e61d611dae81158d21803->enter($__internal_b500bf50f9ae4a83e24d4b13fd573f5584a95016a56e61d611dae81158d21803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65045077ac032480ba76df11b09aa6add248a09f4218b629a23923021128157e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65045077ac032480ba76df11b09aa6add248a09f4218b629a23923021128157e->enter($__internal_65045077ac032480ba76df11b09aa6add248a09f4218b629a23923021128157e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65045077ac032480ba76df11b09aa6add248a09f4218b629a23923021128157e->leave($__internal_65045077ac032480ba76df11b09aa6add248a09f4218b629a23923021128157e_prof);

        
        $__internal_b500bf50f9ae4a83e24d4b13fd573f5584a95016a56e61d611dae81158d21803->leave($__internal_b500bf50f9ae4a83e24d4b13fd573f5584a95016a56e61d611dae81158d21803_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6b72d70baf60c5bd9b8b0aa3dc2db697ceb4e2edb4adceaa984bfa56847817c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b72d70baf60c5bd9b8b0aa3dc2db697ceb4e2edb4adceaa984bfa56847817c->enter($__internal_a6b72d70baf60c5bd9b8b0aa3dc2db697ceb4e2edb4adceaa984bfa56847817c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a4f37c8c51a3c3d4aba3050fed558d75f19337ec97858872f91182c88081d0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f37c8c51a3c3d4aba3050fed558d75f19337ec97858872f91182c88081d0ac->enter($__internal_a4f37c8c51a3c3d4aba3050fed558d75f19337ec97858872f91182c88081d0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a4f37c8c51a3c3d4aba3050fed558d75f19337ec97858872f91182c88081d0ac->leave($__internal_a4f37c8c51a3c3d4aba3050fed558d75f19337ec97858872f91182c88081d0ac_prof);

        
        $__internal_a6b72d70baf60c5bd9b8b0aa3dc2db697ceb4e2edb4adceaa984bfa56847817c->leave($__internal_a6b72d70baf60c5bd9b8b0aa3dc2db697ceb4e2edb4adceaa984bfa56847817c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Library/WebServer/Documents/Symfony/app/Resources/views/base.html.twig");
    }
}
