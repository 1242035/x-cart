<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/order/invoice/parts/bottom.d2po.details.twig */
class __TwigTemplate_c5ff5628a4ad1e625625003960e214aae1e357d6708678ed21fe26b2c2af5576 extends \XLite\Core\Templating\Twig\Template
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
<strong>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Delivery to Post Office"]), "html", null, true);
        echo "</strong>

<ul class=\"address-section capost-d2po-section\">
  <li class=\"address-field\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getName", [], "method"), "html", null, true);
        echo "</li>
  <li class=\"address-street address-field\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getOfficeAddress", [], "method"), "html", null, true);
        echo ",</li>
  <li class=\"address-city address-field\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getCity", [], "method"), "html", null, true);
        echo ",</li>
  <li class=\"address-state address-field\">";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getProvince", [], "method"), "html", null, true);
        echo ",</li>
  <li class=\"address-zipcode address-field\">";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getPostalCode", [], "method"), "html", null, true);
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/order/invoice/parts/bottom.d2po.details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  36 => 12,  32 => 11,  28 => 10,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/order/invoice/parts/bottom.d2po.details.twig", "");
    }
}
