<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_89a3ad6100756b0698afb5e59710c5006d922f96bb6b42084754dd2314f95d7e extends Twig_Template
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
        $__internal_4a0e1ebec30b8c957e67a009e1b1e9293441cbf8708f7dc61520058b8ca84311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0e1ebec30b8c957e67a009e1b1e9293441cbf8708f7dc61520058b8ca84311->enter($__internal_4a0e1ebec30b8c957e67a009e1b1e9293441cbf8708f7dc61520058b8ca84311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6ce325358db251e8c5525b411a7da15b81b807a083cb476e09944904931b6058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce325358db251e8c5525b411a7da15b81b807a083cb476e09944904931b6058->enter($__internal_6ce325358db251e8c5525b411a7da15b81b807a083cb476e09944904931b6058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4a0e1ebec30b8c957e67a009e1b1e9293441cbf8708f7dc61520058b8ca84311->leave($__internal_4a0e1ebec30b8c957e67a009e1b1e9293441cbf8708f7dc61520058b8ca84311_prof);

        
        $__internal_6ce325358db251e8c5525b411a7da15b81b807a083cb476e09944904931b6058->leave($__internal_6ce325358db251e8c5525b411a7da15b81b807a083cb476e09944904931b6058_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
