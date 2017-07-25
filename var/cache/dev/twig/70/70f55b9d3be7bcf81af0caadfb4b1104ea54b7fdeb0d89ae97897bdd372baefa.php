<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ae8013b0cfc07b1d9d40448ad1a01e2a28c2c0fce8ac2cbcef3ef3872ce11c7b extends Twig_Template
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
        $__internal_39985826980eba4d355f6c2421147efec4da91f6c48230dc8d7c49f93edb7c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39985826980eba4d355f6c2421147efec4da91f6c48230dc8d7c49f93edb7c27->enter($__internal_39985826980eba4d355f6c2421147efec4da91f6c48230dc8d7c49f93edb7c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9732538f1da0dc078df6a4386ae9c63a48af108e8efa3c455f395fa97e9ff09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9732538f1da0dc078df6a4386ae9c63a48af108e8efa3c455f395fa97e9ff09e->enter($__internal_9732538f1da0dc078df6a4386ae9c63a48af108e8efa3c455f395fa97e9ff09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_39985826980eba4d355f6c2421147efec4da91f6c48230dc8d7c49f93edb7c27->leave($__internal_39985826980eba4d355f6c2421147efec4da91f6c48230dc8d7c49f93edb7c27_prof);

        
        $__internal_9732538f1da0dc078df6a4386ae9c63a48af108e8efa3c455f395fa97e9ff09e->leave($__internal_9732538f1da0dc078df6a4386ae9c63a48af108e8efa3c455f395fa97e9ff09e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
