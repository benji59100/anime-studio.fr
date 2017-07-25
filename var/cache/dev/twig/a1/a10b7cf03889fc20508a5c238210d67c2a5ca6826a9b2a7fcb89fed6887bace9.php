<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d30825193bce27ad74df218e0c90933ca6a7f90524914d7468bddf632c33a4af extends Twig_Template
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
        $__internal_86613c169cc0f5d283e25e615b5270449101545701d16aa9d27d7d23cc17e882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86613c169cc0f5d283e25e615b5270449101545701d16aa9d27d7d23cc17e882->enter($__internal_86613c169cc0f5d283e25e615b5270449101545701d16aa9d27d7d23cc17e882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5ac31c0ef400be2c8cb9da730d2d13b1764c960e827af8ae7d5baa898fbd0c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac31c0ef400be2c8cb9da730d2d13b1764c960e827af8ae7d5baa898fbd0c89->enter($__internal_5ac31c0ef400be2c8cb9da730d2d13b1764c960e827af8ae7d5baa898fbd0c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_86613c169cc0f5d283e25e615b5270449101545701d16aa9d27d7d23cc17e882->leave($__internal_86613c169cc0f5d283e25e615b5270449101545701d16aa9d27d7d23cc17e882_prof);

        
        $__internal_5ac31c0ef400be2c8cb9da730d2d13b1764c960e827af8ae7d5baa898fbd0c89->leave($__internal_5ac31c0ef400be2c8cb9da730d2d13b1764c960e827af8ae7d5baa898fbd0c89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
