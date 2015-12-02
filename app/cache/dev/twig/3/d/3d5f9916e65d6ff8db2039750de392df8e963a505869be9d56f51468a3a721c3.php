<?php

/* SLAMGSBBundle:SaisirFrais:saisirfraishorsforfait.html.twig */
class __TwigTemplate_77e3f73fbce191ea8ec9a19434f8ba312a156df89a6877d9e732d30fe024d988 extends Twig_Template
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
        $__internal_59b038633210e375c8c4da7929ec98454fff61b364e9502dd54ea5297d90b2df = $this->env->getExtension("native_profiler");
        $__internal_59b038633210e375c8c4da7929ec98454fff61b364e9502dd54ea5297d90b2df->enter($__internal_59b038633210e375c8c4da7929ec98454fff61b364e9502dd54ea5297d90b2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:SaisirFrais:saisirfraishorsforfait.html.twig"));

        // line 1
        echo "<div id=\"contenu\">
<table class=\"listeLegere\">
  \t   <caption>Descriptif des éléments hors forfait
       </caption>
             <tr>
                <th class=\"date\">Date</th>
\t\t\t\t<th class=\"libelle\">Libellé</th>  
                <th class=\"montant\">Montant</th>  
                <th class=\"action\">&nbsp;</th>              
             </tr>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 12
            echo "                  ";
            $context["libelle"] = $this->getAttribute($context["unfrais"], "libelle", array());
            // line 13
            echo "                  ";
            $context["date"] = $this->getAttribute($context["unfrais"], "date", array());
            // line 14
            echo "                  ";
            $context["montant"] = $this->getAttribute($context["unfrais"], "montant", array());
            // line 15
            echo "                  ";
            $context["idfrais"] = $this->getAttribute($context["unfrais"], "id", array());
            echo "         
            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slamgsb_supprimerfraishorsforfait", array("id" => (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")))), "html", null, true);
            echo "\" 
\t\t\t\tonclick=\"return confirm('Voulez-vous vraiment supprimer ce frais?');\">Supprimer ce frais</a></td>
             </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                               
    </table>
      <form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("slamgsb_validerfraishorsforfaits");
        echo "\" method=\"post\">
      <div class=\"corpsForm\">
         
          <fieldset>
            <legend>Nouvel élément hors forfait
            </legend>
            <p>
              <label for=\"txtDateHF\">Date (jj/mm/aaaa) : </label>
              <input type=\"text\" id=\"txtDateHF\" name=\"dateFrais\" size=\"10\" maxlength=\"10\" value=\"\"  />
            </p>
            <p>
              <label for=\"txtLibelleHF\">Libellé : </label>
              <input type=\"text\" id=\"txtLibelleHF\" name=\"libelle\" size=\"70\" maxlength=\"256\" value=\"\" />
            </p>
            <p>
              <label for=\"txtMontantHF\">Montant : </label>
              <input type=\"text\" id=\"txtMontantHF\" name=\"montant\" size=\"10\" maxlength=\"10\" value=\"\" />
            </p>
          </fieldset>
      </div>
      <div class=\"piedForm\">
      <p>
        <input id=\"ajouter\" type=\"submit\" value=\"Ajouter\" size=\"20\" />
        <input id=\"effacer\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        
      </form>
  </div>
";
        
        $__internal_59b038633210e375c8c4da7929ec98454fff61b364e9502dd54ea5297d90b2df->leave($__internal_59b038633210e375c8c4da7929ec98454fff61b364e9502dd54ea5297d90b2df_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle:SaisirFrais:saisirfraishorsforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  75 => 24,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  47 => 15,  44 => 14,  41 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }
}
/* <div id="contenu">*/
/* <table class="listeLegere">*/
/*   	   <caption>Descriptif des éléments hors forfait*/
/*        </caption>*/
/*              <tr>*/
/*                 <th class="date">Date</th>*/
/* 				<th class="libelle">Libellé</th>  */
/*                 <th class="montant">Montant</th>  */
/*                 <th class="action">&nbsp;</th>              */
/*              </tr>*/
/*             {% for unfrais in lesfraishorsforfait %}*/
/*                   {% set libelle = unfrais.libelle %}*/
/*                   {% set date = unfrais.date %}*/
/*                   {% set montant = unfrais.montant %}*/
/*                   {% set idfrais = unfrais.id %}         */
/*             <tr>*/
/*                 <td>{{date}}</td>*/
/*                 <td>{{libelle}}</td>*/
/*                 <td>{{montant}}</td>*/
/*                 <td><a href="{{path('slamgsb_supprimerfraishorsforfait',{'id' : idfrais})}}" */
/* 				onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a></td>*/
/*              </tr>*/
/*             {% endfor %}*/
/*                                */
/*     </table>*/
/*       <form action="{{path('slamgsb_validerfraishorsforfaits')}}" method="post">*/
/*       <div class="corpsForm">*/
/*          */
/*           <fieldset>*/
/*             <legend>Nouvel élément hors forfait*/
/*             </legend>*/
/*             <p>*/
/*               <label for="txtDateHF">Date (jj/mm/aaaa) : </label>*/
/*               <input type="text" id="txtDateHF" name="dateFrais" size="10" maxlength="10" value=""  />*/
/*             </p>*/
/*             <p>*/
/*               <label for="txtLibelleHF">Libellé : </label>*/
/*               <input type="text" id="txtLibelleHF" name="libelle" size="70" maxlength="256" value="" />*/
/*             </p>*/
/*             <p>*/
/*               <label for="txtMontantHF">Montant : </label>*/
/*               <input type="text" id="txtMontantHF" name="montant" size="10" maxlength="10" value="" />*/
/*             </p>*/
/*           </fieldset>*/
/*       </div>*/
/*       <div class="piedForm">*/
/*       <p>*/
/*         <input id="ajouter" type="submit" value="Ajouter" size="20" />*/
/*         <input id="effacer" type="reset" value="Effacer" size="20" />*/
/*       </p> */
/*       </div>*/
/*         */
/*       </form>*/
/*   </div>*/
/* */
