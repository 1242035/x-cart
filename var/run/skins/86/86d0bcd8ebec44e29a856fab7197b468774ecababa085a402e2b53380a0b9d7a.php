<?php

/* D:\x-cart\skins\customer\shopping_cart\shipping_estimator\parts\address.city.twig */
class __TwigTemplate_8f66dad94f49874c30e6fe95ed7c1e2cc02048d1531b75953f8c35438085ea0f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasField", [0 => "city"], "method")) {
            // line 8
            echo "  <li class=\"city\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "destination_city", "value" => $this->getAttribute(($context["this"] ?? null), "getCity", [], "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["City"]), "required" => "true"]]), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\shopping_cart\\shipping_estimator\\parts\\address.city.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\shopping_cart\\shipping_estimator\\parts\\address.city.twig", "");
    }
}