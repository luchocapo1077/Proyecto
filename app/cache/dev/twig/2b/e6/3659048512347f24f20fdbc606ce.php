<?php

/* MDWDemoBundle:Articulos:articulo.html.twig */
class __TwigTemplate_2be63659048512347f24f20fdbc606ce extends Twig_Template
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
        // line 2
        echo "<h1>Articulo con ID ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "id"), "html", null, true);
        echo "</h1>
<ul>
    <li>Titulo: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "title"), "html", null, true);
        echo "</li>
    <li>Fecha de creacion: ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "created"), "d-m-Y"), "html", null, true);
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Articulos:articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  23 => 4,  17 => 2,);
    }
}
