<?php

/* ASTPlatformBundle:Animestudio:connexion.html.twig */
class __TwigTemplate_01fc1c51821b9d2fe382d6fecc6c5d8dfabb568f6c5734a04f0b13a6806321f5 extends Twig_Template
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
        $__internal_a9897a264ee582e8a099abd5f3ca829aa043e875aaabb084e56af0a83ae794a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9897a264ee582e8a099abd5f3ca829aa043e875aaabb084e56af0a83ae794a6->enter($__internal_a9897a264ee582e8a099abd5f3ca829aa043e875aaabb084e56af0a83ae794a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASTPlatformBundle:Animestudio:connexion.html.twig"));

        $__internal_80c8a081171a0bcf869d53feaf4368fe72e78c3bfb01eb69319bdb44b02381e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c8a081171a0bcf869d53feaf4368fe72e78c3bfb01eb69319bdb44b02381e7->enter($__internal_80c8a081171a0bcf869d53feaf4368fe72e78c3bfb01eb69319bdb44b02381e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASTPlatformBundle:Animestudio:connexion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
  <head>
    <title>Anime-studio.fr</title>
  </head>
  <h1>Bienvenue sur la page d'inscription</h1>
  <div cass=\"formulaire\">
  \t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  </div>
  <body>
  </body>

</html>";
        
        $__internal_a9897a264ee582e8a099abd5f3ca829aa043e875aaabb084e56af0a83ae794a6->leave($__internal_a9897a264ee582e8a099abd5f3ca829aa043e875aaabb084e56af0a83ae794a6_prof);

        
        $__internal_80c8a081171a0bcf869d53feaf4368fe72e78c3bfb01eb69319bdb44b02381e7->leave($__internal_80c8a081171a0bcf869d53feaf4368fe72e78c3bfb01eb69319bdb44b02381e7_prof);

    }

    public function getTemplateName()
    {
        return "ASTPlatformBundle:Animestudio:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  25 => 1,);
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
    <title>Anime-studio.fr</title>
  </head>
  <h1>Bienvenue sur la page d'inscription</h1>
  <div cass=\"formulaire\">
  \t{{ form(form) }}
  </div>
  <body>
  </body>

</html>", "ASTPlatformBundle:Animestudio:connexion.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\src\\AST\\PlatformBundle/Resources/views/Animestudio/connexion.html.twig");
    }
}
