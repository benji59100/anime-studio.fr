<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6cffc5de5cbfddf9734850707b07cc7eaaaaf34bb0b279bdfe226507d811c3d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_576ed69014c9b9b97d0ac7edd746c57b23da251c862cef47bd127eeca641a538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576ed69014c9b9b97d0ac7edd746c57b23da251c862cef47bd127eeca641a538->enter($__internal_576ed69014c9b9b97d0ac7edd746c57b23da251c862cef47bd127eeca641a538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1cc777716d4185e362d593d39ebb3f2f216d3ed75c0f0f2a9c9c1e2445a36d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc777716d4185e362d593d39ebb3f2f216d3ed75c0f0f2a9c9c1e2445a36d5c->enter($__internal_1cc777716d4185e362d593d39ebb3f2f216d3ed75c0f0f2a9c9c1e2445a36d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576ed69014c9b9b97d0ac7edd746c57b23da251c862cef47bd127eeca641a538->leave($__internal_576ed69014c9b9b97d0ac7edd746c57b23da251c862cef47bd127eeca641a538_prof);

        
        $__internal_1cc777716d4185e362d593d39ebb3f2f216d3ed75c0f0f2a9c9c1e2445a36d5c->leave($__internal_1cc777716d4185e362d593d39ebb3f2f216d3ed75c0f0f2a9c9c1e2445a36d5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_561b4def9e687d077e81e2ce3f5e8199bdec28c1024081e226d11f9ce0a5d21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561b4def9e687d077e81e2ce3f5e8199bdec28c1024081e226d11f9ce0a5d21e->enter($__internal_561b4def9e687d077e81e2ce3f5e8199bdec28c1024081e226d11f9ce0a5d21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd52da5f172622d06e11d8011d250ac5f00d958ef3996abd9384da767b5c500a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd52da5f172622d06e11d8011d250ac5f00d958ef3996abd9384da767b5c500a->enter($__internal_bd52da5f172622d06e11d8011d250ac5f00d958ef3996abd9384da767b5c500a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bd52da5f172622d06e11d8011d250ac5f00d958ef3996abd9384da767b5c500a->leave($__internal_bd52da5f172622d06e11d8011d250ac5f00d958ef3996abd9384da767b5c500a_prof);

        
        $__internal_561b4def9e687d077e81e2ce3f5e8199bdec28c1024081e226d11f9ce0a5d21e->leave($__internal_561b4def9e687d077e81e2ce3f5e8199bdec28c1024081e226d11f9ce0a5d21e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc234a11f28c6a25257b4fb6126021d6008fd045c8c93bd908e320e45ce26437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc234a11f28c6a25257b4fb6126021d6008fd045c8c93bd908e320e45ce26437->enter($__internal_fc234a11f28c6a25257b4fb6126021d6008fd045c8c93bd908e320e45ce26437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e33c229e85f4195b020ceb5769d34cc28d764f6a70a67dc91fc4d4712f12a433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33c229e85f4195b020ceb5769d34cc28d764f6a70a67dc91fc4d4712f12a433->enter($__internal_e33c229e85f4195b020ceb5769d34cc28d764f6a70a67dc91fc4d4712f12a433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e33c229e85f4195b020ceb5769d34cc28d764f6a70a67dc91fc4d4712f12a433->leave($__internal_e33c229e85f4195b020ceb5769d34cc28d764f6a70a67dc91fc4d4712f12a433_prof);

        
        $__internal_fc234a11f28c6a25257b4fb6126021d6008fd045c8c93bd908e320e45ce26437->leave($__internal_fc234a11f28c6a25257b4fb6126021d6008fd045c8c93bd908e320e45ce26437_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
