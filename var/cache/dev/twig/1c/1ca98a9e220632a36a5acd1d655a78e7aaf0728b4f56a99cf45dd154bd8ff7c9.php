<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7d070203b5a82493f9bcd65bbef297e3f2acdb9ab43d4a8b1c0e32552baae61b extends Twig_Template
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
        $__internal_840d70dfa586d95f3b5c0224270308ca96ce751321aa288fd0d1078af7437db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840d70dfa586d95f3b5c0224270308ca96ce751321aa288fd0d1078af7437db8->enter($__internal_840d70dfa586d95f3b5c0224270308ca96ce751321aa288fd0d1078af7437db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_2f7e7ff3c1a976dce8a2bc0bdbf4a2483acc855811c632dbdab9e6b2543f5b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7e7ff3c1a976dce8a2bc0bdbf4a2483acc855811c632dbdab9e6b2543f5b0d->enter($__internal_2f7e7ff3c1a976dce8a2bc0bdbf4a2483acc855811c632dbdab9e6b2543f5b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_840d70dfa586d95f3b5c0224270308ca96ce751321aa288fd0d1078af7437db8->leave($__internal_840d70dfa586d95f3b5c0224270308ca96ce751321aa288fd0d1078af7437db8_prof);

        
        $__internal_2f7e7ff3c1a976dce8a2bc0bdbf4a2483acc855811c632dbdab9e6b2543f5b0d->leave($__internal_2f7e7ff3c1a976dce8a2bc0bdbf4a2483acc855811c632dbdab9e6b2543f5b0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
