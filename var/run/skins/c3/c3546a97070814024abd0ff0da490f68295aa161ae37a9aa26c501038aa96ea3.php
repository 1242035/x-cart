<?php

/* header/parts/content-type.twig */
class __TwigTemplate_7006fe4952b37c99900a46d3d9bb42c03aeed1c5edfdf8c69a40ba6dbc9cba2c extends \XLite\Core\Templating\Twig\Template
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
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "getCharset", [], "method");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/content-type.twig";
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
        return new Twig_Source("", "header/parts/content-type.twig", "D:\\x-cart\\skins\\admin\\header\\parts\\content-type.twig");
    }
}
