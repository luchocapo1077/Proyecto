<?php

/* ProyectoExtensionBundle:Proyecto:mapFilter.html.twig */
class __TwigTemplate_dded3bc613a32c21c576016f2a22fd65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Filtrando Extensiones ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Extensiones</h1>  
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filter_form"), 'widget');
        echo "
    <p>
        <button type=\"submit\">Filtrar</button>
    </p>
    </form>    
    
    
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
        return array (  60 => 11,  54 => 10,  49 => 8,  45 => 7,  42 => 6,  39 => 3,  33 => 1,  29 => 20,  26 => 19,  24 => 3,  21 => 2,  19 => 1,);
    }
}
