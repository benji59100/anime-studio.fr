<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8b8f126e62e87ba57e559fee24f1687a720bc9733360c2ae173b1e7fd0544f84 extends Twig_Template
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
        $__internal_57b34a8c4d3d462b5859b95004d7a7cf79af1925a021d74dce0e880ffd1c2af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b34a8c4d3d462b5859b95004d7a7cf79af1925a021d74dce0e880ffd1c2af4->enter($__internal_57b34a8c4d3d462b5859b95004d7a7cf79af1925a021d74dce0e880ffd1c2af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_77025cc8d4afad5ce0bd9d5bd387ea9990e6d5bf9d7ee2944a27f08e4353ee02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77025cc8d4afad5ce0bd9d5bd387ea9990e6d5bf9d7ee2944a27f08e4353ee02->enter($__internal_77025cc8d4afad5ce0bd9d5bd387ea9990e6d5bf9d7ee2944a27f08e4353ee02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_57b34a8c4d3d462b5859b95004d7a7cf79af1925a021d74dce0e880ffd1c2af4->leave($__internal_57b34a8c4d3d462b5859b95004d7a7cf79af1925a021d74dce0e880ffd1c2af4_prof);

        
        $__internal_77025cc8d4afad5ce0bd9d5bd387ea9990e6d5bf9d7ee2944a27f08e4353ee02->leave($__internal_77025cc8d4afad5ce0bd9d5bd387ea9990e6d5bf9d7ee2944a27f08e4353ee02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
