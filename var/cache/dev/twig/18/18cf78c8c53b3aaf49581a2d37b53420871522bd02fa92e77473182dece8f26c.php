<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_8e8024b052e1b642515e87882a95e0a7beab1b0cbf7066b17873097d30fe362f extends Twig_Template
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
        $__internal_75a1d28a958632b6b185c8cea29fe49b8cbd15042dc98538a6cb3546a752d07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a1d28a958632b6b185c8cea29fe49b8cbd15042dc98538a6cb3546a752d07f->enter($__internal_75a1d28a958632b6b185c8cea29fe49b8cbd15042dc98538a6cb3546a752d07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_0a475f9137e7ff389ed985f2a708823fd86d2ef13c75d2b8c0446b3d5618f76d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a475f9137e7ff389ed985f2a708823fd86d2ef13c75d2b8c0446b3d5618f76d->enter($__internal_0a475f9137e7ff389ed985f2a708823fd86d2ef13c75d2b8c0446b3d5618f76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_75a1d28a958632b6b185c8cea29fe49b8cbd15042dc98538a6cb3546a752d07f->leave($__internal_75a1d28a958632b6b185c8cea29fe49b8cbd15042dc98538a6cb3546a752d07f_prof);

        
        $__internal_0a475f9137e7ff389ed985f2a708823fd86d2ef13c75d2b8c0446b3d5618f76d->leave($__internal_0a475f9137e7ff389ed985f2a708823fd86d2ef13c75d2b8c0446b3d5618f76d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
