<?php

/* AcmeSepaBlogBundle:Default:3D.html.twig */
class __TwigTemplate_028c82726c311e8015555524c3df86bb extends Twig_Template
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
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "\t </h1> </div>

           <h3 align = 'left'>Records</h3>
\t   <h5 align = 'left'    vertical-align: 'left';> ";
        // line 18
        echo $this->env->getExtension('actions')->renderAction("AcmeSepaBlogBundle:Default:TopRecords", array(), array());
        // line 19
        echo "
</h5><br></div>
 </ul>
</div>
</body>
</html>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t 
\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Selection"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
  \t  \t";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
   \t \t<input type=\"submit\" value=\"Go Ahead..\" />
\t</form>
           
\t";
    }

    public function getTemplateName()
    {
        return "AcmeSepaBlogBundle:Default:3D.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  48 => 8,  45 => 7,  35 => 19,  33 => 18,  28 => 15,  26 => 7,  18 => 1,);
    }
}
