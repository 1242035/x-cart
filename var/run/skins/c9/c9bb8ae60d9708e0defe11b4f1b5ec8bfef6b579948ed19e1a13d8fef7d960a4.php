<?php

/* D:\x-cart\skins\customer\modules\XC\FastLaneCheckout\blocks\address_form\address_book.twig */
class __TwigTemplate_9f5ce19da101bc68a40a9010bf05245a32bc0a879140962ed075be21cb631f63 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        $context["visibility"] = (($this->getAttribute(($context["this"] ?? null), "isDisplayAddressButton", [], "method")) ? ("") : ("hidden"));
        // line 9
        echo "
<div class=\"checkout_fastlane_block_address-book-button ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["visibility"] ?? null), "html", null, true);
        echo "\" v-show=\"visible\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\AddressBook", "addressType" => $this->getAttribute(($context["this"] ?? null), "getShortAddressType", [], "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Address book"])]]), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\blocks\\address_form\\address_book.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\blocks\\address_form\\address_book.twig", "");
    }
}
