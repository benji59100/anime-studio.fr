<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b102fd7082c892f73afa6546113a246ab320bd753a78c72d75d3c2bfa7296759 extends Twig_Template
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
        $__internal_014d0ee2086de2e0ee13d7a787bd7495d7ad37c4eea20855c24bf265383bdc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014d0ee2086de2e0ee13d7a787bd7495d7ad37c4eea20855c24bf265383bdc42->enter($__internal_014d0ee2086de2e0ee13d7a787bd7495d7ad37c4eea20855c24bf265383bdc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5657f2e0b1b33d494bd765b939652b81c909387410444fc077fad5edae8f53d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5657f2e0b1b33d494bd765b939652b81c909387410444fc077fad5edae8f53d7->enter($__internal_5657f2e0b1b33d494bd765b939652b81c909387410444fc077fad5edae8f53d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_014d0ee2086de2e0ee13d7a787bd7495d7ad37c4eea20855c24bf265383bdc42->leave($__internal_014d0ee2086de2e0ee13d7a787bd7495d7ad37c4eea20855c24bf265383bdc42_prof);

        
        $__internal_5657f2e0b1b33d494bd765b939652b81c909387410444fc077fad5edae8f53d7->leave($__internal_5657f2e0b1b33d494bd765b939652b81c909387410444fc077fad5edae8f53d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
