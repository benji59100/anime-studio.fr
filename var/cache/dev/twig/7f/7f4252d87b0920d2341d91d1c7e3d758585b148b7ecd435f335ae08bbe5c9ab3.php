<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fa9438d15792bb115758aeba7811a4d5edb87b23f79d35ea77e58ff7c345dd82 extends Twig_Template
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
        $__internal_4c29dd32e81e0ac7f3dc6102375b26dc11169f4d37bec109e5894f33d620c92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c29dd32e81e0ac7f3dc6102375b26dc11169f4d37bec109e5894f33d620c92c->enter($__internal_4c29dd32e81e0ac7f3dc6102375b26dc11169f4d37bec109e5894f33d620c92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ee4fbb4faec3854db26d6d7cc0af0a26cab7b377baa9c087cd8690a7877dbdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4fbb4faec3854db26d6d7cc0af0a26cab7b377baa9c087cd8690a7877dbdff->enter($__internal_ee4fbb4faec3854db26d6d7cc0af0a26cab7b377baa9c087cd8690a7877dbdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4c29dd32e81e0ac7f3dc6102375b26dc11169f4d37bec109e5894f33d620c92c->leave($__internal_4c29dd32e81e0ac7f3dc6102375b26dc11169f4d37bec109e5894f33d620c92c_prof);

        
        $__internal_ee4fbb4faec3854db26d6d7cc0af0a26cab7b377baa9c087cd8690a7877dbdff->leave($__internal_ee4fbb4faec3854db26d6d7cc0af0a26cab7b377baa9c087cd8690a7877dbdff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
