<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_48b83985025975c7a573ea987bd588fa73a962c9c67f9a8f727b0ee57cc93008 extends Twig_Template
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
        $__internal_e1b771793c79fbd61716400d2029a4c0481c1853ed7fea86ac61c7e4e266fa87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b771793c79fbd61716400d2029a4c0481c1853ed7fea86ac61c7e4e266fa87->enter($__internal_e1b771793c79fbd61716400d2029a4c0481c1853ed7fea86ac61c7e4e266fa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_83fd6714855eccbcb063667326047c627a00c9e13ba2c818a08575452c3caf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fd6714855eccbcb063667326047c627a00c9e13ba2c818a08575452c3caf40->enter($__internal_83fd6714855eccbcb063667326047c627a00c9e13ba2c818a08575452c3caf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e1b771793c79fbd61716400d2029a4c0481c1853ed7fea86ac61c7e4e266fa87->leave($__internal_e1b771793c79fbd61716400d2029a4c0481c1853ed7fea86ac61c7e4e266fa87_prof);

        
        $__internal_83fd6714855eccbcb063667326047c627a00c9e13ba2c818a08575452c3caf40->leave($__internal_83fd6714855eccbcb063667326047c627a00c9e13ba2c818a08575452c3caf40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
