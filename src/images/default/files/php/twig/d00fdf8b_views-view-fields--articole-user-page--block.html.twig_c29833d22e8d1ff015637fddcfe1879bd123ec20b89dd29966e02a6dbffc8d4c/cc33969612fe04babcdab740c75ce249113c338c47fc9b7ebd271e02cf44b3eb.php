<?php

/* themes/smtheme/templates/views-view-fields--articole-user-page--block.html.twig */
class __TwigTemplate_331543daa4beefc285cfc18b7f39dd8dc4f6aba7cd6f14ba0e8a289a29381814 extends Twig_Template
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
        $filters = array("escape" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('escape'),
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
        echo "<div class=\"paper-card shadow-1 ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_categorie_1", array()), "content", array())));
        echo "\" >
\t
\t<div class=\"card-image\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()), "html", null, true));
        echo "<div class=\"card-title\"><h5>\t";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</h5></div>
\t";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "view_node", array()), "content", array()), "html", null, true));
        echo "</div>
\t<div class=\"card-autor\">
\t\t";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "user_picture", array()), "content", array()), "html", null, true));
        echo "
\t\t<div class=\"user-name\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "name", array()), "content", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"dataCreat\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array()), "content", array()), "html", null, true));
        echo "</div>
\t</div>
\t<div class=\"card-summary\">";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
        echo "</div>
\t<div class=\"bottom-set\">
\t<div class=\"card-category\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_categorie", array()), "content", array()), "html", null, true));
        echo "</div>
\t<div class=\"editare-link\">";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "edit_node", array()), "content", array()), "html", null, true));
        echo "</div>
\t</div>\t
</div>";
    }

    public function getTemplateName()
    {
        return "themes/smtheme/templates/views-view-fields--articole-user-page--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  78 => 12,  73 => 10,  68 => 8,  64 => 7,  60 => 6,  55 => 4,  49 => 3,  43 => 1,);
    }
}
/* <div class="paper-card shadow-1 {{ fields.field_categorie_1.content|escape }}" >*/
/* 	*/
/* 	<div class="card-image">{{ fields.field_image.content}}<div class="card-title"><h5>	{{ fields.title.content}}</h5></div>*/
/* 	{{ fields.view_node.content }}</div>*/
/* 	<div class="card-autor">*/
/* 		{{ fields.user_picture.content}}*/
/* 		<div class="user-name">{{ fields.name.content }}</div>*/
/* 		<div class="dataCreat">{{ fields.created.content }}</div>*/
/* 	</div>*/
/* 	<div class="card-summary">{{ fields.body.content}}</div>*/
/* 	<div class="bottom-set">*/
/* 	<div class="card-category">{{ fields.field_categorie.content }}</div>*/
/* 	<div class="editare-link">{{ fields.edit_node.content }}</div>*/
/* 	</div>	*/
/* </div>*/
