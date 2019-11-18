<?php

/* form_field/input/checkbox/payment_method.twig */
class __TwigTemplate_aba29b8a6b676f6e82bfb5c5539cd4d555dbe145fa9feeaa81f4b2b37ee2f6a3 extends \XLite\Core\Templating\Twig\Template
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
  <div class=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCssClass", [], "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute(($context["this"] ?? null), "getTooltipMessage", [], "method")) {
            echo " title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTooltipMessage", [], "method"), "html", null, true);
            echo "\" data-toggle=\"tooltip\"";
        }
        echo " >
    ";
        // line 7
        if ( !$this->getAttribute(($context["this"] ?? null), "isDisabled", [], "method")) {
            // line 8
            echo "      <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "\" value=\"\" />
    ";
        }
        // line 10
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "isDisabled", [], "method")) {
            // line 11
            echo "      <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getValue", [], "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 13
        echo "    <input";
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo " />
    <label for=\"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFieldId", [], "method"), "html", null, true);
        echo "\">
      <div class=\"onoffswitch-inner\">
        <div class=\"on-caption\">";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getOnLabel", [], "method")]), "html", null, true);
        echo "</div>
        <div class=\"off-caption\">";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getOffLabel", [], "method")]), "html", null, true);
        echo "</div>
      </div>
      <span class=\"onoffswitch-switch\"></span>
    </label>
  </div>
</span>";
    }

    public function getTemplateName()
    {
        return "form_field/input/checkbox/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  65 => 16,  60 => 14,  55 => 13,  47 => 11,  44 => 10,  38 => 8,  36 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/input/checkbox/payment_method.twig", "D:\\x-cart\\skins\\admin\\form_field\\input\\checkbox\\payment_method.twig");
    }
}
