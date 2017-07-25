<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f11d9c5d1bd23f2c538f6e6a69314d53a670f5baa0830b52046b5a68d5298d4a extends Twig_Template
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
        $__internal_0aa5918930f1f3763117858dce9a480a2e5e402d4de34b58c1f0f59305ae49b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa5918930f1f3763117858dce9a480a2e5e402d4de34b58c1f0f59305ae49b4->enter($__internal_0aa5918930f1f3763117858dce9a480a2e5e402d4de34b58c1f0f59305ae49b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8070ee274dd09160387230d831305fe94e90f9f8e7c699d04f1e564506dbb25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8070ee274dd09160387230d831305fe94e90f9f8e7c699d04f1e564506dbb25b->enter($__internal_8070ee274dd09160387230d831305fe94e90f9f8e7c699d04f1e564506dbb25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0aa5918930f1f3763117858dce9a480a2e5e402d4de34b58c1f0f59305ae49b4->leave($__internal_0aa5918930f1f3763117858dce9a480a2e5e402d4de34b58c1f0f59305ae49b4_prof);

        
        $__internal_8070ee274dd09160387230d831305fe94e90f9f8e7c699d04f1e564506dbb25b->leave($__internal_8070ee274dd09160387230d831305fe94e90f9f8e7c699d04f1e564506dbb25b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
