<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_8291d3db23f860bc5035581ddf7060022d644ddffdb349ef6b4663e09832f9c4 extends Twig_Template
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
        $__internal_5d6fd394b8bc2305399fd11565636285b8c155c14a701e24cdcf7c5cd3278685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6fd394b8bc2305399fd11565636285b8c155c14a701e24cdcf7c5cd3278685->enter($__internal_5d6fd394b8bc2305399fd11565636285b8c155c14a701e24cdcf7c5cd3278685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_285b08b7f71468775f889f4699bfdfce7dd077d3bbf895e4dfd7d2cdc908c31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285b08b7f71468775f889f4699bfdfce7dd077d3bbf895e4dfd7d2cdc908c31e->enter($__internal_285b08b7f71468775f889f4699bfdfce7dd077d3bbf895e4dfd7d2cdc908c31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5d6fd394b8bc2305399fd11565636285b8c155c14a701e24cdcf7c5cd3278685->leave($__internal_5d6fd394b8bc2305399fd11565636285b8c155c14a701e24cdcf7c5cd3278685_prof);

        
        $__internal_285b08b7f71468775f889f4699bfdfce7dd077d3bbf895e4dfd7d2cdc908c31e->leave($__internal_285b08b7f71468775f889f4699bfdfce7dd077d3bbf895e4dfd7d2cdc908c31e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
