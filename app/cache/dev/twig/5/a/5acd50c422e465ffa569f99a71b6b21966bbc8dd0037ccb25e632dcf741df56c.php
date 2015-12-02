<?php

/* SLAMGSBBundle::layout.html.twig */
class __TwigTemplate_1b5580e5ac4eaf242b6f15bc090e545737a2f88d0577b6516e471724481df26c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38dd3de43589df7e3b4fbf6dacdff0a6dd8c1102258129e57a14fef044c5153d = $this->env->getExtension("native_profiler");
        $__internal_38dd3de43589df7e3b4fbf6dacdff0a6dd8c1102258129e57a14fef044c5153d->enter($__internal_38dd3de43589df7e3b4fbf6dacdff0a6dd8c1102258129e57a14fef044c5153d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
    </div>
        ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "   </body>
</html>
";
        
        $__internal_38dd3de43589df7e3b4fbf6dacdff0a6dd8c1102258129e57a14fef044c5153d->leave($__internal_38dd3de43589df7e3b4fbf6dacdff0a6dd8c1102258129e57a14fef044c5153d_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_387090776e82e305b79d313f2e683d5b913784ec6c94c9717a1d0625576d5c6a = $this->env->getExtension("native_profiler");
        $__internal_387090776e82e305b79d313f2e683d5b913784ec6c94c9717a1d0625576d5c6a->enter($__internal_387090776e82e305b79d313f2e683d5b913784ec6c94c9717a1d0625576d5c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "        ";
        
        $__internal_387090776e82e305b79d313f2e683d5b913784ec6c94c9717a1d0625576d5c6a->leave($__internal_387090776e82e305b79d313f2e683d5b913784ec6c94c9717a1d0625576d5c6a_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_7af6abaa5a2748b09319287c878848bd5478e7ff2fab1f08fe69bc5a00814686 = $this->env->getExtension("native_profiler");
        $__internal_7af6abaa5a2748b09319287c878848bd5478e7ff2fab1f08fe69bc5a00814686->enter($__internal_7af6abaa5a2748b09319287c878848bd5478e7ff2fab1f08fe69bc5a00814686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "              ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "        ";
        
        $__internal_7af6abaa5a2748b09319287c878848bd5478e7ff2fab1f08fe69bc5a00814686->leave($__internal_7af6abaa5a2748b09319287c878848bd5478e7ff2fab1f08fe69bc5a00814686_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_6b77c6ceb3c4dadd860442f7938ecad35fe25a763fea51bd70968a393956807d = $this->env->getExtension("native_profiler");
        $__internal_6b77c6ceb3c4dadd860442f7938ecad35fe25a763fea51bd70968a393956807d->enter($__internal_6b77c6ceb3c4dadd860442f7938ecad35fe25a763fea51bd70968a393956807d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "              ";
        
        $__internal_6b77c6ceb3c4dadd860442f7938ecad35fe25a763fea51bd70968a393956807d->leave($__internal_6b77c6ceb3c4dadd860442f7938ecad35fe25a763fea51bd70968a393956807d_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  92 => 20,  85 => 22,  82 => 20,  76 => 19,  69 => 18,  63 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"*/
/*        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">*/
/*   <head>*/
/*     <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*     <link href="{{ asset('bundles/gsbfrais/styles/styles.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/*   </head>*/
/*   <body>*/
/*     <div id="page">*/
/*       <div id="entete">*/
/*         <img src="{{ asset('bundles/gsbfrais/images/logo.jpg') }}" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />*/
/*         <h1>Suivi du remboursement des frais</h1>*/
/*       </div>*/
/*     </div>*/
/*         {% block menu %}*/
/*         {% endblock %}*/
/*         {% block body %}*/
/*               {% block bloc1 %}*/
/*               {% endblock %}*/
/*         {% endblock %}*/
/*    </body>*/
/* </html>*/
/* */
