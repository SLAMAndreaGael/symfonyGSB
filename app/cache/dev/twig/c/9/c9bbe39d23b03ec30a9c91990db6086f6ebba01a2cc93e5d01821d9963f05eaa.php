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
        $__internal_0841feb1fd7c28f617c74a5bb75eb6e4006ae12439732cd486814a762b3d599c = $this->env->getExtension("native_profiler");
        $__internal_0841feb1fd7c28f617c74a5bb75eb6e4006ae12439732cd486814a762b3d599c->enter($__internal_0841feb1fd7c28f617c74a5bb75eb6e4006ae12439732cd486814a762b3d599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:ListeFrais:listemois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0841feb1fd7c28f617c74a5bb75eb6e4006ae12439732cd486814a762b3d599c->leave($__internal_0841feb1fd7c28f617c74a5bb75eb6e4006ae12439732cd486814a762b3d599c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d0dfce07623ecd5409bbb61d6d17b4152fe007577685fb5bad697ef13fe6334 = $this->env->getExtension("native_profiler");
        $__internal_6d0dfce07623ecd5409bbb61d6d17b4152fe007577685fb5bad697ef13fe6334->enter($__internal_6d0dfce07623ecd5409bbb61d6d17b4152fe007577685fb5bad697ef13fe6334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_6d0dfce07623ecd5409bbb61d6d17b4152fe007577685fb5bad697ef13fe6334->leave($__internal_6d0dfce07623ecd5409bbb61d6d17b4152fe007577685fb5bad697ef13fe6334_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_23fa423c641ed04a314db595820345eb1698095e94e47c6075a2200ba2eea256 = $this->env->getExtension("native_profiler");
        $__internal_23fa423c641ed04a314db595820345eb1698095e94e47c6075a2200ba2eea256->enter($__internal_23fa423c641ed04a314db595820345eb1698095e94e47c6075a2200ba2eea256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

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
        
        $__internal_23fa423c641ed04a314db595820345eb1698095e94e47c6075a2200ba2eea256->leave($__internal_23fa423c641ed04a314db595820345eb1698095e94e47c6075a2200ba2eea256_prof);

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
