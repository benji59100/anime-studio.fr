<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9e2a9063795d527fb9c61fdd29e639f97e99545e04b4d5701f67373a0cc685de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_d702e4abab8947ccf9dfc8a78398c8812cb57f3e2bf9a962b421db128af3aa22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d702e4abab8947ccf9dfc8a78398c8812cb57f3e2bf9a962b421db128af3aa22->enter($__internal_d702e4abab8947ccf9dfc8a78398c8812cb57f3e2bf9a962b421db128af3aa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_70b0c78559e331b85f388aec8c62977314a5e9d07bd81d2f44d0e278ca20820d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b0c78559e331b85f388aec8c62977314a5e9d07bd81d2f44d0e278ca20820d->enter($__internal_70b0c78559e331b85f388aec8c62977314a5e9d07bd81d2f44d0e278ca20820d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d702e4abab8947ccf9dfc8a78398c8812cb57f3e2bf9a962b421db128af3aa22->leave($__internal_d702e4abab8947ccf9dfc8a78398c8812cb57f3e2bf9a962b421db128af3aa22_prof);

        
        $__internal_70b0c78559e331b85f388aec8c62977314a5e9d07bd81d2f44d0e278ca20820d->leave($__internal_70b0c78559e331b85f388aec8c62977314a5e9d07bd81d2f44d0e278ca20820d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_239d6bdd44c6a33c4fc56d8f0e28e7c11913652e03e33551af817a8dd401a8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239d6bdd44c6a33c4fc56d8f0e28e7c11913652e03e33551af817a8dd401a8c4->enter($__internal_239d6bdd44c6a33c4fc56d8f0e28e7c11913652e03e33551af817a8dd401a8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f38705c86826df358b75b69f6e21126a6d0e97a1241720fa955564ed21dd254d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38705c86826df358b75b69f6e21126a6d0e97a1241720fa955564ed21dd254d->enter($__internal_f38705c86826df358b75b69f6e21126a6d0e97a1241720fa955564ed21dd254d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f38705c86826df358b75b69f6e21126a6d0e97a1241720fa955564ed21dd254d->leave($__internal_f38705c86826df358b75b69f6e21126a6d0e97a1241720fa955564ed21dd254d_prof);

        
        $__internal_239d6bdd44c6a33c4fc56d8f0e28e7c11913652e03e33551af817a8dd401a8c4->leave($__internal_239d6bdd44c6a33c4fc56d8f0e28e7c11913652e03e33551af817a8dd401a8c4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c1cef3b2cd37d7d9007213422ada7d7aee7cf0ea152b43d1ae4668f5e9f8f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1cef3b2cd37d7d9007213422ada7d7aee7cf0ea152b43d1ae4668f5e9f8f13->enter($__internal_8c1cef3b2cd37d7d9007213422ada7d7aee7cf0ea152b43d1ae4668f5e9f8f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_406df130eaf018acf1829fd77c73f23d48f13eed52aa0e03866084f81a6e2ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406df130eaf018acf1829fd77c73f23d48f13eed52aa0e03866084f81a6e2ec3->enter($__internal_406df130eaf018acf1829fd77c73f23d48f13eed52aa0e03866084f81a6e2ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_406df130eaf018acf1829fd77c73f23d48f13eed52aa0e03866084f81a6e2ec3->leave($__internal_406df130eaf018acf1829fd77c73f23d48f13eed52aa0e03866084f81a6e2ec3_prof);

        
        $__internal_8c1cef3b2cd37d7d9007213422ada7d7aee7cf0ea152b43d1ae4668f5e9f8f13->leave($__internal_8c1cef3b2cd37d7d9007213422ada7d7aee7cf0ea152b43d1ae4668f5e9f8f13_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dba551af2d12c0469b53f884c9e35463e4796bc38e4b1c45d4ae39d932d5f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dba551af2d12c0469b53f884c9e35463e4796bc38e4b1c45d4ae39d932d5f78->enter($__internal_7dba551af2d12c0469b53f884c9e35463e4796bc38e4b1c45d4ae39d932d5f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67d26df01d3b8ffd3247051794814458621c51411d0657d72169292055e9894c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d26df01d3b8ffd3247051794814458621c51411d0657d72169292055e9894c->enter($__internal_67d26df01d3b8ffd3247051794814458621c51411d0657d72169292055e9894c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_67d26df01d3b8ffd3247051794814458621c51411d0657d72169292055e9894c->leave($__internal_67d26df01d3b8ffd3247051794814458621c51411d0657d72169292055e9894c_prof);

        
        $__internal_7dba551af2d12c0469b53f884c9e35463e4796bc38e4b1c45d4ae39d932d5f78->leave($__internal_7dba551af2d12c0469b53f884c9e35463e4796bc38e4b1c45d4ae39d932d5f78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
