<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_dfa72b7bde2e76250e046abf60519f69bdaf57516401eaebd66acb38e9f79acc extends Twig_Template
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
        $__internal_ebd6069a0ad696db04278300ec4ac0b44f7a40e6be575c28d98fd7391d3f02dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd6069a0ad696db04278300ec4ac0b44f7a40e6be575c28d98fd7391d3f02dd->enter($__internal_ebd6069a0ad696db04278300ec4ac0b44f7a40e6be575c28d98fd7391d3f02dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4500f9dec29178664e5b2ab02877ea2b8546c5b6981fe07999df85d1e8dfe62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4500f9dec29178664e5b2ab02877ea2b8546c5b6981fe07999df85d1e8dfe62a->enter($__internal_4500f9dec29178664e5b2ab02877ea2b8546c5b6981fe07999df85d1e8dfe62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ebd6069a0ad696db04278300ec4ac0b44f7a40e6be575c28d98fd7391d3f02dd->leave($__internal_ebd6069a0ad696db04278300ec4ac0b44f7a40e6be575c28d98fd7391d3f02dd_prof);

        
        $__internal_4500f9dec29178664e5b2ab02877ea2b8546c5b6981fe07999df85d1e8dfe62a->leave($__internal_4500f9dec29178664e5b2ab02877ea2b8546c5b6981fe07999df85d1e8dfe62a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
