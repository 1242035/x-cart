<?php

/* items_list/model/table/labels/cell.name.twig */
class __TwigTemplate_a7b37d2266967acab0147d0c2b72905ab4f36399c174fab18ca9f73394837d90 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"language-labels\">

  <div class=\"label-name\">

    ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isSeveralLanguagesExists", [], "method")) {
            // line 10
            echo "      <ul class=\"lng-marks\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getLanguageMarks", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"));
            foreach ($context['_seq'] as $context["code"] => $context["lng"]) {
                // line 12
                echo "          <li><span class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["lng"], "status", []), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "</span></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['lng'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      </ul>
    ";
        }
        // line 16
        echo "    
    <span class=\"name\">";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getName", [], "method"), "html", null, true);
        echo "</span>

  </div>

  <div class=\"label-edit\" style=\"display: none;\">

    <div class=\"lng-container\">
      <div class=\"lng-title lng-title-default\">";
        // line 24
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "defaultLanguageObject", []), "code", [])), "html", null, true);
        echo "</div>
      <textarea
        ";
        // line 26
        if ($this->getAttribute(($context["this"] ?? null), "isDefaultLanguageNonEditable", [], "method")) {
            // line 27
            echo "          readonly=\"readonly\"
          class=\"form-control non-editable\"
        ";
        } else {
            // line 30
            echo "          class=\"form-control\"
          name=\"current[";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "label_id", []), "html", null, true);
            echo "]\"
        ";
        }
        // line 33
        echo "        lang=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "defaultLanguageObject", []), "code", []), "html", null, true);
        echo "\"
        xml:lang=\"";
        // line 34
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "defaultLanguageObject", []), "code", []), "html", null, true);
        echo "\"
        ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "defaultLanguageObject", []), "r2l", [])) {
            echo " dir=\"rtl\"";
        }
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLabelDefaultValue", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), "html", null, true);
        echo "</textarea>
    </div>

    ";
        // line 38
        if ($this->getAttribute(($context["this"] ?? null), "isTranslatedLanguageSelected", [], "method")) {
            // line 39
            echo "      <div class=\"lng-container\">
        <div class=\"lng-title\">";
            // line 40
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "translationLanguageObject", []), "code", [])), "html", null, true);
            echo "</div>
        <textarea
          name=\"translated[";
            // line 42
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "label_id", []), "html", null, true);
            echo "]\"
          lang=\"";
            // line 43
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "translationLanguageObject", []), "code", []), "html", null, true);
            echo "\"
          class=\"form-control\"
          xml:lang=\"";
            // line 45
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "translationLanguageObject", []), "code", []), "html", null, true);
            echo "\"
          ";
            // line 46
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "translationLanguageObject", []), "r2l", [])) {
                echo " dir=\"rtl\"";
            }
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLabelTranslatedValue", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), "html", null, true);
            echo "</textarea>
      </div>
    ";
        }
        // line 49
        echo "
  </div>

  <div class=\"clear\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/labels/cell.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  125 => 46,  121 => 45,  116 => 43,  112 => 42,  107 => 40,  104 => 39,  102 => 38,  92 => 35,  88 => 34,  83 => 33,  78 => 31,  75 => 30,  70 => 27,  68 => 26,  63 => 24,  53 => 17,  50 => 16,  46 => 14,  35 => 12,  31 => 11,  28 => 10,  26 => 9,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/labels/cell.name.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\labels\\cell.name.twig");
    }
}
