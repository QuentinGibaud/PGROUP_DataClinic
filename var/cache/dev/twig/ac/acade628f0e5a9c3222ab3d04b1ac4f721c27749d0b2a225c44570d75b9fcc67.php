<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6f83cfefed1ad725ac555d6303d120f38c2394a92ee25820f989b9b3ea283cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73622084544be7a71ae8f45ecd72f6edb27a5527af4ce6c6eedb0f263b38c997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73622084544be7a71ae8f45ecd72f6edb27a5527af4ce6c6eedb0f263b38c997->enter($__internal_73622084544be7a71ae8f45ecd72f6edb27a5527af4ce6c6eedb0f263b38c997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_85ebbccfead1abcf4a45427732afa8f312dccd3d6c9e812c60f049b3e205a3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ebbccfead1abcf4a45427732afa8f312dccd3d6c9e812c60f049b3e205a3e0->enter($__internal_85ebbccfead1abcf4a45427732afa8f312dccd3d6c9e812c60f049b3e205a3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_73622084544be7a71ae8f45ecd72f6edb27a5527af4ce6c6eedb0f263b38c997->leave($__internal_73622084544be7a71ae8f45ecd72f6edb27a5527af4ce6c6eedb0f263b38c997_prof);

        
        $__internal_85ebbccfead1abcf4a45427732afa8f312dccd3d6c9e812c60f049b3e205a3e0->leave($__internal_85ebbccfead1abcf4a45427732afa8f312dccd3d6c9e812c60f049b3e205a3e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a07ac5ea03b211bf4e59f1d2ac1b16e77596b75a77944af04e9c98a71980e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a07ac5ea03b211bf4e59f1d2ac1b16e77596b75a77944af04e9c98a71980e23->enter($__internal_0a07ac5ea03b211bf4e59f1d2ac1b16e77596b75a77944af04e9c98a71980e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_596ee10e8b0028f7ffabd10fe783ad24a5f7ecb73b8325422692b8f94479a6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596ee10e8b0028f7ffabd10fe783ad24a5f7ecb73b8325422692b8f94479a6e5->enter($__internal_596ee10e8b0028f7ffabd10fe783ad24a5f7ecb73b8325422692b8f94479a6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_596ee10e8b0028f7ffabd10fe783ad24a5f7ecb73b8325422692b8f94479a6e5->leave($__internal_596ee10e8b0028f7ffabd10fe783ad24a5f7ecb73b8325422692b8f94479a6e5_prof);

        
        $__internal_0a07ac5ea03b211bf4e59f1d2ac1b16e77596b75a77944af04e9c98a71980e23->leave($__internal_0a07ac5ea03b211bf4e59f1d2ac1b16e77596b75a77944af04e9c98a71980e23_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3130e70d02d117f6d091a751141a9cab90962ab6138a34a80e732108a4dc0c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3130e70d02d117f6d091a751141a9cab90962ab6138a34a80e732108a4dc0c22->enter($__internal_3130e70d02d117f6d091a751141a9cab90962ab6138a34a80e732108a4dc0c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c1aafc964d72c13762b39823d9287e6d77398bb842a0c378fbe378e4eca142f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1aafc964d72c13762b39823d9287e6d77398bb842a0c378fbe378e4eca142f->enter($__internal_2c1aafc964d72c13762b39823d9287e6d77398bb842a0c378fbe378e4eca142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2c1aafc964d72c13762b39823d9287e6d77398bb842a0c378fbe378e4eca142f->leave($__internal_2c1aafc964d72c13762b39823d9287e6d77398bb842a0c378fbe378e4eca142f_prof);

        
        $__internal_3130e70d02d117f6d091a751141a9cab90962ab6138a34a80e732108a4dc0c22->leave($__internal_3130e70d02d117f6d091a751141a9cab90962ab6138a34a80e732108a4dc0c22_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e579e0c605e78c257e3b7958dcb2e350834dfe5325724cbb02bc9ac94d4679d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e579e0c605e78c257e3b7958dcb2e350834dfe5325724cbb02bc9ac94d4679d->enter($__internal_9e579e0c605e78c257e3b7958dcb2e350834dfe5325724cbb02bc9ac94d4679d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93280b1fff2c46b2025fba90cfab9dba23e7c95773f56044caab985b5e34c4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93280b1fff2c46b2025fba90cfab9dba23e7c95773f56044caab985b5e34c4a7->enter($__internal_93280b1fff2c46b2025fba90cfab9dba23e7c95773f56044caab985b5e34c4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93280b1fff2c46b2025fba90cfab9dba23e7c95773f56044caab985b5e34c4a7->leave($__internal_93280b1fff2c46b2025fba90cfab9dba23e7c95773f56044caab985b5e34c4a7_prof);

        
        $__internal_9e579e0c605e78c257e3b7958dcb2e350834dfe5325724cbb02bc9ac94d4679d->leave($__internal_9e579e0c605e78c257e3b7958dcb2e350834dfe5325724cbb02bc9ac94d4679d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Library/WebServer/Documents/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
