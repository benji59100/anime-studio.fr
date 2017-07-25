<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9fb3677bc59057607870f19f0b96311a09c1c061edc995abfbce81dd0c7a6fd3 extends Twig_Template
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
        $__internal_40d4bd6e7b0e255f3f76933325ebeb1d573613a7d089fa9e900f1e0e318118f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d4bd6e7b0e255f3f76933325ebeb1d573613a7d089fa9e900f1e0e318118f7->enter($__internal_40d4bd6e7b0e255f3f76933325ebeb1d573613a7d089fa9e900f1e0e318118f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4e74fe14bbc0781492f3b45d540709fd00a88a4e8629ee71644e5c725d7393f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e74fe14bbc0781492f3b45d540709fd00a88a4e8629ee71644e5c725d7393f0->enter($__internal_4e74fe14bbc0781492f3b45d540709fd00a88a4e8629ee71644e5c725d7393f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_40d4bd6e7b0e255f3f76933325ebeb1d573613a7d089fa9e900f1e0e318118f7->leave($__internal_40d4bd6e7b0e255f3f76933325ebeb1d573613a7d089fa9e900f1e0e318118f7_prof);

        
        $__internal_4e74fe14bbc0781492f3b45d540709fd00a88a4e8629ee71644e5c725d7393f0->leave($__internal_4e74fe14bbc0781492f3b45d540709fd00a88a4e8629ee71644e5c725d7393f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
