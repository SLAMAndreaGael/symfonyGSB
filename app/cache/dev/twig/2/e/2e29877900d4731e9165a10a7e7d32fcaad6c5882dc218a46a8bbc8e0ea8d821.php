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
        $__internal_441783d54ba52c71be3ff42d67ed85874e763569f2dd5b335ff75527d279be8c = $this->env->getExtension("native_profiler");
        $__internal_441783d54ba52c71be3ff42d67ed85874e763569f2dd5b335ff75527d279be8c->enter($__internal_441783d54ba52c71be3ff42d67ed85874e763569f2dd5b335ff75527d279be8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_441783d54ba52c71be3ff42d67ed85874e763569f2dd5b335ff75527d279be8c->leave($__internal_441783d54ba52c71be3ff42d67ed85874e763569f2dd5b335ff75527d279be8c_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a9827e31cdabce9ed10b0ab560d3af36b4f7617058d276fa8d6194e27c0ab03 = $this->env->getExtension("native_profiler");
        $__internal_1a9827e31cdabce9ed10b0ab560d3af36b4f7617058d276fa8d6194e27c0ab03->enter($__internal_1a9827e31cdabce9ed10b0ab560d3af36b4f7617058d276fa8d6194e27c0ab03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
              Immatriculation: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "immat"), "method"), "html", null, true);
            echo "<br/>
          ";
        }
        // line 10
        echo "       </h3>
      </div>  
        <ul id=\"menuList\">
           <li class=\"smenu\">
              <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("slamgsb_vehicule");
        echo "\" title=\"Véhicules utilisés\">Véhicules Utilisés</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("slamgsb_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("slamgsb_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>
 \t   <li class=\"smenu\">
              <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("slamgsb_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
    </div>
";
        
        $__internal_1a9827e31cdabce9ed10b0ab560d3af36b4f7617058d276fa8d6194e27c0ab03->leave($__internal_1a9827e31cdabce9ed10b0ab560d3af36b4f7617058d276fa8d6194e27c0ab03_prof);

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
        return array (  81 => 23,  75 => 20,  69 => 17,  63 => 14,  57 => 10,  52 => 8,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/*   {% extends "SLAMGSBBundle::layout.html.twig" %}*/
/*   {% block menu %}*/
/* <div id="menuGauche">*/
/*      <div id="infosUtil">*/
/*        <h3>*/
/*           {%if(app.session.get('nom') is defined ) %}*/
/*               Visiteur: bonjour {{app.session.get('nom')}}<br/>*/
/*               Immatriculation: {{app.session.get('immat')}}<br/>*/
/*           {%endif%}*/
/*        </h3>*/
/*       </div>  */
/*         <ul id="menuList">*/
/*            <li class="smenu">*/
/*               <a href="{{path('slamgsb_vehicule')}}" title="Véhicules utilisés">Véhicules Utilisés</a>*/
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
