<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_16919551474c794bc6398da1be4012aa4633c509877f307a80259b55dfec5fc2 extends Twig_Template
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
        $__internal_2c6e4224b1a32618cfeddb1fa85d0055c9c0216d4a4a3b8c435c624dbc5af629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6e4224b1a32618cfeddb1fa85d0055c9c0216d4a4a3b8c435c624dbc5af629->enter($__internal_2c6e4224b1a32618cfeddb1fa85d0055c9c0216d4a4a3b8c435c624dbc5af629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_26c54e7e51841aa6afc0743bcd9a3bbae474db3a8111bf505781341cf8f452a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c54e7e51841aa6afc0743bcd9a3bbae474db3a8111bf505781341cf8f452a7->enter($__internal_26c54e7e51841aa6afc0743bcd9a3bbae474db3a8111bf505781341cf8f452a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2c6e4224b1a32618cfeddb1fa85d0055c9c0216d4a4a3b8c435c624dbc5af629->leave($__internal_2c6e4224b1a32618cfeddb1fa85d0055c9c0216d4a4a3b8c435c624dbc5af629_prof);

        
        $__internal_26c54e7e51841aa6afc0743bcd9a3bbae474db3a8111bf505781341cf8f452a7->leave($__internal_26c54e7e51841aa6afc0743bcd9a3bbae474db3a8111bf505781341cf8f452a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
