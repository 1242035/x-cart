<?php

/* items_list/payment/methods/parts/header.description.twig */
class __TwigTemplate_14dcca6df92b0cc718fc038b460c6377da265d5161470721bc766e604302bb28 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getAltAdminDescription", [], "method")) {
            // line 8
            echo "  <div class=\"description\">";
            echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getAltAdminDescription", [], "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/payment/methods/parts/header.description.twig";
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
        return new Twig_Source("", "items_list/payment/methods/parts/header.description.twig", "D:\\x-cart\\skins\\admin\\items_list\\payment\\methods\\parts\\header.description.twig");
    }
}