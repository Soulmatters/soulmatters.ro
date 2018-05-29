<?php

/* themes/smtheme/templates/views-view-fields--about-us-users--block.html.twig */
class __TwigTemplate_aaad3508c8935dacbf7688daed03107ec0e92f6562d6677d997405069e615cdf extends Twig_Template
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
        $filters = array("escape" => 6);
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
        echo "<div class=\"user-profile-wrapper shadow-1\">
<div class=\"profile-face\">
<div class=\"profile-background\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_profile_pic", array()), "content", array()), "html", null, true));
        echo "</div>
<div class=\"user-picture\">
<div class=\"profile-pic\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "user_picture", array()), "content", array()), "html", null, true));
        echo " </div>
<div class=\"profile-name\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_nume_prenume", array()), "content", array())));
        echo "</div></div></div>
<div class=\"about-user\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_despre", array()), "content", array()), "html", null, true));
        echo " </div>
<div class=\"profile-data\">
<span class=\"facebook\"><a target=\"_blank\" href=\"";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_facebook", array()), "content", array())));
        echo "\"><i class=\"fa fa-facebook\"></i></a> </span>
<span class=\"google\"><a target=\"_blank\" href=\"";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_google_", array()), "content", array())));
        echo "\"><i class=\"fa fa-google-plus\"></i></a> </span>
<span class=\"website\"><a target=\"_blank\" href=\"";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_website", array()), "content", array())));
        echo "\"> <i class=\"fa fa-globe\"></i></a></span>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/smtheme/templates/views-view-fields--about-us-users--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  69 => 10,  65 => 9,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }
}
/* <div class="user-profile-wrapper shadow-1">*/
/* <div class="profile-face">*/
/* <div class="profile-background">{{ fields.field_profile_pic.content }}</div>*/
/* <div class="user-picture">*/
/* <div class="profile-pic">{{ fields.user_picture.content }} </div>*/
/* <div class="profile-name">{{ fields.field_nume_prenume.content|escape}}</div></div></div>*/
/* <div class="about-user">{{ fields.field_despre.content }} </div>*/
/* <div class="profile-data">*/
/* <span class="facebook"><a target="_blank" href="{{ fields.field_facebook.content|escape }}"><i class="fa fa-facebook"></i></a> </span>*/
/* <span class="google"><a target="_blank" href="{{ fields.field_google_.content|escape }}"><i class="fa fa-google-plus"></i></a> </span>*/
/* <span class="website"><a target="_blank" href="{{ fields.field_website.content|escape }}"> <i class="fa fa-globe"></i></a></span>*/
/* </div>*/
/* </div>*/
