<?php

/* D:\x-cart\skins\customer\items_list\product\parts\grid.button-add2cart-wrapper.twig */
class __TwigTemplate_6813bfaf33ee4871c903acda67a5911b4457965b49e5f4adb9248b38dabdf730 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayAdd2CartButton", [], "method")) {
            // line 8
            echo "  <div class=\"add-to-cart-button\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => "items_list/product/parts/common.button-add2cart.twig", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\items_list\\product\\parts\\grid.button-add2cart-wrapper.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\items_list\\product\\parts\\grid.button-add2cart-wrapper.twig", "");
    }
}
