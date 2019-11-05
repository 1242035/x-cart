<?php

/* modules/QSL/FlyoutCategoriesMenu/parts/category.link.twig */
class __TwigTemplate_56a9db7f68abeb5890273ed985f8054e01de11bd17071f268cf0e5b34a30f930 extends \XLite\Core\Templating\Twig\Template
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
        echo "<a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "_category", []), "link", []), "html", null, true);
        echo "\" ";
        echo $this->getAttribute(($context["this"] ?? null), "displayLinkClass", [0 => ($context["idx"] ?? null), 1 => $this->getAttribute(($context["loop"] ?? null), "length", []), 2 => $this->getAttribute(($context["this"] ?? null), "_category", [])], "method");
        echo " title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "_category", []), "name", []), "html", null, true);
        echo "\">
  <span class=\"category-label\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "_category", []), "name", []), "html", null, true);
        if ($this->getAttribute(($context["this"] ?? null), "isShowProductNum", [], "method")) {
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "_category", []), "productsCount", []), "html", null, true);
            echo ")";
        }
        echo "</span>
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isShowTriangle", [])) {
            // line 7
            echo "    <span class=\"icon-triangle\"></span>
  ";
        }
        // line 9
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "modules/QSL/FlyoutCategoriesMenu/parts/category.link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  39 => 7,  37 => 6,  28 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/QSL/FlyoutCategoriesMenu/parts/category.link.twig", "D:\\x-cart\\skins\\customer\\modules\\QSL\\FlyoutCategoriesMenu\\parts\\category.link.twig");
    }
}
