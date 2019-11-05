<?php

/* items_list/model/table/parts/selector.twig */
class __TwigTemplate_f77c4a16476aba858574c725ad5febb53c9860d3a1ea659d5f2697c8804c6dce extends \XLite\Core\Templating\Twig\Template
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
<div class=\"selector\">
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isAllowEntitySelect", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 7
            echo "  <input type=\"checkbox\"
         name=\"";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSelectorDataPrefix", [], "method"), "html", null, true);
            echo "[";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getUniqueIdentifier", [], "method"), "html", null, true);
            echo "]\"
         value=\"1\"
         class=\"selector not-significant\"
         autocomplete=\"off\"
         ";
            // line 12
            if ($this->getAttribute(($context["this"] ?? null), "isRowSelected", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
                echo "checked=\"checked\"";
            }
            // line 13
            echo "  />
  ";
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  41 => 13,  37 => 12,  28 => 8,  25 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/parts/selector.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\parts\\selector.twig");
    }
}
