<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3b7fc474362ddb7a5e7802dd8c818ba47751ea023e7d8cf1ef00fd27c097d653 extends Twig_Template
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
        $__internal_a9bb13ffd18d4a450719f62fdcc1ac70d64dca030059901b366ebf0652ab93de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9bb13ffd18d4a450719f62fdcc1ac70d64dca030059901b366ebf0652ab93de->enter($__internal_a9bb13ffd18d4a450719f62fdcc1ac70d64dca030059901b366ebf0652ab93de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c144b9cdaaef19f361beacc2ceed72278d8d05edc42baeb6211090db688e5f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c144b9cdaaef19f361beacc2ceed72278d8d05edc42baeb6211090db688e5f6d->enter($__internal_c144b9cdaaef19f361beacc2ceed72278d8d05edc42baeb6211090db688e5f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a9bb13ffd18d4a450719f62fdcc1ac70d64dca030059901b366ebf0652ab93de->leave($__internal_a9bb13ffd18d4a450719f62fdcc1ac70d64dca030059901b366ebf0652ab93de_prof);

        
        $__internal_c144b9cdaaef19f361beacc2ceed72278d8d05edc42baeb6211090db688e5f6d->leave($__internal_c144b9cdaaef19f361beacc2ceed72278d8d05edc42baeb6211090db688e5f6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
