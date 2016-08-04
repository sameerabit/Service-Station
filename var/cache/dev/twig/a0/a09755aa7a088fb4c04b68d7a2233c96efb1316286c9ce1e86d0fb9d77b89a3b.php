<?php

/* company/index.html.twig */
class __TwigTemplate_8340b161698a2ac33623a58434109a43baeb98e586bbbab45e70423eb66fef57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/index.html.twig", 1);
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
        $__internal_61399d9c45f49ffd6192a84369d62b88ad700549961847f7944e156e263b0f16 = $this->env->getExtension("native_profiler");
        $__internal_61399d9c45f49ffd6192a84369d62b88ad700549961847f7944e156e263b0f16->enter($__internal_61399d9c45f49ffd6192a84369d62b88ad700549961847f7944e156e263b0f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "company/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61399d9c45f49ffd6192a84369d62b88ad700549961847f7944e156e263b0f16->leave($__internal_61399d9c45f49ffd6192a84369d62b88ad700549961847f7944e156e263b0f16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27c2e368bd3698398fd615f18cf7e1e26b95977167466e78d2dd8517df29dfb2 = $this->env->getExtension("native_profiler");
        $__internal_27c2e368bd3698398fd615f18cf7e1e26b95977167466e78d2dd8517df29dfb2->enter($__internal_27c2e368bd3698398fd615f18cf7e1e26b95977167466e78d2dd8517df29dfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Company list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Langitude</th>
                <th>Latitude</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_show", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "langitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "latitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_show", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("company_edit", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("company_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_27c2e368bd3698398fd615f18cf7e1e26b95977167466e78d2dd8517df29dfb2->leave($__internal_27c2e368bd3698398fd615f18cf7e1e26b95977167466e78d2dd8517df29dfb2_prof);

    }

    public function getTemplateName()
    {
        return "company/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Company list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Langitude</th>*/
/*                 <th>Latitude</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for company in companies %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('company_show', { 'id': company.id }) }}">{{ company.name }}</a></td>*/
/*                 <td>{{ company.langitude }}</td>*/
/*                 <td>{{ company.latitude }}</td>*/
/*                 <td>{{ company.id }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('company_show', { 'id': company.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('company_edit', { 'id': company.id }) }}">edit</a>*/
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
/*             <a href="{{ path('company_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
