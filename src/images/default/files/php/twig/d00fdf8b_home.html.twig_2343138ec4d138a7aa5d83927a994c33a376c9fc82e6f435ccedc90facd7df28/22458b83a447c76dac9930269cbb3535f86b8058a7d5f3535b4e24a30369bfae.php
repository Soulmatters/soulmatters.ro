<?php

/* themes/smtheme/layouts/home/home.html.twig */
class __TwigTemplate_f24f948fcd472b12e3384ffeb94a5d9b572ae68f6ea5d75d6143578b6845a3c7 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 15
        echo "<div class=\"intro-sm\">
\t<h1>Soulmatters</h1>
</div>
<div>";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array()), "html", null, true));
        echo "</div>
<div class=\"container\">
\t<div class=\"row\">
\t\t  <div class=\"col-md-12\">";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "center", array()), "html", null, true));
        echo "</div>
\t</div>
</div>
  

";
    }

    public function getTemplateName()
    {
        return "themes/smtheme/layouts/home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 21,  48 => 18,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template for a 3 column panel layout.*/
/*  **/
/*  * This template provides a very simple "one column" panel display layout.*/
/*  **/
/*  * Variables:*/
/*  * - $id: An optional CSS id to use for the layout.*/
/*  * - $content: An array of content, each item in the array is keyed to one*/
/*  *   panel of the layout. This layout supports the following sections:*/
/*  *   $content['middle']: The only panel in the layout.*/
/*  *//* */
/* #}*/
/* <div class="intro-sm">*/
/* 	<h1>Soulmatters</h1>*/
/* </div>*/
/* <div>{{ content.top }}</div>*/
/* <div class="container">*/
/* 	<div class="row">*/
/* 		  <div class="col-md-12">{{ content.center }}</div>*/
/* 	</div>*/
/* </div>*/
/*   */
/* */
/* */
