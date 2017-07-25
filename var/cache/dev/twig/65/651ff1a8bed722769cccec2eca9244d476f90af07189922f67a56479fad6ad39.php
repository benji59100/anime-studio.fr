<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_28e5779af1f8b976b76a398a6c784e88bad09ae5808d525e9022d787e52a8e59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04d3726de0f364da8f4740a4c0791f22b3bb14f0b8e6438aa54a8b2a3ba8f883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d3726de0f364da8f4740a4c0791f22b3bb14f0b8e6438aa54a8b2a3ba8f883->enter($__internal_04d3726de0f364da8f4740a4c0791f22b3bb14f0b8e6438aa54a8b2a3ba8f883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ec49b07497b9085775fcf11b0a5636092e977ffe2ee5736b06d0ab57f6511249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec49b07497b9085775fcf11b0a5636092e977ffe2ee5736b06d0ab57f6511249->enter($__internal_ec49b07497b9085775fcf11b0a5636092e977ffe2ee5736b06d0ab57f6511249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_04d3726de0f364da8f4740a4c0791f22b3bb14f0b8e6438aa54a8b2a3ba8f883->leave($__internal_04d3726de0f364da8f4740a4c0791f22b3bb14f0b8e6438aa54a8b2a3ba8f883_prof);

        
        $__internal_ec49b07497b9085775fcf11b0a5636092e977ffe2ee5736b06d0ab57f6511249->leave($__internal_ec49b07497b9085775fcf11b0a5636092e977ffe2ee5736b06d0ab57f6511249_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
