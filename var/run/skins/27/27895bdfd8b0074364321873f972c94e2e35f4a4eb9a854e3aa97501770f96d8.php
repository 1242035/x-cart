<?php

/* D:\x-cart\skins\admin\modules\XC\CanadaPost\order\page\parts\shipping.d2po.twig */
class __TwigTemplate_1e2b612053c9710233fa83fe2bf91b1eaae58943854c6fe3a7f2af4222efec54 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getCapostOffice", [], "method")) {
            // line 8
            echo "  <div class=\"address\">
  
    <strong>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Delivery to Post Office"]), "html", null, true);
            echo "</strong>
  
    <ul class=\"address-section shipping-address-section capost-d2po-section\">
  
      <li class=\"address-field\">
        <span class=\"address-field\">";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getName", [], "method"), "html", null, true);
            echo "</span>
      </li>
  
      <li class=\"address-street address-field\">
        <span class=\"address-field\">";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getOfficeAddress", [], "method"), "html", null, true);
            echo "</span>
        <span class=\"address-comma\">,</span>
      </li>
  
      <li class=\"address-city address-field\">
        <span class=\"address-field\">";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getCity", [], "method"), "html", null, true);
            echo "</span>
        <span class=\"address-comma\">,</span>
      </li>
  
      <li class=\"address-state address-field\">
        <span class=\"address-field\">";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getProvince", [], "method"), "html", null, true);
            echo "</span>
        <span class=\"address-comma\">,</span>
      </li>
  
      <li class=\"address-zipcode address-field\">
        <span class=\"address-field\">";
            // line 34
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "capostOffice", []), "getPostalCode", [], "method"), "html", null, true);
            echo "</span>
      </li>
  
    </ul>
  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\modules\\XC\\CanadaPost\\order\\page\\parts\\shipping.d2po.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 34,  59 => 29,  51 => 24,  43 => 19,  36 => 15,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\modules\\XC\\CanadaPost\\order\\page\\parts\\shipping.d2po.twig", "");
    }
}
