<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2d5357eee17238cbda0f3e6ce9acf929b9183c2f8c7cf9da52922278a7274cb3 extends Twig_Template
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
        $__internal_f752d9406f4483cb29535c39768f53b18cf1c58bb5fb355ba5be6c2c40afd3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f752d9406f4483cb29535c39768f53b18cf1c58bb5fb355ba5be6c2c40afd3be->enter($__internal_f752d9406f4483cb29535c39768f53b18cf1c58bb5fb355ba5be6c2c40afd3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d17472fe52d5f422a12f2dd6e3d458e9d01611f95e6a3729c5db4d05deac311a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17472fe52d5f422a12f2dd6e3d458e9d01611f95e6a3729c5db4d05deac311a->enter($__internal_d17472fe52d5f422a12f2dd6e3d458e9d01611f95e6a3729c5db4d05deac311a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f752d9406f4483cb29535c39768f53b18cf1c58bb5fb355ba5be6c2c40afd3be->leave($__internal_f752d9406f4483cb29535c39768f53b18cf1c58bb5fb355ba5be6c2c40afd3be_prof);

        
        $__internal_d17472fe52d5f422a12f2dd6e3d458e9d01611f95e6a3729c5db4d05deac311a->leave($__internal_d17472fe52d5f422a12f2dd6e3d458e9d01611f95e6a3729c5db4d05deac311a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
