<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_fc20f3ffdac8959109641605b9cc1bc8732a8d4311082461cac97458cffcf8c6 extends Twig_Template
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
        $__internal_eabe2b0175ffaffeef46c616d689a5c1d6a0150834381a51c2ac9f3149a0e92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eabe2b0175ffaffeef46c616d689a5c1d6a0150834381a51c2ac9f3149a0e92b->enter($__internal_eabe2b0175ffaffeef46c616d689a5c1d6a0150834381a51c2ac9f3149a0e92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_e2ee86fef5b82b86eb3444090a50d513fbe5a44b464ba1276d8ef5a2a12044a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ee86fef5b82b86eb3444090a50d513fbe5a44b464ba1276d8ef5a2a12044a0->enter($__internal_e2ee86fef5b82b86eb3444090a50d513fbe5a44b464ba1276d8ef5a2a12044a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_eabe2b0175ffaffeef46c616d689a5c1d6a0150834381a51c2ac9f3149a0e92b->leave($__internal_eabe2b0175ffaffeef46c616d689a5c1d6a0150834381a51c2ac9f3149a0e92b_prof);

        
        $__internal_e2ee86fef5b82b86eb3444090a50d513fbe5a44b464ba1276d8ef5a2a12044a0->leave($__internal_e2ee86fef5b82b86eb3444090a50d513fbe5a44b464ba1276d8ef5a2a12044a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
