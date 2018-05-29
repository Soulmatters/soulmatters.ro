<?php

/* themes/smtheme/templates/views-view-fields--social--block.html.twig */
class __TwigTemplate_06a76b2588f208b17204c0bd5d501d3ccc78c31dc9cb067dacfd9699ce065b49 extends Twig_Template
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
        echo "
<script src=\"https://apis.google.com/js/platform.js\" async defer>
  {lang: 'ro'}
</script>

 <div class=\"social-wrapper shadow-1\">
 
 <span><h5>Împarte bucuria!</h5> </span>
<!-- Plasează această etichetă acolo unde dorești să se afișeze butonul Distribuie. -->
<a class=\"google-buton-share\" href=\"https://plus.google.com/share?url= ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
        echo " \" onclick=\"javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\"><img
  src=\"https://www.gstatic.com/images/icons/gplus-64.png\" alt=\"Share on Google+\" style=\"vertical-align:none\"></a>



<a class=\"fb-buton-share\" href=\"https://www.facebook.com/sharer/sharer.php?u= ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
        echo " \"
onclick=\"window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;\" 
>
   <i class=\"fa fa-facebook shape-facebook share-button-icon\"></i>
</a>


<a class=\"twitter-buton-share\" rel=\"nofollow\"
    href=\"http://twitter.com/\"
    onclick=\"popUp=window.open(
        'http://twitter.com/intent/tweet?text=\\' ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "\\' via @SoulMatters4u - ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "path", array()), "content", array()), "html", null, true));
        echo "',
        'popupwindow',
        'scrollbars=yes,width=800,height=400');
    popUp.focus();
    return false\">
   <i class=\"fa fa-twitter shape-facebook share-button-icon\"></i>
</a>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/smtheme/templates/views-view-fields--social--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  63 => 16,  54 => 10,  43 => 1,);
    }
}
/* */
/* <script src="https://apis.google.com/js/platform.js" async defer>*/
/*   {lang: 'ro'}*/
/* </script>*/
/* */
/*  <div class="social-wrapper shadow-1">*/
/*  */
/*  <span><h5>Împarte bucuria!</h5> </span>*/
/* <!-- Plasează această etichetă acolo unde dorești să se afișeze butonul Distribuie. -->*/
/* <a class="google-buton-share" href="https://plus.google.com/share?url= {{ fields.path.content }} " onclick="javascript:window.open(this.href,*/
/*   '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img*/
/*   src="https://www.gstatic.com/images/icons/gplus-64.png" alt="Share on Google+" style="vertical-align:none"></a>*/
/* */
/* */
/* */
/* <a class="fb-buton-share" href="https://www.facebook.com/sharer/sharer.php?u= {{ fields.path.content }} "*/
/* onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" */
/* >*/
/*    <i class="fa fa-facebook shape-facebook share-button-icon"></i>*/
/* </a>*/
/* */
/* */
/* <a class="twitter-buton-share" rel="nofollow"*/
/*     href="http://twitter.com/"*/
/*     onclick="popUp=window.open(*/
/*         'http://twitter.com/intent/tweet?text=\' {{ fields.title.content }}\' via @SoulMatters4u - {{ fields.path.content }}',*/
/*         'popupwindow',*/
/*         'scrollbars=yes,width=800,height=400');*/
/*     popUp.focus();*/
/*     return false">*/
/*    <i class="fa fa-twitter shape-facebook share-button-icon"></i>*/
/* </a>*/
/* </div>*/
/* */
/* */
