<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e8774ef7147983519f641103fc43dc04c861b94a414f8fcdebb742b8cbe4e4ad extends Twig_Template
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
        $__internal_9ea1456e557729c97a0f6eb653028310c13a72fb1546cbc152bb98cfba68d19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea1456e557729c97a0f6eb653028310c13a72fb1546cbc152bb98cfba68d19b->enter($__internal_9ea1456e557729c97a0f6eb653028310c13a72fb1546cbc152bb98cfba68d19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e55f143f70e5b3f09c089ddbb97c6c26e49079cdcb7368489b6c5f43aab9ff57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55f143f70e5b3f09c089ddbb97c6c26e49079cdcb7368489b6c5f43aab9ff57->enter($__internal_e55f143f70e5b3f09c089ddbb97c6c26e49079cdcb7368489b6c5f43aab9ff57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea1456e557729c97a0f6eb653028310c13a72fb1546cbc152bb98cfba68d19b->leave($__internal_9ea1456e557729c97a0f6eb653028310c13a72fb1546cbc152bb98cfba68d19b_prof);

        
        $__internal_e55f143f70e5b3f09c089ddbb97c6c26e49079cdcb7368489b6c5f43aab9ff57->leave($__internal_e55f143f70e5b3f09c089ddbb97c6c26e49079cdcb7368489b6c5f43aab9ff57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6448d31c55ebfc2435192a7a6cd3ba1a80c29271dd7bfd8d929f18112967add3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6448d31c55ebfc2435192a7a6cd3ba1a80c29271dd7bfd8d929f18112967add3->enter($__internal_6448d31c55ebfc2435192a7a6cd3ba1a80c29271dd7bfd8d929f18112967add3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10d5008a81f25826cf45f49444a700e991bf73c77fa61c8657da96e3718cf4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d5008a81f25826cf45f49444a700e991bf73c77fa61c8657da96e3718cf4dd->enter($__internal_10d5008a81f25826cf45f49444a700e991bf73c77fa61c8657da96e3718cf4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_10d5008a81f25826cf45f49444a700e991bf73c77fa61c8657da96e3718cf4dd->leave($__internal_10d5008a81f25826cf45f49444a700e991bf73c77fa61c8657da96e3718cf4dd_prof);

        
        $__internal_6448d31c55ebfc2435192a7a6cd3ba1a80c29271dd7bfd8d929f18112967add3->leave($__internal_6448d31c55ebfc2435192a7a6cd3ba1a80c29271dd7bfd8d929f18112967add3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_15182f9150af9f6865b4b905a965bd48f9d2957a60005a65fbd837b6516cf60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15182f9150af9f6865b4b905a965bd48f9d2957a60005a65fbd837b6516cf60c->enter($__internal_15182f9150af9f6865b4b905a965bd48f9d2957a60005a65fbd837b6516cf60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2568a6f0265e3e431b5cf65fe06d09a32c98e9454f83943f81b4de117955393b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2568a6f0265e3e431b5cf65fe06d09a32c98e9454f83943f81b4de117955393b->enter($__internal_2568a6f0265e3e431b5cf65fe06d09a32c98e9454f83943f81b4de117955393b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2568a6f0265e3e431b5cf65fe06d09a32c98e9454f83943f81b4de117955393b->leave($__internal_2568a6f0265e3e431b5cf65fe06d09a32c98e9454f83943f81b4de117955393b_prof);

        
        $__internal_15182f9150af9f6865b4b905a965bd48f9d2957a60005a65fbd837b6516cf60c->leave($__internal_15182f9150af9f6865b4b905a965bd48f9d2957a60005a65fbd837b6516cf60c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec1d7cba3dbc80c0d4a7eeac83521ee8bf40399e2e1b36981e86413bdad3ad16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1d7cba3dbc80c0d4a7eeac83521ee8bf40399e2e1b36981e86413bdad3ad16->enter($__internal_ec1d7cba3dbc80c0d4a7eeac83521ee8bf40399e2e1b36981e86413bdad3ad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c4170e7e8999da5387f1e0403ffdd28f5d17d8cdb5ea5095e520ad0196a0f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4170e7e8999da5387f1e0403ffdd28f5d17d8cdb5ea5095e520ad0196a0f7b->enter($__internal_9c4170e7e8999da5387f1e0403ffdd28f5d17d8cdb5ea5095e520ad0196a0f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9c4170e7e8999da5387f1e0403ffdd28f5d17d8cdb5ea5095e520ad0196a0f7b->leave($__internal_9c4170e7e8999da5387f1e0403ffdd28f5d17d8cdb5ea5095e520ad0196a0f7b_prof);

        
        $__internal_ec1d7cba3dbc80c0d4a7eeac83521ee8bf40399e2e1b36981e86413bdad3ad16->leave($__internal_ec1d7cba3dbc80c0d4a7eeac83521ee8bf40399e2e1b36981e86413bdad3ad16_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
