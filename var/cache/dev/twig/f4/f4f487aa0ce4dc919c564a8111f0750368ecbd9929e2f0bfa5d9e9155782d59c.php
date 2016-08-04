<?php

/* company/show.html.twig */
class __TwigTemplate_58bd6f12e18b4f70e368980180c35190f7418e0710de4ef209b161ac6c93803e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/show.html.twig", 1);
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
        $__internal_21a4fad28178f4dc7f1f49179dcbe89f68bcbafa43bd269892e23daf8a09a12e = $this->env->getExtension("native_profiler");
        $__internal_21a4fad28178f4dc7f1f49179dcbe89f68bcbafa43bd269892e23daf8a09a12e->enter($__internal_21a4fad28178f4dc7f1f49179dcbe89f68bcbafa43bd269892e23daf8a09a12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "company/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a4fad28178f4dc7f1f49179dcbe89f68bcbafa43bd269892e23daf8a09a12e->leave($__internal_21a4fad28178f4dc7f1f49179dcbe89f68bcbafa43bd269892e23daf8a09a12e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac741cd221cb8e78da7549fc80f5e070906dafd37ef0e619575cd24adcd62820 = $this->env->getExtension("native_profiler");
        $__internal_ac741cd221cb8e78da7549fc80f5e070906dafd37ef0e619575cd24adcd62820->enter($__internal_ac741cd221cb8e78da7549fc80f5e070906dafd37ef0e619575cd24adcd62820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Company</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Langitude</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "langitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "latitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("company_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_edit", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ac741cd221cb8e78da7549fc80f5e070906dafd37ef0e619575cd24adcd62820->leave($__internal_ac741cd221cb8e78da7549fc80f5e070906dafd37ef0e619575cd24adcd62820_prof);

    }

    public function getTemplateName()
    {
        return "company/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Company</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ company.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Langitude</th>*/
/*                 <td>{{ company.langitude }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Latitude</th>*/
/*                 <td>{{ company.latitude }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ company.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('company_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('company_edit', { 'id': company.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
