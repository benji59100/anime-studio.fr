<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b4f52fa87c11a730b64a6d3082192b147a0a703dbe95e827d3e77ad6caf027a8 extends Twig_Template
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
        $__internal_ac6c2f87f1d6c346c0fefca2668c79a6ca3746c98769e74551c50f4760676a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6c2f87f1d6c346c0fefca2668c79a6ca3746c98769e74551c50f4760676a48->enter($__internal_ac6c2f87f1d6c346c0fefca2668c79a6ca3746c98769e74551c50f4760676a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f00539217588ae6ccf70cba967137db1a08da08b337e945d7686b581cc925a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00539217588ae6ccf70cba967137db1a08da08b337e945d7686b581cc925a2c->enter($__internal_f00539217588ae6ccf70cba967137db1a08da08b337e945d7686b581cc925a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ac6c2f87f1d6c346c0fefca2668c79a6ca3746c98769e74551c50f4760676a48->leave($__internal_ac6c2f87f1d6c346c0fefca2668c79a6ca3746c98769e74551c50f4760676a48_prof);

        
        $__internal_f00539217588ae6ccf70cba967137db1a08da08b337e945d7686b581cc925a2c->leave($__internal_f00539217588ae6ccf70cba967137db1a08da08b337e945d7686b581cc925a2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
