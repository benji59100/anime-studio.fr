<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_51064b81bd466f54b65dfcf775b0a9da3c5177cea88fe9191c350ddd3af592da extends Twig_Template
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
        $__internal_12e84e038ca4f874f33d636d80be6d3e97c987ad5fc2984386b13c3c50d5f691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e84e038ca4f874f33d636d80be6d3e97c987ad5fc2984386b13c3c50d5f691->enter($__internal_12e84e038ca4f874f33d636d80be6d3e97c987ad5fc2984386b13c3c50d5f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7148977b1e91d3893efdc841154bf1212235647136b6b69867cfe09b328539bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7148977b1e91d3893efdc841154bf1212235647136b6b69867cfe09b328539bb->enter($__internal_7148977b1e91d3893efdc841154bf1212235647136b6b69867cfe09b328539bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_12e84e038ca4f874f33d636d80be6d3e97c987ad5fc2984386b13c3c50d5f691->leave($__internal_12e84e038ca4f874f33d636d80be6d3e97c987ad5fc2984386b13c3c50d5f691_prof);

        
        $__internal_7148977b1e91d3893efdc841154bf1212235647136b6b69867cfe09b328539bb->leave($__internal_7148977b1e91d3893efdc841154bf1212235647136b6b69867cfe09b328539bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
