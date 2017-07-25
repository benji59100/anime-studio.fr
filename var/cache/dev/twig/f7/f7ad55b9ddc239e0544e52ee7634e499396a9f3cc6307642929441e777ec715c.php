<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0bdaac055aa062a6d024cada5f14b964e1bae5c435466bf9348ece58f8d3cc8c extends Twig_Template
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
        $__internal_1959f3db7fdbbeea7401daf2d1cc2e439daa3d371457e686cf4f7f7ca834925a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1959f3db7fdbbeea7401daf2d1cc2e439daa3d371457e686cf4f7f7ca834925a->enter($__internal_1959f3db7fdbbeea7401daf2d1cc2e439daa3d371457e686cf4f7f7ca834925a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f011c12683d1831bddd7760731cebe8f98406208b0d9a0a5a11af456b25dbf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f011c12683d1831bddd7760731cebe8f98406208b0d9a0a5a11af456b25dbf48->enter($__internal_f011c12683d1831bddd7760731cebe8f98406208b0d9a0a5a11af456b25dbf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1959f3db7fdbbeea7401daf2d1cc2e439daa3d371457e686cf4f7f7ca834925a->leave($__internal_1959f3db7fdbbeea7401daf2d1cc2e439daa3d371457e686cf4f7f7ca834925a_prof);

        
        $__internal_f011c12683d1831bddd7760731cebe8f98406208b0d9a0a5a11af456b25dbf48->leave($__internal_f011c12683d1831bddd7760731cebe8f98406208b0d9a0a5a11af456b25dbf48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
