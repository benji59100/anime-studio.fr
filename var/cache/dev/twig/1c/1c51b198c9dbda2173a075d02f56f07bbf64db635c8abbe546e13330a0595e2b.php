<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3727660924c56ff4deacefeb7d988561b9aba24cf1853155e09e5a475373899c extends Twig_Template
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
        $__internal_c6cd257a127d0cce57ced56af6afaebd2dc42449dbc50740b5f4f0827d719eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cd257a127d0cce57ced56af6afaebd2dc42449dbc50740b5f4f0827d719eca->enter($__internal_c6cd257a127d0cce57ced56af6afaebd2dc42449dbc50740b5f4f0827d719eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d70e0140d894ae2168470f0c7012b170ec2067c33f3534e0510938467b25d5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70e0140d894ae2168470f0c7012b170ec2067c33f3534e0510938467b25d5a5->enter($__internal_d70e0140d894ae2168470f0c7012b170ec2067c33f3534e0510938467b25d5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c6cd257a127d0cce57ced56af6afaebd2dc42449dbc50740b5f4f0827d719eca->leave($__internal_c6cd257a127d0cce57ced56af6afaebd2dc42449dbc50740b5f4f0827d719eca_prof);

        
        $__internal_d70e0140d894ae2168470f0c7012b170ec2067c33f3534e0510938467b25d5a5->leave($__internal_d70e0140d894ae2168470f0c7012b170ec2067c33f3534e0510938467b25d5a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
