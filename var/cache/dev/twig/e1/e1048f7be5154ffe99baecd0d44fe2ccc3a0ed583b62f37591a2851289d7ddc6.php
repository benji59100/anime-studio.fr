<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_65a2095474237ab0d09fc6e6f18f50e14510becee3b84ddf4f948ebd290a3c9e extends Twig_Template
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
        $__internal_e6f83fcf8f14e2d10501004142b5bd8b8c9a9989864b8afecb78f36284091519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f83fcf8f14e2d10501004142b5bd8b8c9a9989864b8afecb78f36284091519->enter($__internal_e6f83fcf8f14e2d10501004142b5bd8b8c9a9989864b8afecb78f36284091519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_fa7e91850a687110498607284fe0045c8d3ad4c4877e911c23fb966bcb7e3e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7e91850a687110498607284fe0045c8d3ad4c4877e911c23fb966bcb7e3e3d->enter($__internal_fa7e91850a687110498607284fe0045c8d3ad4c4877e911c23fb966bcb7e3e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_e6f83fcf8f14e2d10501004142b5bd8b8c9a9989864b8afecb78f36284091519->leave($__internal_e6f83fcf8f14e2d10501004142b5bd8b8c9a9989864b8afecb78f36284091519_prof);

        
        $__internal_fa7e91850a687110498607284fe0045c8d3ad4c4877e911c23fb966bcb7e3e3d->leave($__internal_fa7e91850a687110498607284fe0045c8d3ad4c4877e911c23fb966bcb7e3e3d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
