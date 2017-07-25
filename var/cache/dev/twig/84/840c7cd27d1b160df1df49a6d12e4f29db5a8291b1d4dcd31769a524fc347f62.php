<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_7a6a98def4e45f3650ef44aeb99af5f2b2131f68a86adbef3b333d15e2fffb3f extends Twig_Template
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
        $__internal_b6af4bfba29d180035af49998f0ebb8345de9ebb7df73bb21ceb9729ca4cdc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6af4bfba29d180035af49998f0ebb8345de9ebb7df73bb21ceb9729ca4cdc70->enter($__internal_b6af4bfba29d180035af49998f0ebb8345de9ebb7df73bb21ceb9729ca4cdc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a0a73468ef5da423549f57ba8b327eea0015fa1c3f4fc281334e5635347274a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a73468ef5da423549f57ba8b327eea0015fa1c3f4fc281334e5635347274a0->enter($__internal_a0a73468ef5da423549f57ba8b327eea0015fa1c3f4fc281334e5635347274a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b6af4bfba29d180035af49998f0ebb8345de9ebb7df73bb21ceb9729ca4cdc70->leave($__internal_b6af4bfba29d180035af49998f0ebb8345de9ebb7df73bb21ceb9729ca4cdc70_prof);

        
        $__internal_a0a73468ef5da423549f57ba8b327eea0015fa1c3f4fc281334e5635347274a0->leave($__internal_a0a73468ef5da423549f57ba8b327eea0015fa1c3f4fc281334e5635347274a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
