<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_57f0fe9e82f9df80022ccd9891730a1d51613bd6e1b6cba0785b208ae2661e74 extends Twig_Template
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
        $__internal_16c3bf8fc2536332f4f73c4ab945799a4893268e879934a48048f0a5199685cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c3bf8fc2536332f4f73c4ab945799a4893268e879934a48048f0a5199685cd->enter($__internal_16c3bf8fc2536332f4f73c4ab945799a4893268e879934a48048f0a5199685cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c1925af9633d09f0a7997dcd24285f157ec4ec970f3c586bc5fb811ddc6789e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1925af9633d09f0a7997dcd24285f157ec4ec970f3c586bc5fb811ddc6789e7->enter($__internal_c1925af9633d09f0a7997dcd24285f157ec4ec970f3c586bc5fb811ddc6789e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c3bf8fc2536332f4f73c4ab945799a4893268e879934a48048f0a5199685cd->leave($__internal_16c3bf8fc2536332f4f73c4ab945799a4893268e879934a48048f0a5199685cd_prof);

        
        $__internal_c1925af9633d09f0a7997dcd24285f157ec4ec970f3c586bc5fb811ddc6789e7->leave($__internal_c1925af9633d09f0a7997dcd24285f157ec4ec970f3c586bc5fb811ddc6789e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_965bfa574a53bbe0822f54a1c5d66e5efbc6e37ab8b6b6bde295cf3efcb46d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965bfa574a53bbe0822f54a1c5d66e5efbc6e37ab8b6b6bde295cf3efcb46d80->enter($__internal_965bfa574a53bbe0822f54a1c5d66e5efbc6e37ab8b6b6bde295cf3efcb46d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f90c9a4548d5d57d20b290c0e643431101f638cb278221be68f8eb1995e88c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90c9a4548d5d57d20b290c0e643431101f638cb278221be68f8eb1995e88c76->enter($__internal_f90c9a4548d5d57d20b290c0e643431101f638cb278221be68f8eb1995e88c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f90c9a4548d5d57d20b290c0e643431101f638cb278221be68f8eb1995e88c76->leave($__internal_f90c9a4548d5d57d20b290c0e643431101f638cb278221be68f8eb1995e88c76_prof);

        
        $__internal_965bfa574a53bbe0822f54a1c5d66e5efbc6e37ab8b6b6bde295cf3efcb46d80->leave($__internal_965bfa574a53bbe0822f54a1c5d66e5efbc6e37ab8b6b6bde295cf3efcb46d80_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b76ba3970c8f5d7b0145030a3ee607637d298d559cbace1de2ee3966b4d193f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76ba3970c8f5d7b0145030a3ee607637d298d559cbace1de2ee3966b4d193f8->enter($__internal_b76ba3970c8f5d7b0145030a3ee607637d298d559cbace1de2ee3966b4d193f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9288b526b822567709041a0f6c7f48f41773d7c0ce2b863cfe332c3f29582a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9288b526b822567709041a0f6c7f48f41773d7c0ce2b863cfe332c3f29582a78->enter($__internal_9288b526b822567709041a0f6c7f48f41773d7c0ce2b863cfe332c3f29582a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9288b526b822567709041a0f6c7f48f41773d7c0ce2b863cfe332c3f29582a78->leave($__internal_9288b526b822567709041a0f6c7f48f41773d7c0ce2b863cfe332c3f29582a78_prof);

        
        $__internal_b76ba3970c8f5d7b0145030a3ee607637d298d559cbace1de2ee3966b4d193f8->leave($__internal_b76ba3970c8f5d7b0145030a3ee607637d298d559cbace1de2ee3966b4d193f8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1dcbfa05ea636ef1b5dc4195c77c6bbddfdff88a307acd3223c23a1b91f8a13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dcbfa05ea636ef1b5dc4195c77c6bbddfdff88a307acd3223c23a1b91f8a13e->enter($__internal_1dcbfa05ea636ef1b5dc4195c77c6bbddfdff88a307acd3223c23a1b91f8a13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f274bb08a2e548a11242d7c3a5fc31f91fdb29ad5b3d1d3fdf686d57c4ea140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f274bb08a2e548a11242d7c3a5fc31f91fdb29ad5b3d1d3fdf686d57c4ea140->enter($__internal_0f274bb08a2e548a11242d7c3a5fc31f91fdb29ad5b3d1d3fdf686d57c4ea140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0f274bb08a2e548a11242d7c3a5fc31f91fdb29ad5b3d1d3fdf686d57c4ea140->leave($__internal_0f274bb08a2e548a11242d7c3a5fc31f91fdb29ad5b3d1d3fdf686d57c4ea140_prof);

        
        $__internal_1dcbfa05ea636ef1b5dc4195c77c6bbddfdff88a307acd3223c23a1b91f8a13e->leave($__internal_1dcbfa05ea636ef1b5dc4195c77c6bbddfdff88a307acd3223c23a1b91f8a13e_prof);

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
