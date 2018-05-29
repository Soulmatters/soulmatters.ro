<?php

/* themes/smtheme/templates/views-view-fields--taxonomy-term--block.html.twig */
class __TwigTemplate_4a40d646dd977c33b68dcdbdd5d7e8805f398e256687f69a5b493e220751be69 extends Twig_Template
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

        // line 1
        echo "<div class=\"paper-card shadow-1\" >
\t
\t<div class=\"card-image\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()), "html", null, true));
        echo "
\t<div class=\"card-title\"><h5>\t";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</h5></div>
\t
\t</div>
\t<div class=\"card-autor\">
\t\t";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "user_picture", array()), "content", array()), "html", null, true));
        echo "
\t\t<div class=\"user-name\">";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_nume_prenume", array()), "content", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"dataCreat\">";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array()), "content", array()), "html", null, true));
        echo "</div>
\t</div>
\t<div class=\"card-summary\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
        echo "</div>\t
</div>";
    }

    public function getTemplateName()
    {
        return "themes/smtheme/templates/views-view-fields--taxonomy-term--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  66 => 10,  62 => 9,  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div class="paper-card shadow-1" >*/
/* 	*/
/* 	<div class="card-image">{{ fields.field_image.content}}*/
/* 	<div class="card-title"><h5>	{{ fields.title.content}}</h5></div>*/
/* 	*/
/* 	</div>*/
/* 	<div class="card-autor">*/
/* 		{{ fields.user_picture.content}}*/
/* 		<div class="user-name">{{ fields.field_nume_prenume.content }}</div>*/
/* 		<div class="dataCreat">{{ fields.created.content }}</div>*/
/* 	</div>*/
/* 	<div class="card-summary">{{ fields.body.content}}</div>	*/
/* </div>*/
