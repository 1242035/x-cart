<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/XPay/XPaymentsCloud/order/page/parts/action.payment_status.twig */
class __TwigTemplate_ce480b0e7bc8376db23a64d2aa3b5f68df91190c8dc0c3c865e30648ddee6413 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "getOrder", [], "method"), "isFraudStatus", [], "method")) {
            // line 8
            echo "  <div class=\"xpayments-antifraud\">
    <div>
      <strong>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Warning"]), "html", null, true);
            echo "!</strong> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFraudStatusText", [], "method"), "html", null, true);
            echo " <a href=\"#";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "getOrder", [], "method"), "getXpaymentsFraudInfoAnchor", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["See details"]), "html", null, true);
            echo "</a>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/XPay/XPaymentsCloud/order/page/parts/action.payment_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/XPay/XPaymentsCloud/order/page/parts/action.payment_status.twig", "");
    }
}