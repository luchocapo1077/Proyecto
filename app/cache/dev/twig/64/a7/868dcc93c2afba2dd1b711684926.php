<?php

/* MDWDemoBundle:Articulos:listar.html.twig */
class __TwigTemplate_64a7868dcc93c2afba2dd1b711684926 extends Twig_Template
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
        echo "<h1>Listado de Articulos</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Fecha de Creacion</th>
        <th>Fecha de Modificacion</th>
    </tr>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articulos"));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 11
            echo "    <tr>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "title"), "html", null, true);
            echo "</td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "created"), "d-m-Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "updated"), "d-m-Y"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Articulos:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  46 => 15,  42 => 14,  38 => 13,  34 => 12,  31 => 11,  27 => 10,  17 => 2,);
    }
}
