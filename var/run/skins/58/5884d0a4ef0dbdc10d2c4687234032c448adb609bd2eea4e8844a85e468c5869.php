<?php

/* left_menu/sales_channels/body.twig */
class __TwigTemplate_21ff38758e83c243db32c6216b85b697776d3f578df6b4c287f05a076332af2b extends \XLite\Core\Templating\Twig\Template
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
        echo "<a href=\"#\" class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getClass", [], "method"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add sales channel"]), "html", null, true);
        echo "\">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getURLParams", [], "method")], "method"), "html", null, true);
        echo "
  ";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/plus.svg"], "method");
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "left_menu/sales_channels/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "left_menu/sales_channels/body.twig", "D:\\x-cart\\skins\\admin\\left_menu\\sales_channels\\body.twig");
    }
}
