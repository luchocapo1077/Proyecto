<?php

/* ProyectoExtensionBundle:Proyecto:map.html.twig */
class __TwigTemplate_d029170d52400e5f76a32f1085277f32 extends Twig_Template
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
        // line 10
        echo "
";
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Hello ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Google Maps</h1>  
    ";
        // line 7
        echo $this->env->getExtension('ivory_google_map')->renderContainer($this->getContext($context, "map"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts($this->getContext($context, "map"));
        echo "    
";
    }

    public function getTemplateName()
    {
        return "ProyectoExtensionBundle:Proyecto:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  45 => 7,  42 => 6,  39 => 3,  33 => 1,  29 => 11,  26 => 10,  24 => 3,  21 => 2,  19 => 1,);
    }
}
