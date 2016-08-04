<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5a583304cba902d6c0f9c3d88a2f739f23a5b55201f3e05993f038081c401555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d26a7318423d0bbede1231f0b291837fd40e6cdc357632eddbc3c0c0ac7613f = $this->env->getExtension("native_profiler");
        $__internal_5d26a7318423d0bbede1231f0b291837fd40e6cdc357632eddbc3c0c0ac7613f->enter($__internal_5d26a7318423d0bbede1231f0b291837fd40e6cdc357632eddbc3c0c0ac7613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d26a7318423d0bbede1231f0b291837fd40e6cdc357632eddbc3c0c0ac7613f->leave($__internal_5d26a7318423d0bbede1231f0b291837fd40e6cdc357632eddbc3c0c0ac7613f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d5a8e07e7a815e629f87cff98189e75d0647987e6189f57115cc397b60728dc = $this->env->getExtension("native_profiler");
        $__internal_3d5a8e07e7a815e629f87cff98189e75d0647987e6189f57115cc397b60728dc->enter($__internal_3d5a8e07e7a815e629f87cff98189e75d0647987e6189f57115cc397b60728dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3d5a8e07e7a815e629f87cff98189e75d0647987e6189f57115cc397b60728dc->leave($__internal_3d5a8e07e7a815e629f87cff98189e75d0647987e6189f57115cc397b60728dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee07870126f20a7bdf2a407a31b0fbcd09323e98dfaeff8ebe6ea6f0f095d8a4 = $this->env->getExtension("native_profiler");
        $__internal_ee07870126f20a7bdf2a407a31b0fbcd09323e98dfaeff8ebe6ea6f0f095d8a4->enter($__internal_ee07870126f20a7bdf2a407a31b0fbcd09323e98dfaeff8ebe6ea6f0f095d8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee07870126f20a7bdf2a407a31b0fbcd09323e98dfaeff8ebe6ea6f0f095d8a4->leave($__internal_ee07870126f20a7bdf2a407a31b0fbcd09323e98dfaeff8ebe6ea6f0f095d8a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b813f916214ffd37bce509e0e4fb75a7c7782f45ece941dd9b8461328c727df7 = $this->env->getExtension("native_profiler");
        $__internal_b813f916214ffd37bce509e0e4fb75a7c7782f45ece941dd9b8461328c727df7->enter($__internal_b813f916214ffd37bce509e0e4fb75a7c7782f45ece941dd9b8461328c727df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b813f916214ffd37bce509e0e4fb75a7c7782f45ece941dd9b8461328c727df7->leave($__internal_b813f916214ffd37bce509e0e4fb75a7c7782f45ece941dd9b8461328c727df7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
