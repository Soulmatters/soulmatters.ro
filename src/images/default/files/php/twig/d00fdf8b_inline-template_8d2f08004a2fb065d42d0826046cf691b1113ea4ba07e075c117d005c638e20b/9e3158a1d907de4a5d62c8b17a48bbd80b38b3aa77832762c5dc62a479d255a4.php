<?php

/* {# inline_template_start #}{{ field_facebook | replace({"<p><a href=\"https://www.facebook.com/CozmaPaulSM\">https://www.facebook.com/": " ", "</a></p>\n":""})}} */
class __TwigTemplate_bf4af0914f2e1a9b9d4af27af8078a94037fcc8cd3a0248b32ccb0fdf9b84e29 extends Twig_Template
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
" => "")), "html", null, true));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ field_facebook | replace({\"<p><a href=\\\"https://www.facebook.com/CozmaPaulSM\\\">https://www.facebook.com/\": \" \", \"</a></p>\\n\":\"\"})}}";
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
/* {# inline_template_start #}{{ field_facebook | replace({"<p><a href=\"https://www.facebook.com/CozmaPaulSM\">https://www.facebook.com/": " ", "</a></p>\n":""})}}*/
