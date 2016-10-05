<?php

/* default/page1.html.twig */
class __TwigTemplate_fb4eb6c88070a3b4f8f9cf5b18f0c2dd20910a9a2775138c1abe5f78ff45fd71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/page1.html.twig", 1);
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
        $__internal_3c3ea9d26cf4e5a1c59186163d3d2538414660f1f3c9b60285843d88233d9a69 = $this->env->getExtension("native_profiler");
        $__internal_3c3ea9d26cf4e5a1c59186163d3d2538414660f1f3c9b60285843d88233d9a69->enter($__internal_3c3ea9d26cf4e5a1c59186163d3d2538414660f1f3c9b60285843d88233d9a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/page1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c3ea9d26cf4e5a1c59186163d3d2538414660f1f3c9b60285843d88233d9a69->leave($__internal_3c3ea9d26cf4e5a1c59186163d3d2538414660f1f3c9b60285843d88233d9a69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef3f33e21169e93bd0e64ee860416eb0a1e1c2d2d1befb1184547281e7f75b48 = $this->env->getExtension("native_profiler");
        $__internal_ef3f33e21169e93bd0e64ee860416eb0a1e1c2d2d1befb1184547281e7f75b48->enter($__internal_ef3f33e21169e93bd0e64ee860416eb0a1e1c2d2d1befb1184547281e7f75b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1>PAgeONe</h1>
    ";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_ef3f33e21169e93bd0e64ee860416eb0a1e1c2d2d1befb1184547281e7f75b48->leave($__internal_ef3f33e21169e93bd0e64ee860416eb0a1e1c2d2d1befb1184547281e7f75b48_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b86cf34a4ea44deecfdc0fd74fcd7b8a4bef278e3746388cc453fdd6f43208b = $this->env->getExtension("native_profiler");
        $__internal_9b86cf34a4ea44deecfdc0fd74fcd7b8a4bef278e3746388cc453fdd6f43208b->enter($__internal_9b86cf34a4ea44deecfdc0fd74fcd7b8a4bef278e3746388cc453fdd6f43208b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "<style>
    h1{
       color: red; 
        
    }
</style>
";
        
        $__internal_9b86cf34a4ea44deecfdc0fd74fcd7b8a4bef278e3746388cc453fdd6f43208b->leave($__internal_9b86cf34a4ea44deecfdc0fd74fcd7b8a4bef278e3746388cc453fdd6f43208b_prof);

    }

    public function getTemplateName()
    {
        return "default/page1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <h1>PAgeONe</h1>*/
/*     {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     h1{*/
/*        color: red; */
/*         */
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
