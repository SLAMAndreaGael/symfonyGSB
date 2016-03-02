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
        $__internal_bb7c19ca7c33ef96d40dcfaa91dc4f24aa9617ecf5e8ccbab31e3b2b75c623b2 = $this->env->getExtension("native_profiler");
        $__internal_bb7c19ca7c33ef96d40dcfaa91dc4f24aa9617ecf5e8ccbab31e3b2b75c623b2->enter($__internal_bb7c19ca7c33ef96d40dcfaa91dc4f24aa9617ecf5e8ccbab31e3b2b75c623b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7c19ca7c33ef96d40dcfaa91dc4f24aa9617ecf5e8ccbab31e3b2b75c623b2->leave($__internal_bb7c19ca7c33ef96d40dcfaa91dc4f24aa9617ecf5e8ccbab31e3b2b75c623b2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cdafe370962ad3af160d807a5487d09fe729e3552c8bbfa03dfd22ef65a7ef8 = $this->env->getExtension("native_profiler");
        $__internal_5cdafe370962ad3af160d807a5487d09fe729e3552c8bbfa03dfd22ef65a7ef8->enter($__internal_5cdafe370962ad3af160d807a5487d09fe729e3552c8bbfa03dfd22ef65a7ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "   ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 28
        echo "     ";
        
        $__internal_5cdafe370962ad3af160d807a5487d09fe729e3552c8bbfa03dfd22ef65a7ef8->leave($__internal_5cdafe370962ad3af160d807a5487d09fe729e3552c8bbfa03dfd22ef65a7ef8_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_6b6174f3656eaa5aa97a8a009ca4fb5e1cb96798fb3d47bc094c17343f643154 = $this->env->getExtension("native_profiler");
        $__internal_6b6174f3656eaa5aa97a8a009ca4fb5e1cb96798fb3d47bc094c17343f643154->enter($__internal_6b6174f3656eaa5aa97a8a009ca4fb5e1cb96798fb3d47bc094c17343f643154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
        
        $__internal_6b6174f3656eaa5aa97a8a009ca4fb5e1cb96798fb3d47bc094c17343f643154->leave($__internal_6b6174f3656eaa5aa97a8a009ca4fb5e1cb96798fb3d47bc094c17343f643154_prof);

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
