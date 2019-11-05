<?php

/* modules/CDev/GoogleAnalytics/impression-block.twig */
class __TwigTemplate_6cdfc8216f37af1f1376cb7fe9af646c44fdda0d410a38545c1d66bae987d4e3 extends \XLite\Core\Templating\Twig\Template
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
        // line 13
        echo "
";
        // line 14
        if ($this->getAttribute(($context["this"] ?? null), "shouldRegisterImpression", [], "method")) {
            // line 15
            echo "    <script data-ga-ec-action=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getImpressionData", [], "method"), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/GoogleAnalytics/impression-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 15,  22 => 14,  19 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/CDev/GoogleAnalytics/impression-block.twig", "D:\\x-cart\\skins\\customer\\modules\\CDev\\GoogleAnalytics\\impression-block.twig");
    }
}
