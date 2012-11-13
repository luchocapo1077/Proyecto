<?php

/* MDWDemoBundle:Default:articulo.html.twig */
class __TwigTemplate_a4194a61b8199dc271e8e079b58c0170 extends Twig_Template
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
        // line 1
        echo "<h1>Articulo con ID ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "id"), "html", null, true);
        echo "</h1>
<ul>
    <li>Titulo: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "title"), "html", null, true);
        echo "</li>
    <li>Fecha de creacion: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "created"), "html", null, true);
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  17 => 1,);
    }
}
