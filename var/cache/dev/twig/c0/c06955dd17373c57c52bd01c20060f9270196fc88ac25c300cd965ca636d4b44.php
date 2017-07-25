<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_78e0a73e91aab1ca716067bb3da0199e17fc5748cf23585d6fa17cf3fbe13ba8 extends Twig_Template
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
        $__internal_5dafcb057e4b640be55333314be708e09179b5a84b381b64569df50e8b00df69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dafcb057e4b640be55333314be708e09179b5a84b381b64569df50e8b00df69->enter($__internal_5dafcb057e4b640be55333314be708e09179b5a84b381b64569df50e8b00df69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_805f982fa5789434bd99353618db7be54f677fbb225512bcc1e01556aa875acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805f982fa5789434bd99353618db7be54f677fbb225512bcc1e01556aa875acf->enter($__internal_805f982fa5789434bd99353618db7be54f677fbb225512bcc1e01556aa875acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5dafcb057e4b640be55333314be708e09179b5a84b381b64569df50e8b00df69->leave($__internal_5dafcb057e4b640be55333314be708e09179b5a84b381b64569df50e8b00df69_prof);

        
        $__internal_805f982fa5789434bd99353618db7be54f677fbb225512bcc1e01556aa875acf->leave($__internal_805f982fa5789434bd99353618db7be54f677fbb225512bcc1e01556aa875acf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfonyben\\Anime-studio.fr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
