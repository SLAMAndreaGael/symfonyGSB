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
        $__internal_416cdc59ad31acd4dc2611f02234c4a919c034021e50349fccceefaf8b89d776 = $this->env->getExtension("native_profiler");
        $__internal_416cdc59ad31acd4dc2611f02234c4a919c034021e50349fccceefaf8b89d776->enter($__internal_416cdc59ad31acd4dc2611f02234c4a919c034021e50349fccceefaf8b89d776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_416cdc59ad31acd4dc2611f02234c4a919c034021e50349fccceefaf8b89d776->leave($__internal_416cdc59ad31acd4dc2611f02234c4a919c034021e50349fccceefaf8b89d776_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad344003c26be517daf4f619a3eeeec76a615ded76335135e19619950ac3224e = $this->env->getExtension("native_profiler");
        $__internal_ad344003c26be517daf4f619a3eeeec76a615ded76335135e19619950ac3224e->enter($__internal_ad344003c26be517daf4f619a3eeeec76a615ded76335135e19619950ac3224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "   ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 28
        echo "     ";
        
        $__internal_ad344003c26be517daf4f619a3eeeec76a615ded76335135e19619950ac3224e->leave($__internal_ad344003c26be517daf4f619a3eeeec76a615ded76335135e19619950ac3224e_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_bc4001928182e5b6a40cdb49138aab6d94e4d40eb5513702f6d2884607dc22d7 = $this->env->getExtension("native_profiler");
        $__internal_bc4001928182e5b6a40cdb49138aab6d94e4d40eb5513702f6d2884607dc22d7->enter($__internal_bc4001928182e5b6a40cdb49138aab6d94e4d40eb5513702f6d2884607dc22d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
        echo "<form method=\"POST\" action=\"index.php?uc=connexion&action=valideConnexion\">
   
    
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
        
        $__internal_bc4001928182e5b6a40cdb49138aab6d94e4d40eb5513702f6d2884607dc22d7->leave($__internal_bc4001928182e5b6a40cdb49138aab6d94e4d40eb5513702f6d2884607dc22d7_prof);

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
/* <form method="POST" action="index.php?uc=connexion&action=valideConnexion">*/
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