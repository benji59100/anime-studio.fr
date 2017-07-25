<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_dfcb508bd73cfd4db52f04e90bafc30a6f3b1e58b11a2889eecfb29c9fa5d4ad extends Twig_Template
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
        $__internal_7f414af2be3a763788f799b5e83e17e28cdcb7942271e0fcafaf80090ffd3256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f414af2be3a763788f799b5e83e17e28cdcb7942271e0fcafaf80090ffd3256->enter($__internal_7f414af2be3a763788f799b5e83e17e28cdcb7942271e0fcafaf80090ffd3256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7fc3065297e9bd0714b3b72c37039d851ef689570f25344f05f8de845a13dc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc3065297e9bd0714b3b72c37039d851ef689570f25344f05f8de845a13dc7e->enter($__internal_7fc3065297e9bd0714b3b72c37039d851ef689570f25344f05f8de845a13dc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7f414af2be3a763788f799b5e83e17e28cdcb7942271e0fcafaf80090ffd3256->leave($__internal_7f414af2be3a763788f799b5e83e17e28cdcb7942271e0fcafaf80090ffd3256_prof);

        
        $__internal_7fc3065297e9bd0714b3b72c37039d851ef689570f25344f05f8de845a13dc7e->leave($__internal_7fc3065297e9bd0714b3b72c37039d851ef689570f25344f05f8de845a13dc7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
