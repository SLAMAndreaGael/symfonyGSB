<?php

/* SLAMGSBBundle:SaisirFrais:saisirfraisforfait.html.twig */
class __TwigTemplate_eab31467eed5ca5fc79a3ebcdfada1f8e6eee5b44d155b29adaa8fe4a8793948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95e8e00e321da2fd5e18bb212cc3cf6449fa54f2510a9616922ee36030ebb61d = $this->env->getExtension("native_profiler");
        $__internal_95e8e00e321da2fd5e18bb212cc3cf6449fa54f2510a9616922ee36030ebb61d->enter($__internal_95e8e00e321da2fd5e18bb212cc3cf6449fa54f2510a9616922ee36030ebb61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:SaisirFrais:saisirfraisforfait.html.twig"));

        // line 1
        echo "<div id=\"contenu\">
      <h2>Renseigner ma fiche de frais du mois ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "html", null, true);
        echo "</h2>
         
      <form method=\"POST\"  action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("slamgsb_saisirfrais");
        echo "\">
      <div class=\"corpsForm\">
          
          <fieldset>
            <legend>Eléments forfaitisés
            </legend>
\t             ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 11
            echo "                         ";
            $context["idfrais"] = $this->getAttribute($context["unfrais"], "idfrais", array());
            // line 12
            echo "                         ";
            $context["libelle"] = $this->getAttribute($context["unfrais"], "libelle", array());
            // line 13
            echo "                         ";
            $context["quantite"] = $this->getAttribute($context["unfrais"], "quantite", array());
            // line 14
            echo "\t\t        <p>
\t\t        <label for=\"idFrais\">";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</label>
\t                <input type=\"text\" id=\"idFrais\" name=\"lesFrais[";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")), "html", null, true);
            echo "]\" size=\"10\" maxlength=\"5\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo "\" >
\t                </p>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "          </fieldset>
      </div>
      <div class=\"piedForm\">
      <p>
        <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
        <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        
      </form>
</div>
";
        
        $__internal_95e8e00e321da2fd5e18bb212cc3cf6449fa54f2510a9616922ee36030ebb61d->leave($__internal_95e8e00e321da2fd5e18bb212cc3cf6449fa54f2510a9616922ee36030ebb61d_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle:SaisirFrais:saisirfraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  61 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  41 => 10,  32 => 4,  25 => 2,  22 => 1,);
    }
}
/* <div id="contenu">*/
/*       <h2>Renseigner ma fiche de frais du mois {{ nummois }} - {{ numannee }}</h2>*/
/*          */
/*       <form method="POST"  action="{{path('slamgsb_saisirfrais')}}">*/
/*       <div class="corpsForm">*/
/*           */
/*           <fieldset>*/
/*             <legend>Eléments forfaitisés*/
/*             </legend>*/
/* 	             {% for unfrais in lesfraisforfait %}*/
/*                          {% set idfrais = unfrais.idfrais %}*/
/*                          {% set libelle = unfrais.libelle %}*/
/*                          {% set quantite = unfrais.quantite %}*/
/* 		        <p>*/
/* 		        <label for="idFrais">{{libelle}}</label>*/
/* 	                <input type="text" id="idFrais" name="lesFrais[{{idfrais}}]" size="10" maxlength="5" value="{{quantite}}" >*/
/* 	                </p>*/
/*                      {% endfor %}*/
/*           </fieldset>*/
/*       </div>*/
/*       <div class="piedForm">*/
/*       <p>*/
/*         <input id="ok" type="submit" value="Valider" size="20" />*/
/*         <input id="annuler" type="reset" value="Effacer" size="20" />*/
/*       </p> */
/*       </div>*/
/*         */
/*       </form>*/
/* </div>*/
/* */
