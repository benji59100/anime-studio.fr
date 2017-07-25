<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d06cdb488b4f94a5bf970c281b21f409e56d4d1d176ec6275ec7ae97b96ff2c1 extends Twig_Template
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
        $__internal_126c3699c217da797a55f3c29c4dfb2e522e70706329ea6074647348a9f53482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126c3699c217da797a55f3c29c4dfb2e522e70706329ea6074647348a9f53482->enter($__internal_126c3699c217da797a55f3c29c4dfb2e522e70706329ea6074647348a9f53482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_1157f8b07336156f7ba790aaf367513013920cf8acdd65b31e47ce7156466243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1157f8b07336156f7ba790aaf367513013920cf8acdd65b31e47ce7156466243->enter($__internal_1157f8b07336156f7ba790aaf367513013920cf8acdd65b31e47ce7156466243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_126c3699c217da797a55f3c29c4dfb2e522e70706329ea6074647348a9f53482->leave($__internal_126c3699c217da797a55f3c29c4dfb2e522e70706329ea6074647348a9f53482_prof);

        
        $__internal_1157f8b07336156f7ba790aaf367513013920cf8acdd65b31e47ce7156466243->leave($__internal_1157f8b07336156f7ba790aaf367513013920cf8acdd65b31e47ce7156466243_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
