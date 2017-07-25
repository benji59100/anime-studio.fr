<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_7be8655c00557c7af6873c160a523bd813309660b8250e619bc245c869ec00fb extends Twig_Template
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
        $__internal_70ab55ee334abbacf5191af3d9475cdd28484231ec0d79020433e6a0629cc245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ab55ee334abbacf5191af3d9475cdd28484231ec0d79020433e6a0629cc245->enter($__internal_70ab55ee334abbacf5191af3d9475cdd28484231ec0d79020433e6a0629cc245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_854d6e6636ae0541a9affbdf59160b941d8e2b16137908a6912bb843b51b131b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854d6e6636ae0541a9affbdf59160b941d8e2b16137908a6912bb843b51b131b->enter($__internal_854d6e6636ae0541a9affbdf59160b941d8e2b16137908a6912bb843b51b131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_70ab55ee334abbacf5191af3d9475cdd28484231ec0d79020433e6a0629cc245->leave($__internal_70ab55ee334abbacf5191af3d9475cdd28484231ec0d79020433e6a0629cc245_prof);

        
        $__internal_854d6e6636ae0541a9affbdf59160b941d8e2b16137908a6912bb843b51b131b->leave($__internal_854d6e6636ae0541a9affbdf59160b941d8e2b16137908a6912bb843b51b131b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
