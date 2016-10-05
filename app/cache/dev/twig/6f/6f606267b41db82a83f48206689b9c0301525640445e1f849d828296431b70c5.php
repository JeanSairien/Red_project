<?php

/* default/index.html.twig */
class __TwigTemplate_93eb84bddd13c10f8653bbd19d2f5c0a9e278bb8db515d72d0c88bd0892ec942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_8d4b3cc0b49111585e832b10e3ff97a2bf1f81e5cc57a23ce9480751d7de554d = $this->env->getExtension("native_profiler");
        $__internal_8d4b3cc0b49111585e832b10e3ff97a2bf1f81e5cc57a23ce9480751d7de554d->enter($__internal_8d4b3cc0b49111585e832b10e3ff97a2bf1f81e5cc57a23ce9480751d7de554d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4b3cc0b49111585e832b10e3ff97a2bf1f81e5cc57a23ce9480751d7de554d->leave($__internal_8d4b3cc0b49111585e832b10e3ff97a2bf1f81e5cc57a23ce9480751d7de554d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34262393d2fc894687535071673c144632ed97cbe2fd8825edb3c35bc5298e5b = $this->env->getExtension("native_profiler");
        $__internal_34262393d2fc894687535071673c144632ed97cbe2fd8825edb3c35bc5298e5b->enter($__internal_34262393d2fc894687535071673c144632ed97cbe2fd8825edb3c35bc5298e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_34262393d2fc894687535071673c144632ed97cbe2fd8825edb3c35bc5298e5b->leave($__internal_34262393d2fc894687535071673c144632ed97cbe2fd8825edb3c35bc5298e5b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7303369359c47d62b60232bfea9ec66ef6273e874bd7826c57678bbc3db77be = $this->env->getExtension("native_profiler");
        $__internal_e7303369359c47d62b60232bfea9ec66ef6273e874bd7826c57678bbc3db77be->enter($__internal_e7303369359c47d62b60232bfea9ec66ef6273e874bd7826c57678bbc3db77be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "<style>
    
</style>
";
        
        $__internal_e7303369359c47d62b60232bfea9ec66ef6273e874bd7826c57678bbc3db77be->leave($__internal_e7303369359c47d62b60232bfea9ec66ef6273e874bd7826c57678bbc3db77be_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     */
/* </style>*/
/* {% endblock %}*/
/* */
