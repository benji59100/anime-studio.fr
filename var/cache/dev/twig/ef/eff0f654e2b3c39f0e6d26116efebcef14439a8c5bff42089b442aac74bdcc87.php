<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1909991cc6175dd78f808974ce6179c7e1a8f466ba6723fd6a89c59c43623125 extends Twig_Template
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
        $__internal_71c416dbd286b3ecad1fea46d75d1ee2db6646c230f300b002d26e8a45a72d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c416dbd286b3ecad1fea46d75d1ee2db6646c230f300b002d26e8a45a72d12->enter($__internal_71c416dbd286b3ecad1fea46d75d1ee2db6646c230f300b002d26e8a45a72d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a2055d5bb8f94fcebc5130705cc05192d40d355527a30ba42febaf2b040bcc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2055d5bb8f94fcebc5130705cc05192d40d355527a30ba42febaf2b040bcc58->enter($__internal_a2055d5bb8f94fcebc5130705cc05192d40d355527a30ba42febaf2b040bcc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_71c416dbd286b3ecad1fea46d75d1ee2db6646c230f300b002d26e8a45a72d12->leave($__internal_71c416dbd286b3ecad1fea46d75d1ee2db6646c230f300b002d26e8a45a72d12_prof);

        
        $__internal_a2055d5bb8f94fcebc5130705cc05192d40d355527a30ba42febaf2b040bcc58->leave($__internal_a2055d5bb8f94fcebc5130705cc05192d40d355527a30ba42febaf2b040bcc58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
