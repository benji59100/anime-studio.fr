<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6dc25edec51769c89a383a4bcbd75cefd3d2069f61ed320b1cc75679c36e80bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_358ae5d1ba5df8bacaa7708b70a9147d466ed64b3fa3969120251fb00349db91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358ae5d1ba5df8bacaa7708b70a9147d466ed64b3fa3969120251fb00349db91->enter($__internal_358ae5d1ba5df8bacaa7708b70a9147d466ed64b3fa3969120251fb00349db91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_929c9963464eca5bb8830b59fe9346cb54c0e0086148dafd4affdc333fd08a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929c9963464eca5bb8830b59fe9346cb54c0e0086148dafd4affdc333fd08a36->enter($__internal_929c9963464eca5bb8830b59fe9346cb54c0e0086148dafd4affdc333fd08a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_358ae5d1ba5df8bacaa7708b70a9147d466ed64b3fa3969120251fb00349db91->leave($__internal_358ae5d1ba5df8bacaa7708b70a9147d466ed64b3fa3969120251fb00349db91_prof);

        
        $__internal_929c9963464eca5bb8830b59fe9346cb54c0e0086148dafd4affdc333fd08a36->leave($__internal_929c9963464eca5bb8830b59fe9346cb54c0e0086148dafd4affdc333fd08a36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4190c8da679249fc700f2cd5fed03b290f87493732f1887b748a3800d023b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4190c8da679249fc700f2cd5fed03b290f87493732f1887b748a3800d023b90->enter($__internal_f4190c8da679249fc700f2cd5fed03b290f87493732f1887b748a3800d023b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b6b3082bfc70b6c67b2496cba6df84296438c00de59a5fb6f4cc3a3a1ff0f3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b3082bfc70b6c67b2496cba6df84296438c00de59a5fb6f4cc3a3a1ff0f3cc->enter($__internal_b6b3082bfc70b6c67b2496cba6df84296438c00de59a5fb6f4cc3a3a1ff0f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b6b3082bfc70b6c67b2496cba6df84296438c00de59a5fb6f4cc3a3a1ff0f3cc->leave($__internal_b6b3082bfc70b6c67b2496cba6df84296438c00de59a5fb6f4cc3a3a1ff0f3cc_prof);

        
        $__internal_f4190c8da679249fc700f2cd5fed03b290f87493732f1887b748a3800d023b90->leave($__internal_f4190c8da679249fc700f2cd5fed03b290f87493732f1887b748a3800d023b90_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6114d515bd6c2167ecf615c4a12463681fb34506f2d0a35be3ba6a09554a4ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6114d515bd6c2167ecf615c4a12463681fb34506f2d0a35be3ba6a09554a4ee->enter($__internal_f6114d515bd6c2167ecf615c4a12463681fb34506f2d0a35be3ba6a09554a4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02c42302215aed03b83f34c4f3a4ae1502fb89a99266fefed9a72563521e7f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c42302215aed03b83f34c4f3a4ae1502fb89a99266fefed9a72563521e7f37->enter($__internal_02c42302215aed03b83f34c4f3a4ae1502fb89a99266fefed9a72563521e7f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02c42302215aed03b83f34c4f3a4ae1502fb89a99266fefed9a72563521e7f37->leave($__internal_02c42302215aed03b83f34c4f3a4ae1502fb89a99266fefed9a72563521e7f37_prof);

        
        $__internal_f6114d515bd6c2167ecf615c4a12463681fb34506f2d0a35be3ba6a09554a4ee->leave($__internal_f6114d515bd6c2167ecf615c4a12463681fb34506f2d0a35be3ba6a09554a4ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
