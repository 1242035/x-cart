<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.ret_amount.twig */
class __TwigTemplate_24036ee352182e2319d835ff0ca3de0d415dfac68f79dac5657a2e71dffeef8c extends \XLite\Core\Templating\Twig\Template
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
<div class=\"return-amount\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text\\Integer", "className" => "amount", "fieldOnly" => "true", "fieldName" => (("items[" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getItemId", [], "method")) . "][amount]"), "min" => "0", "max" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getAmount", [], "method")]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.ret_amount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.ret_amount.twig", "");
    }
}
