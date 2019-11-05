<?php

/* settings/requirement/body.twig */
class __TwigTemplate_a85dab5054774d075a010b70fde7e4bb8a5cf49ae30bbf2adee3344c8e67df12 extends \XLite\Core\Templating\Twig\Template
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
        $context["requirement"] = $this->getAttribute(($context["this"] ?? null), "getRequirement", [], "method");
        // line 6
        $context["name"] = $this->getAttribute(($context["this"] ?? null), "getName", [], "method");
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isAjax", [], "method")) {
            // line 9
            echo "  <table class=\"block\">
";
        }
        // line 11
        echo "<tr class=\"requirement-line real-content ";
        if ($this->getAttribute(($context["this"] ?? null), "isOdd", [], "method")) {
            echo "dialog-box";
        } else {
            echo "highlight";
        }
        echo "\">
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => ["reloadParams" => ["name" =>         // line 14
($context["name"] ?? null), "odd" => $this->getAttribute(        // line 15
($context["this"] ?? null), "isOdd", [], "method")]]], "method"), "html", null, true);
        // line 17
        echo "

  <td class=\"name\">
    ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["requirement"] ?? null), "title", []), "html", null, true);
        echo "
    ";
        // line 21
        if ( !$this->getAttribute(($context["requirement"] ?? null), "status", [])) {
            // line 22
            echo "      <div class=\"description\">
        ";
            // line 23
            echo $this->getAttribute(($context["requirement"] ?? null), "description", []);
            echo "
      </div>
      <div class=\"kb-description\">
        ";
            // line 26
            echo $this->getAttribute(($context["requirement"] ?? null), "kb_description", []);
            echo "
      </div>
    ";
        }
        // line 29
        echo "  </td>
  ";
        // line 30
        ob_start();
        // line 31
        echo "    <td class=\"status\">
      ";
        // line 32
        if ($this->getAttribute(($context["requirement"] ?? null), "status", [])) {
            // line 33
            echo "        ";
            if ($this->getAttribute(($context["requirement"] ?? null), "skipped", [])) {
                // line 34
                echo "          <span class=\"skipped info-message\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Skipped"]), "html", null, true);
                echo "</span>
        ";
            } else {
                // line 36
                echo "          <span class=\"passed success-message\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Passed"]), "html", null, true);
                echo "</span>
        ";
            }
            // line 38
            echo "      ";
        } else {
            // line 39
            echo "        <span class=\"failed error-message\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Failed"]), "html", null, true);
            echo "</span>
        ";
            // line 40
            if ($this->getAttribute(($context["requirement"] ?? null), "error_description", [])) {
                // line 41
                echo "          ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "id" => ("install_requirement_error_" . ($context["name"] ?? null)), "text" => $this->getAttribute(($context["requirement"] ?? null), "error_description", []), "caption" => "", "isImageTag" => "true", "className" => "help-icon"]]), "html", null, true);
                echo "
        ";
            }
            // line 43
            echo "      ";
        }
        // line 44
        echo "    </td>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 46
        echo "</tr>
";
        // line 47
        if ($this->getAttribute(($context["this"] ?? null), "isAjax", [], "method")) {
            // line 48
            echo "  </table>
";
        }
    }

    public function getTemplateName()
    {
        return "settings/requirement/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 48,  125 => 47,  122 => 46,  118 => 44,  115 => 43,  109 => 41,  107 => 40,  102 => 39,  99 => 38,  93 => 36,  87 => 34,  84 => 33,  82 => 32,  79 => 31,  77 => 30,  74 => 29,  68 => 26,  62 => 23,  59 => 22,  57 => 21,  53 => 20,  48 => 17,  46 => 15,  45 => 14,  44 => 12,  35 => 11,  31 => 9,  29 => 8,  26 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/requirement/body.twig", "D:\\x-cart\\skins\\admin\\settings\\requirement\\body.twig");
    }
}
