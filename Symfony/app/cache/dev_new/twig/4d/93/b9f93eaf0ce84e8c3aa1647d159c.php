<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_4d93b9f93eaf0ce84e8c3aa1647d159c extends Twig_Template
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
        echo "<div class=\"sf-exceptionreset\">

    <div class=\"block_exception\">
        <div class=\"block_exception_detected clear_fix\">
            <div class=\"illustration_exception\">
                <img alt=\"Exception detected!\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/exception_detected.gif"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"text_exception\">

                <div class=\"open_quote\">
                    <img alt=\"\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/open_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

                <h1>
                    ";
        // line 15
        echo $this->env->getExtension('code')->formatFileFromText(strtr(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message")), array("
" => "<br />")));
        echo "
                </h1>

                <div>
                    <strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "exception"), "class"));
        echo "
                </div>

                ";
        // line 22
        $context["previous_count"] = twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "allPrevious"));
        // line 23
        echo "                ";
        if ($this->getContext($context, "previous_count")) {
            // line 24
            echo "                    <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "previous_count"), "html", null, true);
            echo "</strong> linked Exception";
            echo ((($this->getContext($context, "previous_count") > 1)) ? ("s") : (""));
            echo ":</span>
                        <ul>
                            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "allPrevious"));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 27
                echo "                                <li>
                                    ";
                // line 28
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "previous"), "class"));
                echo " <a href=\"#traces_link_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon_traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "_open', 'icon_traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "_close');\">&raquo;</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 31
            echo "                        </ul>
                    </div>
                ";
        }
        // line 34
        echo "
                <div class=\"close_quote\">
                    <img alt=\"\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/close_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

            </div>
        </div>
    </div>

    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 44
            echo "        ";
            $this->env->loadTemplate("TwigBundle:Exception:traces.html.twig")->display(array("exception" => $this->getContext($context, "e"), "position" => $this->getContext($context, "position"), "count" => $this->getContext($context, "previous_count")));
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "
    ";
        // line 47
        if ($this->getContext($context, "logger")) {
            // line 48
            echo "        <div class=\"block\">
            <div class=\"logs clear_fix\">
                ";
            // line 50
            ob_start();
            // line 51
            echo "                <h2>
                    Logs&nbsp;
                    <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon_logs_open', 'icon_logs_close'); return false;\">
                        <img class=\"toggle\" id=\"icon_logs_open\" alt=\"+\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                        <img class=\"toggle\" id=\"icon_logs_close\" alt=\"-\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                    </a>
                </h2>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 59
            echo "
                ";
            // line 60
            if ($this->getAttribute($this->getContext($context, "logger"), "counterrors")) {
                // line 61
                echo "                    <div class=\"error_count\">
                        <span>
                            ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logger"), "counterrors"), "html", null, true);
                echo " error";
                echo ((($this->getAttribute($this->getContext($context, "logger"), "counterrors") > 1)) ? ("s") : (""));
                echo "
                        </span>
                    </div>
                ";
            }
            // line 67
            echo "
            </div>

            <div id=\"logs\">
                ";
            // line 71
            $this->env->loadTemplate("TwigBundle:Exception:logs.html.twig")->display(array("logs" => $this->getAttribute($this->getContext($context, "logger"), "logs")));
            // line 72
            echo "            </div>

        </div>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if ($this->getContext($context, "currentContent")) {
            // line 78
            echo "        <div class=\"block\">
            ";
            // line 79
            ob_start();
            // line 80
            echo "            <h2>
                Content of the Output&nbsp;
                <a href=\"#\" onclick=\"toggle('output_content'); switchIcons('icon_content_open', 'icon_content_close'); return false;\">
                    <img class=\"toggle\" id=\"icon_content_close\" alt=\"-\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                    <img class=\"toggle\" id=\"icon_content_open\" alt=\"+\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 88
            echo "
            <div id=\"output_content\" style=\"display: none\">
                ";
            // line 90
            echo twig_escape_filter($this->env, $this->getContext($context, "currentContent"), "html", null, true);
            echo "
            </div>

            <div style=\"clear: both\"></div>
        </div>
    ";
        }
        // line 96
        echo "
</div>

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0 ; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, visibility1, visibility2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        visibility1 = icon1.style.visibility;
        visibility2 = icon2.style.visibility;

        icon1.style.visibility = visibility2;
        icon2.style.visibility = visibility1;
    }
//]]></script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 45,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 11,  97 => 22,  95 => 21,  88 => 19,  78 => 17,  71 => 14,  25 => 4,  26 => 3,  40 => 7,  72 => 16,  64 => 15,  53 => 13,  42 => 7,  34 => 7,  22 => 3,  23 => 3,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  29 => 4,  24 => 6,  19 => 2,  69 => 14,  63 => 10,  58 => 9,  49 => 8,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 18,  77 => 28,  75 => 16,  57 => 22,  50 => 13,  46 => 14,  44 => 11,  39 => 15,  33 => 7,  30 => 4,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 24,  102 => 37,  94 => 31,  89 => 20,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 26,  67 => 12,  62 => 24,  59 => 23,  55 => 14,  51 => 11,  48 => 10,  41 => 6,  38 => 6,  35 => 8,  31 => 5,  28 => 3,);
    }
}
