<?php

/* base.html.twig */
class __TwigTemplate_c8b7b39145c6e0dc162d5f9e7396cb35246951213ff68daae7f31e46b9e9efd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_560d763784754cc72745e1d8452a21649040bd185ba55c912cb07a2399a0133a = $this->env->getExtension("native_profiler");
        $__internal_560d763784754cc72745e1d8452a21649040bd185ba55c912cb07a2399a0133a->enter($__internal_560d763784754cc72745e1d8452a21649040bd185ba55c912cb07a2399a0133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_560d763784754cc72745e1d8452a21649040bd185ba55c912cb07a2399a0133a->leave($__internal_560d763784754cc72745e1d8452a21649040bd185ba55c912cb07a2399a0133a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c898783e51c47f13cbb9ebec1c7a17a36b45575f1fb177b217ad9342c290707 = $this->env->getExtension("native_profiler");
        $__internal_3c898783e51c47f13cbb9ebec1c7a17a36b45575f1fb177b217ad9342c290707->enter($__internal_3c898783e51c47f13cbb9ebec1c7a17a36b45575f1fb177b217ad9342c290707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3c898783e51c47f13cbb9ebec1c7a17a36b45575f1fb177b217ad9342c290707->leave($__internal_3c898783e51c47f13cbb9ebec1c7a17a36b45575f1fb177b217ad9342c290707_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22987cf4af3d1107597e25ad01bacc485dd080cc7267030f0d0d93e1f7f2c945 = $this->env->getExtension("native_profiler");
        $__internal_22987cf4af3d1107597e25ad01bacc485dd080cc7267030f0d0d93e1f7f2c945->enter($__internal_22987cf4af3d1107597e25ad01bacc485dd080cc7267030f0d0d93e1f7f2c945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_22987cf4af3d1107597e25ad01bacc485dd080cc7267030f0d0d93e1f7f2c945->leave($__internal_22987cf4af3d1107597e25ad01bacc485dd080cc7267030f0d0d93e1f7f2c945_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffc8da823986bf0fdeeaed5685294953bf3f356a4357d7e9e4a4e570ebdd98a8 = $this->env->getExtension("native_profiler");
        $__internal_ffc8da823986bf0fdeeaed5685294953bf3f356a4357d7e9e4a4e570ebdd98a8->enter($__internal_ffc8da823986bf0fdeeaed5685294953bf3f356a4357d7e9e4a4e570ebdd98a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ffc8da823986bf0fdeeaed5685294953bf3f356a4357d7e9e4a4e570ebdd98a8->leave($__internal_ffc8da823986bf0fdeeaed5685294953bf3f356a4357d7e9e4a4e570ebdd98a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98841088dd5316241c83bacba2215f58d563d6de5e372e910a209f90c0164244 = $this->env->getExtension("native_profiler");
        $__internal_98841088dd5316241c83bacba2215f58d563d6de5e372e910a209f90c0164244->enter($__internal_98841088dd5316241c83bacba2215f58d563d6de5e372e910a209f90c0164244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_98841088dd5316241c83bacba2215f58d563d6de5e372e910a209f90c0164244->leave($__internal_98841088dd5316241c83bacba2215f58d563d6de5e372e910a209f90c0164244_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
