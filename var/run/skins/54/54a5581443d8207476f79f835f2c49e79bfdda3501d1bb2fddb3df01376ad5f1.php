<?php

/* button/save_search_filter.twig */
class __TwigTemplate_b51fbfe7560a37dc59d96ffb28751646b146e25c9f0ff96e4a0b343dd1e97514 extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getAttributes", [], "method")], "method");
        echo ">
  <div class=\"button-label\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method"), "html", null, true);
        echo "</div>
  <div class=\"button-action\">
    <input type=\"text\" name=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFilterFieldName", [], "method"), "html", null, true);
        echo "\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFilterName", [], "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPlaceholder", [], "method"), "html", null, true);
        echo "\" class=\"form-control\" />
    ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "getFilterId", [], "method")) {
            // line 10
            echo "      <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFilterIdFieldName", [], "method"), "html", null, true);
            echo "\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFilterId", [], "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "    ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => $this->getAttribute(($context["this"] ?? null), "getActionButtonLabel", [], "method"), "action" => $this->getAttribute(($context["this"] ?? null), "getDefaultAction", [], "method")]]), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "button/save_search_filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  41 => 10,  39 => 9,  31 => 8,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "button/save_search_filter.twig", "D:\\x-cart\\skins\\admin\\button\\save_search_filter.twig");
    }
}
