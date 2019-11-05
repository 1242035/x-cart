<?php

/* modules/CDev/Paypal/onboarding/body.twig */
class __TwigTemplate_9db92e18747e2c7cf4a8c16ed70d5acbd2fc30ae3dbb25fa69a7cfc14d1b6e73 extends \XLite\Core\Templating\Twig\Template
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
<xlite-onboarding-paypal-card inline-template>
  <div class=\"online online-paypal\" :class=\"classes\">
    <div class=\"method-type\">
      ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Online method"]), "html", null, true);
        echo "
    </div>

    <div class=\"image\">
      <img src=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/CDev/Paypal/onboarding/logo.png"]), "html", null, true);
        echo "\">
    </div>

    <div class=\"method-name\">
      ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["PayPal Express Checkout"]), "html", null, true);
        echo "
    </div>

    <div class=\"note\">
      ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["No merchant account required. Simple onboarding for you and easy checkout for your customers."]), "html", null, true);
        echo "
    </div>

    ";
        // line 23
        if ($this->getAttribute(($context["this"] ?? null), "isPaypalConfigured", [], "method")) {
            // line 24
            echo "    <div class=\"switcher";
            if ($this->getAttribute(($context["this"] ?? null), "isPaypalMethodEnabled", [], "method")) {
                echo " enabled";
            }
            echo "\">
      <span class=\"inactive\">";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.off"]), "html", null, true);
            echo "</span>
      <a href=\"#\" @click.prevent=\"switchPaypalMethod(";
            // line 26
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMethodId", [], "method"), "html", null, true);
            echo ", \$event)\">
        <div>
          <span class=\"fa fa-check\"></span>
        </div>
      </a>
      <span class=\"active\">";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.on"]), "html", null, true);
            echo "</span>
    </div>
    ";
        } else {
            // line 34
            echo "    <div class=\"button\">
      ";
            // line 35
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Button\\OnboardingSignup", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Launch (Paypal Onboarding)"])]]), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 38
        echo "  </div>
</xlite-onboarding-paypal-card>";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/onboarding/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  82 => 35,  79 => 34,  73 => 31,  65 => 26,  61 => 25,  54 => 24,  52 => 23,  46 => 20,  39 => 16,  32 => 12,  25 => 8,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/CDev/Paypal/onboarding/body.twig", "D:\\x-cart\\skins\\admin\\modules\\CDev\\Paypal\\onboarding\\body.twig");
    }
}
