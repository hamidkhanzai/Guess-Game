<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_a0bccaca107625b553731b6a33194f1c extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != $this->getContext($context, "position"))) {
            // line 3
            echo "    <div style=\"clear: both; height: 40px;\"></div>
";
        }
        // line 5
        echo "
<div class=\"sf-toolbarreset\"
    ";
        // line 7
        if (("normal" != $this->getContext($context, "position"))) {
            // line 8
            echo "    style=\"position: ";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo ";
        background-color: #f7f7f7;
            background-image: -moz-linear-gradient(-90deg, #e4e4e4, #ffffff);
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
            bottom: 0;
            left:0;
            margin:0;
            padding: 0;
            z-index: 6000000;
            width: 100%;
            border-top: 1px solid #bbb;
            font: 11px Verdana, Arial, sans-serif;
            text-align: left;
            color: #2f2f2f;\"
    ";
        }
        // line 23
        echo ">

    <span style=\"display: inline-block; min-height: 24px; width: 40px; float: right;\">&nbsp;</span>

    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"), "profiler_url" => $this->getContext($context, "profiler_url"), "token" => $this->getAttribute($this->getContext($context, "profile"), "token"), "name" => $this->getContext($context, "name"), "verbose" => $this->getContext($context, "verbose"))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != $this->getContext($context, "position"))) {
            // line 39
            echo "        <span style=\"display:block; position:absolute; top:12px; right:10px; width:14px; height:14px; cursor: pointer;\">
            <img width=\"15\" height=\"15\" alt=\"Hide Toolbar\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1Mjc0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1Mjg0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3Q0Q5NTUyNTQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyNjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PjHyj8cAAAFiSURBVHjajJPNSsNAFIVvfpZNFwXBkBACcdcqiFASNz6A4FYR4lYUX8ONb6C4EwRXvoFY4rYotCRLQwgk4CZSl/nx3mFSplmUHvjIzJk5YW5yRwqCADo6Rk6QA2QXmXJekTdxoyqMDeSeh0V5nBvkGblGfsXwNvKJbMF6nSNjZB/5k7n5uEGw1Q5yRwMKn4pHtSwLPM+Dfr/P5r1eD1zXZb6gKyqFwn7rSJIEuq6DoigwGo3YmJ6qqoJhGGxdkC/zj8HUNA2EYQhlWYIsy+A4DgvWdQ1RFLF1QWMKD0RnsVhAHMcrRSZJAkVRdGsfUPhHdDRNA9u2V3aZpsn8jnIKT8Sah8Ph8qh0AnrSnPxOzR8y//HLmrMsYzXPZjNI0xTm8zlUVQV5nndrfpF4e74jR7C5npCLtknOkO8Ng1PeotCGc2QPeVgTqpBb5JBas3sxyLjkR/L5rWo14f6X+LZ/AQYA+DZpzJCnQZ0AAAAASUVORK5CYII=\" onclick=\"this.parentNode.parentNode.style.display = 'none'; (this.parentNode.parentNode.previousElementSibling || this.parentNode.parentNode.previousSibling).style.display = 'none';\" />
        </span>
    ";
        }
        // line 43
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  180 => 68,  175 => 66,  118 => 36,  170 => 63,  157 => 55,  130 => 48,  66 => 21,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  164 => 59,  154 => 45,  151 => 53,  143 => 49,  140 => 52,  119 => 34,  100 => 27,  83 => 26,  68 => 22,  36 => 6,  76 => 39,  65 => 18,  56 => 14,  136 => 40,  114 => 34,  85 => 28,  61 => 28,  21 => 3,  106 => 35,  45 => 9,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 57,  145 => 49,  141 => 55,  134 => 50,  132 => 43,  127 => 29,  123 => 35,  109 => 36,  93 => 33,  90 => 36,  54 => 19,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 20,  52 => 13,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 44,  103 => 28,  74 => 38,  47 => 15,  32 => 8,  97 => 26,  95 => 30,  88 => 32,  78 => 25,  71 => 37,  25 => 5,  26 => 5,  40 => 8,  72 => 17,  64 => 35,  53 => 13,  42 => 8,  34 => 11,  22 => 3,  23 => 29,  17 => 1,  92 => 23,  86 => 27,  79 => 28,  29 => 4,  24 => 3,  19 => 2,  69 => 21,  63 => 18,  58 => 16,  49 => 12,  43 => 12,  37 => 8,  20 => 2,  139 => 47,  131 => 48,  128 => 43,  125 => 36,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 43,  77 => 25,  75 => 24,  57 => 27,  50 => 12,  46 => 13,  44 => 14,  39 => 10,  33 => 5,  30 => 7,  27 => 6,  135 => 41,  129 => 38,  122 => 21,  116 => 33,  113 => 43,  108 => 28,  104 => 40,  102 => 6,  94 => 32,  89 => 30,  87 => 44,  84 => 29,  81 => 28,  73 => 23,  70 => 24,  67 => 19,  62 => 22,  59 => 21,  55 => 19,  51 => 23,  48 => 10,  41 => 9,  38 => 11,  35 => 7,  31 => 10,  28 => 3,);
    }
}
