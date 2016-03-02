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
        $__internal_5082644ef5aebee409ad8a19636d5023146f8dca0256034992d2827e2445ce27 = $this->env->getExtension("native_profiler");
        $__internal_5082644ef5aebee409ad8a19636d5023146f8dca0256034992d2827e2445ce27->enter($__internal_5082644ef5aebee409ad8a19636d5023146f8dca0256034992d2827e2445ce27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5082644ef5aebee409ad8a19636d5023146f8dca0256034992d2827e2445ce27->leave($__internal_5082644ef5aebee409ad8a19636d5023146f8dca0256034992d2827e2445ce27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03c8a65efb2ab4da6e7dd2f07bd765b3dd3dd136c72a6e5250000d607658827e = $this->env->getExtension("native_profiler");
        $__internal_03c8a65efb2ab4da6e7dd2f07bd765b3dd3dd136c72a6e5250000d607658827e->enter($__internal_03c8a65efb2ab4da6e7dd2f07bd765b3dd3dd136c72a6e5250000d607658827e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03c8a65efb2ab4da6e7dd2f07bd765b3dd3dd136c72a6e5250000d607658827e->leave($__internal_03c8a65efb2ab4da6e7dd2f07bd765b3dd3dd136c72a6e5250000d607658827e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1eb90387e1095f79138b2407b406320a1d046db19bcbb883d7bee71b4fdb5209 = $this->env->getExtension("native_profiler");
        $__internal_1eb90387e1095f79138b2407b406320a1d046db19bcbb883d7bee71b4fdb5209->enter($__internal_1eb90387e1095f79138b2407b406320a1d046db19bcbb883d7bee71b4fdb5209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1eb90387e1095f79138b2407b406320a1d046db19bcbb883d7bee71b4fdb5209->leave($__internal_1eb90387e1095f79138b2407b406320a1d046db19bcbb883d7bee71b4fdb5209_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48135fc48058008d577960a0efe02ee0d7c899a5cc6afcdb45054673eb0553b2 = $this->env->getExtension("native_profiler");
        $__internal_48135fc48058008d577960a0efe02ee0d7c899a5cc6afcdb45054673eb0553b2->enter($__internal_48135fc48058008d577960a0efe02ee0d7c899a5cc6afcdb45054673eb0553b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_48135fc48058008d577960a0efe02ee0d7c899a5cc6afcdb45054673eb0553b2->leave($__internal_48135fc48058008d577960a0efe02ee0d7c899a5cc6afcdb45054673eb0553b2_prof);

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
