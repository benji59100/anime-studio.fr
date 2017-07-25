<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5c5fb318d4b8ac8dc61c46c82f1bfbe0c7bf44d40f1932410511b60e1f71d72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_294d3dd59aa1af1095957cf072b067664b1dd348644b4bfd83dfa85686ded313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294d3dd59aa1af1095957cf072b067664b1dd348644b4bfd83dfa85686ded313->enter($__internal_294d3dd59aa1af1095957cf072b067664b1dd348644b4bfd83dfa85686ded313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_067eef0b2c6892e76ce0fbff460fe6549695caae9916b3fc62510ae4fc4aec04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067eef0b2c6892e76ce0fbff460fe6549695caae9916b3fc62510ae4fc4aec04->enter($__internal_067eef0b2c6892e76ce0fbff460fe6549695caae9916b3fc62510ae4fc4aec04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_294d3dd59aa1af1095957cf072b067664b1dd348644b4bfd83dfa85686ded313->leave($__internal_294d3dd59aa1af1095957cf072b067664b1dd348644b4bfd83dfa85686ded313_prof);

        
        $__internal_067eef0b2c6892e76ce0fbff460fe6549695caae9916b3fc62510ae4fc4aec04->leave($__internal_067eef0b2c6892e76ce0fbff460fe6549695caae9916b3fc62510ae4fc4aec04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_448d64c38fd502577a1ab8fa1f27080608816b659c99c1eaffd6fa7c3a7c49c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448d64c38fd502577a1ab8fa1f27080608816b659c99c1eaffd6fa7c3a7c49c3->enter($__internal_448d64c38fd502577a1ab8fa1f27080608816b659c99c1eaffd6fa7c3a7c49c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_44824bcc165e26b79ab3e4eea4cd6c8f9ea7008f4facaca824d88d7b37266ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44824bcc165e26b79ab3e4eea4cd6c8f9ea7008f4facaca824d88d7b37266ab7->enter($__internal_44824bcc165e26b79ab3e4eea4cd6c8f9ea7008f4facaca824d88d7b37266ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44824bcc165e26b79ab3e4eea4cd6c8f9ea7008f4facaca824d88d7b37266ab7->leave($__internal_44824bcc165e26b79ab3e4eea4cd6c8f9ea7008f4facaca824d88d7b37266ab7_prof);

        
        $__internal_448d64c38fd502577a1ab8fa1f27080608816b659c99c1eaffd6fa7c3a7c49c3->leave($__internal_448d64c38fd502577a1ab8fa1f27080608816b659c99c1eaffd6fa7c3a7c49c3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06949c38a9ba004f8b3a3007be09923e797973ea2a8f9171a797e20618c3e439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06949c38a9ba004f8b3a3007be09923e797973ea2a8f9171a797e20618c3e439->enter($__internal_06949c38a9ba004f8b3a3007be09923e797973ea2a8f9171a797e20618c3e439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca51c87e79cd024d32de0d538cde6e946d34f6aa99199a5e925b779cdc7660cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca51c87e79cd024d32de0d538cde6e946d34f6aa99199a5e925b779cdc7660cb->enter($__internal_ca51c87e79cd024d32de0d538cde6e946d34f6aa99199a5e925b779cdc7660cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca51c87e79cd024d32de0d538cde6e946d34f6aa99199a5e925b779cdc7660cb->leave($__internal_ca51c87e79cd024d32de0d538cde6e946d34f6aa99199a5e925b779cdc7660cb_prof);

        
        $__internal_06949c38a9ba004f8b3a3007be09923e797973ea2a8f9171a797e20618c3e439->leave($__internal_06949c38a9ba004f8b3a3007be09923e797973ea2a8f9171a797e20618c3e439_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fed53908ca5e2f83b346693452ca63b0bccc99db7b8ee2329b045f3fa29f69d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed53908ca5e2f83b346693452ca63b0bccc99db7b8ee2329b045f3fa29f69d8->enter($__internal_fed53908ca5e2f83b346693452ca63b0bccc99db7b8ee2329b045f3fa29f69d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5dc9120a862da45f955032237498be1a8945029d6a55f12c3c2549c1347e30e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc9120a862da45f955032237498be1a8945029d6a55f12c3c2549c1347e30e3->enter($__internal_5dc9120a862da45f955032237498be1a8945029d6a55f12c3c2549c1347e30e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5dc9120a862da45f955032237498be1a8945029d6a55f12c3c2549c1347e30e3->leave($__internal_5dc9120a862da45f955032237498be1a8945029d6a55f12c3c2549c1347e30e3_prof);

        
        $__internal_fed53908ca5e2f83b346693452ca63b0bccc99db7b8ee2329b045f3fa29f69d8->leave($__internal_fed53908ca5e2f83b346693452ca63b0bccc99db7b8ee2329b045f3fa29f69d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
