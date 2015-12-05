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
        $__internal_a3d0fda0a24ce8de2eb7cf145230a829aaf3d0da6dad86017d10147732171099 = $this->env->getExtension("native_profiler");
        $__internal_a3d0fda0a24ce8de2eb7cf145230a829aaf3d0da6dad86017d10147732171099->enter($__internal_a3d0fda0a24ce8de2eb7cf145230a829aaf3d0da6dad86017d10147732171099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:Home:vehicule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d0fda0a24ce8de2eb7cf145230a829aaf3d0da6dad86017d10147732171099->leave($__internal_a3d0fda0a24ce8de2eb7cf145230a829aaf3d0da6dad86017d10147732171099_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf32d5653520f303b673182d839e1c6058c2da61dc41eaae8529112abf7ae7c6 = $this->env->getExtension("native_profiler");
        $__internal_bf32d5653520f303b673182d839e1c6058c2da61dc41eaae8529112abf7ae7c6->enter($__internal_bf32d5653520f303b673182d839e1c6058c2da61dc41eaae8529112abf7ae7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_bf32d5653520f303b673182d839e1c6058c2da61dc41eaae8529112abf7ae7c6->leave($__internal_bf32d5653520f303b673182d839e1c6058c2da61dc41eaae8529112abf7ae7c6_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_3040dbf386577ee8cfdeff6116cf1ea74dc5ac85f62063294863afa7b24174dc = $this->env->getExtension("native_profiler");
        $__internal_3040dbf386577ee8cfdeff6116cf1ea74dc5ac85f62063294863afa7b24174dc->enter($__internal_3040dbf386577ee8cfdeff6116cf1ea74dc5ac85f62063294863afa7b24174dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "<div id=\"contenu\">
     <table class=\"listeLegere\">
       <h2>Véhicules utilisés</h2>
          <tr>
             <th class=\"nom\">Nom</th>
             <th class=\"prenom\">Prénom</th>
             <th class=\"immat\">Immatriculation</th>
          </tr>
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesvehicules"]) ? $context["lesvehicules"] : $this->getContext($context, "lesvehicules")));
        foreach ($context['_seq'] as $context["_key"] => $context["unVehicule"]) {
            // line 13
            echo "             ";
            $context["nom"] = $this->getAttribute($context["unVehicule"], "nom", array());
            // line 14
            echo "             ";
            $context["prenom"] = $this->getAttribute($context["unVehicule"], "prenom", array());
            // line 15
            echo "             ";
            $context["immat"] = $this->getAttribute($context["unVehicule"], "immat", array());
            // line 16
            echo "          <tr>
             <td>";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
            echo "</td>
             <td>";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
             <td>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["immat"]) ? $context["immat"] : $this->getContext($context, "immat")), "html", null, true);
            echo "</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unVehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "     </table>
</div>
";
        
        $__internal_3040dbf386577ee8cfdeff6116cf1ea74dc5ac85f62063294863afa7b24174dc->leave($__internal_3040dbf386577ee8cfdeff6116cf1ea74dc5ac85f62063294863afa7b24174dc_prof);

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
        return array (  96 => 22,  87 => 19,  83 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  63 => 12,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*              <th class="immat">Immatriculation</th>*/
/*           </tr>*/
/*           {% for unVehicule in lesvehicules %}*/
/*              {% set nom = unVehicule.nom %}*/
/*              {% set prenom = unVehicule.prenom %}*/
/*              {% set immat = unVehicule.immat %}*/
/*           <tr>*/
/*              <td>{{nom}}</td>*/
/*              <td>{{prenom}}</td>*/
/*              <td>{{immat}}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*      </table>*/
/* </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
