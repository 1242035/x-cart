<?php

/* layout/header/orders.twig */
class __TwigTemplate_18364a34658050d9412d5aece0bcfa3dca3758620ceff2cdb18eded41e7cbca3 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-orders\">
  <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getOrdersListUrl", [], "method"), "html", null, true);
        echo "\" class=\"orders icon-orders\">
  \t<span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCaption", [], "method"), "html", null, true);
        echo "</span>
  </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "layout/header/orders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/orders.twig", "D:\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\orders.twig");
    }
}
