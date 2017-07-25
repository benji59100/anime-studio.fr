<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7d7acc950502a94c5eb7f9a4532d9dd8240d0f34907c6560e838480eb7e7b3bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad6d8b7b6c25244b35367a3c456a2b301bf7c9d56412271e4878588eecbc61ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6d8b7b6c25244b35367a3c456a2b301bf7c9d56412271e4878588eecbc61ea->enter($__internal_ad6d8b7b6c25244b35367a3c456a2b301bf7c9d56412271e4878588eecbc61ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d085ab242629b479fbac0bae030994d88e5e432852200fdb04ee62037fd0685b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d085ab242629b479fbac0bae030994d88e5e432852200fdb04ee62037fd0685b->enter($__internal_d085ab242629b479fbac0bae030994d88e5e432852200fdb04ee62037fd0685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad6d8b7b6c25244b35367a3c456a2b301bf7c9d56412271e4878588eecbc61ea->leave($__internal_ad6d8b7b6c25244b35367a3c456a2b301bf7c9d56412271e4878588eecbc61ea_prof);

        
        $__internal_d085ab242629b479fbac0bae030994d88e5e432852200fdb04ee62037fd0685b->leave($__internal_d085ab242629b479fbac0bae030994d88e5e432852200fdb04ee62037fd0685b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_46e49cd7b9dd0b50460d458c77d9b851fbfb06e2e5e337c5000c08503300170e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e49cd7b9dd0b50460d458c77d9b851fbfb06e2e5e337c5000c08503300170e->enter($__internal_46e49cd7b9dd0b50460d458c77d9b851fbfb06e2e5e337c5000c08503300170e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d8c6fc7db1648121f92bb7300497d77f76705ebdd6069a9edfa9435f3172eb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c6fc7db1648121f92bb7300497d77f76705ebdd6069a9edfa9435f3172eb6b->enter($__internal_d8c6fc7db1648121f92bb7300497d77f76705ebdd6069a9edfa9435f3172eb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_d8c6fc7db1648121f92bb7300497d77f76705ebdd6069a9edfa9435f3172eb6b->leave($__internal_d8c6fc7db1648121f92bb7300497d77f76705ebdd6069a9edfa9435f3172eb6b_prof);

        
        $__internal_46e49cd7b9dd0b50460d458c77d9b851fbfb06e2e5e337c5000c08503300170e->leave($__internal_46e49cd7b9dd0b50460d458c77d9b851fbfb06e2e5e337c5000c08503300170e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa229444fbedd69c6db68f57d3d32b00f7fa66e93940af35a9b19a9c830fd412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa229444fbedd69c6db68f57d3d32b00f7fa66e93940af35a9b19a9c830fd412->enter($__internal_aa229444fbedd69c6db68f57d3d32b00f7fa66e93940af35a9b19a9c830fd412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_98992fa3b6a029340dfec1ad9dc615041bf3e04b485cc618eecfc9189bd6b23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98992fa3b6a029340dfec1ad9dc615041bf3e04b485cc618eecfc9189bd6b23c->enter($__internal_98992fa3b6a029340dfec1ad9dc615041bf3e04b485cc618eecfc9189bd6b23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_98992fa3b6a029340dfec1ad9dc615041bf3e04b485cc618eecfc9189bd6b23c->leave($__internal_98992fa3b6a029340dfec1ad9dc615041bf3e04b485cc618eecfc9189bd6b23c_prof);

        
        $__internal_aa229444fbedd69c6db68f57d3d32b00f7fa66e93940af35a9b19a9c830fd412->leave($__internal_aa229444fbedd69c6db68f57d3d32b00f7fa66e93940af35a9b19a9c830fd412_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
