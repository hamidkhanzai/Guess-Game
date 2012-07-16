<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d87b294606c03c9c6ce52399dc9620e2 extends Twig_Template
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
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\".

Please e-mail us at [email] and let us know what you were doing when this
error occurred. We will fix it as soon as possible. Sorry for any
inconvenience caused.
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  79 => 40,  29 => 6,  24 => 4,  19 => 1,  69 => 14,  63 => 10,  58 => 9,  49 => 6,  43 => 15,  37 => 8,  20 => 1,  139 => 26,  131 => 44,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 35,  96 => 34,  91 => 33,  82 => 30,  77 => 39,  75 => 26,  57 => 22,  50 => 13,  46 => 14,  44 => 10,  39 => 8,  33 => 7,  30 => 4,  27 => 6,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 38,  102 => 37,  94 => 32,  89 => 29,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 20,  67 => 20,  62 => 16,  59 => 15,  55 => 8,  51 => 11,  48 => 10,  41 => 14,  38 => 8,  35 => 8,  31 => 7,  28 => 3,);
    }
}
