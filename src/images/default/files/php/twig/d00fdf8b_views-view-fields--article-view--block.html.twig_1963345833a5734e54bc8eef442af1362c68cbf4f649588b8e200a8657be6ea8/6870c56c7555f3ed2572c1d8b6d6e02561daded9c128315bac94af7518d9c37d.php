<?php

/* themes/smtheme/templates/views-view-fields--article-view--block.html.twig */
class __TwigTemplate_6ba8204b63c089755adb5747b257df8354ef7241c38e5a9bd6a8f47ac742f04a extends Twig_Template
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
        echo "<div class=\"intro-article\" style=\"background:url(";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image_1", array()), "content", array()), "html", null, true));
        echo ") center center no-repeat fixed;width:100%;background-size:2300px;\">
<h2>";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "<span class=\"editare-link\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "edit_node", array()), "content", array()), "html", null, true));
        echo "</span></h2>
<div class=\"user-wrapper\">
\t<div class=\"user-info\">
\t\t";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "user_picture", array()), "content", array()), "html", null, true));
        echo "
\t\t<div class=\"user-name\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "name", array()), "content", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"category\">#";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_categorie", array()), "content", array()), "html", null, true));
        echo "</div>
\t\t<div class=\"date-created\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "created", array()), "content", array()), "html", null, true));
        echo "</div>
\t\t</div>
\t\t</div>
</div>
<div class=\"paper-card shadow-1\" >
\t
\t

\t\t
\t<div class=\"img-content\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()), "html", null, true));
        echo "</div>
\t<div class=\"body-content\">";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
        echo "\t</div>
\t
\t
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/smtheme/templates/views-view-fields--article-view--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  80 => 17,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  48 => 2,  43 => 1,);
    }
}
/* <div class="intro-article" style="background:url({{ fields.field_image_1.content }}) center center no-repeat fixed;width:100%;background-size:2300px;">*/
/* <h2>{{ fields.title.content}}<span class="editare-link">{{ fields.edit_node.content }}</span></h2>*/
/* <div class="user-wrapper">*/
/* 	<div class="user-info">*/
/* 		{{ fields.user_picture.content}}*/
/* 		<div class="user-name">{{ fields.name.content }}</div>*/
/* 		<div class="category">#{{ fields.field_categorie.content }}</div>*/
/* 		<div class="date-created">{{ fields.created.content }}</div>*/
/* 		</div>*/
/* 		</div>*/
/* </div>*/
/* <div class="paper-card shadow-1" >*/
/* 	*/
/* 	*/
/* */
/* 		*/
/* 	<div class="img-content">{{ fields.field_image.content}}</div>*/
/* 	<div class="body-content">{{ fields.body.content}}	</div>*/
/* 	*/
/* 	*/
/* 	*/
/* </div>*/
/* */
