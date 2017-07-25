<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_02ddc33f32994f270cd21bcaec9e3fa6630400faeab73b3f5563902e7d79052d extends Twig_Template
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
        $__internal_5dd9c65fab203db54f687de4a2934463173d06854cb16b9f265fc4925530006a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd9c65fab203db54f687de4a2934463173d06854cb16b9f265fc4925530006a->enter($__internal_5dd9c65fab203db54f687de4a2934463173d06854cb16b9f265fc4925530006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_204b876aa85d51236c037f3a78588c4c95798750ecdfdb06111169995ebd4489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204b876aa85d51236c037f3a78588c4c95798750ecdfdb06111169995ebd4489->enter($__internal_204b876aa85d51236c037f3a78588c4c95798750ecdfdb06111169995ebd4489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5dd9c65fab203db54f687de4a2934463173d06854cb16b9f265fc4925530006a->leave($__internal_5dd9c65fab203db54f687de4a2934463173d06854cb16b9f265fc4925530006a_prof);

        
        $__internal_204b876aa85d51236c037f3a78588c4c95798750ecdfdb06111169995ebd4489->leave($__internal_204b876aa85d51236c037f3a78588c4c95798750ecdfdb06111169995ebd4489_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
