<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_63bdd4cd7460d50fc285798312a722bb31acde2a519e78994ca0e2846bfffdd8 extends Twig_Template
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
        $__internal_aafdbbfa508a5d04aa74697a3a5b5b9ac44b37e4874aecc6e15bde7c834c1abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aafdbbfa508a5d04aa74697a3a5b5b9ac44b37e4874aecc6e15bde7c834c1abd->enter($__internal_aafdbbfa508a5d04aa74697a3a5b5b9ac44b37e4874aecc6e15bde7c834c1abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_898a20ad22d64d0baad543e900219553c8693b6aee3c482aea7f8b4e3ff3b37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898a20ad22d64d0baad543e900219553c8693b6aee3c482aea7f8b4e3ff3b37d->enter($__internal_898a20ad22d64d0baad543e900219553c8693b6aee3c482aea7f8b4e3ff3b37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_aafdbbfa508a5d04aa74697a3a5b5b9ac44b37e4874aecc6e15bde7c834c1abd->leave($__internal_aafdbbfa508a5d04aa74697a3a5b5b9ac44b37e4874aecc6e15bde7c834c1abd_prof);

        
        $__internal_898a20ad22d64d0baad543e900219553c8693b6aee3c482aea7f8b4e3ff3b37d->leave($__internal_898a20ad22d64d0baad543e900219553c8693b6aee3c482aea7f8b4e3ff3b37d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
