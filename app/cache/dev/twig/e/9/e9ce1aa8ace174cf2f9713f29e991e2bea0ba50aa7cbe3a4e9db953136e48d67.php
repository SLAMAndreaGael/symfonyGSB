<?php

/* SLAMGSBBundle:SaisirFrais:erreurs.html.twig */
class __TwigTemplate_83dd5522226de6e935e8aef35e1c4fab17864b44578897756eb6c41ad55529e3 extends Twig_Template
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
        $__internal_18381cc413ba0b8c37d29190a5b1d3086edc33fd2ee0dba783895300804592ec = $this->env->getExtension("native_profiler");
        $__internal_18381cc413ba0b8c37d29190a5b1d3086edc33fd2ee0dba783895300804592ec->enter($__internal_18381cc413ba0b8c37d29190a5b1d3086edc33fd2ee0dba783895300804592ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:SaisirFrais:erreurs.html.twig"));

        // line 1
        echo "<div class=\"erreur\">
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leserreurs"]) ? $context["leserreurs"] : $this->getContext($context, "leserreurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
            // line 4
            echo "
     <li>";
            // line 5
            echo twig_escape_filter($this->env, $context["erreur"], "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['erreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
</div>
";
        
        $__internal_18381cc413ba0b8c37d29190a5b1d3086edc33fd2ee0dba783895300804592ec->leave($__internal_18381cc413ba0b8c37d29190a5b1d3086edc33fd2ee0dba783895300804592ec_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle:SaisirFrais:erreurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="erreur">*/
/* <ul>*/
/*     {% for erreur in leserreurs %}*/
/* */
/*      <li>{{erreur}}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* </div>*/
/* */
