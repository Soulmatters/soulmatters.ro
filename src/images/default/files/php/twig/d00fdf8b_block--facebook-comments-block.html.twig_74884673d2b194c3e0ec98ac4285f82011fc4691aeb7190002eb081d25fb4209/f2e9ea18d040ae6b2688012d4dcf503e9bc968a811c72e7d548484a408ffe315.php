<?php

/* modules/modules/facebook_comments_block/templates/block--facebook-comments-block.html.twig */
class __TwigTemplate_06213250c5b3e18525d0862b76c9a2a8d5ebfd18fb240d27ca2f9abb0b96ea98 extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        echo "<div id=\"fb-root\"></div>
";
        // line 2
        if ((isset($context["data_attributes"]) ? $context["data_attributes"] : null)) {
            // line 3
            echo "<div class=\"fb-comments\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["data_attributes"]) ? $context["data_attributes"] : null), "html", null, true));
            echo "></div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/modules/facebook_comments_block/templates/block--facebook-comments-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div id="fb-root"></div>*/
/* {% if data_attributes %}*/
/* <div class="fb-comments" {{ data_attributes }}></div>*/
/* {% endif %}*/
