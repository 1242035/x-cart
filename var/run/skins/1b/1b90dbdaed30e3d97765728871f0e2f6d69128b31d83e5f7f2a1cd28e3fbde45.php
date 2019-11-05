<?php

/* 404/parts/links.twig */
class __TwigTemplate_787a2e6f7b5491166a373f8d5bf3d6da0ad9869ec9f31fdea21e4665ad2fbd85 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "
<div class=\"page-404\">
  ";
        // line 10
        echo $this->getAttribute(($context["this"] ?? null), "getRegularText", [], "method");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "404/parts/links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 10,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "404/parts/links.twig", "D:\\x-cart\\skins\\customer\\404\\parts\\links.twig");
    }
}
