<?php

/* D:\x-cart\skins\customer\items_list\order\parts\actions.reorder.twig */
class __TwigTemplate_47b9db98ee37db7d751ed1b7ec2df7be3e3b32e50663c0b5b3784e69d5f4e294 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "showReorder", [0 => $this->getAttribute(($context["this"] ?? null), "order", [])], "method")) {
            // line 8
            echo "  <li class=\"reorder\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "label" => "Re-order", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "cart", "add_order", ["order_number" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "orderNumber", [])]])]]), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\items_list\\order\\parts\\actions.reorder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\items_list\\order\\parts\\actions.reorder.twig", "");
    }
}
