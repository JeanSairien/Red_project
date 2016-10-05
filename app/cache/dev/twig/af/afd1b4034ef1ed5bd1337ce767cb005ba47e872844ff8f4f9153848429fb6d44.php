<?php

/* default/page2.html.twig */
class __TwigTemplate_82a2777225007d44342981682283e891ce36af6aafffd2053e9dd87bca6bd354 extends Twig_Template
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
        $__internal_e928543b93da829910247916caee118232d09cd1cefba43bb24f7948d3923661 = $this->env->getExtension("native_profiler");
        $__internal_e928543b93da829910247916caee118232d09cd1cefba43bb24f7948d3923661->enter($__internal_e928543b93da829910247916caee118232d09cd1cefba43bb24f7948d3923661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/page2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e928543b93da829910247916caee118232d09cd1cefba43bb24f7948d3923661->leave($__internal_e928543b93da829910247916caee118232d09cd1cefba43bb24f7948d3923661_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbb9bc9ed3f377c98e73efe7a55b48ef4dd9eac22c693d5e72066f5df3bcef0e = $this->env->getExtension("native_profiler");
        $__internal_bbb9bc9ed3f377c98e73efe7a55b48ef4dd9eac22c693d5e72066f5df3bcef0e->enter($__internal_bbb9bc9ed3f377c98e73efe7a55b48ef4dd9eac22c693d5e72066f5df3bcef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <p>la securité</p>
    ";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_bbb9bc9ed3f377c98e73efe7a55b48ef4dd9eac22c693d5e72066f5df3bcef0e->leave($__internal_bbb9bc9ed3f377c98e73efe7a55b48ef4dd9eac22c693d5e72066f5df3bcef0e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_484da3204c62cea2c0fdcf2296bcfcae3602a1277a5c34e24eb9494afa639280 = $this->env->getExtension("native_profiler");
        $__internal_484da3204c62cea2c0fdcf2296bcfcae3602a1277a5c34e24eb9494afa639280->enter($__internal_484da3204c62cea2c0fdcf2296bcfcae3602a1277a5c34e24eb9494afa639280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_484da3204c62cea2c0fdcf2296bcfcae3602a1277a5c34e24eb9494afa639280->leave($__internal_484da3204c62cea2c0fdcf2296bcfcae3602a1277a5c34e24eb9494afa639280_prof);

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
        return array (  60 => 10,  54 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
