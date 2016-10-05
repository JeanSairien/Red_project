<?php

/* default/addUser.html.twig */
class __TwigTemplate_6eb491f9af8433bca8433b0d66d965c9a31e9aa275042d16ae094187c73565ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/addUser.html.twig", 1);
        $this->blocks = array(
            'tilte' => array($this, 'block_tilte'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8b4c200dc42fbffe242ec14c4799c267cd19847b8c94d30553ac46870e8fa85 = $this->env->getExtension("native_profiler");
        $__internal_b8b4c200dc42fbffe242ec14c4799c267cd19847b8c94d30553ac46870e8fa85->enter($__internal_b8b4c200dc42fbffe242ec14c4799c267cd19847b8c94d30553ac46870e8fa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/addUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b4c200dc42fbffe242ec14c4799c267cd19847b8c94d30553ac46870e8fa85->leave($__internal_b8b4c200dc42fbffe242ec14c4799c267cd19847b8c94d30553ac46870e8fa85_prof);

    }

    // line 2
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_a600a21cd308d348266a4f4a0b8793278e5a4f4f5e2b61f37ab92a603578d3a0 = $this->env->getExtension("native_profiler");
        $__internal_a600a21cd308d348266a4f4a0b8793278e5a4f4f5e2b61f37ab92a603578d3a0->enter($__internal_a600a21cd308d348266a4f4a0b8793278e5a4f4f5e2b61f37ab92a603578d3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 3
        echo "    ";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
    page 2 
    ";
        
        $__internal_a600a21cd308d348266a4f4a0b8793278e5a4f4f5e2b61f37ab92a603578d3a0->leave($__internal_a600a21cd308d348266a4f4a0b8793278e5a4f4f5e2b61f37ab92a603578d3a0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6121b7ba63f32b1c96bf86ca61e46bb27be96c661264e492803204f4cb5cd2b = $this->env->getExtension("native_profiler");
        $__internal_e6121b7ba63f32b1c96bf86ca61e46bb27be96c661264e492803204f4cb5cd2b->enter($__internal_e6121b7ba63f32b1c96bf86ca61e46bb27be96c661264e492803204f4cb5cd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        Ajout des utilisateurs 
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start');
        echo "
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "
        ";
        
        $__internal_e6121b7ba63f32b1c96bf86ca61e46bb27be96c661264e492803204f4cb5cd2b->leave($__internal_e6121b7ba63f32b1c96bf86ca61e46bb27be96c661264e492803204f4cb5cd2b_prof);

    }

    public function getTemplateName()
    {
        return "default/addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  61 => 8,  58 => 7,  52 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig"%}*/
/* {% block tilte %}*/
/*     {{parent()}}*/
/*     page 2 */
/*     {% endblock %}*/
/*     {% block body %}*/
/*         Ajout des utilisateurs */
/*         {{form_start(formulaire)}}*/
/*         {{form_end(formulaire)}}*/
/*         {% endblock %}*/
