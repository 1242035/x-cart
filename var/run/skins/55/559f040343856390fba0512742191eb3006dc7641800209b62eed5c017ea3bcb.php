<?php

/* product/details/stock/label.twig */
class __TwigTemplate_752b2c8da616faeaa91d23a8dfcae11c98b2386684ce44c1e583cecd0aa95091 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isShowStockWarning", [], "method")) {
            // line 9
            echo "  <span class=\"product-items-available low-stock\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Only X left in stock", ["X" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getAvailableAmount", [], "method")]]), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/stock/label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "product/details/stock/label.twig", "D:\\x-cart\\skins\\customer\\product\\details\\stock\\label.twig");
    }
}