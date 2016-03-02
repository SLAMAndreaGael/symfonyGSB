<?php

/* SLAMGSBBundle:ListeFrais:listefraisforfait.html.twig */
class __TwigTemplate_50802e77ca169af06103241b502e43b4b63c438aa475bb2e0934785377ada656 extends Twig_Template
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
        $__internal_e0bb154fc2e30bad338739424324a40f42cee7e8aa0cae6a34ea491e315fcd31 = $this->env->getExtension("native_profiler");
        $__internal_e0bb154fc2e30bad338739424324a40f42cee7e8aa0cae6a34ea491e315fcd31->enter($__internal_e0bb154fc2e30bad338739424324a40f42cee7e8aa0cae6a34ea491e315fcd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:ListeFrais:listefraisforfait.html.twig"));

        // line 1
        echo "<h3>Fiche de frais du mois ";
        echo twig_escape_filter($this->env, (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "html", null, true);
        echo "  :
    </h3>
    <div class=\"encadre\">
    <p>
       Etat : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["libetat"]) ? $context["libetat"] : $this->getContext($context, "libetat")), "html", null, true);
        echo " depuis le ";
        echo twig_escape_filter($this->env, (isset($context["datemodif"]) ? $context["datemodif"] : $this->getContext($context, "datemodif")), "html", null, true);
        echo " <br> Montant validé : ";
        echo twig_escape_filter($this->env, (isset($context["montantvalide"]) ? $context["montantvalide"] : $this->getContext($context, "montantvalide")), "html", null, true);
        echo "
    </p>
         <table class=\"listeLegere\">
            <caption>Elèments forfaitisés </caption>
         <tr>
     ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 11
            echo "          ";
            $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle", array());
            // line 12
            echo "              <th> ";
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</th>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "         </tr>
         <tr>
     ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 17
            echo "          ";
            $context["quantite"] = $this->getAttribute($context["unfrais"], "quantite", array());
            // line 18
            echo "              <td class=\"qteForfait\">";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo " </td>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "         </tr>
     </table>
    </div>
";
        
        $__internal_e0bb154fc2e30bad338739424324a40f42cee7e8aa0cae6a34ea491e315fcd31->leave($__internal_e0bb154fc2e30bad338739424324a40f42cee7e8aa0cae6a34ea491e315fcd31_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle:ListeFrais:listefraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  71 => 18,  68 => 17,  64 => 16,  60 => 14,  51 => 12,  48 => 11,  44 => 10,  32 => 5,  22 => 1,);
    }
}
/* <h3>Fiche de frais du mois {{nummois}}-{{numannee}}  :*/
/*     </h3>*/
/*     <div class="encadre">*/
/*     <p>*/
/*        Etat : {{libetat}} depuis le {{datemodif}} <br> Montant validé : {{montantvalide}}*/
/*     </p>*/
/*          <table class="listeLegere">*/
/*             <caption>Elèments forfaitisés </caption>*/
/*          <tr>*/
/*      {% for unFrais in lesfraisforfait %}*/
/*           {% set libelle = unfrais.libelle %}*/
/*               <th> {{libelle}}</th>*/
/*      {% endfor %}*/
/*          </tr>*/
/*          <tr>*/
/*      {% for unfrais in lesfraisforfait %}*/
/*           {% set quantite = unfrais.quantite %}*/
/*               <td class="qteForfait">{{quantite}} </td>*/
/*      {% endfor %}*/
/*          </tr>*/
/*      </table>*/
/*     </div>*/
/* */
