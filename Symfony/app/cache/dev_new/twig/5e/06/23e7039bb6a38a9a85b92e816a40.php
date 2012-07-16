<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_5e0623e7039bb6a38a9a85b92e816a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <img width=\"13\" height=\"28\" alt=\"Memory Usage\" style=\"vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcCAYAAAC6YTVCAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJBJREFUeNpi/P//PwOpgImBDDAcNbE4ODiAg+/AgQOC586d+4BLoZGRkQBQ7Xt0mxQIWKCAzXkCBDQJDEBAIHOKiooicSkEBtTz0WQ0xFI5Mqevr285HrUOMAajvb09ySULk5+f3w1SNIDUMwKLsAIg256IrAECoEx6EKQJlLkkgJiDCE0/gPgF4+AuLAECDAAolCeEmdURAgAAAABJRU5ErkJggg==\"/>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, sprintf("%.0f", ($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024)), "html", null, true);
        echo " KB
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 56,  157 => 55,  130 => 48,  66 => 23,  271 => 124,  262 => 121,  258 => 120,  255 => 119,  250 => 118,  248 => 117,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 91,  164 => 63,  154 => 54,  151 => 53,  143 => 49,  140 => 52,  119 => 47,  100 => 39,  83 => 26,  68 => 19,  36 => 8,  76 => 27,  65 => 18,  56 => 17,  136 => 40,  114 => 30,  85 => 31,  61 => 20,  21 => 1,  106 => 35,  45 => 9,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 44,  127 => 29,  123 => 30,  109 => 36,  93 => 33,  90 => 36,  54 => 14,  133 => 49,  124 => 41,  111 => 37,  80 => 25,  60 => 16,  52 => 15,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 44,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 21,  47 => 10,  32 => 6,  97 => 38,  95 => 30,  88 => 29,  78 => 25,  71 => 20,  25 => 4,  26 => 3,  40 => 7,  72 => 16,  64 => 24,  53 => 13,  42 => 10,  34 => 5,  22 => 1,  23 => 29,  17 => 1,  92 => 37,  86 => 27,  79 => 28,  29 => 4,  24 => 3,  19 => 2,  69 => 21,  63 => 18,  58 => 9,  49 => 12,  43 => 12,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 41,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 22,  75 => 26,  57 => 13,  50 => 10,  46 => 13,  44 => 8,  39 => 10,  33 => 7,  30 => 4,  27 => 3,  135 => 50,  129 => 43,  122 => 21,  116 => 33,  113 => 43,  108 => 28,  104 => 40,  102 => 6,  94 => 37,  89 => 28,  87 => 44,  84 => 30,  81 => 29,  73 => 28,  70 => 24,  67 => 19,  62 => 22,  59 => 21,  55 => 20,  51 => 11,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
