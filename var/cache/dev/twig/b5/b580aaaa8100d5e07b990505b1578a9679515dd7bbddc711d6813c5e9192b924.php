<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_8da5023e39adfa0e3b5b502acc1b55acab63757d9cd51cc348092e5f4e65e493 extends Twig_Template
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
        $__internal_0a5645591f7b8ab61c6b37f1aa0511cbbe937c6f001a2637949b0ea61dd9149a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5645591f7b8ab61c6b37f1aa0511cbbe937c6f001a2637949b0ea61dd9149a->enter($__internal_0a5645591f7b8ab61c6b37f1aa0511cbbe937c6f001a2637949b0ea61dd9149a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_33f31962654f5c70aa30aeada32957bd3de21f7715aff20b748dbc107e041b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f31962654f5c70aa30aeada32957bd3de21f7715aff20b748dbc107e041b52->enter($__internal_33f31962654f5c70aa30aeada32957bd3de21f7715aff20b748dbc107e041b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0a5645591f7b8ab61c6b37f1aa0511cbbe937c6f001a2637949b0ea61dd9149a->leave($__internal_0a5645591f7b8ab61c6b37f1aa0511cbbe937c6f001a2637949b0ea61dd9149a_prof);

        
        $__internal_33f31962654f5c70aa30aeada32957bd3de21f7715aff20b748dbc107e041b52->leave($__internal_33f31962654f5c70aa30aeada32957bd3de21f7715aff20b748dbc107e041b52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
