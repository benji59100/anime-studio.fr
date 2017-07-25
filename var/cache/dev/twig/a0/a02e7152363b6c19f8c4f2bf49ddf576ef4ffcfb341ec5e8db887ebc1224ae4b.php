<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1227d5a22b6470c7d0ffa9ecba6333a9d5c8138e0c7985927d30c837e8be3799 extends Twig_Template
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
        $__internal_d480df24217e9bc94970467f8da22c29f0e9624a625c6c713188a2d3b37f77d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d480df24217e9bc94970467f8da22c29f0e9624a625c6c713188a2d3b37f77d1->enter($__internal_d480df24217e9bc94970467f8da22c29f0e9624a625c6c713188a2d3b37f77d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c64beafd692ec36477b3d954a94e2a4dcd8a2cd052e5608331dace88b9e28483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64beafd692ec36477b3d954a94e2a4dcd8a2cd052e5608331dace88b9e28483->enter($__internal_c64beafd692ec36477b3d954a94e2a4dcd8a2cd052e5608331dace88b9e28483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d480df24217e9bc94970467f8da22c29f0e9624a625c6c713188a2d3b37f77d1->leave($__internal_d480df24217e9bc94970467f8da22c29f0e9624a625c6c713188a2d3b37f77d1_prof);

        
        $__internal_c64beafd692ec36477b3d954a94e2a4dcd8a2cd052e5608331dace88b9e28483->leave($__internal_c64beafd692ec36477b3d954a94e2a4dcd8a2cd052e5608331dace88b9e28483_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
