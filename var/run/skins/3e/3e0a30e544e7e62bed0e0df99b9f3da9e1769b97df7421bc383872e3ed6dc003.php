<?php

/* D:\x-cart\skins\customer\modules\XC\FastLaneCheckout\blocks\popup_address_form\apply_to_billing.twig */
class __TwigTemplate_e3a6b84575609a8b6b0ff3d1c525b688677cc61142f310bdfa231095b0df8594 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isSameAddressVisible", [], "method")) {
            // line 8
            echo "    <li class=\"item-same_address input-checkbox-enabled clearfix form-group\">
        ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox\\ApplyToBilling", "value" => $this->getAttribute(($context["this"] ?? null), "isSameAddress", [], "method"), "fieldName" => "same_address", "fieldId" => "popup_same_address"]]), "html", null, true);
            echo "
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\blocks\\popup_address_form\\apply_to_billing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\blocks\\popup_address_form\\apply_to_billing.twig", "");
    }
}