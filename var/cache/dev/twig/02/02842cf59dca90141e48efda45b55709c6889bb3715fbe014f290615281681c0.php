<?php

/* ASTPlatformBundle:Animestudio:inscription.html.twig */
class __TwigTemplate_a367ec4774738fd1b2071b2fa93e2f4b789fee4d075755c1c5965445baaa0845 extends Twig_Template
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
        $__internal_5eb5317d4b1ba59049826bc5ce32a7563ae73bdd4c982b43bffb48de20c9cede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb5317d4b1ba59049826bc5ce32a7563ae73bdd4c982b43bffb48de20c9cede->enter($__internal_5eb5317d4b1ba59049826bc5ce32a7563ae73bdd4c982b43bffb48de20c9cede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASTPlatformBundle:Animestudio:inscription.html.twig"));

        $__internal_4c11c41d410b6bdfcf90707295a9fc7d71f362c40333efb429a294f5699742e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c11c41d410b6bdfcf90707295a9fc7d71f362c40333efb429a294f5699742e6->enter($__internal_4c11c41d410b6bdfcf90707295a9fc7d71f362c40333efb429a294f5699742e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASTPlatformBundle:Animestudio:inscription.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
  <head>
    <title>Anime-studio.fr</title>
  </head>
  <h1>Bienvenue sur la page d'inscription et de connexion, veuillez vous inscrire ou vous identifiez</h1>
  <div cass=\"formulaire\">
  \t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  </div>
  <body>
  </body>

</html>";
        
        $__internal_5eb5317d4b1ba59049826bc5ce32a7563ae73bdd4c982b43bffb48de20c9cede->leave($__internal_5eb5317d4b1ba59049826bc5ce32a7563ae73bdd4c982b43bffb48de20c9cede_prof);

        
        $__internal_4c11c41d410b6bdfcf90707295a9fc7d71f362c40333efb429a294f5699742e6->leave($__internal_4c11c41d410b6bdfcf90707295a9fc7d71f362c40333efb429a294f5699742e6_prof);

    }

    public function getTemplateName()
    {
        return "ASTPlatformBundle:Animestudio:inscription.html.twig";
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
  <h1>Bienvenue sur la page d'inscription et de connexion, veuillez vous inscrire ou vous identifiez</h1>
  <div cass=\"formulaire\">
  \t{{ form(form) }}
  </div>
  <body>
  </body>

</html>", "ASTPlatformBundle:Animestudio:inscription.html.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\src\\AST\\PlatformBundle/Resources/views/Animestudio/inscription.html.twig");
    }
}
