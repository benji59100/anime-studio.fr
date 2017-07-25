<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0a86901260349d15ac9bca6f04a702e402f39f3a910c233b1683cc1bee2a9a45 extends Twig_Template
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
        $__internal_aa1dcd3850f8f28ed7787b24a0ec97e9142f4f1f560dacda21dfa68ee5ea4a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1dcd3850f8f28ed7787b24a0ec97e9142f4f1f560dacda21dfa68ee5ea4a52->enter($__internal_aa1dcd3850f8f28ed7787b24a0ec97e9142f4f1f560dacda21dfa68ee5ea4a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c11d7f6c3ce10e8537466fcd6e05fbac903e547f6ce0c31680b73b5f888f5b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11d7f6c3ce10e8537466fcd6e05fbac903e547f6ce0c31680b73b5f888f5b73->enter($__internal_c11d7f6c3ce10e8537466fcd6e05fbac903e547f6ce0c31680b73b5f888f5b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_aa1dcd3850f8f28ed7787b24a0ec97e9142f4f1f560dacda21dfa68ee5ea4a52->leave($__internal_aa1dcd3850f8f28ed7787b24a0ec97e9142f4f1f560dacda21dfa68ee5ea4a52_prof);

        
        $__internal_c11d7f6c3ce10e8537466fcd6e05fbac903e547f6ce0c31680b73b5f888f5b73->leave($__internal_c11d7f6c3ce10e8537466fcd6e05fbac903e547f6ce0c31680b73b5f888f5b73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
