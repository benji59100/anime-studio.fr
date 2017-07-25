<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_636fe3aeb2836edfd911bc4a31a017a69c4416bc069aceaa5d401977df8710a3 extends Twig_Template
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
        $__internal_d9e100f2a0d1ec03f48421960b4004ae011a769ff8199a7a7358351284d9f268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e100f2a0d1ec03f48421960b4004ae011a769ff8199a7a7358351284d9f268->enter($__internal_d9e100f2a0d1ec03f48421960b4004ae011a769ff8199a7a7358351284d9f268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_66ba6fc703fc5f16a375184e799f0872723f40b6c9711f73f785a3846f95cc0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ba6fc703fc5f16a375184e799f0872723f40b6c9711f73f785a3846f95cc0d->enter($__internal_66ba6fc703fc5f16a375184e799f0872723f40b6c9711f73f785a3846f95cc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d9e100f2a0d1ec03f48421960b4004ae011a769ff8199a7a7358351284d9f268->leave($__internal_d9e100f2a0d1ec03f48421960b4004ae011a769ff8199a7a7358351284d9f268_prof);

        
        $__internal_66ba6fc703fc5f16a375184e799f0872723f40b6c9711f73f785a3846f95cc0d->leave($__internal_66ba6fc703fc5f16a375184e799f0872723f40b6c9711f73f785a3846f95cc0d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
