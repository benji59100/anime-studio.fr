<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d872a3466c96359f7cd0df564b780be741be7df4252b62eb827fd25e7443c994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_323bec44767e30ecc3c9b747ee3c8444be9c24e1c549032924e3a29cf713a02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323bec44767e30ecc3c9b747ee3c8444be9c24e1c549032924e3a29cf713a02c->enter($__internal_323bec44767e30ecc3c9b747ee3c8444be9c24e1c549032924e3a29cf713a02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_07c070fa887d2bd9b0ef3aca4626983131b4da80a8aa6a72dadc51f014428ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c070fa887d2bd9b0ef3aca4626983131b4da80a8aa6a72dadc51f014428ac0->enter($__internal_07c070fa887d2bd9b0ef3aca4626983131b4da80a8aa6a72dadc51f014428ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323bec44767e30ecc3c9b747ee3c8444be9c24e1c549032924e3a29cf713a02c->leave($__internal_323bec44767e30ecc3c9b747ee3c8444be9c24e1c549032924e3a29cf713a02c_prof);

        
        $__internal_07c070fa887d2bd9b0ef3aca4626983131b4da80a8aa6a72dadc51f014428ac0->leave($__internal_07c070fa887d2bd9b0ef3aca4626983131b4da80a8aa6a72dadc51f014428ac0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eccc30d889847a57a0e434929282db1b5fa47c7804943443ee468aa2f8fa24f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccc30d889847a57a0e434929282db1b5fa47c7804943443ee468aa2f8fa24f8->enter($__internal_eccc30d889847a57a0e434929282db1b5fa47c7804943443ee468aa2f8fa24f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_618f2c96a58d265e7861aabc1362040809ca901e2b8c336ab3cfb958711bd748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618f2c96a58d265e7861aabc1362040809ca901e2b8c336ab3cfb958711bd748->enter($__internal_618f2c96a58d265e7861aabc1362040809ca901e2b8c336ab3cfb958711bd748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_618f2c96a58d265e7861aabc1362040809ca901e2b8c336ab3cfb958711bd748->leave($__internal_618f2c96a58d265e7861aabc1362040809ca901e2b8c336ab3cfb958711bd748_prof);

        
        $__internal_eccc30d889847a57a0e434929282db1b5fa47c7804943443ee468aa2f8fa24f8->leave($__internal_eccc30d889847a57a0e434929282db1b5fa47c7804943443ee468aa2f8fa24f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea027a6160c5c13bece2b4db0e9d7819085e11cf08fbd625c69bad581a1f0a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea027a6160c5c13bece2b4db0e9d7819085e11cf08fbd625c69bad581a1f0a8c->enter($__internal_ea027a6160c5c13bece2b4db0e9d7819085e11cf08fbd625c69bad581a1f0a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a26df4798e152b28bb5447be6e8ff5f2e848b7ba65e4931998456c0ebcfd11f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26df4798e152b28bb5447be6e8ff5f2e848b7ba65e4931998456c0ebcfd11f6->enter($__internal_a26df4798e152b28bb5447be6e8ff5f2e848b7ba65e4931998456c0ebcfd11f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a26df4798e152b28bb5447be6e8ff5f2e848b7ba65e4931998456c0ebcfd11f6->leave($__internal_a26df4798e152b28bb5447be6e8ff5f2e848b7ba65e4931998456c0ebcfd11f6_prof);

        
        $__internal_ea027a6160c5c13bece2b4db0e9d7819085e11cf08fbd625c69bad581a1f0a8c->leave($__internal_ea027a6160c5c13bece2b4db0e9d7819085e11cf08fbd625c69bad581a1f0a8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b03fba724b844e1e4c600e0b8b5be81901d337c78d37a292016ab8151b8a4656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03fba724b844e1e4c600e0b8b5be81901d337c78d37a292016ab8151b8a4656->enter($__internal_b03fba724b844e1e4c600e0b8b5be81901d337c78d37a292016ab8151b8a4656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_17b64f32094c07fbe08e2ae5b858bf3747bd76784e5bc0c1163a6b6d04bdb723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b64f32094c07fbe08e2ae5b858bf3747bd76784e5bc0c1163a6b6d04bdb723->enter($__internal_17b64f32094c07fbe08e2ae5b858bf3747bd76784e5bc0c1163a6b6d04bdb723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_17b64f32094c07fbe08e2ae5b858bf3747bd76784e5bc0c1163a6b6d04bdb723->leave($__internal_17b64f32094c07fbe08e2ae5b858bf3747bd76784e5bc0c1163a6b6d04bdb723_prof);

        
        $__internal_b03fba724b844e1e4c600e0b8b5be81901d337c78d37a292016ab8151b8a4656->leave($__internal_b03fba724b844e1e4c600e0b8b5be81901d337c78d37a292016ab8151b8a4656_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
