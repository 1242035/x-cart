<?php

/* D:\x-cart\skins\admin\items_list\model\table\order\cell.payment_actions.twig */
class __TwigTemplate_0fabc0efef2cc3d94a62a1b57c3d139da9c4862d0fab01f27fea661ef9e9e8f2 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasPaymentActions", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 8
            echo "  <div class=\"payment-actions\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Order\\Details\\Admin\\PaymentActions", "order" => $this->getAttribute(($context["this"] ?? null), "entity", []), "unitsFilter" => $this->getAttribute(($context["this"] ?? null), "getTransactionsFilter", [], "method")]]), "html", null, true);
            echo "
  </div>
";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\order\\cell.payment_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\order\\cell.payment_actions.twig", "");
    }
}
