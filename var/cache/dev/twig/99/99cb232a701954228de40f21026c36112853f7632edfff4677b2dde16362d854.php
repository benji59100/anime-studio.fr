<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a535790968d0b29dfdd67fcb4346eddbae89746b2d86fea3d149077e95a52062 extends Twig_Template
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
        $__internal_09614a43c4ba8d252fed5215a9ab7cb4baef5e37260c4f2b5f003857fdec32bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09614a43c4ba8d252fed5215a9ab7cb4baef5e37260c4f2b5f003857fdec32bb->enter($__internal_09614a43c4ba8d252fed5215a9ab7cb4baef5e37260c4f2b5f003857fdec32bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a4624cf0bd4165630f80b11b651c86abbaff26288e1e45593985a66e4c19dd37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4624cf0bd4165630f80b11b651c86abbaff26288e1e45593985a66e4c19dd37->enter($__internal_a4624cf0bd4165630f80b11b651c86abbaff26288e1e45593985a66e4c19dd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_09614a43c4ba8d252fed5215a9ab7cb4baef5e37260c4f2b5f003857fdec32bb->leave($__internal_09614a43c4ba8d252fed5215a9ab7cb4baef5e37260c4f2b5f003857fdec32bb_prof);

        
        $__internal_a4624cf0bd4165630f80b11b651c86abbaff26288e1e45593985a66e4c19dd37->leave($__internal_a4624cf0bd4165630f80b11b651c86abbaff26288e1e45593985a66e4c19dd37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
