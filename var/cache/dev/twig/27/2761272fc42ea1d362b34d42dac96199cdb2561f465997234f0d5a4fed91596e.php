<?php

/* customer/index.html.twig */
class __TwigTemplate_5405d20660cec697731b585d6aa74fbc15ab4368252fd009bfa51b246f707df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "customer/index.html.twig", 1);
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
        $__internal_4fdb12967bf725520634127fcd0cf5c695c141848dbf1872496ade8491453a33 = $this->env->getExtension("native_profiler");
        $__internal_4fdb12967bf725520634127fcd0cf5c695c141848dbf1872496ade8491453a33->enter($__internal_4fdb12967bf725520634127fcd0cf5c695c141848dbf1872496ade8491453a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fdb12967bf725520634127fcd0cf5c695c141848dbf1872496ade8491453a33->leave($__internal_4fdb12967bf725520634127fcd0cf5c695c141848dbf1872496ade8491453a33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14ce2bed3152a9ecc7624cc4d3cb0ef33389fe7b711b5b073fc7b77d8043f7f9 = $this->env->getExtension("native_profiler");
        $__internal_14ce2bed3152a9ecc7624cc4d3cb0ef33389fe7b711b5b073fc7b77d8043f7f9->enter($__internal_14ce2bed3152a9ecc7624cc4d3cb0ef33389fe7b711b5b073fc7b77d8043f7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Customer list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Telno</th>
                <th>Nic</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_show", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "telNo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "nic", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_show", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_edit", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("customer_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_14ce2bed3152a9ecc7624cc4d3cb0ef33389fe7b711b5b073fc7b77d8043f7f9->leave($__internal_14ce2bed3152a9ecc7624cc4d3cb0ef33389fe7b711b5b073fc7b77d8043f7f9_prof);

    }

    public function getTemplateName()
    {
        return "customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Customer list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Address</th>*/
/*                 <th>Telno</th>*/
/*                 <th>Nic</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for customer in customers %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('customer_show', { 'id': customer.id }) }}">{{ customer.name }}</a></td>*/
/*                 <td>{{ customer.address }}</td>*/
/*                 <td>{{ customer.telNo }}</td>*/
/*                 <td>{{ customer.nic }}</td>*/
/*                 <td>{{ customer.id }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('customer_show', { 'id': customer.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('customer_edit', { 'id': customer.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('customer_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
