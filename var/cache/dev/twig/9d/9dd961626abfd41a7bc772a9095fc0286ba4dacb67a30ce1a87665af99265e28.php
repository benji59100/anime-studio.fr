<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_89fd8b50e6dfe8cfee2a461ef3f401543683917549bf6e715e60d0f2771ff044 extends Twig_Template
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
        $__internal_cbce8992e70ce3f3d3eb3897cf9d534d9aa9c6e85016dae9d2a447fc10e76c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbce8992e70ce3f3d3eb3897cf9d534d9aa9c6e85016dae9d2a447fc10e76c7c->enter($__internal_cbce8992e70ce3f3d3eb3897cf9d534d9aa9c6e85016dae9d2a447fc10e76c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_87364d94a6f6f941d03fa9fe9783d3244115ae0736048f70bc472d162a0da80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87364d94a6f6f941d03fa9fe9783d3244115ae0736048f70bc472d162a0da80a->enter($__internal_87364d94a6f6f941d03fa9fe9783d3244115ae0736048f70bc472d162a0da80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_cbce8992e70ce3f3d3eb3897cf9d534d9aa9c6e85016dae9d2a447fc10e76c7c->leave($__internal_cbce8992e70ce3f3d3eb3897cf9d534d9aa9c6e85016dae9d2a447fc10e76c7c_prof);

        
        $__internal_87364d94a6f6f941d03fa9fe9783d3244115ae0736048f70bc472d162a0da80a->leave($__internal_87364d94a6f6f941d03fa9fe9783d3244115ae0736048f70bc472d162a0da80a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
