<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_26686f16486566218acb1dc57ff78b201563d86a74487ac7533f49871ea8aaac extends Twig_Template
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
        $__internal_0ac21ea50a14a307d666bcbe1fcfe9362c4a467170e4db249e8f7e63047e80f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac21ea50a14a307d666bcbe1fcfe9362c4a467170e4db249e8f7e63047e80f0->enter($__internal_0ac21ea50a14a307d666bcbe1fcfe9362c4a467170e4db249e8f7e63047e80f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_353775e91e094372e577a615d00d73e21f6b90fd0f107e95ffc31116a99d09d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353775e91e094372e577a615d00d73e21f6b90fd0f107e95ffc31116a99d09d8->enter($__internal_353775e91e094372e577a615d00d73e21f6b90fd0f107e95ffc31116a99d09d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0ac21ea50a14a307d666bcbe1fcfe9362c4a467170e4db249e8f7e63047e80f0->leave($__internal_0ac21ea50a14a307d666bcbe1fcfe9362c4a467170e4db249e8f7e63047e80f0_prof);

        
        $__internal_353775e91e094372e577a615d00d73e21f6b90fd0f107e95ffc31116a99d09d8->leave($__internal_353775e91e094372e577a615d00d73e21f6b90fd0f107e95ffc31116a99d09d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
