<?php

/* themes/bootstrap/templates/file/image-widget.html.twig */
class __TwigTemplate_b4e3ed0f750a5cd3add733566dc2fb2ee3eb7ba76fb8e40d59117fa051a08268 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array("without" => 22);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('without'),
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
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "preview", array())) {
            // line 16
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "row"), "method"), "html", null, true));
            echo ">
    <div class=\"preview col-sm-2\">
      ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "preview", array()), "html", null, true));
            echo "
    </div>
    <div class=\"data col-sm-10\">
      ";
            // line 22
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["data"]) ? $context["data"] : null), "preview"), "html", null, true));
            echo "
    </div>
  </div>
";
        } else {
            // line 26
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/file/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  65 => 26,  57 => 22,  51 => 18,  45 => 16,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an image field widget.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - data: Render elements of the image widget.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_image_widget()*/
/*  *//* */
/* #}*/
/* {% if data.preview %}*/
/*   <div{{ attributes.addClass('row') }}>*/
/*     <div class="preview col-sm-2">*/
/*       {{ data.preview }}*/
/*     </div>*/
/*     <div class="data col-sm-10">*/
/*       {# Render widget data without the image preview that was output already. #}*/
/*       {{ data|without('preview') }}*/
/*     </div>*/
/*   </div>*/
/* {% else %}*/
/*   <div{{ attributes.addClass(classes) }}>*/
/*     {{ data }}*/
/*   </div>*/
/* {% endif %}*/
/* */
