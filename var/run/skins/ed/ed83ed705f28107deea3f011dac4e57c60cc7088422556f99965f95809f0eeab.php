<?php

/* modules/XPay/XPaymentsCloud/order/fraud_status/status.twig */
class __TwigTemplate_a8fde61c77ac373544f60898f2c27fae64a10c7a37339eb8be4602b79063218f extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "
<a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getXpaymentsFraudInfoLink", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), "html", null, true);
        echo "\" title=\"";
        echo $this->getAttribute(($context["this"] ?? null), "getXpaymentsFraudInfoTitle", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method");
        echo "\"></a>
";
    }

    public function getTemplateName()
    {
        return "modules/XPay/XPaymentsCloud/order/fraud_status/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 6,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XPay/XPaymentsCloud/order/fraud_status/status.twig", "D:\\x-cart\\skins\\admin\\modules\\XPay\\XPaymentsCloud\\order\\fraud_status\\status.twig");
    }
}
