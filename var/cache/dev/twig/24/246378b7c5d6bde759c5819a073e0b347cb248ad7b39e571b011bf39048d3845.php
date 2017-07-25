<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cb8b1c94da2ea6b5934bd267bfe5a9590cec3dffe99cc6b2f63d60265261a31d extends Twig_Template
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
        $__internal_0106df97e9b19b36823c4b7819482cbbc5ad2e7190e1c45e971ccc382b4ee046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0106df97e9b19b36823c4b7819482cbbc5ad2e7190e1c45e971ccc382b4ee046->enter($__internal_0106df97e9b19b36823c4b7819482cbbc5ad2e7190e1c45e971ccc382b4ee046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b6dc0afd50b7f7b4e595f59c0c3ef0a63c528de714f12984396004117266e332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dc0afd50b7f7b4e595f59c0c3ef0a63c528de714f12984396004117266e332->enter($__internal_b6dc0afd50b7f7b4e595f59c0c3ef0a63c528de714f12984396004117266e332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0106df97e9b19b36823c4b7819482cbbc5ad2e7190e1c45e971ccc382b4ee046->leave($__internal_0106df97e9b19b36823c4b7819482cbbc5ad2e7190e1c45e971ccc382b4ee046_prof);

        
        $__internal_b6dc0afd50b7f7b4e595f59c0c3ef0a63c528de714f12984396004117266e332->leave($__internal_b6dc0afd50b7f7b4e595f59c0c3ef0a63c528de714f12984396004117266e332_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_12998a6dfaaedf6c801ae4391d69ac331b353aaa61e1c574def35f528d6d087a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12998a6dfaaedf6c801ae4391d69ac331b353aaa61e1c574def35f528d6d087a->enter($__internal_12998a6dfaaedf6c801ae4391d69ac331b353aaa61e1c574def35f528d6d087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1094c81277da7cc4bfcc5891208225c4c8ced86d65401303b0604e0a44b1ec5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1094c81277da7cc4bfcc5891208225c4c8ced86d65401303b0604e0a44b1ec5b->enter($__internal_1094c81277da7cc4bfcc5891208225c4c8ced86d65401303b0604e0a44b1ec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1094c81277da7cc4bfcc5891208225c4c8ced86d65401303b0604e0a44b1ec5b->leave($__internal_1094c81277da7cc4bfcc5891208225c4c8ced86d65401303b0604e0a44b1ec5b_prof);

        
        $__internal_12998a6dfaaedf6c801ae4391d69ac331b353aaa61e1c574def35f528d6d087a->leave($__internal_12998a6dfaaedf6c801ae4391d69ac331b353aaa61e1c574def35f528d6d087a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
