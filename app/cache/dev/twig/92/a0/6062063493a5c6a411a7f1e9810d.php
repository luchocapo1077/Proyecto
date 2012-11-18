<?php

/* ProyectoExtensionBundle:Proyecto:show.html.twig */
class __TwigTemplate_92a06062063493a5c6a411a7f1e9810d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoExtensionBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProyectoExtensionBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Proyectos";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Proyecto</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Link</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "link"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Area</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "area"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto"), "html", null, true);
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Editar
        </a>
    </li>
    <li>
        <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 42
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
        return "ProyectoExtensionBundle:Proyecto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  91 => 41,  83 => 36,  75 => 31,  65 => 24,  58 => 20,  51 => 16,  44 => 12,  36 => 6,  33 => 5,  27 => 3,);
    }
}
