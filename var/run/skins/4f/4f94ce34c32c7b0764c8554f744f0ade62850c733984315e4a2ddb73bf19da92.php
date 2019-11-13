<?php

/* D:\x-cart\skins\customer\modules\Amazon\PayWithAmazon\checkout_button\cart.twig */
class __TwigTemplate_7e3abc26dd957ae488a4eba41557eb9c69e39dc47d9c84e2bbd949ffc1a15a62 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isPayWithAmazonActive", [], "method")) {
            // line 7
            echo "<li class=\"button\">
  <div id=\"payWithAmazonDiv_cart_btn\" class=\"pay-with-amazon-button\"></div>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\Amazon\\PayWithAmazon\\checkout_button\\cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\Amazon\\PayWithAmazon\\checkout_button\\cart.twig", "");
    }
}
