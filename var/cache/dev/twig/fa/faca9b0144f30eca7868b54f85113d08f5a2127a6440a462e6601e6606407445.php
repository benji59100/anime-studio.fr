<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8acc11fab5d88d97ef5559183c4b561dcfab21c1c04cdc46ee3a1b291dc02208 extends Twig_Template
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
        $__internal_4bb2781a1ea1b27a4379dde88fde65d85bd201a13bab3c91eb286785c7a491b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb2781a1ea1b27a4379dde88fde65d85bd201a13bab3c91eb286785c7a491b0->enter($__internal_4bb2781a1ea1b27a4379dde88fde65d85bd201a13bab3c91eb286785c7a491b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_74cca1987188da487b87368e6810ee4bf055d129c7a7c2475dcc203fa53b54b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cca1987188da487b87368e6810ee4bf055d129c7a7c2475dcc203fa53b54b9->enter($__internal_74cca1987188da487b87368e6810ee4bf055d129c7a7c2475dcc203fa53b54b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4bb2781a1ea1b27a4379dde88fde65d85bd201a13bab3c91eb286785c7a491b0->leave($__internal_4bb2781a1ea1b27a4379dde88fde65d85bd201a13bab3c91eb286785c7a491b0_prof);

        
        $__internal_74cca1987188da487b87368e6810ee4bf055d129c7a7c2475dcc203fa53b54b9->leave($__internal_74cca1987188da487b87368e6810ee4bf055d129c7a7c2475dcc203fa53b54b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe2bac7aa9267102aecd59928e8f6b8a9e8476cdff4ae19488b356afb88fbc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2bac7aa9267102aecd59928e8f6b8a9e8476cdff4ae19488b356afb88fbc4e->enter($__internal_fe2bac7aa9267102aecd59928e8f6b8a9e8476cdff4ae19488b356afb88fbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f1493695320136e9fd4a5d4a6bebb65c244b623e7a042e98b3bf161bf8ff4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1493695320136e9fd4a5d4a6bebb65c244b623e7a042e98b3bf161bf8ff4cc->enter($__internal_3f1493695320136e9fd4a5d4a6bebb65c244b623e7a042e98b3bf161bf8ff4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3f1493695320136e9fd4a5d4a6bebb65c244b623e7a042e98b3bf161bf8ff4cc->leave($__internal_3f1493695320136e9fd4a5d4a6bebb65c244b623e7a042e98b3bf161bf8ff4cc_prof);

        
        $__internal_fe2bac7aa9267102aecd59928e8f6b8a9e8476cdff4ae19488b356afb88fbc4e->leave($__internal_fe2bac7aa9267102aecd59928e8f6b8a9e8476cdff4ae19488b356afb88fbc4e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_59ae005c5ca554aedc2fcbc3219e8036c95c48bb2bfb3e00b5ad38d502eb5e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ae005c5ca554aedc2fcbc3219e8036c95c48bb2bfb3e00b5ad38d502eb5e76->enter($__internal_59ae005c5ca554aedc2fcbc3219e8036c95c48bb2bfb3e00b5ad38d502eb5e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aab02ce704bad2d20ea477efd473103afd1699650a67bd2e8cc8d03a5cdbebf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab02ce704bad2d20ea477efd473103afd1699650a67bd2e8cc8d03a5cdbebf1->enter($__internal_aab02ce704bad2d20ea477efd473103afd1699650a67bd2e8cc8d03a5cdbebf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_aab02ce704bad2d20ea477efd473103afd1699650a67bd2e8cc8d03a5cdbebf1->leave($__internal_aab02ce704bad2d20ea477efd473103afd1699650a67bd2e8cc8d03a5cdbebf1_prof);

        
        $__internal_59ae005c5ca554aedc2fcbc3219e8036c95c48bb2bfb3e00b5ad38d502eb5e76->leave($__internal_59ae005c5ca554aedc2fcbc3219e8036c95c48bb2bfb3e00b5ad38d502eb5e76_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e175243f0b5d1466a043287f00749684e7d1d72d79cfce8d934523d2dad71bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e175243f0b5d1466a043287f00749684e7d1d72d79cfce8d934523d2dad71bb->enter($__internal_8e175243f0b5d1466a043287f00749684e7d1d72d79cfce8d934523d2dad71bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eea332eb9d4659d9da7d1947c7b7bafb7a267908f68e2c6cb674b38c3ea9ae3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea332eb9d4659d9da7d1947c7b7bafb7a267908f68e2c6cb674b38c3ea9ae3c->enter($__internal_eea332eb9d4659d9da7d1947c7b7bafb7a267908f68e2c6cb674b38c3ea9ae3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eea332eb9d4659d9da7d1947c7b7bafb7a267908f68e2c6cb674b38c3ea9ae3c->leave($__internal_eea332eb9d4659d9da7d1947c7b7bafb7a267908f68e2c6cb674b38c3ea9ae3c_prof);

        
        $__internal_8e175243f0b5d1466a043287f00749684e7d1d72d79cfce8d934523d2dad71bb->leave($__internal_8e175243f0b5d1466a043287f00749684e7d1d72d79cfce8d934523d2dad71bb_prof);

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
