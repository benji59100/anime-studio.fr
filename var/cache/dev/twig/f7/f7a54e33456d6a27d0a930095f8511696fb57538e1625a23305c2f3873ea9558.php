<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a47d48f111865239e52935de89b376a61d6fe268c50227f32128032abdf9d9d6 extends Twig_Template
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
        $__internal_818e022bfae452e393f9500d56699bc033aa5fb94bf6a4cb70dbac542de38d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818e022bfae452e393f9500d56699bc033aa5fb94bf6a4cb70dbac542de38d3e->enter($__internal_818e022bfae452e393f9500d56699bc033aa5fb94bf6a4cb70dbac542de38d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_aacb8a313053bd5c06b1c5715907944faeb454c1561fb0a7a1de290f09b729f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacb8a313053bd5c06b1c5715907944faeb454c1561fb0a7a1de290f09b729f6->enter($__internal_aacb8a313053bd5c06b1c5715907944faeb454c1561fb0a7a1de290f09b729f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_818e022bfae452e393f9500d56699bc033aa5fb94bf6a4cb70dbac542de38d3e->leave($__internal_818e022bfae452e393f9500d56699bc033aa5fb94bf6a4cb70dbac542de38d3e_prof);

        
        $__internal_aacb8a313053bd5c06b1c5715907944faeb454c1561fb0a7a1de290f09b729f6->leave($__internal_aacb8a313053bd5c06b1c5715907944faeb454c1561fb0a7a1de290f09b729f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
