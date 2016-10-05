<?php

/* default/page2.html.twig */
class __TwigTemplate_b031b8d450229a59d4d5a359a9b641e1bea197c7ba5134b0ae9958a27cad2ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/page2.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    
    <p>la securité</p>
    ";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "<style>
    .col-lg-6{
    \tdisplay: flex;
    \tjustify-content: center;
        font-size: 45px;
        color: black ;
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "default/page2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  42 => 9,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <p>la securité</p>*/
/*     {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     .col-lg-6{*/
/*     	display: flex;*/
/*     	justify-content: center;*/
/*         font-size: 45px;*/
/*         color: black ;*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
