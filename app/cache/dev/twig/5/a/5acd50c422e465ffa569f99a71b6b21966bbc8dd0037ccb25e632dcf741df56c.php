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
        $__internal_de74eca29503967dbf906c0256e888ca1bddf5017ef1dacaab4a8eb8f8ff6ad1 = $this->env->getExtension("native_profiler");
        $__internal_de74eca29503967dbf906c0256e888ca1bddf5017ef1dacaab4a8eb8f8ff6ad1->enter($__internal_de74eca29503967dbf906c0256e888ca1bddf5017ef1dacaab4a8eb8f8ff6ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle::layout.html.twig"));

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
        
        $__internal_de74eca29503967dbf906c0256e888ca1bddf5017ef1dacaab4a8eb8f8ff6ad1->leave($__internal_de74eca29503967dbf906c0256e888ca1bddf5017ef1dacaab4a8eb8f8ff6ad1_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc50d957390d7b1d387053a73fdcbd8d3855921d0640df84dbfe92890c893a9c = $this->env->getExtension("native_profiler");
        $__internal_fc50d957390d7b1d387053a73fdcbd8d3855921d0640df84dbfe92890c893a9c->enter($__internal_fc50d957390d7b1d387053a73fdcbd8d3855921d0640df84dbfe92890c893a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "        ";
        
        $__internal_fc50d957390d7b1d387053a73fdcbd8d3855921d0640df84dbfe92890c893a9c->leave($__internal_fc50d957390d7b1d387053a73fdcbd8d3855921d0640df84dbfe92890c893a9c_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_56e4aa1bcf9c922afc14e728122bdcabbd839a454c76b4434dfbd9aa6df32798 = $this->env->getExtension("native_profiler");
        $__internal_56e4aa1bcf9c922afc14e728122bdcabbd839a454c76b4434dfbd9aa6df32798->enter($__internal_56e4aa1bcf9c922afc14e728122bdcabbd839a454c76b4434dfbd9aa6df32798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "              ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "        ";
        
        $__internal_56e4aa1bcf9c922afc14e728122bdcabbd839a454c76b4434dfbd9aa6df32798->leave($__internal_56e4aa1bcf9c922afc14e728122bdcabbd839a454c76b4434dfbd9aa6df32798_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_f92a830775cfc3e1206f22cdc8a1f21822cc8a455a95651ad7fc3efc9fa78c4c = $this->env->getExtension("native_profiler");
        $__internal_f92a830775cfc3e1206f22cdc8a1f21822cc8a455a95651ad7fc3efc9fa78c4c->enter($__internal_f92a830775cfc3e1206f22cdc8a1f21822cc8a455a95651ad7fc3efc9fa78c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "              ";
        
        $__internal_f92a830775cfc3e1206f22cdc8a1f21822cc8a455a95651ad7fc3efc9fa78c4c->leave($__internal_f92a830775cfc3e1206f22cdc8a1f21822cc8a455a95651ad7fc3efc9fa78c4c_prof);

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
