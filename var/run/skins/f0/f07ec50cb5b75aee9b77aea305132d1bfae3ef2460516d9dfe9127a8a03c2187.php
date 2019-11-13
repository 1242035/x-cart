<?php

/* D:\x-cart\skins\customer\modules\XC\FastLaneCheckout\sections\details\shipping_details.twig */
class __TwigTemplate_36e557c6c5faa12527dfb0e556e059bd220b2e22cc59278e32c7f481880640bc extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isShippingNeeded", [], "method")) {
            // line 8
            echo "<div class=\"checkout_fastlane_shipping-details\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\ShippingDetails"]]), "html", null, true);
            echo "

    <a class=\"checkout_fastlane_shipping_edit_link\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Change shipping"]), "html", null, true);
            echo "\" href=\"#\" v-on:click.prevent=\"switchTo('shipping')\"><i class=\"fa fa-truck\"></i></a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\sections\\details\\shipping_details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\sections\\details\\shipping_details.twig", "");
    }
}
