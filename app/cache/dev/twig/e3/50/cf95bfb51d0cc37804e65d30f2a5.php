<?php

/* AcmeDemoBundle:Demo:map.html.twig */
class __TwigTemplate_e350cf95bfb51d0cc37804e65d30f2a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 16
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Hello ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Google Maps</h1>  
    ";
        // line 9
        echo $this->env->getExtension('ivory_google_map')->renderContainer($this->getContext($context, "map"));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts($this->getContext($context, "map"));
        echo " 
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_mapFilter", array("map" => "map")), "html", null, true);
        echo "\">Agregar Marker</a></li>        
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  45 => 10,  41 => 9,  38 => 8,  35 => 5,  29 => 3,  24 => 16,);
    }
}
