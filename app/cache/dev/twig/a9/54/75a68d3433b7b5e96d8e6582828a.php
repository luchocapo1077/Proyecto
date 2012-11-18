<?php

/* ProyectoExtensionBundle:Periodo:show.html.twig */
class __TwigTemplate_a95475a68d3433b7b5e96d8e6582828a extends Twig_Template
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
        echo "<h1>Periodo</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fecha Inicio</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechaDesde"), "d-m-Y"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fecha Fin</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechaHasta"), "d-m-Y"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodo"), "html", null, true);
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodo_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Editar
        </a>
    </li>
    <li>
        <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodo_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Borrar</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ProyectoExtensionBundle:Periodo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 33,  65 => 32,  57 => 27,  49 => 22,  39 => 15,  32 => 11,  25 => 7,  17 => 1,);
    }
}
