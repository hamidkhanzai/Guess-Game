<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_85bc4958d86d386c9b85ed935c88e08c extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (twig_in_filter($this->getAttribute($this->getContext($context, "log"), "priorityName"), array(0 => "EMERG", 1 => "ERR", 2 => "CRIT", 3 => "ALERT", 4 => "ERROR", 5 => "CRITICAL"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 45,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 11,  97 => 22,  95 => 21,  88 => 19,  78 => 17,  71 => 14,  25 => 4,  26 => 3,  40 => 7,  72 => 16,  64 => 15,  53 => 13,  42 => 7,  34 => 7,  22 => 3,  23 => 3,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  29 => 5,  24 => 3,  19 => 2,  69 => 14,  63 => 10,  58 => 9,  49 => 8,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 18,  77 => 28,  75 => 16,  57 => 22,  50 => 13,  46 => 14,  44 => 8,  39 => 15,  33 => 7,  30 => 4,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 24,  102 => 37,  94 => 31,  89 => 20,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 26,  67 => 12,  62 => 24,  59 => 23,  55 => 14,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 8,  31 => 4,  28 => 3,);
    }
}
