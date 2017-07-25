<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8483115b6ebd2cf0caf458c3c9ff00bf30dafbf473a9d6f1fc862bdd0446d768 extends Twig_Template
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
        $__internal_a6f7046611327593808b794f6b5f2b9e2678b67b280352f14f14d626241a8ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f7046611327593808b794f6b5f2b9e2678b67b280352f14f14d626241a8ed2->enter($__internal_a6f7046611327593808b794f6b5f2b9e2678b67b280352f14f14d626241a8ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1600e9cffd2bf198377d571490cea47933ed73d7891e3ef3a0c6aaef8fb2eac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1600e9cffd2bf198377d571490cea47933ed73d7891e3ef3a0c6aaef8fb2eac9->enter($__internal_1600e9cffd2bf198377d571490cea47933ed73d7891e3ef3a0c6aaef8fb2eac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a6f7046611327593808b794f6b5f2b9e2678b67b280352f14f14d626241a8ed2->leave($__internal_a6f7046611327593808b794f6b5f2b9e2678b67b280352f14f14d626241a8ed2_prof);

        
        $__internal_1600e9cffd2bf198377d571490cea47933ed73d7891e3ef3a0c6aaef8fb2eac9->leave($__internal_1600e9cffd2bf198377d571490cea47933ed73d7891e3ef3a0c6aaef8fb2eac9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
