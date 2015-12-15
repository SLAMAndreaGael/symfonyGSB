<?php

/* SLAMGSBBundle::accueil.html.twig */
class __TwigTemplate_a3201557089680756fa2c5fe147aaaa619905e10446a4e737588f1d81b90faa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SLAMGSBBundle::layout.html.twig", "SLAMGSBBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SLAMGSBBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34863f64ce6e64fd1584b09d426ad5638f0f75fdc86da3cc361930e03d28b6e5 = $this->env->getExtension("native_profiler");
        $__internal_34863f64ce6e64fd1584b09d426ad5638f0f75fdc86da3cc361930e03d28b6e5->enter($__internal_34863f64ce6e64fd1584b09d426ad5638f0f75fdc86da3cc361930e03d28b6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34863f64ce6e64fd1584b09d426ad5638f0f75fdc86da3cc361930e03d28b6e5->leave($__internal_34863f64ce6e64fd1584b09d426ad5638f0f75fdc86da3cc361930e03d28b6e5_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae2295a08a749562acdb35035d38c2425d25190ac54a3803f48a3e0d70f52eb2 = $this->env->getExtension("native_profiler");
        $__internal_ae2295a08a749562acdb35035d38c2425d25190ac54a3803f48a3e0d70f52eb2->enter($__internal_ae2295a08a749562acdb35035d38c2425d25190ac54a3803f48a3e0d70f52eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
       <h3>
          ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "              Visiteur: bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br/>
          ";
        }
        // line 9
        echo "       </h3>
      </div>  
        <ul id=\"menuList\">
           <li class=\"smenu\">
              <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("slamgsb_tablette");
        echo "\" title=\"Détail Equipement\">Détail Equipements</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("slamgsb_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("slamgsb_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>
 \t   <li class=\"smenu\">
              <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("slamgsb_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
    </div>
";
        
        $__internal_ae2295a08a749562acdb35035d38c2425d25190ac54a3803f48a3e0d70f52eb2->leave($__internal_ae2295a08a749562acdb35035d38c2425d25190ac54a3803f48a3e0d70f52eb2_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  71 => 19,  65 => 16,  59 => 13,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/*   {% extends "SLAMGSBBundle::layout.html.twig" %}*/
/*   {% block menu %}*/
/* <div id="menuGauche">*/
/*      <div id="infosUtil">*/
/*        <h3>*/
/*           {%if(app.session.get('nom') is defined ) %}*/
/*               Visiteur: bonjour {{app.session.get('nom')}}<br/>*/
/*           {%endif%}*/
/*        </h3>*/
/*       </div>  */
/*         <ul id="menuList">*/
/*            <li class="smenu">*/
/*               <a href="{{path('slamgsb_tablette')}}" title="Détail Equipement">Détail Equipements</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('slamgsb_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('slamgsb_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>*/
/*  	   <li class="smenu">*/
/*               <a href="{{path('slamgsb_deconnexion')}}" title="Se déconnecter">Déconnexion</a>*/
/*            </li>*/
/*          </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
