<?php

/* base.html.twig */
class __TwigTemplate_0ab99034d3b3a0c4ce9d0cd9d8180c40dbf2b676966b564278a393384deecbd8 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "RennesJs!";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "            

        ";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  144 => 63,  138 => 60,  135 => 59,  130 => 11,  124 => 5,  118 => 64,  115 => 63,  113 => 59,  71 => 20,  67 => 19,  62 => 17,  58 => 16,  54 => 15,  49 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  29 => 5,  23 => 1,);
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
