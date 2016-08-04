<?php

/* customer/new.html.twig */
class __TwigTemplate_04be88aaa3145cbb5cd2006fea6fe7079f0b0b3b469f4288bbac69c126200a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "customer/new.html.twig", 1);
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
        $__internal_3ab81c60fc73a0090225534ce9d3a8873915b3ba7bf05af448801289baf967a8 = $this->env->getExtension("native_profiler");
        $__internal_3ab81c60fc73a0090225534ce9d3a8873915b3ba7bf05af448801289baf967a8->enter($__internal_3ab81c60fc73a0090225534ce9d3a8873915b3ba7bf05af448801289baf967a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ab81c60fc73a0090225534ce9d3a8873915b3ba7bf05af448801289baf967a8->leave($__internal_3ab81c60fc73a0090225534ce9d3a8873915b3ba7bf05af448801289baf967a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a24e655b9fd047a0847a3bf5ea581fb42a8ce14409a12eab4dc4690ed651c36f = $this->env->getExtension("native_profiler");
        $__internal_a24e655b9fd047a0847a3bf5ea581fb42a8ce14409a12eab4dc4690ed651c36f->enter($__internal_a24e655b9fd047a0847a3bf5ea581fb42a8ce14409a12eab4dc4690ed651c36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Customer creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("customer_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a24e655b9fd047a0847a3bf5ea581fb42a8ce14409a12eab4dc4690ed651c36f->leave($__internal_a24e655b9fd047a0847a3bf5ea581fb42a8ce14409a12eab4dc4690ed651c36f_prof);

    }

    public function getTemplateName()
    {
        return "customer/new.html.twig";
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
/*     <h1>Customer creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('customer_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
