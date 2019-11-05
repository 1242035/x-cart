<?php

/* form_field/select.rich.twig */
class __TwigTemplate_dce354356029bf9ca2056dbdad0814b483c52a5ac39760a7bfba8360bc982e8b extends \XLite\Core\Templating\Twig\Template
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
  <select id=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFieldId", [], "method"), "html", null, true);
        echo "\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo ">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getOptions", [], "method"));
        foreach ($context['_seq'] as $context["optionValue"] => $context["optionLabel"]) {
            // line 8
            echo "      <option value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["optionValue"], "html", null, true);
            echo "\" ";
            if (($context["optionValue"] == $this->getAttribute(($context["this"] ?? null), "getValue", [], "method"))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo $context["optionLabel"];
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['optionValue'], $context['optionLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </select>
</span>
";
    }

    public function getTemplateName()
    {
        return "form_field/select.rich.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  38 => 8,  34 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/select.rich.twig", "D:\\x-cart\\skins\\admin\\form_field\\select.rich.twig");
    }
}
