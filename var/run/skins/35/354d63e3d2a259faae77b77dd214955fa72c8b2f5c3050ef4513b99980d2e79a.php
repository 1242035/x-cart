<?php

/* D:\x-cart\skins\customer\modules\XC\FastLaneCheckout\sections\details_box.twig */
class __TwigTemplate_f8d92aa872a1ad4f87075150846a9d4ea6e3fe3c94a31ea78c60056bed9c3b18 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "
<div class=\"checkout_fastlane_details_wrapper\">
    <div class=\"checkout_fastlane_details_box loading\">
        <div class=\"checkout_fastlane_details_left\">
           ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "checkout_fastlane.sections.details.left"]]), "html", null, true);
        echo "
       </div>
        <div class=\"checkout_fastlane_details_right\">
           ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "checkout_fastlane.sections.details.right"]]), "html", null, true);
        echo "
        </div>
        ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "checkout_fastlane.sections.details"]]), "html", null, true);
        echo "
    </div>
    <div class=\"checkout_fastlane_mobile_padding\"></div>
</div>
<div class=\"clearfix\"></div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\sections\\details_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  31 => 13,  25 => 10,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\sections\\details_box.twig", "");
    }
}
