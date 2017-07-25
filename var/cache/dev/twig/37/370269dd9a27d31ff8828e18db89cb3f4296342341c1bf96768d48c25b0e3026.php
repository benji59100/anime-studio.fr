<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_6752b8a22261762d05c86c4503cfa8f572dd268955ea27e5be8dde088d26b9ba extends Twig_Template
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
        $__internal_fb9cf70dfebbf51879642b15307c76405ce720e7149f198bc9cb67f7ff488f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9cf70dfebbf51879642b15307c76405ce720e7149f198bc9cb67f7ff488f84->enter($__internal_fb9cf70dfebbf51879642b15307c76405ce720e7149f198bc9cb67f7ff488f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_e81b34a53098327796c025163fc21401cad3e7ccf47acaef6166925829d69e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81b34a53098327796c025163fc21401cad3e7ccf47acaef6166925829d69e02->enter($__internal_e81b34a53098327796c025163fc21401cad3e7ccf47acaef6166925829d69e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fb9cf70dfebbf51879642b15307c76405ce720e7149f198bc9cb67f7ff488f84->leave($__internal_fb9cf70dfebbf51879642b15307c76405ce720e7149f198bc9cb67f7ff488f84_prof);

        
        $__internal_e81b34a53098327796c025163fc21401cad3e7ccf47acaef6166925829d69e02->leave($__internal_e81b34a53098327796c025163fc21401cad3e7ccf47acaef6166925829d69e02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
