<?php

/* ProyectoExtensionBundle:Proyecto:mapFilter.html.twig */
class __TwigTemplate_dded3bc613a32c21c576016f2a22fd65 extends Twig_Template
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
        echo "<h1>Filtrar Extensiones de Proyectos</h1>
    ";
        // line 7
        echo $this->env->getExtension('ivory_google_map')->renderContainer($this->getContext($context, "map"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts($this->getContext($context, "map"));
        echo "

<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_mapFilter"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filter_form"), 'enctype');
        echo ">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filter_form"), 'rest');
        echo "
    <p>
        <button type=\"submit\">Filtrar</button>
    </p>
    </form> 

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto"), "html", null, true);
        echo "\">
            Volver
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ProyectoExtensionBundle:Proyecto:mapFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  54 => 11,  48 => 10,  43 => 8,  39 => 7,  36 => 6,  33 => 5,  27 => 3,);
    }
}
