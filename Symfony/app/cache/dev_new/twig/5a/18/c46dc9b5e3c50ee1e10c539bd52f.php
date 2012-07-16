<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_5a18c46dc9b5e3c50ee1e10c539bd52f extends Twig_Template
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
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  76 => 27,  65 => 22,  56 => 17,  136 => 40,  114 => 30,  85 => 31,  61 => 20,  21 => 1,  106 => 45,  45 => 9,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 30,  127 => 29,  123 => 30,  109 => 39,  93 => 33,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 16,  52 => 15,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 44,  137 => 37,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 13,  32 => 11,  97 => 34,  95 => 47,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  26 => 3,  40 => 7,  72 => 16,  64 => 24,  53 => 13,  42 => 7,  34 => 5,  22 => 1,  23 => 29,  17 => 1,  92 => 20,  86 => 28,  79 => 39,  29 => 3,  24 => 9,  19 => 2,  69 => 21,  63 => 18,  58 => 9,  49 => 11,  43 => 8,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 37,  57 => 15,  50 => 10,  46 => 9,  44 => 8,  39 => 10,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 21,  116 => 33,  113 => 40,  108 => 28,  104 => 44,  102 => 6,  94 => 37,  89 => 20,  87 => 44,  84 => 30,  81 => 41,  73 => 28,  70 => 24,  67 => 19,  62 => 24,  59 => 19,  55 => 12,  51 => 13,  48 => 10,  41 => 7,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
