<?php

/* D:\x-cart\skins\customer\items_list\product\parts\common.quicklook-button.twig */
class __TwigTemplate_a3c611c4d89776ef976255b175f59c4d1d38eece23d1bbc6e95fc74e6607e06f extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isQuickLookEnabled", [], "method")) {
            // line 9
            echo "  <div class=\"quicklook\">
    <a
      href=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductURL", [0 => $this->getAttribute(($context["this"] ?? null), "categoryId", [])], "method"), "html", null, true);
            echo "\"
      class=\"quicklook-link quicklook-link-";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "product_id", []), "html", null, true);
            echo " quicklook-link-category-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "categoryId", []), "html", null, true);
            echo "\">
      <div class=\"quicklook-view\">&nbsp;</div>
    </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\items_list\\product\\parts\\common.quicklook-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 12,  25 => 11,  21 => 9,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\items_list\\product\\parts\\common.quicklook-button.twig", "");
    }
}
