<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cf055f5994068b8a248fc68398569f9cf16d36283ce99b9d2541f5c7cb2a3872 extends Twig_Template
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
        $__internal_50ee030658a6bed68f400dfc749922fe251f0889aeebc5a49ca42c9312cb2077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ee030658a6bed68f400dfc749922fe251f0889aeebc5a49ca42c9312cb2077->enter($__internal_50ee030658a6bed68f400dfc749922fe251f0889aeebc5a49ca42c9312cb2077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5458bf31843805ef3982145ad08c65a686a192e35bb2f0cd434910275c0861d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5458bf31843805ef3982145ad08c65a686a192e35bb2f0cd434910275c0861d0->enter($__internal_5458bf31843805ef3982145ad08c65a686a192e35bb2f0cd434910275c0861d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_50ee030658a6bed68f400dfc749922fe251f0889aeebc5a49ca42c9312cb2077->leave($__internal_50ee030658a6bed68f400dfc749922fe251f0889aeebc5a49ca42c9312cb2077_prof);

        
        $__internal_5458bf31843805ef3982145ad08c65a686a192e35bb2f0cd434910275c0861d0->leave($__internal_5458bf31843805ef3982145ad08c65a686a192e35bb2f0cd434910275c0861d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f88cdd358fc8d904ae2653b1c17ec7c4b11d643e6ec50caf7bb5413925714472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88cdd358fc8d904ae2653b1c17ec7c4b11d643e6ec50caf7bb5413925714472->enter($__internal_f88cdd358fc8d904ae2653b1c17ec7c4b11d643e6ec50caf7bb5413925714472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_343361e9c5da7c334092c4476165a8e0d3c09238e379ec3e689511d46a105954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343361e9c5da7c334092c4476165a8e0d3c09238e379ec3e689511d46a105954->enter($__internal_343361e9c5da7c334092c4476165a8e0d3c09238e379ec3e689511d46a105954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_343361e9c5da7c334092c4476165a8e0d3c09238e379ec3e689511d46a105954->leave($__internal_343361e9c5da7c334092c4476165a8e0d3c09238e379ec3e689511d46a105954_prof);

        
        $__internal_f88cdd358fc8d904ae2653b1c17ec7c4b11d643e6ec50caf7bb5413925714472->leave($__internal_f88cdd358fc8d904ae2653b1c17ec7c4b11d643e6ec50caf7bb5413925714472_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7539daa75a68fd41193e5c7840294df0074c5216b6b68594692287de529ed2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7539daa75a68fd41193e5c7840294df0074c5216b6b68594692287de529ed2fc->enter($__internal_7539daa75a68fd41193e5c7840294df0074c5216b6b68594692287de529ed2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a7825ea9dd1cbebee3c64aefb01e0385ea76bbb39dfe08255816b1913f37d203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7825ea9dd1cbebee3c64aefb01e0385ea76bbb39dfe08255816b1913f37d203->enter($__internal_a7825ea9dd1cbebee3c64aefb01e0385ea76bbb39dfe08255816b1913f37d203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a7825ea9dd1cbebee3c64aefb01e0385ea76bbb39dfe08255816b1913f37d203->leave($__internal_a7825ea9dd1cbebee3c64aefb01e0385ea76bbb39dfe08255816b1913f37d203_prof);

        
        $__internal_7539daa75a68fd41193e5c7840294df0074c5216b6b68594692287de529ed2fc->leave($__internal_7539daa75a68fd41193e5c7840294df0074c5216b6b68594692287de529ed2fc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c0f33c65ce730622de8a13e5b4a52e38b49f6b6223eb452c02cbb668f5ede18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0f33c65ce730622de8a13e5b4a52e38b49f6b6223eb452c02cbb668f5ede18->enter($__internal_0c0f33c65ce730622de8a13e5b4a52e38b49f6b6223eb452c02cbb668f5ede18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f901268fde7e79852834697b76826bf0ec9d50dda0105b2b5fc57cc9ceab254f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f901268fde7e79852834697b76826bf0ec9d50dda0105b2b5fc57cc9ceab254f->enter($__internal_f901268fde7e79852834697b76826bf0ec9d50dda0105b2b5fc57cc9ceab254f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f901268fde7e79852834697b76826bf0ec9d50dda0105b2b5fc57cc9ceab254f->leave($__internal_f901268fde7e79852834697b76826bf0ec9d50dda0105b2b5fc57cc9ceab254f_prof);

        
        $__internal_0c0f33c65ce730622de8a13e5b4a52e38b49f6b6223eb452c02cbb668f5ede18->leave($__internal_0c0f33c65ce730622de8a13e5b4a52e38b49f6b6223eb452c02cbb668f5ede18_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
