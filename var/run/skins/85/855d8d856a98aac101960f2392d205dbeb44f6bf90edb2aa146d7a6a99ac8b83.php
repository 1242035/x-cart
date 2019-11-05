<?php

/* form_field/input/text/date_range.twig */
class __TwigTemplate_c25f930b0a3a1717422cd9b9b98c72cf4fdc35fd7be2033ff44e559a2e28df80 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        ob_start();
        // line 6
        echo "  <span class=\"input-field-wrapper ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWrapperClass", [], "method"), "html", null, true);
        echo "\">
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "
    <span class=\"input-group-addon\">
      <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
    </span>
    <span class=\"input-date-range-container\">
      <input";
        // line 12
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo " />
    </span>
  </span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_field/input/text/date_range.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  29 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/input/text/date_range.twig", "D:\\x-cart\\skins\\admin\\form_field\\input\\text\\date_range.twig");
    }
}
