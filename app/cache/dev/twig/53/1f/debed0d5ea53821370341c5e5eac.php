<?php

/* ProyectoExtensionBundle:Area:show.html.twig */
class __TwigTemplate_531fdebed0d5ea53821370341c5e5eac extends Twig_Template
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
        echo "Areas";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Area</h1>

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
        ";
        // line 18
        if (($this->getContext($context, "icono") != null)) {
            echo "       
            <tr><th>Icono</th>
                <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/markerIconos/", 1 => $this->getContext($context, "icono")))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "icono"), "html", null, true);
            echo " image not found\" class=\"large\" /></td>
            </tr>
        ";
        }
        // line 23
        echo "
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area"), "html", null, true);
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Editar
        </a>
    </li>
    <li>
        <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 40
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
        return "ProyectoExtensionBundle:Area:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 40,  93 => 39,  85 => 34,  77 => 29,  69 => 23,  61 => 20,  56 => 18,  51 => 16,  44 => 12,  36 => 6,  33 => 5,  27 => 3,);
    }
}
