<?php

/* D:\x-cart\skins\customer\modules\XC\FastLaneCheckout\select_address\add_button.twig */
class __TwigTemplate_bc6213cec646cc579a1e5f6c9b23960259bbf588ef14df194deee02404e2e03f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isAddAddressButtonVisible", [], "method")) {
            // line 8
            echo "<div class=\"add-new-address-button\">
  ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\AddAddressLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add new address"]), "atype" => $this->getAttribute(($context["this"] ?? null), "getAddressType", [], "method"), "saveAndApply" => true]]), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\select_address\\add_button.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\select_address\\add_button.twig", "");
    }
}
