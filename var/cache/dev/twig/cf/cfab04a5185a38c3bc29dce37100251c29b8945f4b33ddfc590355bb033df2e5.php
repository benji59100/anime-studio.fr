<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8831f6a729991bfa6d38670a97b05e0c46508a758109268806c225bcf1410c5b extends Twig_Template
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
        $__internal_300300d6edaf6e1f73b39bad597fee19417cb2b6e58431f2c40b7eba4c688f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300300d6edaf6e1f73b39bad597fee19417cb2b6e58431f2c40b7eba4c688f79->enter($__internal_300300d6edaf6e1f73b39bad597fee19417cb2b6e58431f2c40b7eba4c688f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ce771735b4659d02916e5491ca313e2976fea5de76cd0a0c77b506423b4861b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce771735b4659d02916e5491ca313e2976fea5de76cd0a0c77b506423b4861b0->enter($__internal_ce771735b4659d02916e5491ca313e2976fea5de76cd0a0c77b506423b4861b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_300300d6edaf6e1f73b39bad597fee19417cb2b6e58431f2c40b7eba4c688f79->leave($__internal_300300d6edaf6e1f73b39bad597fee19417cb2b6e58431f2c40b7eba4c688f79_prof);

        
        $__internal_ce771735b4659d02916e5491ca313e2976fea5de76cd0a0c77b506423b4861b0->leave($__internal_ce771735b4659d02916e5491ca313e2976fea5de76cd0a0c77b506423b4861b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
