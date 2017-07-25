<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_f79b888ab3d1bc282741afa2004ef0ae50d17015b470a5c5283f856536dc0ba1 extends Twig_Template
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
        $__internal_cf25577379d90242d9f00c0eef177bceb24fe6c2639a5ceb43826a003859ea27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf25577379d90242d9f00c0eef177bceb24fe6c2639a5ceb43826a003859ea27->enter($__internal_cf25577379d90242d9f00c0eef177bceb24fe6c2639a5ceb43826a003859ea27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_2a047eadfcdcf6f49d4b3e0d8c34afe3fd6a2ddb9fccfc44eaf1a4b0a4a83580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a047eadfcdcf6f49d4b3e0d8c34afe3fd6a2ddb9fccfc44eaf1a4b0a4a83580->enter($__internal_2a047eadfcdcf6f49d4b3e0d8c34afe3fd6a2ddb9fccfc44eaf1a4b0a4a83580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_cf25577379d90242d9f00c0eef177bceb24fe6c2639a5ceb43826a003859ea27->leave($__internal_cf25577379d90242d9f00c0eef177bceb24fe6c2639a5ceb43826a003859ea27_prof);

        
        $__internal_2a047eadfcdcf6f49d4b3e0d8c34afe3fd6a2ddb9fccfc44eaf1a4b0a4a83580->leave($__internal_2a047eadfcdcf6f49d4b3e0d8c34afe3fd6a2ddb9fccfc44eaf1a4b0a4a83580_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57268e7a8cfc7e30e4355653abeb20fa3e7227346a8e588a3e9d8e4b1d59b1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57268e7a8cfc7e30e4355653abeb20fa3e7227346a8e588a3e9d8e4b1d59b1e0->enter($__internal_57268e7a8cfc7e30e4355653abeb20fa3e7227346a8e588a3e9d8e4b1d59b1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f89a4732b34351020eb18b0da7f1e8afb4418fbfddc38bffa60a247734ff7656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89a4732b34351020eb18b0da7f1e8afb4418fbfddc38bffa60a247734ff7656->enter($__internal_f89a4732b34351020eb18b0da7f1e8afb4418fbfddc38bffa60a247734ff7656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f89a4732b34351020eb18b0da7f1e8afb4418fbfddc38bffa60a247734ff7656->leave($__internal_f89a4732b34351020eb18b0da7f1e8afb4418fbfddc38bffa60a247734ff7656_prof);

        
        $__internal_57268e7a8cfc7e30e4355653abeb20fa3e7227346a8e588a3e9d8e4b1d59b1e0->leave($__internal_57268e7a8cfc7e30e4355653abeb20fa3e7227346a8e588a3e9d8e4b1d59b1e0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2299231d593a3093d1c089deec82a85442820b72a4c766ed7fcbc77f3c881b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2299231d593a3093d1c089deec82a85442820b72a4c766ed7fcbc77f3c881b5->enter($__internal_c2299231d593a3093d1c089deec82a85442820b72a4c766ed7fcbc77f3c881b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b105adf693af00c8b30ff3fe5e514a8927d2b6f539fbaccaefaf9377255aeaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b105adf693af00c8b30ff3fe5e514a8927d2b6f539fbaccaefaf9377255aeaa->enter($__internal_0b105adf693af00c8b30ff3fe5e514a8927d2b6f539fbaccaefaf9377255aeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0b105adf693af00c8b30ff3fe5e514a8927d2b6f539fbaccaefaf9377255aeaa->leave($__internal_0b105adf693af00c8b30ff3fe5e514a8927d2b6f539fbaccaefaf9377255aeaa_prof);

        
        $__internal_c2299231d593a3093d1c089deec82a85442820b72a4c766ed7fcbc77f3c881b5->leave($__internal_c2299231d593a3093d1c089deec82a85442820b72a4c766ed7fcbc77f3c881b5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_24b79f825d4a197c5cd911f1879124999d1d6c699ff9701eb94420a2d42695e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b79f825d4a197c5cd911f1879124999d1d6c699ff9701eb94420a2d42695e0->enter($__internal_24b79f825d4a197c5cd911f1879124999d1d6c699ff9701eb94420a2d42695e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7bf0f671f0be70e2c0b62ea325dbd8a28c38484b3c5be82c53344c99802c0da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf0f671f0be70e2c0b62ea325dbd8a28c38484b3c5be82c53344c99802c0da0->enter($__internal_7bf0f671f0be70e2c0b62ea325dbd8a28c38484b3c5be82c53344c99802c0da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7bf0f671f0be70e2c0b62ea325dbd8a28c38484b3c5be82c53344c99802c0da0->leave($__internal_7bf0f671f0be70e2c0b62ea325dbd8a28c38484b3c5be82c53344c99802c0da0_prof);

        
        $__internal_24b79f825d4a197c5cd911f1879124999d1d6c699ff9701eb94420a2d42695e0->leave($__internal_24b79f825d4a197c5cd911f1879124999d1d6c699ff9701eb94420a2d42695e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
