<?php

/* SLAMGSBBundle:Home:vehicule.html.twig */
class __TwigTemplate_1060148b1e414c29bab096cbcee94919e881cb4c208ab6a7a854d1a97d13f7fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SLAMGSBBundle::accueil.html.twig", "SLAMGSBBundle:Home:vehicule.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SLAMGSBBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e183f6418ee545539f48148adcb634691c077f07a11f99f5c36fa7234e544f37 = $this->env->getExtension("native_profiler");
        $__internal_e183f6418ee545539f48148adcb634691c077f07a11f99f5c36fa7234e544f37->enter($__internal_e183f6418ee545539f48148adcb634691c077f07a11f99f5c36fa7234e544f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:Home:vehicule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e183f6418ee545539f48148adcb634691c077f07a11f99f5c36fa7234e544f37->leave($__internal_e183f6418ee545539f48148adcb634691c077f07a11f99f5c36fa7234e544f37_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_19ef0297b4bee171a9273d484bb185a300abe6184c0f6fa852980b343b4fd928 = $this->env->getExtension("native_profiler");
        $__internal_19ef0297b4bee171a9273d484bb185a300abe6184c0f6fa852980b343b4fd928->enter($__internal_19ef0297b4bee171a9273d484bb185a300abe6184c0f6fa852980b343b4fd928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_19ef0297b4bee171a9273d484bb185a300abe6184c0f6fa852980b343b4fd928->leave($__internal_19ef0297b4bee171a9273d484bb185a300abe6184c0f6fa852980b343b4fd928_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_c49818a75cb06ba3d8dcb10b0123fb1369d7de153ed28d470a33e398a62cbf14 = $this->env->getExtension("native_profiler");
        $__internal_c49818a75cb06ba3d8dcb10b0123fb1369d7de153ed28d470a33e398a62cbf14->enter($__internal_c49818a75cb06ba3d8dcb10b0123fb1369d7de153ed28d470a33e398a62cbf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "<div id=\"contenu\">
     <table class=\"listeLegere\">
       <h2>Véhicules utilisés</h2>
          <tr>
             <th class=\"nom\">Nom</th>
             <th class=\"prenom\">Prénom</th>
             <th class=\"date\">Date</th>
             <th class=\"immat\">Immatriculation</th>
          </tr>
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesvehicules"]) ? $context["lesvehicules"] : $this->getContext($context, "lesvehicules")));
        foreach ($context['_seq'] as $context["_key"] => $context["unVehicule"]) {
            // line 14
            echo "             ";
            $context["nom"] = $this->getAttribute($context["unVehicule"], "nom", array());
            // line 15
            echo "             ";
            $context["prenom"] = $this->getAttribute($context["unVehicule"], "prenom", array());
            // line 16
            echo "             ";
            $context["dateDébut"] = $this->getAttribute($context["unVehicule"], "dateDébut", array());
            // line 17
            echo "             ";
            $context["immat"] = $this->getAttribute($context["unVehicule"], "immat", array());
            // line 18
            echo "          <tr>
             <td>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
            echo "</td>
             <td>";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
             <td>";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["dateDébut"]) ? $context["dateDébut"] : $this->getContext($context, "dateDébut")), "html", null, true);
            echo "</td>
             <td>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["immat"]) ? $context["immat"] : $this->getContext($context, "immat")), "html", null, true);
            echo "</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unVehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "     </table>
</div>
";
        
        $__internal_c49818a75cb06ba3d8dcb10b0123fb1369d7de153ed28d470a33e398a62cbf14->leave($__internal_c49818a75cb06ba3d8dcb10b0123fb1369d7de153ed28d470a33e398a62cbf14_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle:Home:vehicule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  64 => 13,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "SLAMGSBBundle::accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/* <div id="contenu">*/
/*      <table class="listeLegere">*/
/*        <h2>Véhicules utilisés</h2>*/
/*           <tr>*/
/*              <th class="nom">Nom</th>*/
/*              <th class="prenom">Prénom</th>*/
/*              <th class="date">Date</th>*/
/*              <th class="immat">Immatriculation</th>*/
/*           </tr>*/
/*           {% for unVehicule in lesvehicules %}*/
/*              {% set nom = unVehicule.nom %}*/
/*              {% set prenom = unVehicule.prenom %}*/
/*              {% set dateDébut = unVehicule.dateDébut %}*/
/*              {% set immat = unVehicule.immat %}*/
/*           <tr>*/
/*              <td>{{nom}}</td>*/
/*              <td>{{prenom}}</td>*/
/*              <td>{{dateDébut}}</td>*/
/*              <td>{{immat}}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*      </table>*/
/* </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
