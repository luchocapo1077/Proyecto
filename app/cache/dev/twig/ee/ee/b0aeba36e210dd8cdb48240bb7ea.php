<?php

/* ProyectoExtensionBundle:Extension:edit.html.twig */
class __TwigTemplate_eeeeb0aeba36e210dd8cdb48240bb7ea extends Twig_Template
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
        echo "Extensiones";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Editar Extension</h1>

<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extension_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extension"), "html", null, true);
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extension_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 23
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
        return "ProyectoExtensionBundle:Extension:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  65 => 22,  57 => 17,  46 => 9,  40 => 8,  36 => 6,  33 => 5,  27 => 3,);
    }
}
