<?php

/* D:\x-cart\skins\admin\items_list\product\modify\common\parts\header\price.twig */
class __TwigTemplate_ea596d31273907bd98fe64b7fac072faaccad4eacd6bc3b9048f71e96696eb2f extends \XLite\Core\Templating\Twig\Template
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
<th class=\"price\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => "items_list/sort.twig", "title" => (((call_user_func_array($this->env->getFunction('t')->getCallable(), ["Price"]) . " <span class=\"currency\">(") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "xlite", []), "currency", []), "getCurrencySymbol", [], "method")) . ")</span>"), "sortByColumn" => twig_constant("SORT_BY_MODE_PRICE", ($context["this"] ?? null))]]), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\items_list\\product\\modify\\common\\parts\\header\\price.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\items_list\\product\\modify\\common\\parts\\header\\price.twig", "");
    }
}
