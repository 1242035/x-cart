<?php

/* D:\x-cart\skins\customer\common\surcharge_parts\surcharge.twig */
class __TwigTemplate_9e81589cd72c125efa038bc76d8da2e3c90d39ab8d685e71d3fb363a162eddf1 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"surcharge-cell\">";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "formatPriceHTML", [0 => $this->getAttribute(($context["this"] ?? null), "getSurcharge", [], "method"), 1 => $this->getAttribute(($context["this"] ?? null), "getCurrency", [], "method"), 2 => 1], "method");
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\common\\surcharge_parts\\surcharge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\common\\surcharge_parts\\surcharge.twig", "");
    }
}
