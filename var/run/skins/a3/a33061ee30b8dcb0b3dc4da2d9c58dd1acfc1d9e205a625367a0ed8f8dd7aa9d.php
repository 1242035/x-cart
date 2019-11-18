<?php

/* payment/configuration/body.twig */
class __TwigTemplate_e69ea126f11c173310b4b78cfc347c58ce8222f120751d108e0c9d058b37a3a8 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<div class=\"payment-conf\">

  ";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "hasPaymentModules", [], "method")) {
            // line 8
            echo "    ";
            if ($this->getAttribute(($context["this"] ?? null), "hasGateways", [], "method")) {
                // line 9
                echo "      <div class=\"box gateways\">
        <div class=\"list-header\">
          <span class=\"payment-type-title\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Online methods"]), "html", null, true);
                echo "</span>
          ";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Payment\\AddMethod", "paymentType" => twig_constant("XLite\\Model\\Payment\\Method::TYPE_ALLINONE"), "style" => "add-method top-button-add-method"]]), "html", null, true);
                echo "
        </div>
        <div class=\"content\">
          ";
                // line 15
                if ($this->getAttribute(($context["this"] ?? null), "hasAddedGateways", [], "method")) {
                    // line 16
                    echo "            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\ItemsList\\Payment\\Method\\Admin\\Gateways"]]), "html", null, true);
                    echo "
          ";
                }
                // line 18
                echo "          ";
                if ($this->getAttribute(($context["this"] ?? null), "hasAddedAlternative", [], "method")) {
                    // line 19
                    echo "            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\ItemsList\\Payment\\Method\\Admin\\Alternative"]]), "html", null, true);
                    echo "
          ";
                }
                // line 21
                echo "        </div>
      </div>
    ";
            }
            // line 24
            echo "  ";
        } else {
            // line 25
            echo "    <div class=\"box no-payment-modules\">
      <div class=\"list-header\">
        <h2>";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["No payment modules installed"]), "html", null, true);
            echo "</h2>
      </div>
      <div class=\"content\">
        <p>";
            // line 30
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["In order to accept credit cards payments you should install the necessary payment module from our Marketplace."]), "html", null, true);
            echo "</p>
        ";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Go to Marketplace"]), "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "addons_list_marketplace", "", ["tag" => "Payment processing"]]), "style" => "action"]]), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 35
        echo "  <div class=\"right-panel-payment-modules\">
    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("payment/configuration/banner.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 36
        $this->loadTemplate("payment/configuration/banner.twig", "payment/configuration/body.twig", 36)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 37
        echo "  </div>

  <div class=\"box offline-methods\">
    <div class=\"list-header\">
      <span class=\"payment-type-title\">";
        // line 41
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Offline methods"]), "html", null, true);
        echo "</span>
      ";
        // line 42
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Payment\\AddMethod", "paymentType" => twig_constant("XLite\\Model\\Payment\\Method::TYPE_OFFLINE"), "style" => "add-method top-button-add-method"]]), "html", null, true);
        echo "
    </div>
    <div class=\"content\">
      ";
        // line 45
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\ItemsList\\Payment\\Method\\Admin\\OfflineModules"]]), "html", null, true);
        echo "
      ";
        // line 46
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\ItemsList\\Payment\\Method\\Admin\\Offline"]]), "html", null, true);
        echo "
    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "payment/configuration/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  118 => 45,  112 => 42,  108 => 41,  102 => 37,  97 => 36,  89 => 35,  82 => 31,  78 => 30,  72 => 27,  68 => 25,  65 => 24,  60 => 21,  54 => 19,  51 => 18,  45 => 16,  43 => 15,  37 => 12,  33 => 11,  29 => 9,  26 => 8,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "payment/configuration/body.twig", "D:\\x-cart\\skins\\admin\\payment\\configuration\\body.twig");
    }
}
