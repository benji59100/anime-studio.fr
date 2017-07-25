<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_30d779a2bdc36044d4737299d1fd94facc6432f26518897b5072722025f8f470 extends Twig_Template
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
        $__internal_365cdf70859cd03b6d5a1b3fde6fb04bbe55ebfb5c0c881672e3a5bba3ae7fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365cdf70859cd03b6d5a1b3fde6fb04bbe55ebfb5c0c881672e3a5bba3ae7fbd->enter($__internal_365cdf70859cd03b6d5a1b3fde6fb04bbe55ebfb5c0c881672e3a5bba3ae7fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_46cbfd684a3e7b3801877f3491a0df9198619fb72bdc4a037ee5a2d050f78299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46cbfd684a3e7b3801877f3491a0df9198619fb72bdc4a037ee5a2d050f78299->enter($__internal_46cbfd684a3e7b3801877f3491a0df9198619fb72bdc4a037ee5a2d050f78299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_365cdf70859cd03b6d5a1b3fde6fb04bbe55ebfb5c0c881672e3a5bba3ae7fbd->leave($__internal_365cdf70859cd03b6d5a1b3fde6fb04bbe55ebfb5c0c881672e3a5bba3ae7fbd_prof);

        
        $__internal_46cbfd684a3e7b3801877f3491a0df9198619fb72bdc4a037ee5a2d050f78299->leave($__internal_46cbfd684a3e7b3801877f3491a0df9198619fb72bdc4a037ee5a2d050f78299_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
