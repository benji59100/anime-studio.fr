<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_116f78f31b5f775eaf515eb6b2583d55f355e01818b7fb1f9086763e0853b058 extends Twig_Template
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
        $__internal_4c2a0fb4946b1102b4dbcae9e8afc9ee1f8eb01de7c7eeec05403a195f8f4b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2a0fb4946b1102b4dbcae9e8afc9ee1f8eb01de7c7eeec05403a195f8f4b18->enter($__internal_4c2a0fb4946b1102b4dbcae9e8afc9ee1f8eb01de7c7eeec05403a195f8f4b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ac3784c4308cfe1bc375d1bb97b6856f661b59d25e14d14c3ef80d9f03d9d325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3784c4308cfe1bc375d1bb97b6856f661b59d25e14d14c3ef80d9f03d9d325->enter($__internal_ac3784c4308cfe1bc375d1bb97b6856f661b59d25e14d14c3ef80d9f03d9d325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4c2a0fb4946b1102b4dbcae9e8afc9ee1f8eb01de7c7eeec05403a195f8f4b18->leave($__internal_4c2a0fb4946b1102b4dbcae9e8afc9ee1f8eb01de7c7eeec05403a195f8f4b18_prof);

        
        $__internal_ac3784c4308cfe1bc375d1bb97b6856f661b59d25e14d14c3ef80d9f03d9d325->leave($__internal_ac3784c4308cfe1bc375d1bb97b6856f661b59d25e14d14c3ef80d9f03d9d325_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
