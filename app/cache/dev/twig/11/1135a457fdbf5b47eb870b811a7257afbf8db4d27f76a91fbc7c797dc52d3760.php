<?php

/* base.html.twig */
class __TwigTemplate_d95cd0604d0fc68700fb85d5b5d68021f88d3e02c7e6f473901d12e04a1547ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84efd02da6cb1ded6fe26851379d6b031d07b5a4583d9744a8b3005fb886e62b = $this->env->getExtension("native_profiler");
        $__internal_84efd02da6cb1ded6fe26851379d6b031d07b5a4583d9744a8b3005fb886e62b->enter($__internal_84efd02da6cb1ded6fe26851379d6b031d07b5a4583d9744a8b3005fb886e62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <nav>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">home</a>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("page", array("num" => "1"));
        echo "\">page1</a>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("page", array("num" => "2"));
        echo "\">page2</a>
            <a href=\"shambhalafm.fr\">La Radio</a>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("ajoutUser");
        echo "\">Ajout User</a>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ajoutNews");
        echo "\">Ajout News</a>
            
        </nav>
            <section>
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-6\">
                    <h1> Les entreprise et sponsors </h1>
                    <p>Realiser et presenté par l'entreprise dareboost</p>
                    <p>conference sur la performence et la securité</p>
                    </div>
                    <div class=\"col-lg-6\">
                        
                    </div>




                </div>


            </section>
            <section>
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-6\">
                        <p> Voici les entreprises presentes au meetup de la rentré Rennes Js</p>
                    </div>
                    <div class=\"col-lg-6\">
                       <p> Les News </p>
                            

                    </div>                  



                </div>        



            </section>
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>
</html>
";
        
        $__internal_84efd02da6cb1ded6fe26851379d6b031d07b5a4583d9744a8b3005fb886e62b->leave($__internal_84efd02da6cb1ded6fe26851379d6b031d07b5a4583d9744a8b3005fb886e62b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfdbae89b1da2e7b7cb724f392c4674acd805ff76b57187eaea4aab919acbd3f = $this->env->getExtension("native_profiler");
        $__internal_cfdbae89b1da2e7b7cb724f392c4674acd805ff76b57187eaea4aab919acbd3f->enter($__internal_cfdbae89b1da2e7b7cb724f392c4674acd805ff76b57187eaea4aab919acbd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "RennesJs!";
        
        $__internal_cfdbae89b1da2e7b7cb724f392c4674acd805ff76b57187eaea4aab919acbd3f->leave($__internal_cfdbae89b1da2e7b7cb724f392c4674acd805ff76b57187eaea4aab919acbd3f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40874ad4df123e3ebf868e85ab82d8dde0a31b8c8e531bcb6256331056fbf7b2 = $this->env->getExtension("native_profiler");
        $__internal_40874ad4df123e3ebf868e85ab82d8dde0a31b8c8e531bcb6256331056fbf7b2->enter($__internal_40874ad4df123e3ebf868e85ab82d8dde0a31b8c8e531bcb6256331056fbf7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_40874ad4df123e3ebf868e85ab82d8dde0a31b8c8e531bcb6256331056fbf7b2->leave($__internal_40874ad4df123e3ebf868e85ab82d8dde0a31b8c8e531bcb6256331056fbf7b2_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_97eb720aa445ab5112399791e0da87f2327e1a5f0c124105ac684acacec56498 = $this->env->getExtension("native_profiler");
        $__internal_97eb720aa445ab5112399791e0da87f2327e1a5f0c124105ac684acacec56498->enter($__internal_97eb720aa445ab5112399791e0da87f2327e1a5f0c124105ac684acacec56498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "            

        ";
        
        $__internal_97eb720aa445ab5112399791e0da87f2327e1a5f0c124105ac684acacec56498->leave($__internal_97eb720aa445ab5112399791e0da87f2327e1a5f0c124105ac684acacec56498_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_788f6efb40a72239ff0c50e3d5e81ba446562c664017d719ac3bd98da02608ac = $this->env->getExtension("native_profiler");
        $__internal_788f6efb40a72239ff0c50e3d5e81ba446562c664017d719ac3bd98da02608ac->enter($__internal_788f6efb40a72239ff0c50e3d5e81ba446562c664017d719ac3bd98da02608ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_788f6efb40a72239ff0c50e3d5e81ba446562c664017d719ac3bd98da02608ac->leave($__internal_788f6efb40a72239ff0c50e3d5e81ba446562c664017d719ac3bd98da02608ac_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 63,  159 => 60,  153 => 59,  142 => 11,  130 => 5,  121 => 64,  118 => 63,  116 => 59,  74 => 20,  70 => 19,  65 => 17,  61 => 16,  57 => 15,  52 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}RennesJs!{% endblock %}</title>*/
/*     */
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('bundles/framework/css/style.css') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('bundles/framework/css/css/bootstrap.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <nav>*/
/*             <a href="{{path('homepage')}}">home</a>*/
/*             <a href="{{path('page',{'num':'1'})}}">page1</a>*/
/*             <a href="{{path('page',{'num':'2'})}}">page2</a>*/
/*             <a href="shambhalafm.fr">La Radio</a>*/
/*             <a href="{{path('ajoutUser')}}">Ajout User</a>*/
/*             <a href="{{path('ajoutNews')}}">Ajout News</a>*/
/*             */
/*         </nav>*/
/*             <section>*/
/*                 <div class="col-lg-12">*/
/*                     <div class="col-lg-6">*/
/*                     <h1> Les entreprise et sponsors </h1>*/
/*                     <p>Realiser et presenté par l'entreprise dareboost</p>*/
/*                     <p>conference sur la performence et la securité</p>*/
/*                     </div>*/
/*                     <div class="col-lg-6">*/
/*                         */
/*                     </div>*/
/* */
/* */
/* */
/* */
/*                 </div>*/
/* */
/* */
/*             </section>*/
/*             <section>*/
/*                 <div class="col-lg-12">*/
/*                     <div class="col-lg-6">*/
/*                         <p> Voici les entreprises presentes au meetup de la rentré Rennes Js</p>*/
/*                     </div>*/
/*                     <div class="col-lg-6">*/
/*                        <p> Les News </p>*/
/*                             */
/* */
/*                     </div>                  */
/* */
/* */
/* */
/*                 </div>        */
/* */
/* */
/* */
/*             </section>*/
/*         {% block body %}*/
/*             */
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
