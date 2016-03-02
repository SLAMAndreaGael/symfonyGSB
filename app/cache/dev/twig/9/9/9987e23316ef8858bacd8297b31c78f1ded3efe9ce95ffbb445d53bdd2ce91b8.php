<?php

/* SLAMGSBBundle:SaisirFrais:saisirtouslesfrais.html.twig */
class __TwigTemplate_d4be6263abf45ecf1151de2cee4ab745d8e86005abaedbd45f42232672534189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SLAMGSBBundle::accueil.html.twig", "SLAMGSBBundle:SaisirFrais:saisirtouslesfrais.html.twig", 1);
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
        $__internal_572b630e21fbf55d431453644332d518bf50da419ad0e6876f756b23dab75b44 = $this->env->getExtension("native_profiler");
        $__internal_572b630e21fbf55d431453644332d518bf50da419ad0e6876f756b23dab75b44->enter($__internal_572b630e21fbf55d431453644332d518bf50da419ad0e6876f756b23dab75b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SLAMGSBBundle:SaisirFrais:saisirtouslesfrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_572b630e21fbf55d431453644332d518bf50da419ad0e6876f756b23dab75b44->leave($__internal_572b630e21fbf55d431453644332d518bf50da419ad0e6876f756b23dab75b44_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e32dc69e72dd6c3a93e0ce931bff03c5522fb121e6a7ad2caf641a2881830bc4 = $this->env->getExtension("native_profiler");
        $__internal_e32dc69e72dd6c3a93e0ce931bff03c5522fb121e6a7ad2caf641a2881830bc4->enter($__internal_e32dc69e72dd6c3a93e0ce931bff03c5522fb121e6a7ad2caf641a2881830bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_e32dc69e72dd6c3a93e0ce931bff03c5522fb121e6a7ad2caf641a2881830bc4->leave($__internal_e32dc69e72dd6c3a93e0ce931bff03c5522fb121e6a7ad2caf641a2881830bc4_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_81e4a7049551642797ecf98ec3acc651a2d618a1f5e036639153986d87fd8550 = $this->env->getExtension("native_profiler");
        $__internal_81e4a7049551642797ecf98ec3acc651a2d618a1f5e036639153986d87fd8550->enter($__internal_81e4a7049551642797ecf98ec3acc651a2d618a1f5e036639153986d87fd8550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "  ";
        $this->loadTemplate("SLAMGSBBundle:SaisirFrais:erreurs.html.twig", "SLAMGSBBundle:SaisirFrais:saisirtouslesfrais.html.twig", 4)->display(array_merge($context, array("leserreurs" => (isset($context["leserreursforfait"]) ? $context["leserreursforfait"] : $this->getContext($context, "leserreursforfait")))));
        // line 5
        echo "  ";
        $this->loadTemplate("SLAMGSBBundle:SaisirFrais:saisirfraisforfait.html.twig", "SLAMGSBBundle:SaisirFrais:saisirtouslesfrais.html.twig", 5)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")), "nummois" => (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "numannee" => (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")))));
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("SLAMGSBBundle:SaisirFrais:erreurs.html.twig", "SLAMGSBBundle:SaisirFrais:saisirtouslesfrais.html.twig", 7)->display(array_merge($context, array("leserreurs" => (isset($context["leserreurshorsforfait"]) ? $context["leserreurshorsforfait"] : $this->getContext($context, "leserreurshorsforfait")))));
        // line 8
        $this->loadTemplate("SLAMGSBBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "SLAMGSBBundle:SaisirFrais:saisirtouslesfrais.html.twig", 8)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")))));
        
        $__internal_81e4a7049551642797ecf98ec3acc651a2d618a1f5e036639153986d87fd8550->leave($__internal_81e4a7049551642797ecf98ec3acc651a2d618a1f5e036639153986d87fd8550_prof);

    }

    public function getTemplateName()
    {
        return "SLAMGSBBundle:SaisirFrais:saisirtouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "SLAMGSBBundle::accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/*   {% include 'SLAMGSBBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreursforfait} %}*/
/*   {% include 'SLAMGSBBundle:SaisirFrais:saisirfraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,'nummois':nummois,'numannee':numannee} %}*/
/* */
/* {% include 'SLAMGSBBundle:SaisirFrais:erreurs.html.twig' with {'leserreurs':leserreurshorsforfait} %}*/
/* {% include 'SLAMGSBBundle:SaisirFrais:saisirfraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait} %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
