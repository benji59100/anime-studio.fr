<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_4ed40f651e7d3c22b1d9481c60e392ec592a04d160c3f7b300ddb60f1eb604a2 extends Twig_Template
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
        $__internal_b1d7cccba9f015e804d77baf984850db4bff5d92bfc22aad877945c3eaafcc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d7cccba9f015e804d77baf984850db4bff5d92bfc22aad877945c3eaafcc85->enter($__internal_b1d7cccba9f015e804d77baf984850db4bff5d92bfc22aad877945c3eaafcc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d5235a9034cd5c83fe30936839c62570e01603e540948d126b3586fcdd577305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5235a9034cd5c83fe30936839c62570e01603e540948d126b3586fcdd577305->enter($__internal_d5235a9034cd5c83fe30936839c62570e01603e540948d126b3586fcdd577305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b1d7cccba9f015e804d77baf984850db4bff5d92bfc22aad877945c3eaafcc85->leave($__internal_b1d7cccba9f015e804d77baf984850db4bff5d92bfc22aad877945c3eaafcc85_prof);

        
        $__internal_d5235a9034cd5c83fe30936839c62570e01603e540948d126b3586fcdd577305->leave($__internal_d5235a9034cd5c83fe30936839c62570e01603e540948d126b3586fcdd577305_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
