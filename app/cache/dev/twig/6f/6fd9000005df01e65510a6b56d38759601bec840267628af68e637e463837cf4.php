<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20bcf48a4a6182722fadc3e44b97134b1cc1171b8bf0fe4b40fc9aa100aa45a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3795969f905d1bcaae8390212a5b3a79e8f825a1cb6c5f053b7c11e63e5f96fe = $this->env->getExtension("native_profiler");
        $__internal_3795969f905d1bcaae8390212a5b3a79e8f825a1cb6c5f053b7c11e63e5f96fe->enter($__internal_3795969f905d1bcaae8390212a5b3a79e8f825a1cb6c5f053b7c11e63e5f96fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3795969f905d1bcaae8390212a5b3a79e8f825a1cb6c5f053b7c11e63e5f96fe->leave($__internal_3795969f905d1bcaae8390212a5b3a79e8f825a1cb6c5f053b7c11e63e5f96fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ecf4d7122f5790823509d64f2644e805bc39964d2c7a0e401272b20cfc202df = $this->env->getExtension("native_profiler");
        $__internal_2ecf4d7122f5790823509d64f2644e805bc39964d2c7a0e401272b20cfc202df->enter($__internal_2ecf4d7122f5790823509d64f2644e805bc39964d2c7a0e401272b20cfc202df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ecf4d7122f5790823509d64f2644e805bc39964d2c7a0e401272b20cfc202df->leave($__internal_2ecf4d7122f5790823509d64f2644e805bc39964d2c7a0e401272b20cfc202df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d795ce4e209272161ed1fffaca14efa666a8dc5e70fba4a7fa946df5847ddfe7 = $this->env->getExtension("native_profiler");
        $__internal_d795ce4e209272161ed1fffaca14efa666a8dc5e70fba4a7fa946df5847ddfe7->enter($__internal_d795ce4e209272161ed1fffaca14efa666a8dc5e70fba4a7fa946df5847ddfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d795ce4e209272161ed1fffaca14efa666a8dc5e70fba4a7fa946df5847ddfe7->leave($__internal_d795ce4e209272161ed1fffaca14efa666a8dc5e70fba4a7fa946df5847ddfe7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1c17a663693cc6d2e9ed24dd56491092fe77ee480d5ac79b5605b489da7bb0d = $this->env->getExtension("native_profiler");
        $__internal_c1c17a663693cc6d2e9ed24dd56491092fe77ee480d5ac79b5605b489da7bb0d->enter($__internal_c1c17a663693cc6d2e9ed24dd56491092fe77ee480d5ac79b5605b489da7bb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1c17a663693cc6d2e9ed24dd56491092fe77ee480d5ac79b5605b489da7bb0d->leave($__internal_c1c17a663693cc6d2e9ed24dd56491092fe77ee480d5ac79b5605b489da7bb0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
