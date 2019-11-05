<?php

/* items_list/model/table/order/cell.total-clean.twig */
class __TwigTemplate_6a95108b354d19a4b79947bf2fa7a3b57bc32db6b2a9883c7aaf10f6a04cb4f8 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"total\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatPrice", [0 => $this->getAttribute(($context["this"] ?? null), "getColumnValue", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), 1 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getCurrency", [], "method")], "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.total-clean.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/order/cell.total-clean.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\order\\cell.total-clean.twig");
    }
}
