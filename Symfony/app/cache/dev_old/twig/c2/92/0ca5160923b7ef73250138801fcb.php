<?php

/* AcmeSepaBlogBundle:Default:index.html.php */
class __TwigTemplate_c2920ca5160923b7ef73250138801fcb extends Twig_Template
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
        echo "<?php \$view->extend('::base.html.php') ?>
<?php 
\$view['slots']->start('menu');
echo 'Welcome to php';
\$view['slots']->stop();
?>";
    }

    public function getTemplateName()
    {
        return "AcmeSepaBlogBundle:Default:index.html.php";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
