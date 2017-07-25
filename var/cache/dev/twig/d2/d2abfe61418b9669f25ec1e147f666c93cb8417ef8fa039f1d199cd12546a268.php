<?php

/* @ASTPlatform/Animestudio/view.html.twig */
class __TwigTemplate_b0a782dc1d1bd27c4d4f49b12418baacac9e5e86d7508b9499e264537c537c15 extends Twig_Template
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
        $__internal_8808cc3d2f00421db639d96c28f5245961dd6a3acf9c652ea567949383b63c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8808cc3d2f00421db639d96c28f5245961dd6a3acf9c652ea567949383b63c04->enter($__internal_8808cc3d2f00421db639d96c28f5245961dd6a3acf9c652ea567949383b63c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASTPlatform/Animestudio/view.html.twig"));

        $__internal_4b88d5a774f16016cea9a5ec848b4a91c7c0a9e330f871fcc317c423b1d62bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b88d5a774f16016cea9a5ec848b4a91c7c0a9e330f871fcc317c423b1d62bc8->enter($__internal_4b88d5a774f16016cea9a5ec848b4a91c7c0a9e330f871fcc317c423b1d62bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ASTPlatform/Animestudio/view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

  <head>

    <title>View</title>

  </head>

  <body>

  \t";
        // line 16
        echo "
\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ast_platform_view", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\">

    Lien vers l'annonce d'id ";
        // line 19
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "

</a>
  </body>

</html>";
        
        $__internal_8808cc3d2f00421db639d96c28f5245961dd6a3acf9c652ea567949383b63c04->leave($__internal_8808cc3d2f00421db639d96c28f5245961dd6a3acf9c652ea567949383b63c04_prof);

        
        $__internal_4b88d5a774f16016cea9a5ec848b4a91c7c0a9e330f871fcc317c423b1d62bc8->leave($__internal_4b88d5a774f16016cea9a5ec848b4a91c7c0a9e330f871fcc317c423b1d62bc8_prof);

    }

    public function getTemplateName()
    {
        return "@ASTPlatform/Animestudio/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 19,  42 => 17,  39 => 16,  25 => 1,);
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

    <title>View</title>

  </head>

  <body>

  \t{# Dans une vue Twig, en considérant bien sûr

   que la variable advert_id est disponible #}

\t<a href=\"{{ path('ast_platform_view', { 'id': id }) }}\">

    Lien vers l'annonce d'id {{ id }}

</a>
  </body>

</html>", "@ASTPlatform/Animestudio/view.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\src\\AST\\PlatformBundle\\Resources\\views\\Animestudio\\view.html.twig");
    }
}
