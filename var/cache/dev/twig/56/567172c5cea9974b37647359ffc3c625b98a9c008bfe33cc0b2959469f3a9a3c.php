<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8cd9e3d4e5a7b8ce709b7fb1937ea6d423c35a2cdde698a87586833cbb9c4701 extends Twig_Template
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
        $__internal_e2e23e80866946e48999b2bcb21aacda6e6fa4f6152e62a63322a431fd982386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e23e80866946e48999b2bcb21aacda6e6fa4f6152e62a63322a431fd982386->enter($__internal_e2e23e80866946e48999b2bcb21aacda6e6fa4f6152e62a63322a431fd982386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_90595797f7df32c1325fda8390ac236ba6e7e6dcadc21fcb760c99126ee4b4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90595797f7df32c1325fda8390ac236ba6e7e6dcadc21fcb760c99126ee4b4d2->enter($__internal_90595797f7df32c1325fda8390ac236ba6e7e6dcadc21fcb760c99126ee4b4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e2e23e80866946e48999b2bcb21aacda6e6fa4f6152e62a63322a431fd982386->leave($__internal_e2e23e80866946e48999b2bcb21aacda6e6fa4f6152e62a63322a431fd982386_prof);

        
        $__internal_90595797f7df32c1325fda8390ac236ba6e7e6dcadc21fcb760c99126ee4b4d2->leave($__internal_90595797f7df32c1325fda8390ac236ba6e7e6dcadc21fcb760c99126ee4b4d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
