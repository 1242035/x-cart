<?php

/* items_list/model/table/order/cell.total.twig */
class __TwigTemplate_c8db08bbea23252c3b7719b0ddcddc3dbf7c54985e06722e65f2388d1d358b98 extends \XLite\Core\Templating\Twig\Template
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
";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/table/order/cell.total-clean.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 5
        $this->loadTemplate("items_list/model/table/order/cell.total-clean.twig", "items_list/model/table/order/cell.total.twig", 5)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 6
        echo "<span class=\"quantity\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Qty"]), "html", null, true);
        echo ": ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemsQuantity", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/order/cell.total.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\order\\cell.total.twig");
    }
}
