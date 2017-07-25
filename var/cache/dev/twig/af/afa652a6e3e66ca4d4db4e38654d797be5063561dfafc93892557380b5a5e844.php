<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_70c1364a8aec406652717b790ec40582dff20a96b686521ae5c354eacaacb5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e4f4273230124ba8d83d508a197778be6621ad992a63f31427cd81e4c69d26e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f4273230124ba8d83d508a197778be6621ad992a63f31427cd81e4c69d26e3->enter($__internal_e4f4273230124ba8d83d508a197778be6621ad992a63f31427cd81e4c69d26e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8fc93ba409d4233c21fdb769cff8e6dc62eb76607941098204bbf55c8dace06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc93ba409d4233c21fdb769cff8e6dc62eb76607941098204bbf55c8dace06d->enter($__internal_8fc93ba409d4233c21fdb769cff8e6dc62eb76607941098204bbf55c8dace06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f4273230124ba8d83d508a197778be6621ad992a63f31427cd81e4c69d26e3->leave($__internal_e4f4273230124ba8d83d508a197778be6621ad992a63f31427cd81e4c69d26e3_prof);

        
        $__internal_8fc93ba409d4233c21fdb769cff8e6dc62eb76607941098204bbf55c8dace06d->leave($__internal_8fc93ba409d4233c21fdb769cff8e6dc62eb76607941098204bbf55c8dace06d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d171699cbe2795c2e73f5766145105eca38d6ca520fc43f8a8ead298d2111d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d171699cbe2795c2e73f5766145105eca38d6ca520fc43f8a8ead298d2111d2b->enter($__internal_d171699cbe2795c2e73f5766145105eca38d6ca520fc43f8a8ead298d2111d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb33ba71451f3e08c2d58a31e32aef5fbdaeaf65e565a6bd3d6964931ddf036e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb33ba71451f3e08c2d58a31e32aef5fbdaeaf65e565a6bd3d6964931ddf036e->enter($__internal_cb33ba71451f3e08c2d58a31e32aef5fbdaeaf65e565a6bd3d6964931ddf036e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cb33ba71451f3e08c2d58a31e32aef5fbdaeaf65e565a6bd3d6964931ddf036e->leave($__internal_cb33ba71451f3e08c2d58a31e32aef5fbdaeaf65e565a6bd3d6964931ddf036e_prof);

        
        $__internal_d171699cbe2795c2e73f5766145105eca38d6ca520fc43f8a8ead298d2111d2b->leave($__internal_d171699cbe2795c2e73f5766145105eca38d6ca520fc43f8a8ead298d2111d2b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05a7d3e665391167215c720a4958b16817192fb7717badc9edc72a3a19c2d755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a7d3e665391167215c720a4958b16817192fb7717badc9edc72a3a19c2d755->enter($__internal_05a7d3e665391167215c720a4958b16817192fb7717badc9edc72a3a19c2d755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_21b48d3ff2afbe5a235cb05bc40b68de2d7f0c532d7a9496d89780c658b9693e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b48d3ff2afbe5a235cb05bc40b68de2d7f0c532d7a9496d89780c658b9693e->enter($__internal_21b48d3ff2afbe5a235cb05bc40b68de2d7f0c532d7a9496d89780c658b9693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_21b48d3ff2afbe5a235cb05bc40b68de2d7f0c532d7a9496d89780c658b9693e->leave($__internal_21b48d3ff2afbe5a235cb05bc40b68de2d7f0c532d7a9496d89780c658b9693e_prof);

        
        $__internal_05a7d3e665391167215c720a4958b16817192fb7717badc9edc72a3a19c2d755->leave($__internal_05a7d3e665391167215c720a4958b16817192fb7717badc9edc72a3a19c2d755_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db03aa62d2c02389baac6b6db90b0b1fae273d500013877e4d296a580e2c4a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db03aa62d2c02389baac6b6db90b0b1fae273d500013877e4d296a580e2c4a26->enter($__internal_db03aa62d2c02389baac6b6db90b0b1fae273d500013877e4d296a580e2c4a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48ce48e74279f8351660bab1a0e801dc8c3f9e46c113a1ba6aee575c32e56b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ce48e74279f8351660bab1a0e801dc8c3f9e46c113a1ba6aee575c32e56b1b->enter($__internal_48ce48e74279f8351660bab1a0e801dc8c3f9e46c113a1ba6aee575c32e56b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_48ce48e74279f8351660bab1a0e801dc8c3f9e46c113a1ba6aee575c32e56b1b->leave($__internal_48ce48e74279f8351660bab1a0e801dc8c3f9e46c113a1ba6aee575c32e56b1b_prof);

        
        $__internal_db03aa62d2c02389baac6b6db90b0b1fae273d500013877e4d296a580e2c4a26->leave($__internal_db03aa62d2c02389baac6b6db90b0b1fae273d500013877e4d296a580e2c4a26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
