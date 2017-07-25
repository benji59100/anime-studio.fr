<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_7429a3456dacf0ca64622cf6e0997910d5f7c713c943382d8c1671c7fd9ce711 extends Twig_Template
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
        $__internal_82582bb1fbfa19c89760140af97a6b841d1d9719a8a24509a1eb3ee32a3b51a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82582bb1fbfa19c89760140af97a6b841d1d9719a8a24509a1eb3ee32a3b51a2->enter($__internal_82582bb1fbfa19c89760140af97a6b841d1d9719a8a24509a1eb3ee32a3b51a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_438c9d7cfaf49e9f10936a0c30b5c149fa89496caf52c0e1192e5259d9af920e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438c9d7cfaf49e9f10936a0c30b5c149fa89496caf52c0e1192e5259d9af920e->enter($__internal_438c9d7cfaf49e9f10936a0c30b5c149fa89496caf52c0e1192e5259d9af920e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_82582bb1fbfa19c89760140af97a6b841d1d9719a8a24509a1eb3ee32a3b51a2->leave($__internal_82582bb1fbfa19c89760140af97a6b841d1d9719a8a24509a1eb3ee32a3b51a2_prof);

        
        $__internal_438c9d7cfaf49e9f10936a0c30b5c149fa89496caf52c0e1192e5259d9af920e->leave($__internal_438c9d7cfaf49e9f10936a0c30b5c149fa89496caf52c0e1192e5259d9af920e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
