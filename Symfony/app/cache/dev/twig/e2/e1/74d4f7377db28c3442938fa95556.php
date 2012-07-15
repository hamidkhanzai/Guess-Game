<?php

/* AcmeSepaBlogBundle:Default:TopList.html.twig */
class __TwigTemplate_e2e174d4f7377db28c3442938fa95556 extends Twig_Template
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
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "visitors"));
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "name"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "first"), "html", null, true);
            echo "<br>    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "AcmeSepaBlogBundle:Default:TopList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  17 => 2,);
    }
}
