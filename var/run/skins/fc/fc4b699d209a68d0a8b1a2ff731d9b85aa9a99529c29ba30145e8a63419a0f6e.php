<?php

/* D:\x-cart\skins\customer\modules\CDev\SimpleCMS\page\parts\content.twig */
class __TwigTemplate_bcd561c57224614a3d31540c2cf02c89f548bf399eb85581c52d09f9d2ce0bc1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"page-body-content\" ";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", []), "getFieldMetadata", [0 => "body"], "method")], "method");
        echo ">";
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", []), "getBody", [], "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\CDev\\SimpleCMS\\page\\parts\\content.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\CDev\\SimpleCMS\\page\\parts\\content.twig", "");
    }
}
