<?php

/* base.html.twig */
class __TwigTemplate_63adcabb7529a0f5c4d8d396510067403d855e561ed214372631e3adfa965eec extends Twig_Template
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
        $__internal_1442ad70161de30d11cce14d4a052508850698ff71893f0a1cd7e591b3ad7dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1442ad70161de30d11cce14d4a052508850698ff71893f0a1cd7e591b3ad7dec->enter($__internal_1442ad70161de30d11cce14d4a052508850698ff71893f0a1cd7e591b3ad7dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c088965c0e10b799e058cd291c2d099d2af06bec74a692657b1a22bb378a7e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c088965c0e10b799e058cd291c2d099d2af06bec74a692657b1a22bb378a7e2b->enter($__internal_c088965c0e10b799e058cd291c2d099d2af06bec74a692657b1a22bb378a7e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1442ad70161de30d11cce14d4a052508850698ff71893f0a1cd7e591b3ad7dec->leave($__internal_1442ad70161de30d11cce14d4a052508850698ff71893f0a1cd7e591b3ad7dec_prof);

        
        $__internal_c088965c0e10b799e058cd291c2d099d2af06bec74a692657b1a22bb378a7e2b->leave($__internal_c088965c0e10b799e058cd291c2d099d2af06bec74a692657b1a22bb378a7e2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_569afbaf30992e4e1adea93e94b5dd524439dacfb398c328fdc240b6e64101da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569afbaf30992e4e1adea93e94b5dd524439dacfb398c328fdc240b6e64101da->enter($__internal_569afbaf30992e4e1adea93e94b5dd524439dacfb398c328fdc240b6e64101da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_325ff66b7f87810e8bd125d51ac547412873a38c6d8f3087dc55005c7f1417d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325ff66b7f87810e8bd125d51ac547412873a38c6d8f3087dc55005c7f1417d5->enter($__internal_325ff66b7f87810e8bd125d51ac547412873a38c6d8f3087dc55005c7f1417d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_325ff66b7f87810e8bd125d51ac547412873a38c6d8f3087dc55005c7f1417d5->leave($__internal_325ff66b7f87810e8bd125d51ac547412873a38c6d8f3087dc55005c7f1417d5_prof);

        
        $__internal_569afbaf30992e4e1adea93e94b5dd524439dacfb398c328fdc240b6e64101da->leave($__internal_569afbaf30992e4e1adea93e94b5dd524439dacfb398c328fdc240b6e64101da_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1111082fbe318ca8ca80a9c3605ad1bbea81e0de55246be2065f54107d4288c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1111082fbe318ca8ca80a9c3605ad1bbea81e0de55246be2065f54107d4288c->enter($__internal_c1111082fbe318ca8ca80a9c3605ad1bbea81e0de55246be2065f54107d4288c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e545f9b3bb5dbf0f2858401da22133e2f8c89d0066aa2f7d4994a3265447b3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e545f9b3bb5dbf0f2858401da22133e2f8c89d0066aa2f7d4994a3265447b3dd->enter($__internal_e545f9b3bb5dbf0f2858401da22133e2f8c89d0066aa2f7d4994a3265447b3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e545f9b3bb5dbf0f2858401da22133e2f8c89d0066aa2f7d4994a3265447b3dd->leave($__internal_e545f9b3bb5dbf0f2858401da22133e2f8c89d0066aa2f7d4994a3265447b3dd_prof);

        
        $__internal_c1111082fbe318ca8ca80a9c3605ad1bbea81e0de55246be2065f54107d4288c->leave($__internal_c1111082fbe318ca8ca80a9c3605ad1bbea81e0de55246be2065f54107d4288c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0b4230ce15d441fa33d132b1d0bf73741ff7293a1b90e0de81144abcb1e8cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b4230ce15d441fa33d132b1d0bf73741ff7293a1b90e0de81144abcb1e8cff->enter($__internal_c0b4230ce15d441fa33d132b1d0bf73741ff7293a1b90e0de81144abcb1e8cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_631bd86a8978cf2a04b8f3f6406eee4209f3fb6cf2a66d60ee14dc8f1bfbeb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631bd86a8978cf2a04b8f3f6406eee4209f3fb6cf2a66d60ee14dc8f1bfbeb12->enter($__internal_631bd86a8978cf2a04b8f3f6406eee4209f3fb6cf2a66d60ee14dc8f1bfbeb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_631bd86a8978cf2a04b8f3f6406eee4209f3fb6cf2a66d60ee14dc8f1bfbeb12->leave($__internal_631bd86a8978cf2a04b8f3f6406eee4209f3fb6cf2a66d60ee14dc8f1bfbeb12_prof);

        
        $__internal_c0b4230ce15d441fa33d132b1d0bf73741ff7293a1b90e0de81144abcb1e8cff->leave($__internal_c0b4230ce15d441fa33d132b1d0bf73741ff7293a1b90e0de81144abcb1e8cff_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be30ee864cdadae8436352f98c8564b652d328ebd5bf2ba5c616807a18210dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be30ee864cdadae8436352f98c8564b652d328ebd5bf2ba5c616807a18210dcd->enter($__internal_be30ee864cdadae8436352f98c8564b652d328ebd5bf2ba5c616807a18210dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_589125745c745f70d91364afde512d5d18fd9de1624343c8df9fb07fa31fcdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589125745c745f70d91364afde512d5d18fd9de1624343c8df9fb07fa31fcdf7->enter($__internal_589125745c745f70d91364afde512d5d18fd9de1624343c8df9fb07fa31fcdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_589125745c745f70d91364afde512d5d18fd9de1624343c8df9fb07fa31fcdf7->leave($__internal_589125745c745f70d91364afde512d5d18fd9de1624343c8df9fb07fa31fcdf7_prof);

        
        $__internal_be30ee864cdadae8436352f98c8564b652d328ebd5bf2ba5c616807a18210dcd->leave($__internal_be30ee864cdadae8436352f98c8564b652d328ebd5bf2ba5c616807a18210dcd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\app\\Resources\\views\\base.html.twig");
    }
}
