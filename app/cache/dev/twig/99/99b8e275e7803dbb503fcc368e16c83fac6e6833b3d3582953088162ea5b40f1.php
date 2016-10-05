<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b2507cdf935099fecf24a86677f5a83d0a59e4262f6b823825aef563581baf69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fcb8675000f6caf3b765b2b4a0cd4f2b489708ef85ad8d1ccb98a021fec020e = $this->env->getExtension("native_profiler");
        $__internal_0fcb8675000f6caf3b765b2b4a0cd4f2b489708ef85ad8d1ccb98a021fec020e->enter($__internal_0fcb8675000f6caf3b765b2b4a0cd4f2b489708ef85ad8d1ccb98a021fec020e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fcb8675000f6caf3b765b2b4a0cd4f2b489708ef85ad8d1ccb98a021fec020e->leave($__internal_0fcb8675000f6caf3b765b2b4a0cd4f2b489708ef85ad8d1ccb98a021fec020e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc57e05f2bce36b2f45cfdc44f2c61ca56dc23d928c58d5fc2d923675742f46f = $this->env->getExtension("native_profiler");
        $__internal_dc57e05f2bce36b2f45cfdc44f2c61ca56dc23d928c58d5fc2d923675742f46f->enter($__internal_dc57e05f2bce36b2f45cfdc44f2c61ca56dc23d928c58d5fc2d923675742f46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dc57e05f2bce36b2f45cfdc44f2c61ca56dc23d928c58d5fc2d923675742f46f->leave($__internal_dc57e05f2bce36b2f45cfdc44f2c61ca56dc23d928c58d5fc2d923675742f46f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e727196c39e7607b50084247fa6147c3378ce05c290be8b77758f0030e6f194 = $this->env->getExtension("native_profiler");
        $__internal_3e727196c39e7607b50084247fa6147c3378ce05c290be8b77758f0030e6f194->enter($__internal_3e727196c39e7607b50084247fa6147c3378ce05c290be8b77758f0030e6f194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e727196c39e7607b50084247fa6147c3378ce05c290be8b77758f0030e6f194->leave($__internal_3e727196c39e7607b50084247fa6147c3378ce05c290be8b77758f0030e6f194_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa79bc86e8039a21d8bdbaa4cd46ce4be786497bfe9f457ec8db5a415d710d55 = $this->env->getExtension("native_profiler");
        $__internal_fa79bc86e8039a21d8bdbaa4cd46ce4be786497bfe9f457ec8db5a415d710d55->enter($__internal_fa79bc86e8039a21d8bdbaa4cd46ce4be786497bfe9f457ec8db5a415d710d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fa79bc86e8039a21d8bdbaa4cd46ce4be786497bfe9f457ec8db5a415d710d55->leave($__internal_fa79bc86e8039a21d8bdbaa4cd46ce4be786497bfe9f457ec8db5a415d710d55_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
