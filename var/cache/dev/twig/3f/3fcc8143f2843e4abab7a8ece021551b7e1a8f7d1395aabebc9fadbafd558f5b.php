<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9b7128fc92824a32a67370d019c93d3ddf9da249f548750e724dc164348d1276 extends Twig_Template
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
        $__internal_124daf4e8f7394bf3b80974baab59169bd98696eb39cd368b9ed805864328ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124daf4e8f7394bf3b80974baab59169bd98696eb39cd368b9ed805864328ae6->enter($__internal_124daf4e8f7394bf3b80974baab59169bd98696eb39cd368b9ed805864328ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_bd5346da5aeccf68fddcc020ad8c77d20350d688b360d2f4c165e4cef848b2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5346da5aeccf68fddcc020ad8c77d20350d688b360d2f4c165e4cef848b2a5->enter($__internal_bd5346da5aeccf68fddcc020ad8c77d20350d688b360d2f4c165e4cef848b2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_124daf4e8f7394bf3b80974baab59169bd98696eb39cd368b9ed805864328ae6->leave($__internal_124daf4e8f7394bf3b80974baab59169bd98696eb39cd368b9ed805864328ae6_prof);

        
        $__internal_bd5346da5aeccf68fddcc020ad8c77d20350d688b360d2f4c165e4cef848b2a5->leave($__internal_bd5346da5aeccf68fddcc020ad8c77d20350d688b360d2f4c165e4cef848b2a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
