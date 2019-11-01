<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/XPay/XPaymentsCloud/order/fraud_status/check.twig */
class __TwigTemplate_8e75c2a41f893309f19d6630bf3ac1870f55ce5f46e443efb1d2c2f7762f1b5a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getXpaymentsFraudCheckData", [], "method")) {
            // line 7
            echo "
  ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getXpaymentsFraudCheckData", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 9
                echo "
    <div class=\"antifraud-result\">

      <a name=\"fraud-info-";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "code", []), "html", null, true);
                echo "\"></a>

      <h2>";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "service", []), "html", null, true);
                echo " ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["result"]), "html", null, true);
                echo "</h2>

      ";
                // line 16
                if ($this->getAttribute($context["data"], "errors", [])) {
                    // line 17
                    echo "        <div class=\"alert alert-danger\">
          <strong>";
                    // line 18
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Check was not performed due to error occurred!"]), "html", null, true);
                    echo "</strong>
          <ul>
            ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getErrorsList", [], "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 21
                        echo "              <li>";
                        echo $context["error"];
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "          </ul>
        </div>
      ";
                }
                // line 26
                echo "
      ";
                // line 27
                if ($this->getAttribute($context["data"], "warnings", [])) {
                    // line 28
                    echo "        <div class=\"alert alert-warning\">
          <strong>";
                    // line 29
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Warning!"]), "html", null, true);
                    echo "</strong>
          <ul>
            ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getWarningList", [], "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                        // line 32
                        echo "              <li>";
                        echo $context["warning"];
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "          </ul>
        </div>
      ";
                }
                // line 37
                echo "
      ";
                // line 38
                if ($this->getAttribute($context["data"], "getDisplayMessage", [], "method")) {
                    // line 39
                    echo "        <p class=\"";
                    if ($this->getAttribute($context["data"], "isError", [], "method")) {
                        echo "alert alert-danger";
                    } else {
                        echo "lead";
                    }
                    echo "\">
          ";
                    // line 40
                    if ($this->getAttribute($context["data"], "isError", [], "method")) {
                        // line 41
                        echo "            <strong>";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Check was not performed due to error occurred!"]), "html", null, true);
                        echo "</strong><br />
          ";
                    }
                    // line 43
                    echo "          ";
                    echo $this->getAttribute($context["data"], "getDisplayMessage", [], "method");
                    echo "

          ";
                    // line 45
                    if ($this->getAttribute($context["data"], "score", [])) {
                        // line 46
                        echo "            ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Score"]), "html", null, true);
                        echo ":
            <span class=\"lead ";
                        // line 47
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "scoreClass", []), "html", null, true);
                        echo "\">";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "score", []), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 49
                    echo "        </p>
      ";
                }
                // line 51
                echo "
      ";
                // line 52
                if ($this->getAttribute($context["data"], "serviceTransactionId", [])) {
                    // line 53
                    echo "        <p>

          ";
                    // line 55
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Transaction ID"]), "html", null, true);
                    echo ":

          ";
                    // line 57
                    if ($this->getAttribute($context["data"], "url", [])) {
                        // line 58
                        echo "            <a href=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "url", []), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "serviceTransactionId", []), "html", null, true);
                        echo "</a>
          ";
                    } else {
                        // line 60
                        echo "            ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "serviceTransactionId", []), "html", null, true);
                        echo "
          ";
                    }
                    // line 62
                    echo "
        </p>
      ";
                }
                // line 65
                echo "
      ";
                // line 66
                if ($this->getAttribute($context["data"], "rules", [])) {
                    // line 67
                    echo "
        <h3>";
                    // line 68
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Rules triggered"]), "html", null, true);
                    echo ":</h3>

        <ul class=\"antifraud-result-lines\">
          ";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getRulesList", [], "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                        // line 72
                        echo "            <li>";
                        echo $context["rule"];
                        echo "</li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "        </ul>
      ";
                }
                // line 76
                echo "
    </div>

  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "
  <br/>

";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/XPay/XPaymentsCloud/order/fraud_status/check.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 80,  216 => 76,  212 => 74,  203 => 72,  199 => 71,  193 => 68,  190 => 67,  188 => 66,  185 => 65,  180 => 62,  174 => 60,  166 => 58,  164 => 57,  159 => 55,  155 => 53,  153 => 52,  150 => 51,  146 => 49,  139 => 47,  134 => 46,  132 => 45,  126 => 43,  120 => 41,  118 => 40,  109 => 39,  107 => 38,  104 => 37,  99 => 34,  90 => 32,  86 => 31,  81 => 29,  78 => 28,  76 => 27,  73 => 26,  68 => 23,  59 => 21,  55 => 20,  50 => 18,  47 => 17,  45 => 16,  38 => 14,  33 => 12,  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/XPay/XPaymentsCloud/order/fraud_status/check.twig", "");
    }
}
