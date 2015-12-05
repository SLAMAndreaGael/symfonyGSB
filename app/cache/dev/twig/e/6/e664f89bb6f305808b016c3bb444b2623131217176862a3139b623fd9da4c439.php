<?php

/* SLAMGSBBundle:Home:connexion.html.twig */
class __TwigTemplate_449ba41b40a82cbc240ab8a82c3a1363438c9ebbcd82beeb972b7d67908f8502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SLAMGSBBundle::layout.html.twig", "SLAMGSBBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SLAMGSBBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8945f209602821fa3c1d8c533c29cfc55118d23625edcb4019765fc20645c3b = $this->env->getExtension("native_profiler");
        $__internal_a8945f209602821fa3c1d8c533c29cfc55118d23625edcb4019765fc20645c3b->enter($__internal_a8945f209602821fa3c1d8c533c29cfc55118d23625edcb4019765fc20645c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8945f209602821fa3c1d8c533c29cfc55118d23625edcb4019765fc20645c3b->leave($__internal_a8945f209602821fa3c1d8c533c29cfc55118d23625edcb4019765fc20645c3b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ad9c16abf24607629ec4de0080a2255565ffb6576dda62f539d2c352eaf67b5 = $this->env->getExtension("native_profiler");
        $__internal_5ad9c16abf24607629ec4de0080a2255565ffb6576dda62f539d2c352eaf67b5->enter($__internal_5ad9c16abf24607629ec4de0080a2255565ffb6576dda62f539d2c352eaf67b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "   ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 28
        echo "     ";
        
        $__internal_5ad9c16abf24607629ec4de0080a2255565ffb6576dda62f539d2c352eaf67b5->leave($__internal_5ad9c16abf24607629ec4de0080a2255565ffb6576dda62f539d2c352eaf67b5_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_5eddc04c315349a9b04853f1e7cffc5311dcb493356bf0294a70d5f62d2e1399 = $this->env->getExtension("native_profiler");
        $__internal_5eddc04c315349a9b04853f1e7cffc5311dcb493356bf0294a70d5f62d2e1399->enter($__internal_5eddc04c315349a9b04853f1e7cffc5311dcb493356bf0294a70d5f62d2e1399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "<div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "         <div class =\"erreur\"\">
         <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("slamgsb_validerconnexion");
        echo "\">
   
    
\t\t\t<p>
       <label for=\"nom\">Login*</label>
       <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
      </p>
\t\t\t<p>
\t\t\t\t<label for=\"mdp\">Mot de passe*</label>
\t\t\t  <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
      </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>

</div>
     ";
        
        $__internal_5eddc04c315349a9b04853f1e7cffc5311dcb493356bf0294a70d5f62d2e1399->leave($__internal_5eddc04c315349a9b04853f1e7cffc5311dcb493356bf0294a70d5f62d2e1399_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  66 => 8,  63 => 7,  61 => 6,  57 => 4,  51 => 3,  44 => 28,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/*   {% extends "SLAMGSBBundle::layout.html.twig" %}*/
/*   {% block body %}*/
/*    {% block bloc1 %}*/
/* <div id="contenu">*/
/*       <h2>Identification utilisateur</h2>*/
/*       {% if(message is defined)%}*/
/*          <div class ="erreur"">*/
/*          <ul>{{ message }}</ul></div>*/
/*       {% endif%}*/
/* <form method="POST" action="{{path('slamgsb_validerconnexion')}}">*/
/*    */
/*     */
/* 			<p>*/
/*        <label for="nom">Login*</label>*/
/*        <input id="login" type="text" name="login"  size="30" maxlength="45">*/
/*       </p>*/
/* 			<p>*/
/* 				<label for="mdp">Mot de passe*</label>*/
/* 			  <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">*/
/*       </p>*/
/*          <input type="submit" value="Valider" name="valider">*/
/*          <input type="reset" value="Annuler" name="annuler"> */
/*       </p>*/
/* </form>*/
/* */
/* </div>*/
/*      {% endblock %}*/
/*      {% endblock %}*/
/* */
