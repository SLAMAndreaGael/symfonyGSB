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
        $__internal_405acb3a8c37ac6e6ce10caeb1fe709a991ff758cdd80820ff69fc2278c3e212 = $this->env->getExtension("native_profiler");
        $__internal_405acb3a8c37ac6e6ce10caeb1fe709a991ff758cdd80820ff69fc2278c3e212->enter($__internal_405acb3a8c37ac6e6ce10caeb1fe709a991ff758cdd80820ff69fc2278c3e212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle::layout.html.twig"));

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
        
        $__internal_405acb3a8c37ac6e6ce10caeb1fe709a991ff758cdd80820ff69fc2278c3e212->leave($__internal_405acb3a8c37ac6e6ce10caeb1fe709a991ff758cdd80820ff69fc2278c3e212_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6c76a27eefa54245239b30056290b35e24bcc9a3006200f3ef681d7e3df4274 = $this->env->getExtension("native_profiler");
        $__internal_c6c76a27eefa54245239b30056290b35e24bcc9a3006200f3ef681d7e3df4274->enter($__internal_c6c76a27eefa54245239b30056290b35e24bcc9a3006200f3ef681d7e3df4274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "        ";
        
        $__internal_c6c76a27eefa54245239b30056290b35e24bcc9a3006200f3ef681d7e3df4274->leave($__internal_c6c76a27eefa54245239b30056290b35e24bcc9a3006200f3ef681d7e3df4274_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_971e71ba3b0a2dfd8cbb4b7bc01c93859983644fe2251fe6b6937ab27ec84d3a = $this->env->getExtension("native_profiler");
        $__internal_971e71ba3b0a2dfd8cbb4b7bc01c93859983644fe2251fe6b6937ab27ec84d3a->enter($__internal_971e71ba3b0a2dfd8cbb4b7bc01c93859983644fe2251fe6b6937ab27ec84d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "              ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "        ";
        
        $__internal_971e71ba3b0a2dfd8cbb4b7bc01c93859983644fe2251fe6b6937ab27ec84d3a->leave($__internal_971e71ba3b0a2dfd8cbb4b7bc01c93859983644fe2251fe6b6937ab27ec84d3a_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_95638f5b2c6ab3dab919a3c75f379137f7e4f7e56fbec14471161ee964da45cb = $this->env->getExtension("native_profiler");
        $__internal_95638f5b2c6ab3dab919a3c75f379137f7e4f7e56fbec14471161ee964da45cb->enter($__internal_95638f5b2c6ab3dab919a3c75f379137f7e4f7e56fbec14471161ee964da45cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "              ";
        
        $__internal_95638f5b2c6ab3dab919a3c75f379137f7e4f7e56fbec14471161ee964da45cb->leave($__internal_95638f5b2c6ab3dab919a3c75f379137f7e4f7e56fbec14471161ee964da45cb_prof);

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
