<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b33b5dfd107efe68257472869599faac7705c1c66ee20de959782c93c7e1a454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54ced6dab9eac8b7106b2c5705a7c1d49c9fb3fb8d922206a35246585662e26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ced6dab9eac8b7106b2c5705a7c1d49c9fb3fb8d922206a35246585662e26a->enter($__internal_54ced6dab9eac8b7106b2c5705a7c1d49c9fb3fb8d922206a35246585662e26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0023fafd1ead9bcdeef2dc266341faa2860d5b8bfd86a0d02773f344e7a173a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0023fafd1ead9bcdeef2dc266341faa2860d5b8bfd86a0d02773f344e7a173a0->enter($__internal_0023fafd1ead9bcdeef2dc266341faa2860d5b8bfd86a0d02773f344e7a173a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ced6dab9eac8b7106b2c5705a7c1d49c9fb3fb8d922206a35246585662e26a->leave($__internal_54ced6dab9eac8b7106b2c5705a7c1d49c9fb3fb8d922206a35246585662e26a_prof);

        
        $__internal_0023fafd1ead9bcdeef2dc266341faa2860d5b8bfd86a0d02773f344e7a173a0->leave($__internal_0023fafd1ead9bcdeef2dc266341faa2860d5b8bfd86a0d02773f344e7a173a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50947a24bd49b2614275794668e86bbd5e82f652ab4c6de9ad0f915b35e37bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50947a24bd49b2614275794668e86bbd5e82f652ab4c6de9ad0f915b35e37bac->enter($__internal_50947a24bd49b2614275794668e86bbd5e82f652ab4c6de9ad0f915b35e37bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eda9289dd77c23235f4e5e006bd2f3b4c119aeb0f63e5689490c26af8fdf5dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda9289dd77c23235f4e5e006bd2f3b4c119aeb0f63e5689490c26af8fdf5dec->enter($__internal_eda9289dd77c23235f4e5e006bd2f3b4c119aeb0f63e5689490c26af8fdf5dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_eda9289dd77c23235f4e5e006bd2f3b4c119aeb0f63e5689490c26af8fdf5dec->leave($__internal_eda9289dd77c23235f4e5e006bd2f3b4c119aeb0f63e5689490c26af8fdf5dec_prof);

        
        $__internal_50947a24bd49b2614275794668e86bbd5e82f652ab4c6de9ad0f915b35e37bac->leave($__internal_50947a24bd49b2614275794668e86bbd5e82f652ab4c6de9ad0f915b35e37bac_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_019946a2b048b8e187379bc35bcdb26f0a4c99671bcb81b9bf4479907407903c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019946a2b048b8e187379bc35bcdb26f0a4c99671bcb81b9bf4479907407903c->enter($__internal_019946a2b048b8e187379bc35bcdb26f0a4c99671bcb81b9bf4479907407903c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_070dd293ae66f881159b27ee033bd3ebde189dd1b95325bcc394404d3d442f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070dd293ae66f881159b27ee033bd3ebde189dd1b95325bcc394404d3d442f3b->enter($__internal_070dd293ae66f881159b27ee033bd3ebde189dd1b95325bcc394404d3d442f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_070dd293ae66f881159b27ee033bd3ebde189dd1b95325bcc394404d3d442f3b->leave($__internal_070dd293ae66f881159b27ee033bd3ebde189dd1b95325bcc394404d3d442f3b_prof);

        
        $__internal_019946a2b048b8e187379bc35bcdb26f0a4c99671bcb81b9bf4479907407903c->leave($__internal_019946a2b048b8e187379bc35bcdb26f0a4c99671bcb81b9bf4479907407903c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
