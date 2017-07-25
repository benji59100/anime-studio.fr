<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5cbd63a56042442dbd729ba1004f7be38c09521bbd9faae3aad75134b3ddc474 extends Twig_Template
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
        $__internal_37413581cafa5a82a80e4ab57d3a6249231514847c0a5815678bd90775cee672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37413581cafa5a82a80e4ab57d3a6249231514847c0a5815678bd90775cee672->enter($__internal_37413581cafa5a82a80e4ab57d3a6249231514847c0a5815678bd90775cee672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_43b2c7c42ef85b02e6911c84a28f0b60ae2727dd75bc9728b31372a739d312bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b2c7c42ef85b02e6911c84a28f0b60ae2727dd75bc9728b31372a739d312bb->enter($__internal_43b2c7c42ef85b02e6911c84a28f0b60ae2727dd75bc9728b31372a739d312bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_37413581cafa5a82a80e4ab57d3a6249231514847c0a5815678bd90775cee672->leave($__internal_37413581cafa5a82a80e4ab57d3a6249231514847c0a5815678bd90775cee672_prof);

        
        $__internal_43b2c7c42ef85b02e6911c84a28f0b60ae2727dd75bc9728b31372a739d312bb->leave($__internal_43b2c7c42ef85b02e6911c84a28f0b60ae2727dd75bc9728b31372a739d312bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
