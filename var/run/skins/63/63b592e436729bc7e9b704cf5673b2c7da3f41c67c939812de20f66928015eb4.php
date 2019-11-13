<?php

/* D:\x-cart\skins\common\order\invoice\parts\totals.subtotal.twig */
class __TwigTemplate_3980ef5e30cd76c0a39f1963d09bf9282d766367df4f5d78c497c49441007917 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr>
    <td class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSubtotalTitle", [], "method"), "html", null, true);
        echo ":</td>
    <td class=\"value\">";
        // line 8
        echo $this->getAttribute(($context["this"] ?? null), "getOrderSubtotal", [], "method");
        echo "</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\common\\order\\invoice\\parts\\totals.subtotal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\common\\order\\invoice\\parts\\totals.subtotal.twig", "");
    }
}
