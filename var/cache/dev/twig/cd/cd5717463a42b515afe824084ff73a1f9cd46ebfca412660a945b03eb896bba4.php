<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5378a7db6d7192cf42667dfc622e9d8bf29c67fdbf1cabb22843b24a1bcc5415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a07a362e5f0b18cec158aaa5acd68cc100da61349c4ad8aa6b291011d4df422 = $this->env->getExtension("native_profiler");
        $__internal_7a07a362e5f0b18cec158aaa5acd68cc100da61349c4ad8aa6b291011d4df422->enter($__internal_7a07a362e5f0b18cec158aaa5acd68cc100da61349c4ad8aa6b291011d4df422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a07a362e5f0b18cec158aaa5acd68cc100da61349c4ad8aa6b291011d4df422->leave($__internal_7a07a362e5f0b18cec158aaa5acd68cc100da61349c4ad8aa6b291011d4df422_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6639588405dcc87ed7b0291da28e4bc7898f1f39332827dfe0eb21812c7ba780 = $this->env->getExtension("native_profiler");
        $__internal_6639588405dcc87ed7b0291da28e4bc7898f1f39332827dfe0eb21812c7ba780->enter($__internal_6639588405dcc87ed7b0291da28e4bc7898f1f39332827dfe0eb21812c7ba780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6639588405dcc87ed7b0291da28e4bc7898f1f39332827dfe0eb21812c7ba780->leave($__internal_6639588405dcc87ed7b0291da28e4bc7898f1f39332827dfe0eb21812c7ba780_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18e77d331b022a320f317991e3e3d533933f44ae0300c2d788364d6422144a05 = $this->env->getExtension("native_profiler");
        $__internal_18e77d331b022a320f317991e3e3d533933f44ae0300c2d788364d6422144a05->enter($__internal_18e77d331b022a320f317991e3e3d533933f44ae0300c2d788364d6422144a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18e77d331b022a320f317991e3e3d533933f44ae0300c2d788364d6422144a05->leave($__internal_18e77d331b022a320f317991e3e3d533933f44ae0300c2d788364d6422144a05_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d541dcb9a3d59acfe577adc36132655d2aaa7ba637e0cc3608452894c10ae6c5 = $this->env->getExtension("native_profiler");
        $__internal_d541dcb9a3d59acfe577adc36132655d2aaa7ba637e0cc3608452894c10ae6c5->enter($__internal_d541dcb9a3d59acfe577adc36132655d2aaa7ba637e0cc3608452894c10ae6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d541dcb9a3d59acfe577adc36132655d2aaa7ba637e0cc3608452894c10ae6c5->leave($__internal_d541dcb9a3d59acfe577adc36132655d2aaa7ba637e0cc3608452894c10ae6c5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
