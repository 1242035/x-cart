<?php

/* D:\x-cart\skins\customer\order\invoice\parts\items\item.price.twig */
class __TwigTemplate_71972b3439c363c93d569d2e3b6b0d1430ea29df74896054aaa567003eb2b6e6 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatInvoicePrice", [0 => $this->getAttribute(($context["this"] ?? null), "getOrderItemPrice", [0 => $this->getAttribute(($context["this"] ?? null), "item", [])], "method"), 1 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getCurrency", [], "method"), 2 => 1], "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\order\\invoice\\parts\\items\\item.price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\order\\invoice\\parts\\items\\item.price.twig", "");
    }
}
