<?php

/* AcmeSepaBlogBundle:Default:new.html.twig */
class __TwigTemplate_315704667875d3325cfc148de57c79f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
<title>Guess Game</title>
</head>
<body>          
\t   ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "

</body>
</html>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t 
\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Selection"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
  \t  \t";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
   \t \t<input type=\"submit\" value=\"Go Ahead..\" />
\t</form>
           
\t";
    }

    public function getTemplateName()
    {
        return "AcmeSepaBlogBundle:Default:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 8,  38 => 7,  35 => 6,  27 => 14,  25 => 6,  18 => 1,);
    }
}
