<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2386a2460a400995528fa6f49af8d7aed0016d5eb39e33a5aa6099f996d32d8e extends Twig_Template
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
        $__internal_28598e8ac267a3635d57c43d68045aafe65d2e5b93a098ce9ae7ce96749be1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28598e8ac267a3635d57c43d68045aafe65d2e5b93a098ce9ae7ce96749be1dc->enter($__internal_28598e8ac267a3635d57c43d68045aafe65d2e5b93a098ce9ae7ce96749be1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_120e22a9b976300339fd7512b1d7aaf160cbbc3ac5793b607551359de3e51277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120e22a9b976300339fd7512b1d7aaf160cbbc3ac5793b607551359de3e51277->enter($__internal_120e22a9b976300339fd7512b1d7aaf160cbbc3ac5793b607551359de3e51277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_28598e8ac267a3635d57c43d68045aafe65d2e5b93a098ce9ae7ce96749be1dc->leave($__internal_28598e8ac267a3635d57c43d68045aafe65d2e5b93a098ce9ae7ce96749be1dc_prof);

        
        $__internal_120e22a9b976300339fd7512b1d7aaf160cbbc3ac5793b607551359de3e51277->leave($__internal_120e22a9b976300339fd7512b1d7aaf160cbbc3ac5793b607551359de3e51277_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
