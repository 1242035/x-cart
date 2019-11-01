<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/XPay/XPaymentsCloud/order/transactions/list.twig */
class __TwigTemplate_98b3b87b2c75c614a3acdb905deb2fe5e5e5f7acc5c32b2915fa3014f2b67b3a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getXpaymentsCards", [], "method")) {
            // line 8
            echo "  <div class=\"xpayments-transactions line-3\">

  <table class=\"xpayments-cards\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getXpaymentsCards", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 12
                echo "      <tr>

        <td class=\"card-column\">
          <div class=\"xpayments-card\">
            <div class=\"card-icon-container\">
              <span class=\"xpayments-card-type ";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["card"], "cssType", []), "html", null, true);
                echo "\"><img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
                echo "\" alt=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardType", []), "html", null, true);
                echo "\"/></span>
            </div>
            <div class=\"card-number\">
              ";
                // line 20
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["card"], "cardNumber", []), "html", null, true);
                echo "
            </div>
            <div class=\"card-expire\">
              ";
                // line 23
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["card"], "expire", []), "html", null, true);
                echo "
            </div>
          </div>
        </td>

        <td class=\"links-column\">
          <a class=\"dotted\" href=\"javascript: void(0);\" onclick=\"javascript: popupXpaymentsInfo('";
                // line 29
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["card"], "xpid", []), "html", null, true);
                echo "');\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["View payment information"]), "html", null, true);
                echo "</a>
          <a href=\"";
                // line 30
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["card"], "url", []), "html", null, true);
                echo "\" target=\"blank\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Go to payment details page"]), "html", null, true);
                echo "</a>
        </td>

      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </table>
  </div>
";
        }
        // line 38
        echo "
<br/>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/XPay/XPaymentsCloud/order/transactions/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  84 => 35,  71 => 30,  65 => 29,  56 => 23,  50 => 20,  40 => 17,  33 => 12,  29 => 11,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/XPay/XPaymentsCloud/order/transactions/list.twig", "");
    }
}
