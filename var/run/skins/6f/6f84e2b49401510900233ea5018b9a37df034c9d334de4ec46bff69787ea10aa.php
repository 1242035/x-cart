<?php

/* D:\x-cart\skins\customer\modules\XC\ThemeTweaker\themetweaker\custom_css\css.twig */
class __TwigTemplate_f901f5a494c917cdeecb9ef1e62bd1b2682b818145cadea2746218c2a0063cda extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isInCustomCssMode", [], "method")) {
            // line 8
            echo "
    ";
            // line 9
            if ($this->getAttribute(($context["this"] ?? null), "isCustomCssEnabled", [], "method")) {
                // line 10
                echo "        <style rel=\"stylesheet\" media=\"screen\" type=\"text/css\" data-custom-css>
        ";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCustomCssText", [], "method"), "html", null, true);
                echo "
        </style>
    ";
            } else {
                // line 14
                echo "        <script type=\"text/css\" data-custom-css>
        ";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCustomCssText", [], "method"), "html", null, true);
                echo "
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\custom_css\\css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  38 => 14,  32 => 11,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\custom_css\\css.twig", "");
    }
}