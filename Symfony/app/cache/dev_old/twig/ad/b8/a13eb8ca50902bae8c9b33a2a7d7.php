<?php

/* ::base.html.twig */
class __TwigTemplate_adb8a13eb8ca50902bae8c9b33a2a7d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'history' => array($this, 'block_history'),
            'menue' => array($this, 'block_menue'),
            'top10' => array($this, 'block_top10'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d788523_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d788523_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d788523_main_1.css");
            // line 7
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
        } else {
            // asset "d788523"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d788523") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d788523.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5e2e039_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5e2e039_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/guess_guess_1.jpg");
            // line 11
            echo "\t
";
        } else {
            // asset "5e2e039"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5e2e039") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/guess.jpg");
            echo "\t
";
        }
        unset($context["asset_url"]);
        // line 13
        echo "
</head>
<body >

\t<div id=\"wrapper\">
\t\t<div id=\"header\">
\t\t
\t\t
\t\t<h1>";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        echo "</h1>
\t\t</div><!-- #header-->
\t
\t\t<div id=\"middle\">
\t\t\t\t
\t\t\t<div id=\"container\">
\t\t\t\t<div id=\"content\">
\t\t\t\t
\t\t\t\t  ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        echo "\t
\t\t\t\t ";
        // line 30
        $this->displayBlock('history', $context, $blocks);
        echo " 
\t\t\t\t</div><!-- #content-->
\t\t\t</div><!-- #container-->
\t\t\t<div align='left' id=\"sidebar\">
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<h3>";
        // line 37
        $this->displayBlock('menue', $context, $blocks);
        echo "<h3>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t</div><!-- #sidebar -->
\t\t\t<div id=\"sidebarR\">
\t\t\t";
        // line 44
        $this->displayBlock('top10', $context, $blocks);
        // line 45
        echo "\t\t\t</div>
\t\t</div><!-- #middle-->
\t</div><!-- #wrapper -->
\t
\t<div id=\"footer\">
\t\t<div class=\"langbar\">
\t\t</div>
\t\t
\t</div><!-- footer  -->
</body>

</html>
";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 30
    public function block_history($context, array $blocks = array())
    {
    }

    // line 37
    public function block_menue($context, array $blocks = array())
    {
    }

    // line 44
    public function block_top10($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  137 => 37,  132 => 30,  127 => 29,  122 => 21,  106 => 45,  104 => 44,  94 => 37,  84 => 30,  80 => 29,  69 => 21,  59 => 13,  49 => 11,  45 => 9,  31 => 7,  27 => 4,  22 => 1,);
    }
}
