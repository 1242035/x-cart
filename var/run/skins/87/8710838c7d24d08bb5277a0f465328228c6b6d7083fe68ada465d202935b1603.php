<?php

/* form_field/checkbox.twig */
class __TwigTemplate_8286ddd7e6b977625d74e228318344d539fc2da1aa6116648fefa0b3619a94c9 extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"input-field-wrapper checkbox ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWrapperClass", [], "method"), "html", null, true);
        echo "\">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "
  <input type=\"hidden\" name=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\" value=\"\" />
  ";
        // line 7
        $context["caption"] = $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "caption"], "method");
        // line 8
        echo "  ";
        if (twig_test_empty(($context["caption"] ?? null))) {
            // line 9
            echo "    <input";
            echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
            echo " />
  ";
        } else {
            // line 11
            echo "    <label>
      <input";
            // line 12
            echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
            echo " />
      <span class=\"caption\">";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["caption"] ?? null), "html", null, true);
            echo "</span>
    </label>
  ";
        }
        // line 16
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "form_field/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  50 => 13,  46 => 12,  43 => 11,  37 => 9,  34 => 8,  32 => 7,  28 => 6,  24 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/checkbox.twig", "D:\\x-cart\\skins\\admin\\form_field\\checkbox.twig");
    }
}
