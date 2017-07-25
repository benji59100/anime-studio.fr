<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bb98c9db2b29477b2bf664dcbfe613014d2a4870af1b97deb623772f23dcd42e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95bb61708b20b4c7e0d2f8e12a851d7e66ce7809b4e2489c5e5a273d29471edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bb61708b20b4c7e0d2f8e12a851d7e66ce7809b4e2489c5e5a273d29471edb->enter($__internal_95bb61708b20b4c7e0d2f8e12a851d7e66ce7809b4e2489c5e5a273d29471edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a3a158c621d3cdc1b7de6420667bc41c78c0c7fe303e60f9cd9f9ab99ca80a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a158c621d3cdc1b7de6420667bc41c78c0c7fe303e60f9cd9f9ab99ca80a5a->enter($__internal_a3a158c621d3cdc1b7de6420667bc41c78c0c7fe303e60f9cd9f9ab99ca80a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95bb61708b20b4c7e0d2f8e12a851d7e66ce7809b4e2489c5e5a273d29471edb->leave($__internal_95bb61708b20b4c7e0d2f8e12a851d7e66ce7809b4e2489c5e5a273d29471edb_prof);

        
        $__internal_a3a158c621d3cdc1b7de6420667bc41c78c0c7fe303e60f9cd9f9ab99ca80a5a->leave($__internal_a3a158c621d3cdc1b7de6420667bc41c78c0c7fe303e60f9cd9f9ab99ca80a5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69cc2cfed363758e4507b2470477cee35b0480cb60b9b766ba9eb312a3efb211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cc2cfed363758e4507b2470477cee35b0480cb60b9b766ba9eb312a3efb211->enter($__internal_69cc2cfed363758e4507b2470477cee35b0480cb60b9b766ba9eb312a3efb211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_66cb9f399ca2911e4296fbf8eadd569e42a2ebc4ab1c853eb7d52c80b8023966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cb9f399ca2911e4296fbf8eadd569e42a2ebc4ab1c853eb7d52c80b8023966->enter($__internal_66cb9f399ca2911e4296fbf8eadd569e42a2ebc4ab1c853eb7d52c80b8023966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_66cb9f399ca2911e4296fbf8eadd569e42a2ebc4ab1c853eb7d52c80b8023966->leave($__internal_66cb9f399ca2911e4296fbf8eadd569e42a2ebc4ab1c853eb7d52c80b8023966_prof);

        
        $__internal_69cc2cfed363758e4507b2470477cee35b0480cb60b9b766ba9eb312a3efb211->leave($__internal_69cc2cfed363758e4507b2470477cee35b0480cb60b9b766ba9eb312a3efb211_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
