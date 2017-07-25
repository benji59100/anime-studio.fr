<?php

/* ASTPlatformBundle:Animestudio:view.html.twig */
class __TwigTemplate_62218188eeb8afbbe3679423dca99c4edadbf64b7b6f1e9e421e26dcae0025f8 extends Twig_Template
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
        $__internal_39edfb129c6ba06053ecd0c683085d517c0ecf3f1edebf05b52735915936e7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39edfb129c6ba06053ecd0c683085d517c0ecf3f1edebf05b52735915936e7cf->enter($__internal_39edfb129c6ba06053ecd0c683085d517c0ecf3f1edebf05b52735915936e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASTPlatformBundle:Animestudio:view.html.twig"));

        $__internal_31c56fae2fc409f362231a7beac1e71b4f122c5e194674f47c9f88af391d18ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c56fae2fc409f362231a7beac1e71b4f122c5e194674f47c9f88af391d18ee->enter($__internal_31c56fae2fc409f362231a7beac1e71b4f122c5e194674f47c9f88af391d18ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASTPlatformBundle:Animestudio:view.html.twig"));

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
        
        $__internal_39edfb129c6ba06053ecd0c683085d517c0ecf3f1edebf05b52735915936e7cf->leave($__internal_39edfb129c6ba06053ecd0c683085d517c0ecf3f1edebf05b52735915936e7cf_prof);

        
        $__internal_31c56fae2fc409f362231a7beac1e71b4f122c5e194674f47c9f88af391d18ee->leave($__internal_31c56fae2fc409f362231a7beac1e71b4f122c5e194674f47c9f88af391d18ee_prof);

    }

    public function getTemplateName()
    {
        return "ASTPlatformBundle:Animestudio:view.html.twig";
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

</html>", "ASTPlatformBundle:Animestudio:view.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\src\\AST\\PlatformBundle/Resources/views/Animestudio/view.html.twig");
    }
}
