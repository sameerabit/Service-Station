<?php

/* customer/customer.html.twig */
class __TwigTemplate_2f99bcca6ab4db21cc6c930fd5b0fc321179896b63e90581ca7dac07a4390329 extends Twig_Template
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
        $__internal_29c74b7c07573902a5585cd0835fe538f55e56ef29373df1de756b9c44c85476 = $this->env->getExtension("native_profiler");
        $__internal_29c74b7c07573902a5585cd0835fe538f55e56ef29373df1de756b9c44c85476->enter($__internal_29c74b7c07573902a5585cd0835fe538f55e56ef29373df1de756b9c44c85476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/customer.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_29c74b7c07573902a5585cd0835fe538f55e56ef29373df1de756b9c44c85476->leave($__internal_29c74b7c07573902a5585cd0835fe538f55e56ef29373df1de756b9c44c85476_prof);

    }

    public function getTemplateName()
    {
        return "customer/customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ name |upper }}*/
