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
        return array (  106 => 45,  45 => 9,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 30,  127 => 29,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 29,  60 => 16,  52 => 12,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 44,  137 => 37,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 11,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  26 => 2,  40 => 7,  72 => 16,  64 => 15,  53 => 13,  42 => 7,  34 => 5,  22 => 1,  23 => 3,  17 => 1,  92 => 20,  86 => 28,  79 => 40,  29 => 3,  24 => 3,  19 => 2,  69 => 21,  63 => 18,  58 => 9,  49 => 11,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 15,  50 => 13,  46 => 10,  44 => 8,  39 => 15,  33 => 7,  30 => 4,  27 => 4,  135 => 50,  129 => 47,  122 => 21,  116 => 42,  113 => 40,  108 => 40,  104 => 44,  102 => 37,  94 => 37,  89 => 20,  87 => 32,  84 => 30,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 13,  55 => 14,  51 => 13,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 7,  28 => 3,);
    }
}
