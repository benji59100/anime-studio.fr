<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_00190bbddbb3f975fd1cde7f8c6a210f51a614a8240af1dd7e2cb3f2cf11d7e0 extends Twig_Template
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
        $__internal_766b8808b59ec741730f55a8474d9d04503db10d0d1be4b7f6bcaabe23e51dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766b8808b59ec741730f55a8474d9d04503db10d0d1be4b7f6bcaabe23e51dcf->enter($__internal_766b8808b59ec741730f55a8474d9d04503db10d0d1be4b7f6bcaabe23e51dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5639c81c937d296c4d5b6e3669fa1cefeb3b90b6610eeffa7401fe71eb888777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5639c81c937d296c4d5b6e3669fa1cefeb3b90b6610eeffa7401fe71eb888777->enter($__internal_5639c81c937d296c4d5b6e3669fa1cefeb3b90b6610eeffa7401fe71eb888777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_766b8808b59ec741730f55a8474d9d04503db10d0d1be4b7f6bcaabe23e51dcf->leave($__internal_766b8808b59ec741730f55a8474d9d04503db10d0d1be4b7f6bcaabe23e51dcf_prof);

        
        $__internal_5639c81c937d296c4d5b6e3669fa1cefeb3b90b6610eeffa7401fe71eb888777->leave($__internal_5639c81c937d296c4d5b6e3669fa1cefeb3b90b6610eeffa7401fe71eb888777_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
