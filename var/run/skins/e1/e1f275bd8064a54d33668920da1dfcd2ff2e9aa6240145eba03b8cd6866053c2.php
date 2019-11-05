<?php

/* items_list/model/table/order/cell.date.twig */
class __TwigTemplate_e14c44c0c50b98174d48647865995fce52e5fe5361eaad4c23bf16ad7a84112a extends \XLite\Core\Templating\Twig\Template
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
<span class=\"date\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatDate", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getDate", [], "method")], "method"), "html", null, true);
        echo "</span>
<span class=\"time\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatDayTime", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getDate", [], "method")], "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.date.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/order/cell.date.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\order\\cell.date.twig");
    }
}
