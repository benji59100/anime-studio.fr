<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_89bf52c5232546e9fb636b7f4425749e71c190cd474be67798f251fa4293e270 extends Twig_Template
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
        $__internal_b36332063c8e7d512535745c0f13f76e050f7708a9130089b3d31009a94fa44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36332063c8e7d512535745c0f13f76e050f7708a9130089b3d31009a94fa44c->enter($__internal_b36332063c8e7d512535745c0f13f76e050f7708a9130089b3d31009a94fa44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_1b9cf40cf5b09d34adfa8499479e348d296eadba272448b72ff52d8272d348b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9cf40cf5b09d34adfa8499479e348d296eadba272448b72ff52d8272d348b5->enter($__internal_1b9cf40cf5b09d34adfa8499479e348d296eadba272448b72ff52d8272d348b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b36332063c8e7d512535745c0f13f76e050f7708a9130089b3d31009a94fa44c->leave($__internal_b36332063c8e7d512535745c0f13f76e050f7708a9130089b3d31009a94fa44c_prof);

        
        $__internal_1b9cf40cf5b09d34adfa8499479e348d296eadba272448b72ff52d8272d348b5->leave($__internal_1b9cf40cf5b09d34adfa8499479e348d296eadba272448b72ff52d8272d348b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
