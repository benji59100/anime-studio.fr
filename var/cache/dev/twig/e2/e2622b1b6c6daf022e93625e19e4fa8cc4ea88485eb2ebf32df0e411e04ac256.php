<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_73fa431ee81baf7544b55d653c5c249db5db4dd4994024bc6ae314dc634b4fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_4e192c5a3cc79066ccd4ca44ab141b9dcd25e10b56fd04e689254aa5a2ee0907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e192c5a3cc79066ccd4ca44ab141b9dcd25e10b56fd04e689254aa5a2ee0907->enter($__internal_4e192c5a3cc79066ccd4ca44ab141b9dcd25e10b56fd04e689254aa5a2ee0907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_cff715ba3ed2f2fc0d856c6ffb0091f4179b3aa3662a0f036cab491c2a6d879f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff715ba3ed2f2fc0d856c6ffb0091f4179b3aa3662a0f036cab491c2a6d879f->enter($__internal_cff715ba3ed2f2fc0d856c6ffb0091f4179b3aa3662a0f036cab491c2a6d879f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e192c5a3cc79066ccd4ca44ab141b9dcd25e10b56fd04e689254aa5a2ee0907->leave($__internal_4e192c5a3cc79066ccd4ca44ab141b9dcd25e10b56fd04e689254aa5a2ee0907_prof);

        
        $__internal_cff715ba3ed2f2fc0d856c6ffb0091f4179b3aa3662a0f036cab491c2a6d879f->leave($__internal_cff715ba3ed2f2fc0d856c6ffb0091f4179b3aa3662a0f036cab491c2a6d879f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c1b582f8198fcaae7b4cc496e5efdc35b7ef355130500b1f9512c57ad1edc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1b582f8198fcaae7b4cc496e5efdc35b7ef355130500b1f9512c57ad1edc0d->enter($__internal_2c1b582f8198fcaae7b4cc496e5efdc35b7ef355130500b1f9512c57ad1edc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1a5b605f4edd30ac97f9659b3e9f6242013386ca3ec39f2518589a82a8bef94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5b605f4edd30ac97f9659b3e9f6242013386ca3ec39f2518589a82a8bef94a->enter($__internal_1a5b605f4edd30ac97f9659b3e9f6242013386ca3ec39f2518589a82a8bef94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1a5b605f4edd30ac97f9659b3e9f6242013386ca3ec39f2518589a82a8bef94a->leave($__internal_1a5b605f4edd30ac97f9659b3e9f6242013386ca3ec39f2518589a82a8bef94a_prof);

        
        $__internal_2c1b582f8198fcaae7b4cc496e5efdc35b7ef355130500b1f9512c57ad1edc0d->leave($__internal_2c1b582f8198fcaae7b4cc496e5efdc35b7ef355130500b1f9512c57ad1edc0d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
