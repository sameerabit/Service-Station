<?php

/* base.html.twig */
class __TwigTemplate_d8f991a86ade1e611fa729fa793dd8354c08be5f5408fe9f54ed3dbe167326d6 extends Twig_Template
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
        $__internal_ca8c6dd13a701d8b73d692f1fff5155166ab4077136f4e9ad143baaaa6d0ada5 = $this->env->getExtension("native_profiler");
        $__internal_ca8c6dd13a701d8b73d692f1fff5155166ab4077136f4e9ad143baaaa6d0ada5->enter($__internal_ca8c6dd13a701d8b73d692f1fff5155166ab4077136f4e9ad143baaaa6d0ada5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_ca8c6dd13a701d8b73d692f1fff5155166ab4077136f4e9ad143baaaa6d0ada5->leave($__internal_ca8c6dd13a701d8b73d692f1fff5155166ab4077136f4e9ad143baaaa6d0ada5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_482cfdf6045e0f5eb7668e61b7bbb194fe146f8d68094b69bb1fbb86e39c7bfb = $this->env->getExtension("native_profiler");
        $__internal_482cfdf6045e0f5eb7668e61b7bbb194fe146f8d68094b69bb1fbb86e39c7bfb->enter($__internal_482cfdf6045e0f5eb7668e61b7bbb194fe146f8d68094b69bb1fbb86e39c7bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_482cfdf6045e0f5eb7668e61b7bbb194fe146f8d68094b69bb1fbb86e39c7bfb->leave($__internal_482cfdf6045e0f5eb7668e61b7bbb194fe146f8d68094b69bb1fbb86e39c7bfb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f88b4003927a2a913b563a04fb961d494c6530244292d9a37c6463b9c985c2f7 = $this->env->getExtension("native_profiler");
        $__internal_f88b4003927a2a913b563a04fb961d494c6530244292d9a37c6463b9c985c2f7->enter($__internal_f88b4003927a2a913b563a04fb961d494c6530244292d9a37c6463b9c985c2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f88b4003927a2a913b563a04fb961d494c6530244292d9a37c6463b9c985c2f7->leave($__internal_f88b4003927a2a913b563a04fb961d494c6530244292d9a37c6463b9c985c2f7_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_94741e1ccd2141d1bc029547b9c975e31e65b2f7517b9041eeb36a33f7cae8ee = $this->env->getExtension("native_profiler");
        $__internal_94741e1ccd2141d1bc029547b9c975e31e65b2f7517b9041eeb36a33f7cae8ee->enter($__internal_94741e1ccd2141d1bc029547b9c975e31e65b2f7517b9041eeb36a33f7cae8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_94741e1ccd2141d1bc029547b9c975e31e65b2f7517b9041eeb36a33f7cae8ee->leave($__internal_94741e1ccd2141d1bc029547b9c975e31e65b2f7517b9041eeb36a33f7cae8ee_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_722fd08164a4491d46e5076de354c23ddaf3fab003f16eca246db93315c271a9 = $this->env->getExtension("native_profiler");
        $__internal_722fd08164a4491d46e5076de354c23ddaf3fab003f16eca246db93315c271a9->enter($__internal_722fd08164a4491d46e5076de354c23ddaf3fab003f16eca246db93315c271a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_722fd08164a4491d46e5076de354c23ddaf3fab003f16eca246db93315c271a9->leave($__internal_722fd08164a4491d46e5076de354c23ddaf3fab003f16eca246db93315c271a9_prof);

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
        return array (  100 => 18,  89 => 17,  78 => 6,  66 => 5,  57 => 19,  54 => 18,  52 => 17,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">*/
/* */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
