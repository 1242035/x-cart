<?php

/* D:\x-cart\skins\customer\items_list\product\parts\common.product-sku.twig */
class __TwigTemplate_bc789c17166493909d53d64788a94512edfcf37e2ca694b944b7e035fa85e59e extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"product-sku\">";
        if ($this->getAttribute(($context["this"] ?? null), "getProductSku", [], "method")) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductSku", [], "method"), "html", null, true);
        } else {
            echo "&nbsp;";
        }
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\items_list\\product\\parts\\common.product-sku.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\items_list\\product\\parts\\common.product-sku.twig", "");
    }
}