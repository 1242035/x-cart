<?php

/* D:\x-cart\skins\admin\modules\QSL\BraintreeVZ\config\status.twig */
class __TwigTemplate_d7a6f276b78f3435cc51eaae32b812b96aa4795b7401df1a279e7e559287750c extends \XLite\Core\Templating\Twig\Template
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
";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "paymentMethod", []), "getSetting", [0 => "merchantId"], "method")) {
            // line 7
            echo "  <strong>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Merchant ID"]), "html", null, true);
            echo ":</strong> <span id=\"braintree-merchant-id\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "paymentMethod", []), "getSetting", [0 => "merchantId"], "method"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\modules\\QSL\\BraintreeVZ\\config\\status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 7,  22 => 6,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\modules\\QSL\\BraintreeVZ\\config\\status.twig", "");
    }
}
