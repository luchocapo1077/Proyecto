<?php

/* MDWDemoBundle:Default:articulos.html.twig */
class __TwigTemplate_75bd24c26ff5b9a49e39f963e524005d extends Twig_Template
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
        echo "<h1>Listado de Articulos</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Fecha de Creacion</th>
    </tr>
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articulos"));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 9
            echo "    <tr>
        <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "title"), "html", null, true);
            echo "</td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "created"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Default:articulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  41 => 12,  37 => 11,  33 => 10,  30 => 9,  26 => 8,  17 => 1,);
    }
}
