<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_6a119c6ce097478c18e83f685372b1131943fac7cc65a0702c25c2c38f9a841f extends Twig_Template
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
        $__internal_3756e15044b9dad4a950a450a4224016259cf5e1003638b2ffc280c4e156822c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3756e15044b9dad4a950a450a4224016259cf5e1003638b2ffc280c4e156822c->enter($__internal_3756e15044b9dad4a950a450a4224016259cf5e1003638b2ffc280c4e156822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_a7774ff3c80c5c7f7b5c7823122aa998c5ba41b8157c315a4e3298282a59b3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7774ff3c80c5c7f7b5c7823122aa998c5ba41b8157c315a4e3298282a59b3de->enter($__internal_a7774ff3c80c5c7f7b5c7823122aa998c5ba41b8157c315a4e3298282a59b3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3756e15044b9dad4a950a450a4224016259cf5e1003638b2ffc280c4e156822c->leave($__internal_3756e15044b9dad4a950a450a4224016259cf5e1003638b2ffc280c4e156822c_prof);

        
        $__internal_a7774ff3c80c5c7f7b5c7823122aa998c5ba41b8157c315a4e3298282a59b3de->leave($__internal_a7774ff3c80c5c7f7b5c7823122aa998c5ba41b8157c315a4e3298282a59b3de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
