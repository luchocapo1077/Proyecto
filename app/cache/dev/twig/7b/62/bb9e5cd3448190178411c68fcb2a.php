<?php

/* ProyectoExtensionBundle:Area:edit.html.twig */
class __TwigTemplate_7b62bb9e5cd3448190178411c68fcb2a extends Twig_Template
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
        echo "    <h1>Editar Area</h1>

    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'widget');
        echo "
        <p>
            <button type=\"submit\">Guardar</button>
        </p>
    </form>
    ";
        // line 14
        if (($this->getContext($context, "icono") != null)) {
            echo "       
            <tr><th>Icono</th>
                <td><img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/markerIconos/", 1 => $this->getContext($context, "icono")))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "icono"), "html", null, true);
            echo " image not found\" class=\"large\" /></td>
            </tr>
    ";
        }
        // line 19
        echo "    

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area"), "html", null, true);
        echo "\">
                Volver al listado
            </a>
        </li>
        <li>
            <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 29
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
        return "ProyectoExtensionBundle:Area:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  81 => 28,  73 => 23,  67 => 19,  59 => 16,  54 => 14,  46 => 9,  40 => 8,  36 => 6,  33 => 5,  27 => 3,);
    }
}
