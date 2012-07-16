<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_213a2f000267515b58cfef246daeeb42 extends Twig_Template
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
        echo twig_jsonencode_filter(array("error" => array("code" => $this->getContext($context, "status_code"), "message" => $this->getContext($context, "status_text"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  95 => 21,  88 => 19,  78 => 17,  71 => 14,  25 => 4,  26 => 3,  40 => 7,  72 => 16,  64 => 15,  53 => 13,  42 => 7,  34 => 7,  22 => 3,  23 => 3,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  29 => 4,  24 => 4,  19 => 2,  69 => 14,  63 => 10,  58 => 9,  49 => 8,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 44,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 35,  96 => 34,  91 => 33,  82 => 18,  77 => 39,  75 => 16,  57 => 9,  50 => 13,  46 => 14,  44 => 11,  39 => 5,  33 => 7,  30 => 4,  27 => 4,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 24,  102 => 37,  94 => 32,  89 => 20,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 20,  67 => 12,  62 => 16,  59 => 15,  55 => 14,  51 => 11,  48 => 10,  41 => 6,  38 => 6,  35 => 8,  31 => 5,  28 => 3,);
    }
}
