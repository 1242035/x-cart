<?php

/* trial_notice_v2/activate_key.twig */
class __TwigTemplate_5fd42d5550ee733a10366b4a1b41dc9ddec51eb405eaa1f0689b8f9e67bf6546 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"activate-key-form\">
  ";
        // line 5
        $this->startForm("XLite\\View\\Form\\Module\\ActivateKey", ["formAction" => "register_key"]);        // line 6
        echo "    <div class=\"addon-key\"><input type=\"text\" name=\"key\" value=\"\" placeholder=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Enter your premium license key"]), "html", null, true);
        echo "\" class=\"form-control\"/></div>
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Submit", 1 => ["button-size" => "btn-default", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Register"]), "attributes" => ["data-segment-click" => "Register"]]]]), "html", null, true);
        echo "

    ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isTrialPeriodExpired", [], "method")) {
            // line 10
            echo "    <div class=\"text or\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["or"]), "html", null, true);
            echo "</div>
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => "Purchase a premium license key", "style" => "purchase-license regular-main-button", "jsCode" => (("window.open('" . $this->getAttribute(($context["this"] ?? null), "getPurchaseURL", [], "method")) . "', '_blank');"), "attributes" => ["data-segment-click" => "Purchase a premium license key"]]]), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "  ";
        $this->endForm();        // line 14
        echo "
  <div class=\"additional-link\" data-segment-click=\"Activate free license\" data-segment-click-handler=\"a\">";
        // line 15
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Activate free license & remove premium features.", ["url" => $this->getAttribute(($context["this"] ?? null), "getActivateFreeLicenseURL", [], "method")]]);
        echo "</div>
  <div class=\"additional-link\" data-segment-click=\"Contact us\" data-segment-click-handler=\"a\">";
        // line 16
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Contact us if you have any questions.", ["url" => $this->getAttribute(($context["this"] ?? null), "getContactUsURL", [], "method")]]);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "trial_notice_v2/activate_key.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 15,  47 => 14,  45 => 13,  40 => 11,  35 => 10,  33 => 9,  28 => 7,  23 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "trial_notice_v2/activate_key.twig", "D:\\x-cart\\skins\\admin\\trial_notice_v2\\activate_key.twig");
    }
}
