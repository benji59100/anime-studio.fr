<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_44604583bad06a6fd103462cf3727e3612c09d41ffed2c5d62a7c0a4e1fc6dfa extends Twig_Template
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
        $__internal_8c8b74a04fd5bd4a2a3ed6d53128f5da811e5be83676d48fea30822145303b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8b74a04fd5bd4a2a3ed6d53128f5da811e5be83676d48fea30822145303b6a->enter($__internal_8c8b74a04fd5bd4a2a3ed6d53128f5da811e5be83676d48fea30822145303b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0a4def2469bf36d94ffd35b64cce56e0abe6f30f1dc22eaaca7a5a1211757cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4def2469bf36d94ffd35b64cce56e0abe6f30f1dc22eaaca7a5a1211757cfa->enter($__internal_0a4def2469bf36d94ffd35b64cce56e0abe6f30f1dc22eaaca7a5a1211757cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8c8b74a04fd5bd4a2a3ed6d53128f5da811e5be83676d48fea30822145303b6a->leave($__internal_8c8b74a04fd5bd4a2a3ed6d53128f5da811e5be83676d48fea30822145303b6a_prof);

        
        $__internal_0a4def2469bf36d94ffd35b64cce56e0abe6f30f1dc22eaaca7a5a1211757cfa->leave($__internal_0a4def2469bf36d94ffd35b64cce56e0abe6f30f1dc22eaaca7a5a1211757cfa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
