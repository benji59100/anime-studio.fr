<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5b3e23dcc594ca0d6a2b69a3c58944904aaa8f5ed884b97e99eb6ac461e0dc6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3b73edcf723d8217fbd49af1def23b2cf44a981066e57e1afebc0432def516f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b73edcf723d8217fbd49af1def23b2cf44a981066e57e1afebc0432def516f->enter($__internal_a3b73edcf723d8217fbd49af1def23b2cf44a981066e57e1afebc0432def516f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4d9b48621242b07749cd28e1612dd4c7eeac0c34e5d9367190f4eed7e2d69853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9b48621242b07749cd28e1612dd4c7eeac0c34e5d9367190f4eed7e2d69853->enter($__internal_4d9b48621242b07749cd28e1612dd4c7eeac0c34e5d9367190f4eed7e2d69853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a3b73edcf723d8217fbd49af1def23b2cf44a981066e57e1afebc0432def516f->leave($__internal_a3b73edcf723d8217fbd49af1def23b2cf44a981066e57e1afebc0432def516f_prof);

        
        $__internal_4d9b48621242b07749cd28e1612dd4c7eeac0c34e5d9367190f4eed7e2d69853->leave($__internal_4d9b48621242b07749cd28e1612dd4c7eeac0c34e5d9367190f4eed7e2d69853_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c20858f48b8a00e3b21d7ebbbed65b6aa5ee703f2e7866be61a553891b619cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20858f48b8a00e3b21d7ebbbed65b6aa5ee703f2e7866be61a553891b619cbd->enter($__internal_c20858f48b8a00e3b21d7ebbbed65b6aa5ee703f2e7866be61a553891b619cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8e7e9ff25f10528456abd3295a3c92af1f4e4dd9d3e12044a8a14eeb297ffb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7e9ff25f10528456abd3295a3c92af1f4e4dd9d3e12044a8a14eeb297ffb5e->enter($__internal_8e7e9ff25f10528456abd3295a3c92af1f4e4dd9d3e12044a8a14eeb297ffb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8e7e9ff25f10528456abd3295a3c92af1f4e4dd9d3e12044a8a14eeb297ffb5e->leave($__internal_8e7e9ff25f10528456abd3295a3c92af1f4e4dd9d3e12044a8a14eeb297ffb5e_prof);

        
        $__internal_c20858f48b8a00e3b21d7ebbbed65b6aa5ee703f2e7866be61a553891b619cbd->leave($__internal_c20858f48b8a00e3b21d7ebbbed65b6aa5ee703f2e7866be61a553891b619cbd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
