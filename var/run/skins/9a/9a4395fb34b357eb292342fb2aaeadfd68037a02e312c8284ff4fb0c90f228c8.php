<?php

/* form_field/label/translation_label.twig */
class __TwigTemplate_1fc28935e3d554ae24345feabdf531004f9721c0276b2cb5a5277838a867d799 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"input-field-wrapper ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWrapperClass", [], "method"), "html", null, true);
        echo "\">
  <span";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo ">
    ";
        // line 7
        if ( !twig_test_empty($this->getAttribute(($context["this"] ?? null), "getLabelValue", [], "method"))) {
            echo "<span>";
            echo $this->getAttribute(($context["this"] ?? null), "getLabelValue", [], "method");
            echo "</span>";
        }
        // line 8
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "getValue", [], "method")) {
            // line 9
            echo "      <a class=\"edit-link\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLabelEditURL", [], "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-edit icon\"></i>
      </a>
    ";
        }
        // line 13
        echo "  </span>
</span>";
    }

    public function getTemplateName()
    {
        return "form_field/label/translation_label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  39 => 9,  36 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/label/translation_label.twig", "D:\\x-cart\\skins\\admin\\form_field\\label\\translation_label.twig");
    }
}
