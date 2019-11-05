<?php

/* modules/XC/VendorMessages/items_list/conversations\empty.twig */
class __TwigTemplate_ba6d01b885869657ef540c505fd4a91c8914e106f2da741d4e221e736c270ad9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"empty widget items-list widgetclass-";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWidgetClass", [], "method"), "html", null, true);
        echo " widgettarget-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWidgetTarget", [], "method"), "html", null, true);
        echo " sessioncell-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSessionCell", [], "method"), "html", null, true);
        echo "\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getItemsListParams", [], "method")], "method"), "html", null, true);
        echo "
    <div class=\"img\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displaySVGImage", [0 => "modules/XC/VendorMessages/images/no-messages.svg"], "method"), "html", null, true);
        echo "</div>
    <strong>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["You Have No Messages"]), "html", null, true);
        echo "</strong>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/VendorMessages/items_list/conversations\\empty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  34 => 7,  30 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/VendorMessages/items_list/conversations\\empty.twig", "D:\\x-cart\\skins\\admin\\modules\\XC\\VendorMessages\\items_list\\conversations\\empty.twig");
    }
}
