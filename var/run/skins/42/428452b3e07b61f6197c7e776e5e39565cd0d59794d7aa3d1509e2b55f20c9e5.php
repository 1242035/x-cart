<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/address/shipping.twig */
class __TwigTemplate_939ca25e8bee5845fe68c28707c9989159f6bf3c8a198d9e146c48f44f4f9d0a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isShippingEnabled", [], "method")) {
            // line 8
            echo "  <div class=\"checkout_fastlane_address_form_wrapper\">
    <h3 class=\"checkout_fastlane_block_heading\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getShippingFormTitle", [], "method"), "html", null, true);
            echo "</h3>
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\AddressForm\\Shipping"]]), "html", null, true);
            echo "
  </div>
";
        } else {
            // line 13
            echo "  <div class=\"checkout_fastlane_address_form_wrapper\">
    <h3 class=\"checkout_fastlane_block_heading\">";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBillingFormTitle", [], "method"), "html", null, true);
            echo "</h3>
    ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\AddressForm\\Billing"]]), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/address/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  40 => 14,  37 => 13,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/address/shipping.twig", "");
    }
}