<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_315e2b7fb0d99a882e49b533772db7615dad9b259382d2101f830044d8da2a70 extends Twig_Template
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
        $__internal_bd2048165d8724f8f05c050499de2efdd80c49aeb5f969807257e18553bd8646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2048165d8724f8f05c050499de2efdd80c49aeb5f969807257e18553bd8646->enter($__internal_bd2048165d8724f8f05c050499de2efdd80c49aeb5f969807257e18553bd8646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2b28050fb26cfa63d785c12d3070ca49e9d479f628dc82652a4e3e2a53887600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b28050fb26cfa63d785c12d3070ca49e9d479f628dc82652a4e3e2a53887600->enter($__internal_2b28050fb26cfa63d785c12d3070ca49e9d479f628dc82652a4e3e2a53887600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bd2048165d8724f8f05c050499de2efdd80c49aeb5f969807257e18553bd8646->leave($__internal_bd2048165d8724f8f05c050499de2efdd80c49aeb5f969807257e18553bd8646_prof);

        
        $__internal_2b28050fb26cfa63d785c12d3070ca49e9d479f628dc82652a4e3e2a53887600->leave($__internal_2b28050fb26cfa63d785c12d3070ca49e9d479f628dc82652a4e3e2a53887600_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
