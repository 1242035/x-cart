<?php

/* D:\x-cart\skins\customer\order\parts\status.payment.twig */
class __TwigTemplate_0fd3a11501703dc32cd984ad1218663dbd8cb626a2379c150bd7fe2da6e9e0d1 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"payment order-status-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentStatusCode", [], "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\OrderStatus\\Payment", "order" => $this->getAttribute(($context["this"] ?? null), "getOrder", [], "method"), "useWrapper" => "true"]]), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\order\\parts\\status.payment.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\order\\parts\\status.payment.twig", "");
    }
}
