<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_426124b5e4a0e79c4b9cb3aa797d3f817af3b9b3b8c1af8165562695b7d92d9a extends Twig_Template
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
        $__internal_07cc22e86753ef2c87ac3ce0961dcdc7814dcd1753fb64f21f6b8e3deeb24e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cc22e86753ef2c87ac3ce0961dcdc7814dcd1753fb64f21f6b8e3deeb24e5e->enter($__internal_07cc22e86753ef2c87ac3ce0961dcdc7814dcd1753fb64f21f6b8e3deeb24e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7432eaaf4d56168fae7eb39ee093bd6fe4d209e67f6a0cf4b3f1d5c6f45300c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7432eaaf4d56168fae7eb39ee093bd6fe4d209e67f6a0cf4b3f1d5c6f45300c7->enter($__internal_7432eaaf4d56168fae7eb39ee093bd6fe4d209e67f6a0cf4b3f1d5c6f45300c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07cc22e86753ef2c87ac3ce0961dcdc7814dcd1753fb64f21f6b8e3deeb24e5e->leave($__internal_07cc22e86753ef2c87ac3ce0961dcdc7814dcd1753fb64f21f6b8e3deeb24e5e_prof);

        
        $__internal_7432eaaf4d56168fae7eb39ee093bd6fe4d209e67f6a0cf4b3f1d5c6f45300c7->leave($__internal_7432eaaf4d56168fae7eb39ee093bd6fe4d209e67f6a0cf4b3f1d5c6f45300c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77cb06b8081743922fe293c9e58507d70c7ab90b12d5af79b0a638a4b95ea72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77cb06b8081743922fe293c9e58507d70c7ab90b12d5af79b0a638a4b95ea72c->enter($__internal_77cb06b8081743922fe293c9e58507d70c7ab90b12d5af79b0a638a4b95ea72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8918f6819642c32dd2a7e6c4bad7bd2b92707538966c0ab67b9d50717cfecfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8918f6819642c32dd2a7e6c4bad7bd2b92707538966c0ab67b9d50717cfecfc8->enter($__internal_8918f6819642c32dd2a7e6c4bad7bd2b92707538966c0ab67b9d50717cfecfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8918f6819642c32dd2a7e6c4bad7bd2b92707538966c0ab67b9d50717cfecfc8->leave($__internal_8918f6819642c32dd2a7e6c4bad7bd2b92707538966c0ab67b9d50717cfecfc8_prof);

        
        $__internal_77cb06b8081743922fe293c9e58507d70c7ab90b12d5af79b0a638a4b95ea72c->leave($__internal_77cb06b8081743922fe293c9e58507d70c7ab90b12d5af79b0a638a4b95ea72c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b956ab21712c8ac99120b4bb25d81f98c1547bb4d62de314538f6f22ecd351a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b956ab21712c8ac99120b4bb25d81f98c1547bb4d62de314538f6f22ecd351a8->enter($__internal_b956ab21712c8ac99120b4bb25d81f98c1547bb4d62de314538f6f22ecd351a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1bb0269aae9ee37930075e51f259e17b4e8cb132ecb66b7d7ce05bf5eb44b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bb0269aae9ee37930075e51f259e17b4e8cb132ecb66b7d7ce05bf5eb44b24->enter($__internal_a1bb0269aae9ee37930075e51f259e17b4e8cb132ecb66b7d7ce05bf5eb44b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1bb0269aae9ee37930075e51f259e17b4e8cb132ecb66b7d7ce05bf5eb44b24->leave($__internal_a1bb0269aae9ee37930075e51f259e17b4e8cb132ecb66b7d7ce05bf5eb44b24_prof);

        
        $__internal_b956ab21712c8ac99120b4bb25d81f98c1547bb4d62de314538f6f22ecd351a8->leave($__internal_b956ab21712c8ac99120b4bb25d81f98c1547bb4d62de314538f6f22ecd351a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c9b8b11bddec21960f615a1a3f40dfff76ca2b9433b13d9fbe5ec49dd9e1159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9b8b11bddec21960f615a1a3f40dfff76ca2b9433b13d9fbe5ec49dd9e1159->enter($__internal_8c9b8b11bddec21960f615a1a3f40dfff76ca2b9433b13d9fbe5ec49dd9e1159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7023f17e0aeca7afe714e66ad1256cc173f58968300acfc83956d899c88619a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7023f17e0aeca7afe714e66ad1256cc173f58968300acfc83956d899c88619a5->enter($__internal_7023f17e0aeca7afe714e66ad1256cc173f58968300acfc83956d899c88619a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7023f17e0aeca7afe714e66ad1256cc173f58968300acfc83956d899c88619a5->leave($__internal_7023f17e0aeca7afe714e66ad1256cc173f58968300acfc83956d899c88619a5_prof);

        
        $__internal_8c9b8b11bddec21960f615a1a3f40dfff76ca2b9433b13d9fbe5ec49dd9e1159->leave($__internal_8c9b8b11bddec21960f615a1a3f40dfff76ca2b9433b13d9fbe5ec49dd9e1159_prof);

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
