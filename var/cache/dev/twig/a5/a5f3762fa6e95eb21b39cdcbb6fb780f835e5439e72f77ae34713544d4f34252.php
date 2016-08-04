<?php

/* company/new.html.twig */
class __TwigTemplate_9aa01feee1fb9220a2f1e5940cb0702e6774ab7681afd6bf4a052bca8d792827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d3c1aba8c070d0977c58a9482bebe5eb060f7f453994c2a7d9bfcca784e5b2 = $this->env->getExtension("native_profiler");
        $__internal_85d3c1aba8c070d0977c58a9482bebe5eb060f7f453994c2a7d9bfcca784e5b2->enter($__internal_85d3c1aba8c070d0977c58a9482bebe5eb060f7f453994c2a7d9bfcca784e5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "company/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d3c1aba8c070d0977c58a9482bebe5eb060f7f453994c2a7d9bfcca784e5b2->leave($__internal_85d3c1aba8c070d0977c58a9482bebe5eb060f7f453994c2a7d9bfcca784e5b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e715cb9f5ef99910fd6ec928c94f34cb498eb0f2315e900632f22d70468b6e58 = $this->env->getExtension("native_profiler");
        $__internal_e715cb9f5ef99910fd6ec928c94f34cb498eb0f2315e900632f22d70468b6e58->enter($__internal_e715cb9f5ef99910fd6ec928c94f34cb498eb0f2315e900632f22d70468b6e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Company creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("company_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e715cb9f5ef99910fd6ec928c94f34cb498eb0f2315e900632f22d70468b6e58->leave($__internal_e715cb9f5ef99910fd6ec928c94f34cb498eb0f2315e900632f22d70468b6e58_prof);

    }

    public function getTemplateName()
    {
        return "company/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Company creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('company_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
