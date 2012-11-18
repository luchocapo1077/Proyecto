<?php

/* ProyectoExtensionBundle::layout.html.twig */
class __TwigTemplate_35adf275f1e32eccddccb2f70068e60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyectoextension/css/table.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/proyectoextension/css/demo.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
        <div id=\"sidebar\">
            ";
        // line 12
        $this->displayBlock('sidebar', $context, $blocks);
        // line 37
        echo "        </div>

        <div id=\"symfony-content\">
            ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        </div>
     </div>            
    </body>
</html>        
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Proyectos de Extension";
    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        // line 13
        echo "            <ul id=\"menu\">
                    <li>
                        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto"), "html", null, true);
        echo "\">
                            Proyectos
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extension"), "html", null, true);
        echo "\">
                            Extensiones
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lugar"), "html", null, true);
        echo "\">
                            Lugares
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area"), "html", null, true);
        echo "\">
                            Areas
                        </a>
                    </li>
            </ul>
                <div style=\"clear: both\"></div>
            ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ProyectoExtensionBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  96 => 30,  88 => 25,  80 => 20,  72 => 15,  68 => 13,  65 => 12,  59 => 5,  51 => 41,  49 => 40,  44 => 37,  42 => 12,  34 => 7,  30 => 6,  26 => 5,  20 => 1,);
    }
}
