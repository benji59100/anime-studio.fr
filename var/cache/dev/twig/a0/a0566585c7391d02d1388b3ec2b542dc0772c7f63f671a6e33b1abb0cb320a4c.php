<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7952e0aab0bc5ec7c7132c833cc9d0a3cad4e03db1e2c08a9346f473da08316f extends Twig_Template
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
        $__internal_fc34a4036bf892a3cba5c64f28faa877d5fe04977c8dab74e8b99233b58ae5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc34a4036bf892a3cba5c64f28faa877d5fe04977c8dab74e8b99233b58ae5ab->enter($__internal_fc34a4036bf892a3cba5c64f28faa877d5fe04977c8dab74e8b99233b58ae5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_2e3cc0027aa992d3f510a5332efaefa2c905078a99e4309ddb6f06bbd3c940e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3cc0027aa992d3f510a5332efaefa2c905078a99e4309ddb6f06bbd3c940e0->enter($__internal_2e3cc0027aa992d3f510a5332efaefa2c905078a99e4309ddb6f06bbd3c940e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fc34a4036bf892a3cba5c64f28faa877d5fe04977c8dab74e8b99233b58ae5ab->leave($__internal_fc34a4036bf892a3cba5c64f28faa877d5fe04977c8dab74e8b99233b58ae5ab_prof);

        
        $__internal_2e3cc0027aa992d3f510a5332efaefa2c905078a99e4309ddb6f06bbd3c940e0->leave($__internal_2e3cc0027aa992d3f510a5332efaefa2c905078a99e4309ddb6f06bbd3c940e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
