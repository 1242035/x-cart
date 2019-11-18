<?php

/* languages/edit.twig */
class __TwigTemplate_2e80173aab6856387164fcd30023dd5d5fd992a6f36bc614ecabaa3c185bc6e9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"edit-label-dialog label-dialog\">

  <h2>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Edit label"]), "html", null, true);
        echo "</h2>

  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Please specify text labels for each language"]), "html", null, true);
        echo "

  ";
        // line 11
        $this->startForm("\\XLite\\View\\Form\\Translations\\Labels", ["formAction" => "edit"]);        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "      <ul>

        <li>
          <label for=\"edit_name\" class=\"label-name\">";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Label name"]), "html", null, true);
        echo "</label>
          <input type=\"text\" id=\"edit_name\" name=\"name\" value=\"";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "label", []), "name", []), "html", null, true);
        echo "\" readonly=\"readonly\" class=\"name\" />
        </li>

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAddedLanguages", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 22
            echo "          <li>
            <label for=\"edit_label_";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["l"], "code", []), "html", null, true);
            echo "\" class=\"language";
            if ($this->getAttribute(($context["this"] ?? null), "isRequiredLanguage", [0 => $context["l"]], "method")) {
                echo " default";
            }
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["l"], "code", [])), "html", null, true);
            echo "</label>
            <textarea id=\"edit_label_";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["l"], "code", []), "html", null, true);
            echo "\" name=\"label[";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["l"], "code", []), "html", null, true);
            echo "]\" class=\"form-control\" lang=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["l"], "code", []), "html", null, true);
            echo "\" xml:lang=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["l"], "code", []), "html", null, true);
            echo "\"";
            if ($this->getAttribute($context["l"], "r2l", [])) {
                echo " dir=\"rtl\"";
            }
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTranslation", [0 => $this->getAttribute($context["l"], "code", [])], "method"), "html", null, true);
            echo "</textarea>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
      </ul>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 30
        echo "
    ";
        // line 31
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\StickyPanel\\Language\\LabelDetails"]]), "html", null, true);
        echo "

  ";
        $this->endForm();        // line 34
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "languages/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  101 => 31,  98 => 30,  93 => 27,  72 => 24,  62 => 23,  59 => 22,  55 => 21,  49 => 18,  45 => 17,  40 => 14,  38 => 13,  35 => 12,  34 => 11,  29 => 9,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "languages/edit.twig", "D:\\x-cart\\skins\\admin\\languages\\edit.twig");
    }
}
