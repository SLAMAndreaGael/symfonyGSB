<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_07566c11c5aa88988d404e00d13c147335487999afc44c8d7925e1989fb1b89e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e7d2a9567e4a1cb87f01c8907ccfea5bc211f0bda632bae791bcc4b38563cae = $this->env->getExtension("native_profiler");
        $__internal_3e7d2a9567e4a1cb87f01c8907ccfea5bc211f0bda632bae791bcc4b38563cae->enter($__internal_3e7d2a9567e4a1cb87f01c8907ccfea5bc211f0bda632bae791bcc4b38563cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e7d2a9567e4a1cb87f01c8907ccfea5bc211f0bda632bae791bcc4b38563cae->leave($__internal_3e7d2a9567e4a1cb87f01c8907ccfea5bc211f0bda632bae791bcc4b38563cae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e18c1b3522819100b8011db6bd37d0dd149ad05d149664ab0e48566e4236fee = $this->env->getExtension("native_profiler");
        $__internal_8e18c1b3522819100b8011db6bd37d0dd149ad05d149664ab0e48566e4236fee->enter($__internal_8e18c1b3522819100b8011db6bd37d0dd149ad05d149664ab0e48566e4236fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8e18c1b3522819100b8011db6bd37d0dd149ad05d149664ab0e48566e4236fee->leave($__internal_8e18c1b3522819100b8011db6bd37d0dd149ad05d149664ab0e48566e4236fee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9981898e3ab5608d35cd2d5b90f41fd100f79acf712a20a6bed434480a319d5b = $this->env->getExtension("native_profiler");
        $__internal_9981898e3ab5608d35cd2d5b90f41fd100f79acf712a20a6bed434480a319d5b->enter($__internal_9981898e3ab5608d35cd2d5b90f41fd100f79acf712a20a6bed434480a319d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9981898e3ab5608d35cd2d5b90f41fd100f79acf712a20a6bed434480a319d5b->leave($__internal_9981898e3ab5608d35cd2d5b90f41fd100f79acf712a20a6bed434480a319d5b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f69ac889d15c21371fd7f20b5d5b2a522a9da75cb52e1f7ccf983b430ae071b = $this->env->getExtension("native_profiler");
        $__internal_6f69ac889d15c21371fd7f20b5d5b2a522a9da75cb52e1f7ccf983b430ae071b->enter($__internal_6f69ac889d15c21371fd7f20b5d5b2a522a9da75cb52e1f7ccf983b430ae071b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6f69ac889d15c21371fd7f20b5d5b2a522a9da75cb52e1f7ccf983b430ae071b->leave($__internal_6f69ac889d15c21371fd7f20b5d5b2a522a9da75cb52e1f7ccf983b430ae071b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
