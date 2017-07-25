<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b37f9a04276de53c535e88a7b6e3b7a86c6b40dcb6acecf2f6c08841c7ccf43c extends Twig_Template
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
        $__internal_d2879281c539a2ee9ef5d79a22e853acfae75911ec85dc2a741469977676e1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2879281c539a2ee9ef5d79a22e853acfae75911ec85dc2a741469977676e1a2->enter($__internal_d2879281c539a2ee9ef5d79a22e853acfae75911ec85dc2a741469977676e1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_87eb3a0b6be0e7b32dc4d0a0ed77fe64a0e6c8c41c4dc0ff00f68f9821cc3ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87eb3a0b6be0e7b32dc4d0a0ed77fe64a0e6c8c41c4dc0ff00f68f9821cc3ea9->enter($__internal_87eb3a0b6be0e7b32dc4d0a0ed77fe64a0e6c8c41c4dc0ff00f68f9821cc3ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d2879281c539a2ee9ef5d79a22e853acfae75911ec85dc2a741469977676e1a2->leave($__internal_d2879281c539a2ee9ef5d79a22e853acfae75911ec85dc2a741469977676e1a2_prof);

        
        $__internal_87eb3a0b6be0e7b32dc4d0a0ed77fe64a0e6c8c41c4dc0ff00f68f9821cc3ea9->leave($__internal_87eb3a0b6be0e7b32dc4d0a0ed77fe64a0e6c8c41c4dc0ff00f68f9821cc3ea9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
