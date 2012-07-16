<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0bf6f77d50da2d1c4f822c92c54dcf6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 45,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 11,  97 => 22,  95 => 21,  88 => 19,  78 => 17,  71 => 14,  25 => 4,  26 => 3,  40 => 7,  72 => 16,  64 => 15,  53 => 13,  42 => 7,  34 => 7,  22 => 3,  23 => 3,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  29 => 5,  24 => 3,  19 => 2,  69 => 14,  63 => 10,  58 => 9,  49 => 8,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 18,  77 => 28,  75 => 16,  57 => 22,  50 => 13,  46 => 14,  44 => 8,  39 => 15,  33 => 7,  30 => 4,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 24,  102 => 37,  94 => 31,  89 => 20,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 26,  67 => 12,  62 => 24,  59 => 23,  55 => 14,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 8,  31 => 5,  28 => 3,);
    }
}
