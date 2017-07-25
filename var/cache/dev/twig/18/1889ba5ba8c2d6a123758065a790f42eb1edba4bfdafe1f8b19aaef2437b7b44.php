<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_33b4d043b0e589e118337bcd13bda47f260c6ff12ae62d4f537388350ecd5137 extends Twig_Template
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
        $__internal_286c15e297e57c503e64f96383de26be112ced6ca2b3dc0c895fdf60ca02f09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286c15e297e57c503e64f96383de26be112ced6ca2b3dc0c895fdf60ca02f09a->enter($__internal_286c15e297e57c503e64f96383de26be112ced6ca2b3dc0c895fdf60ca02f09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_9d45ebc75c40f72fb9e8de1df8d1c02b0f50d4f4e7874968af2c0318b7f007e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d45ebc75c40f72fb9e8de1df8d1c02b0f50d4f4e7874968af2c0318b7f007e3->enter($__internal_9d45ebc75c40f72fb9e8de1df8d1c02b0f50d4f4e7874968af2c0318b7f007e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_286c15e297e57c503e64f96383de26be112ced6ca2b3dc0c895fdf60ca02f09a->leave($__internal_286c15e297e57c503e64f96383de26be112ced6ca2b3dc0c895fdf60ca02f09a_prof);

        
        $__internal_9d45ebc75c40f72fb9e8de1df8d1c02b0f50d4f4e7874968af2c0318b7f007e3->leave($__internal_9d45ebc75c40f72fb9e8de1df8d1c02b0f50d4f4e7874968af2c0318b7f007e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
