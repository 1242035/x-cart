<?php

/* language_selector_single/body.twig */
class __TwigTemplate_020f5bda63ea201157bd325a5a7bb396a41d9ae0ebb8fc873bf4a915af41527f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"single-language-selector\">
  <ul>
    <li>
      <label class=\"selected\" data-href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getChangeLanguageLink", [0 => $this->getAttribute(($context["this"] ?? null), "currentLanguage", [])], "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "currentLanguage", []), "name", []), "html", null, true);
        echo "</label>
    </li>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getActiveLanguages", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 11
            echo "      <li>
        <label data-href=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getChangeLanguageLink", [0 => $context["language"]], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["language"], "name", []), "html", null, true);
            echo "</label>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "language_selector_single/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  39 => 12,  36 => 11,  32 => 10,  25 => 8,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "language_selector_single/body.twig", "D:\\x-cart\\skins\\crisp_white\\customer\\language_selector_single\\body.twig");
    }
}
