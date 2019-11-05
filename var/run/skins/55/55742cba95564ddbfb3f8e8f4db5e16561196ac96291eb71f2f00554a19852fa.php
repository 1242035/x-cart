<?php

/* form_field/select_state.twig */
class __TwigTemplate_c50b80dbd7ca0c58df0bbc0be5aacc3d1051f2db4d7af2e9595d5cf81c6cae5f extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"input-field-wrapper ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWrapperClass", [], "method"), "html", null, true);
        echo "\">
  <select ";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo " data-value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getValue", [], "method"), "html", null, true);
        echo "\">
    ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "selectOne"], "method")) {
            // line 9
            echo "        <option value=\"\" ";
            if ($this->getAttribute(($context["this"] ?? null), "isOptionSelected", [0 => null], "method")) {
                echo "selected=\"selected\"";
            }
            echo " data-select-one=\"data-select-one\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "selectOneLabel"], "method"), "html", null, true);
            echo "</option>
    ";
        }
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getOptions", [], "method"));
        foreach ($context['_seq'] as $context["index"] => $context["state"]) {
            // line 12
            echo "      ";
            if ($this->getAttribute(($context["this"] ?? null), "isGroup", [0 => $context["state"]], "method")) {
                // line 13
                echo "          <optgroup ";
                echo $this->getAttribute(($context["this"] ?? null), "getOptionGroupAttributesCode", [0 => $context["index"], 1 => $context["state"]], "method");
                echo " data-id='";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "'>
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["state"], "options", []));
                foreach ($context['_seq'] as $context["_key"] => $context["state2"]) {
                    // line 15
                    echo "                <option value=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["state2"], "getStateId", [], "method"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute(($context["this"] ?? null), "isOptionSelected", [0 => $this->getAttribute($context["state2"], "getStateId", [], "method")], "method")) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo $this->getAttribute($context["state2"], "getState", [], "method");
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "          </optgroup>
      ";
            } else {
                // line 19
                echo "          <option value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["state"], "getStateId", [], "method"), "html", null, true);
                echo "\" ";
                if ($this->getAttribute(($context["this"] ?? null), "isOptionSelected", [0 => $this->getAttribute($context["state"], "getStateId", [], "method")], "method")) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $this->getAttribute($context["state"], "getState", [], "method");
                echo "</option>
      ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </select>
</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_field/select_state.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 22,  97 => 21,  85 => 19,  81 => 17,  66 => 15,  62 => 14,  55 => 13,  52 => 12,  47 => 11,  37 => 9,  35 => 8,  29 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/select_state.twig", "D:\\x-cart\\skins\\admin\\form_field\\select_state.twig");
    }
}
