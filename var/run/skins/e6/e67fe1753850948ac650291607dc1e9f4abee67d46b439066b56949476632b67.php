<?php

/* items_list/payment/methods/parts/header.icon.twig */
class __TwigTemplate_60b7554082bd5523ddfc63968892e3847768db82cd93b302e441f028b46cb55e extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getAdminIconURL", [], "method") &&  !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getAltAdminIconURL", [], "method"))) {
            // line 8
            echo "  <div class=\"icon\"><img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getAdminIconURL", [], "method"), "html", null, true);
            echo "\" alt=\"\" /></div>
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/payment/methods/parts/header.icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/payment/methods/parts/header.icon.twig", "D:\\x-cart\\skins\\admin\\items_list\\payment\\methods\\parts\\header.icon.twig");
    }
}