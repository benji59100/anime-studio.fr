<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6a5bd90f97b8973e8e3d9537a1d0fc648c5ac9ce3ccd680a7d8ab8a6f76584e0 extends Twig_Template
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
        $__internal_8aa292d3814f6f78d559a7ad2b1e4d3ffcda5bf6dd8d23df8c01aafb8b529c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa292d3814f6f78d559a7ad2b1e4d3ffcda5bf6dd8d23df8c01aafb8b529c3f->enter($__internal_8aa292d3814f6f78d559a7ad2b1e4d3ffcda5bf6dd8d23df8c01aafb8b529c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_98b04acf55fcb37a0b14d1a59513f795a0f33bf477a18b44bd657b9a8d3b3aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b04acf55fcb37a0b14d1a59513f795a0f33bf477a18b44bd657b9a8d3b3aac->enter($__internal_98b04acf55fcb37a0b14d1a59513f795a0f33bf477a18b44bd657b9a8d3b3aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8aa292d3814f6f78d559a7ad2b1e4d3ffcda5bf6dd8d23df8c01aafb8b529c3f->leave($__internal_8aa292d3814f6f78d559a7ad2b1e4d3ffcda5bf6dd8d23df8c01aafb8b529c3f_prof);

        
        $__internal_98b04acf55fcb37a0b14d1a59513f795a0f33bf477a18b44bd657b9a8d3b3aac->leave($__internal_98b04acf55fcb37a0b14d1a59513f795a0f33bf477a18b44bd657b9a8d3b3aac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
