<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_abbf9f627469da2511dd3cc00e9f9ae3f4914c66965ac8ab4a7cf3bd0d3080cf extends Twig_Template
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
        $__internal_ffb7dd65dc9df01d7a21a276454feea3c71b5238efa895ad57d39113c75ff34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb7dd65dc9df01d7a21a276454feea3c71b5238efa895ad57d39113c75ff34b->enter($__internal_ffb7dd65dc9df01d7a21a276454feea3c71b5238efa895ad57d39113c75ff34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_effaed374fb4f930768f005ca7ffcad216f89bbdf9685d0f7d9cebca4bddea7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effaed374fb4f930768f005ca7ffcad216f89bbdf9685d0f7d9cebca4bddea7d->enter($__internal_effaed374fb4f930768f005ca7ffcad216f89bbdf9685d0f7d9cebca4bddea7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ffb7dd65dc9df01d7a21a276454feea3c71b5238efa895ad57d39113c75ff34b->leave($__internal_ffb7dd65dc9df01d7a21a276454feea3c71b5238efa895ad57d39113c75ff34b_prof);

        
        $__internal_effaed374fb4f930768f005ca7ffcad216f89bbdf9685d0f7d9cebca4bddea7d->leave($__internal_effaed374fb4f930768f005ca7ffcad216f89bbdf9685d0f7d9cebca4bddea7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
