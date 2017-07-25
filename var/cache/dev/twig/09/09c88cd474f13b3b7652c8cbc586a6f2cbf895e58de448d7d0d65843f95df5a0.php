<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_351bd613e49baf4618c2d44f1262c48f9aa3df174e89772431f9b1856fb36e87 extends Twig_Template
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
        $__internal_789a1b13e33553ced7f2cc3d4306d693287303170c11a8230f2522d5ac2fae55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789a1b13e33553ced7f2cc3d4306d693287303170c11a8230f2522d5ac2fae55->enter($__internal_789a1b13e33553ced7f2cc3d4306d693287303170c11a8230f2522d5ac2fae55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f77dd92397f0fdb07edb23cf50cd1156f7422fde49b321eea6e708a90072bf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77dd92397f0fdb07edb23cf50cd1156f7422fde49b321eea6e708a90072bf45->enter($__internal_f77dd92397f0fdb07edb23cf50cd1156f7422fde49b321eea6e708a90072bf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_789a1b13e33553ced7f2cc3d4306d693287303170c11a8230f2522d5ac2fae55->leave($__internal_789a1b13e33553ced7f2cc3d4306d693287303170c11a8230f2522d5ac2fae55_prof);

        
        $__internal_f77dd92397f0fdb07edb23cf50cd1156f7422fde49b321eea6e708a90072bf45->leave($__internal_f77dd92397f0fdb07edb23cf50cd1156f7422fde49b321eea6e708a90072bf45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
