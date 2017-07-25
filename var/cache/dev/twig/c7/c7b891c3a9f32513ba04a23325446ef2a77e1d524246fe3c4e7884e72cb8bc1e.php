<?php

/* ::base.html.twig */
class __TwigTemplate_3cdb94ee539c31b21fc13a9fb01d2cd8ded247012277f2c1c5e848b5f72cb4cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce4c24092d6f9b379b561148b2228ecfac5711f3f762cd0909211301f3ea274f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4c24092d6f9b379b561148b2228ecfac5711f3f762cd0909211301f3ea274f->enter($__internal_ce4c24092d6f9b379b561148b2228ecfac5711f3f762cd0909211301f3ea274f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f6e2827b55986eb005ad49ef49112c92d1158a7917062ae26b62dfcfd1248d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e2827b55986eb005ad49ef49112c92d1158a7917062ae26b62dfcfd1248d5b->enter($__internal_f6e2827b55986eb005ad49ef49112c92d1158a7917062ae26b62dfcfd1248d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ce4c24092d6f9b379b561148b2228ecfac5711f3f762cd0909211301f3ea274f->leave($__internal_ce4c24092d6f9b379b561148b2228ecfac5711f3f762cd0909211301f3ea274f_prof);

        
        $__internal_f6e2827b55986eb005ad49ef49112c92d1158a7917062ae26b62dfcfd1248d5b->leave($__internal_f6e2827b55986eb005ad49ef49112c92d1158a7917062ae26b62dfcfd1248d5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e40257119c3673b12919d65907acbb313841ff19ae305dd76290f2529c50de92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40257119c3673b12919d65907acbb313841ff19ae305dd76290f2529c50de92->enter($__internal_e40257119c3673b12919d65907acbb313841ff19ae305dd76290f2529c50de92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_168624d016f5e734d145b4dafc002f69b244e97e2982e238cde26daae0413fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168624d016f5e734d145b4dafc002f69b244e97e2982e238cde26daae0413fa0->enter($__internal_168624d016f5e734d145b4dafc002f69b244e97e2982e238cde26daae0413fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_168624d016f5e734d145b4dafc002f69b244e97e2982e238cde26daae0413fa0->leave($__internal_168624d016f5e734d145b4dafc002f69b244e97e2982e238cde26daae0413fa0_prof);

        
        $__internal_e40257119c3673b12919d65907acbb313841ff19ae305dd76290f2529c50de92->leave($__internal_e40257119c3673b12919d65907acbb313841ff19ae305dd76290f2529c50de92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76254f3205e1388aaf9aa2faa1b796847e1e1530e8ac14687fcfee2d64a6630f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76254f3205e1388aaf9aa2faa1b796847e1e1530e8ac14687fcfee2d64a6630f->enter($__internal_76254f3205e1388aaf9aa2faa1b796847e1e1530e8ac14687fcfee2d64a6630f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6e14eca783a2567c57729d876781972a406d63c1f1611d1e4fd06118b5f8bed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e14eca783a2567c57729d876781972a406d63c1f1611d1e4fd06118b5f8bed7->enter($__internal_6e14eca783a2567c57729d876781972a406d63c1f1611d1e4fd06118b5f8bed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6e14eca783a2567c57729d876781972a406d63c1f1611d1e4fd06118b5f8bed7->leave($__internal_6e14eca783a2567c57729d876781972a406d63c1f1611d1e4fd06118b5f8bed7_prof);

        
        $__internal_76254f3205e1388aaf9aa2faa1b796847e1e1530e8ac14687fcfee2d64a6630f->leave($__internal_76254f3205e1388aaf9aa2faa1b796847e1e1530e8ac14687fcfee2d64a6630f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a89e6a9095e63574195d2118d9fbf64955bec7f836178b461adecae61261e31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89e6a9095e63574195d2118d9fbf64955bec7f836178b461adecae61261e31c->enter($__internal_a89e6a9095e63574195d2118d9fbf64955bec7f836178b461adecae61261e31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_299860a0670a17f3a78fb5c40c03a4337ba74e09d9531b342cfc291e6c4e2e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299860a0670a17f3a78fb5c40c03a4337ba74e09d9531b342cfc291e6c4e2e87->enter($__internal_299860a0670a17f3a78fb5c40c03a4337ba74e09d9531b342cfc291e6c4e2e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_299860a0670a17f3a78fb5c40c03a4337ba74e09d9531b342cfc291e6c4e2e87->leave($__internal_299860a0670a17f3a78fb5c40c03a4337ba74e09d9531b342cfc291e6c4e2e87_prof);

        
        $__internal_a89e6a9095e63574195d2118d9fbf64955bec7f836178b461adecae61261e31c->leave($__internal_a89e6a9095e63574195d2118d9fbf64955bec7f836178b461adecae61261e31c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24b559138ab56cce99a12c63efd641babfa10442f033bc329c8f6838dd7e385a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b559138ab56cce99a12c63efd641babfa10442f033bc329c8f6838dd7e385a->enter($__internal_24b559138ab56cce99a12c63efd641babfa10442f033bc329c8f6838dd7e385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4757c25e9db3da27f409077d54a00cc0aca566f2ce47d1bf18bf010420e61e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4757c25e9db3da27f409077d54a00cc0aca566f2ce47d1bf18bf010420e61e97->enter($__internal_4757c25e9db3da27f409077d54a00cc0aca566f2ce47d1bf18bf010420e61e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4757c25e9db3da27f409077d54a00cc0aca566f2ce47d1bf18bf010420e61e97->leave($__internal_4757c25e9db3da27f409077d54a00cc0aca566f2ce47d1bf18bf010420e61e97_prof);

        
        $__internal_24b559138ab56cce99a12c63efd641babfa10442f033bc329c8f6838dd7e385a->leave($__internal_24b559138ab56cce99a12c63efd641babfa10442f033bc329c8f6838dd7e385a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\app/Resources\\views/base.html.twig");
    }
}
