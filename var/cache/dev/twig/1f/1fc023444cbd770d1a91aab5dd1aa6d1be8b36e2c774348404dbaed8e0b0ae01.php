<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1e141eb1cd12cc4ff1294c6fda625738e009f99a44419b6a2dc63c6f51215d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a52302a37b8a21d25584768232079430760d7d2fafaff13dbcf3d5c38c66200e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52302a37b8a21d25584768232079430760d7d2fafaff13dbcf3d5c38c66200e->enter($__internal_a52302a37b8a21d25584768232079430760d7d2fafaff13dbcf3d5c38c66200e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_93ba2af3346dbecbecc328be0a73683ccad8a6bd8a92662e0294363ce2e0d184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ba2af3346dbecbecc328be0a73683ccad8a6bd8a92662e0294363ce2e0d184->enter($__internal_93ba2af3346dbecbecc328be0a73683ccad8a6bd8a92662e0294363ce2e0d184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52302a37b8a21d25584768232079430760d7d2fafaff13dbcf3d5c38c66200e->leave($__internal_a52302a37b8a21d25584768232079430760d7d2fafaff13dbcf3d5c38c66200e_prof);

        
        $__internal_93ba2af3346dbecbecc328be0a73683ccad8a6bd8a92662e0294363ce2e0d184->leave($__internal_93ba2af3346dbecbecc328be0a73683ccad8a6bd8a92662e0294363ce2e0d184_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d053a32ca2da04fe9c3809c9bab2cb5544d35b9d029f73c6375fbbf46b0514eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d053a32ca2da04fe9c3809c9bab2cb5544d35b9d029f73c6375fbbf46b0514eb->enter($__internal_d053a32ca2da04fe9c3809c9bab2cb5544d35b9d029f73c6375fbbf46b0514eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6f82f699eb88d968efa5674794b9bfd464b46725f875f0d74a5d064d796c3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f82f699eb88d968efa5674794b9bfd464b46725f875f0d74a5d064d796c3ba->enter($__internal_a6f82f699eb88d968efa5674794b9bfd464b46725f875f0d74a5d064d796c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a6f82f699eb88d968efa5674794b9bfd464b46725f875f0d74a5d064d796c3ba->leave($__internal_a6f82f699eb88d968efa5674794b9bfd464b46725f875f0d74a5d064d796c3ba_prof);

        
        $__internal_d053a32ca2da04fe9c3809c9bab2cb5544d35b9d029f73c6375fbbf46b0514eb->leave($__internal_d053a32ca2da04fe9c3809c9bab2cb5544d35b9d029f73c6375fbbf46b0514eb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a4d6af1e925170062bbae6c500eb2a500edd8bda6ea1c27228144b87580c47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4d6af1e925170062bbae6c500eb2a500edd8bda6ea1c27228144b87580c47f->enter($__internal_9a4d6af1e925170062bbae6c500eb2a500edd8bda6ea1c27228144b87580c47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adf4014b43de40d297dd366235f824dd4ee88a43d76ef75007ac33223cb6adeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf4014b43de40d297dd366235f824dd4ee88a43d76ef75007ac33223cb6adeb->enter($__internal_adf4014b43de40d297dd366235f824dd4ee88a43d76ef75007ac33223cb6adeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_adf4014b43de40d297dd366235f824dd4ee88a43d76ef75007ac33223cb6adeb->leave($__internal_adf4014b43de40d297dd366235f824dd4ee88a43d76ef75007ac33223cb6adeb_prof);

        
        $__internal_9a4d6af1e925170062bbae6c500eb2a500edd8bda6ea1c27228144b87580c47f->leave($__internal_9a4d6af1e925170062bbae6c500eb2a500edd8bda6ea1c27228144b87580c47f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
