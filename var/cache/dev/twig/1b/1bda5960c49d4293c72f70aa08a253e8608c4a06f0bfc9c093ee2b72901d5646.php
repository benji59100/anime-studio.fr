<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a4aaf135c9047668c2bd6d9c44f91c5b38e8e5b2e923ed014d47ddc04ff70e21 extends Twig_Template
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
        $__internal_ff48d53524d5a890983054f6f0d329f866bd9640003723ecf72a9739f3c4a3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff48d53524d5a890983054f6f0d329f866bd9640003723ecf72a9739f3c4a3ac->enter($__internal_ff48d53524d5a890983054f6f0d329f866bd9640003723ecf72a9739f3c4a3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_cc017d828fe88f96e8cfc7d34b468cb7b03d5c854198b7a36a1e1190aa75a8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc017d828fe88f96e8cfc7d34b468cb7b03d5c854198b7a36a1e1190aa75a8ff->enter($__internal_cc017d828fe88f96e8cfc7d34b468cb7b03d5c854198b7a36a1e1190aa75a8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ff48d53524d5a890983054f6f0d329f866bd9640003723ecf72a9739f3c4a3ac->leave($__internal_ff48d53524d5a890983054f6f0d329f866bd9640003723ecf72a9739f3c4a3ac_prof);

        
        $__internal_cc017d828fe88f96e8cfc7d34b468cb7b03d5c854198b7a36a1e1190aa75a8ff->leave($__internal_cc017d828fe88f96e8cfc7d34b468cb7b03d5c854198b7a36a1e1190aa75a8ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
