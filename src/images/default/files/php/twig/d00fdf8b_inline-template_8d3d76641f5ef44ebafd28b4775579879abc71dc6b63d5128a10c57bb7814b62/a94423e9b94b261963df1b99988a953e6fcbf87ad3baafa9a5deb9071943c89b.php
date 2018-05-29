<?php

/* {# inline_template_start #}
{{ field_facebook |replace({'https://www.facebook.com/': ''})}} */
class __TwigTemplate_1136fc1712e5887ccb377e48698e4de600b7da1ac50d5a5b581f1e12a859192e extends Twig_Template
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
        $filters = array("replace" => 2);
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

        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter((isset($context["field_facebook"]) ? $context["field_facebook"] : null), array("https://www.facebook.com/" => "")), "html", null, true));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}
{{ field_facebook |replace({'https://www.facebook.com/': ''})}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,);
    }
}
/* {# inline_template_start #}*/
/* {{ field_facebook |replace({'https://www.facebook.com/': ''})}}*/
