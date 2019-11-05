<?php

/* main_center/page_container_parts/header_parts/storefront_status.twig */
class __TwigTemplate_fdc6c0f2947c75e33231669e6d3818ff5aa1a8204272ea47d7fd0abe22292bb7 extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getContainerTagAttributes", [], "method")], "method");
        echo ">
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isTogglerVisible", [], "method")) {
            // line 7
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLink", [], "method"), "html", null, true);
            echo "\" ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getTogglerTagAttributes", [], "method")], "method");
            echo "><div><span class=\"svg\">";
            echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/check.svg"], "method");
            echo "</span></div></a>
  ";
        }
        // line 9
        echo "  <a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getOpenedShopURL", [], "method"), "html", null, true);
        echo "\" class=\"link opened\" target=\"_blank\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["View storefront"]), "html", null, true);
        echo "</a>
  <a href=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getClosedShopURL", [], "method"), "html", null, true);
        echo "\" class=\"link closed\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Private link"]), "html", null, true);
        echo "\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Storefront is closed"]), "html", null, true);
        echo "
  </a>
  ";
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "main_center/page_container_parts/header_parts/storefront_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  51 => 11,  45 => 10,  38 => 9,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main_center/page_container_parts/header_parts/storefront_status.twig", "D:\\x-cart\\skins\\admin\\main_center\\page_container_parts\\header_parts\\storefront_status.twig");
    }
}
