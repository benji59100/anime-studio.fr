<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7243451bd8ca48ac3e0552cc93e11682645871740a6a841a1be96a58370863e4 extends Twig_Template
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
        $__internal_bf6d2456a31559dc6dd08de4b9730b4a200389ff05a1b10edac430d0846ddb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6d2456a31559dc6dd08de4b9730b4a200389ff05a1b10edac430d0846ddb26->enter($__internal_bf6d2456a31559dc6dd08de4b9730b4a200389ff05a1b10edac430d0846ddb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_51d1079f975d46f2a0fecc97b8127e25da74f87740ed20b2b0449497d0e9689d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d1079f975d46f2a0fecc97b8127e25da74f87740ed20b2b0449497d0e9689d->enter($__internal_51d1079f975d46f2a0fecc97b8127e25da74f87740ed20b2b0449497d0e9689d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bf6d2456a31559dc6dd08de4b9730b4a200389ff05a1b10edac430d0846ddb26->leave($__internal_bf6d2456a31559dc6dd08de4b9730b4a200389ff05a1b10edac430d0846ddb26_prof);

        
        $__internal_51d1079f975d46f2a0fecc97b8127e25da74f87740ed20b2b0449497d0e9689d->leave($__internal_51d1079f975d46f2a0fecc97b8127e25da74f87740ed20b2b0449497d0e9689d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
