<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0638a19ad3582a4374291c7e61b1d9579cf8dc93f9751f0e3e53e2e297a04d00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba93eb462a80ab0d93f1a40c45a35a7a19076d66f9c4e8c49b572d89e81121d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba93eb462a80ab0d93f1a40c45a35a7a19076d66f9c4e8c49b572d89e81121d8->enter($__internal_ba93eb462a80ab0d93f1a40c45a35a7a19076d66f9c4e8c49b572d89e81121d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b537854fd0e5a197bf3d6892be403e8f951d691657fa9efcde8656f5f5b27deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b537854fd0e5a197bf3d6892be403e8f951d691657fa9efcde8656f5f5b27deb->enter($__internal_b537854fd0e5a197bf3d6892be403e8f951d691657fa9efcde8656f5f5b27deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba93eb462a80ab0d93f1a40c45a35a7a19076d66f9c4e8c49b572d89e81121d8->leave($__internal_ba93eb462a80ab0d93f1a40c45a35a7a19076d66f9c4e8c49b572d89e81121d8_prof);

        
        $__internal_b537854fd0e5a197bf3d6892be403e8f951d691657fa9efcde8656f5f5b27deb->leave($__internal_b537854fd0e5a197bf3d6892be403e8f951d691657fa9efcde8656f5f5b27deb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec1d42fcb6acc4e16c7f5e0d3dd201e221fc7e7b43dbbe7c6f7b81decb41602e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1d42fcb6acc4e16c7f5e0d3dd201e221fc7e7b43dbbe7c6f7b81decb41602e->enter($__internal_ec1d42fcb6acc4e16c7f5e0d3dd201e221fc7e7b43dbbe7c6f7b81decb41602e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_865b261012ccab3965fbee63eb93cab0a3a3bd931f397b86a22c2475b4ed04b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865b261012ccab3965fbee63eb93cab0a3a3bd931f397b86a22c2475b4ed04b8->enter($__internal_865b261012ccab3965fbee63eb93cab0a3a3bd931f397b86a22c2475b4ed04b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_865b261012ccab3965fbee63eb93cab0a3a3bd931f397b86a22c2475b4ed04b8->leave($__internal_865b261012ccab3965fbee63eb93cab0a3a3bd931f397b86a22c2475b4ed04b8_prof);

        
        $__internal_ec1d42fcb6acc4e16c7f5e0d3dd201e221fc7e7b43dbbe7c6f7b81decb41602e->leave($__internal_ec1d42fcb6acc4e16c7f5e0d3dd201e221fc7e7b43dbbe7c6f7b81decb41602e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6874bb244d3394fcdf341fec2d7e8918e94138e3b718d85c6fee29f1624e6879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6874bb244d3394fcdf341fec2d7e8918e94138e3b718d85c6fee29f1624e6879->enter($__internal_6874bb244d3394fcdf341fec2d7e8918e94138e3b718d85c6fee29f1624e6879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4b28754a8d7d118a35626920b13efa860f4f22e47601533f6e59c5b1c9b1217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b28754a8d7d118a35626920b13efa860f4f22e47601533f6e59c5b1c9b1217->enter($__internal_e4b28754a8d7d118a35626920b13efa860f4f22e47601533f6e59c5b1c9b1217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e4b28754a8d7d118a35626920b13efa860f4f22e47601533f6e59c5b1c9b1217->leave($__internal_e4b28754a8d7d118a35626920b13efa860f4f22e47601533f6e59c5b1c9b1217_prof);

        
        $__internal_6874bb244d3394fcdf341fec2d7e8918e94138e3b718d85c6fee29f1624e6879->leave($__internal_6874bb244d3394fcdf341fec2d7e8918e94138e3b718d85c6fee29f1624e6879_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cae1c616b5498219954238d8f6a1b81a200e630a81661f7568302fae76197d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae1c616b5498219954238d8f6a1b81a200e630a81661f7568302fae76197d27->enter($__internal_cae1c616b5498219954238d8f6a1b81a200e630a81661f7568302fae76197d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e78085d084fa16d487f7e9b2f1a31ee260536af3e2f8da331c1a75c069fcf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e78085d084fa16d487f7e9b2f1a31ee260536af3e2f8da331c1a75c069fcf5a->enter($__internal_5e78085d084fa16d487f7e9b2f1a31ee260536af3e2f8da331c1a75c069fcf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5e78085d084fa16d487f7e9b2f1a31ee260536af3e2f8da331c1a75c069fcf5a->leave($__internal_5e78085d084fa16d487f7e9b2f1a31ee260536af3e2f8da331c1a75c069fcf5a_prof);

        
        $__internal_cae1c616b5498219954238d8f6a1b81a200e630a81661f7568302fae76197d27->leave($__internal_cae1c616b5498219954238d8f6a1b81a200e630a81661f7568302fae76197d27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Library/WebServer/Documents/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
