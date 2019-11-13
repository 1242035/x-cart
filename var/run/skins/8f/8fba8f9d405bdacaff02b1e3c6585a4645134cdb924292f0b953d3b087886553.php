<?php

/* D:\x-cart\skins\customer\modules\CDev\Paypal\banner\ProductDetailsPages\nearAddToCartButton.twig */
class __TwigTemplate_1b3a61167e88a9d4f4c70381fd30c22f9d2133a5e8f17e765be520e53972f321 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Banner", "page" => "productDetailsPages", "position" => "A"]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\CDev\\Paypal\\banner\\ProductDetailsPages\\nearAddToCartButton.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\CDev\\Paypal\\banner\\ProductDetailsPages\\nearAddToCartButton.twig", "");
    }
}
