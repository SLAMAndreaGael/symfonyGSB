<?php

/* SLAMGSBBundle:ListeFrais:listemois.html.twig */
class __TwigTemplate_bda2a12bd1c28bb9029f2632d139cacb3ca0c8b65a820ce48915af23a3991998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SLAMGSBBundle::accueil.html.twig", "SLAMGSBBundle:ListeFrais:listemois.html.twig", 1);
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
        $__internal_10e1aeee4f6733e8636bacd68b3c8618f0c04e5659295405bbf9c0683acba86e = $this->env->getExtension("native_profiler");
        $__internal_10e1aeee4f6733e8636bacd68b3c8618f0c04e5659295405bbf9c0683acba86e->enter($__internal_10e1aeee4f6733e8636bacd68b3c8618f0c04e5659295405bbf9c0683acba86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:ListeFrais:listemois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e1aeee4f6733e8636bacd68b3c8618f0c04e5659295405bbf9c0683acba86e->leave($__internal_10e1aeee4f6733e8636bacd68b3c8618f0c04e5659295405bbf9c0683acba86e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_03e15b0110dca57e80e42c981e405d62baeedda6d861dfa24198c974f37446ef = $this->env->getExtension("native_profiler");
        $__internal_03e15b0110dca57e80e42c981e405d62baeedda6d861dfa24198c974f37446ef->enter($__internal_03e15b0110dca57e80e42c981e405d62baeedda6d861dfa24198c974f37446ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_03e15b0110dca57e80e42c981e405d62baeedda6d861dfa24198c974f37446ef->leave($__internal_03e15b0110dca57e80e42c981e405d62baeedda6d861dfa24198c974f37446ef_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_ad2aa57a5f619e12ccb08c6b720295e9c5ff2106e4be6e7a9b37526784e5b4bf = $this->env->getExtension("native_profiler");
        $__internal_ad2aa57a5f619e12ccb08c6b720295e9c5ff2106e4be6e7a9b37526784e5b4bf->enter($__internal_ad2aa57a5f619e12ccb08c6b720295e9c5ff2106e4be6e7a9b37526784e5b4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "<div id=\"contenu\">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form method=\"post\">
      <div class=\"corpsForm\">
         
      <p>
\t 
        <label for=\"lstMois\" accesskey=\"n\">Mois : </label>
        <select id=\"lstMois\" name=\"lstMois\">
           ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesmois"]) ? $context["lesmois"] : $this->getContext($context, "lesmois")));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 15
            echo "              ";
            $context["mois"] = $this->getAttribute($context["unMois"], "mois", array());
            // line 16
            echo "              ";
            $context["numAnnee"] = $this->getAttribute($context["unMois"], "numAnnee", array());
            // line 17
            echo "              ";
            $context["numMois"] = $this->getAttribute($context["unMois"], "numMois", array());
            // line 18
            echo "              ";
            if (((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")) == (isset($context["lemois"]) ? $context["lemois"] : $this->getContext($context, "lemois")))) {
                // line 19
                echo "               <option selected value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo "
               </option>
              ";
            } else {
                // line 22
                echo "               <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo " 
               </option>
              ";
            }
            // line 25
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
        </select>
      </p>
      </div>
      <div class=\"piedForm\">
      <p>
        <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
        <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        
      </form>
";
        
        $__internal_ad2aa57a5f619e12ccb08c6b720295e9c5ff2106e4be6e7a9b37526784e5b4bf->leave($__internal_ad2aa57a5f619e12ccb08c6b720295e9c5ff2106e4be6e7a9b37526784e5b4bf_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle:ListeFrais:listemois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  92 => 22,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  65 => 14,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "SLAMGSBBundle::accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/* <div id="contenu">*/
/*       <h2>Mes fiches de frais</h2>*/
/*       <h3>Mois à sélectionner : </h3>*/
/*       <form method="post">*/
/*       <div class="corpsForm">*/
/*          */
/*       <p>*/
/* 	 */
/*         <label for="lstMois" accesskey="n">Mois : </label>*/
/*         <select id="lstMois" name="lstMois">*/
/*            {% for unMois in lesmois %}*/
/*               {% set mois = unMois.mois %}*/
/*               {% set numAnnee = unMois.numAnnee %}*/
/*               {% set numMois = unMois.numMois %}*/
/*               {% if mois == lemois %}*/
/*                <option selected value="{{ mois }}">{{ numMois }}/{{ numAnnee }}*/
/*                </option>*/
/*               {% else %}*/
/*                <option value="{{ mois }}">{{ numMois }}/{{ numAnnee }} */
/*                </option>*/
/*               {%endif%}*/
/*            {%endfor%} */
/*         </select>*/
/*       </p>*/
/*       </div>*/
/*       <div class="piedForm">*/
/*       <p>*/
/*         <input id="ok" type="submit" value="Valider" size="20" />*/
/*         <input id="annuler" type="reset" value="Effacer" size="20" />*/
/*       </p> */
/*       </div>*/
/*         */
/*       </form>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
