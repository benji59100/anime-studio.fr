<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_923735145e6357ee27837601d35b99a309a60dee1c709673a276eecb85826186 extends Twig_Template
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
        $__internal_83eff1d49499b21583f2ca92fc77363c3b0b1c1a01ed06191d8ac73bf9e81f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83eff1d49499b21583f2ca92fc77363c3b0b1c1a01ed06191d8ac73bf9e81f2f->enter($__internal_83eff1d49499b21583f2ca92fc77363c3b0b1c1a01ed06191d8ac73bf9e81f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_29e61c26fef7043f590fefa168ad3f0a981782bf894eef510d7b45a94329d2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e61c26fef7043f590fefa168ad3f0a981782bf894eef510d7b45a94329d2d8->enter($__internal_29e61c26fef7043f590fefa168ad3f0a981782bf894eef510d7b45a94329d2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_83eff1d49499b21583f2ca92fc77363c3b0b1c1a01ed06191d8ac73bf9e81f2f->leave($__internal_83eff1d49499b21583f2ca92fc77363c3b0b1c1a01ed06191d8ac73bf9e81f2f_prof);

        
        $__internal_29e61c26fef7043f590fefa168ad3f0a981782bf894eef510d7b45a94329d2d8->leave($__internal_29e61c26fef7043f590fefa168ad3f0a981782bf894eef510d7b45a94329d2d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
