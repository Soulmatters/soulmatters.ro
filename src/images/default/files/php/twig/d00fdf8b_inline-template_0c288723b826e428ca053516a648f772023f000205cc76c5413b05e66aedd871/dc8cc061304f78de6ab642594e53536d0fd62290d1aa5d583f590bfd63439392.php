<?php

/* {# inline_template_start #}{{ field_facebook | replace({"<p><a href=\"https://www.facebook.com/CozmaPaulSM\">https://www.facebook.com/": " ", "</a></p>\n":" "})}} */
class __TwigTemplate_23c22783e90b44c7709f0241134438f681514cbe4c23581b2e50250caf02bb01 extends Twig_Template
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
        $filters = array("replace" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('replace'),
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

        // line 1
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter((isset($context["field_facebook"]) ? $context["field_facebook"] : null), array("<p><a href=\"https://www.facebook.com/CozmaPaulSM\">https://www.facebook.com/" => " ", "</a></p>
" => " ")), "html", null, true));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ field_facebook | replace({\"<p><a href=\\\"https://www.facebook.com/CozmaPaulSM\\\">https://www.facebook.com/\": \" \", \"</a></p>\\n\":\" \"})}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* {# inline_template_start #}{{ field_facebook | replace({"<p><a href=\"https://www.facebook.com/CozmaPaulSM\">https://www.facebook.com/": " ", "</a></p>\n":" "})}}*/
