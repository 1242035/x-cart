<?php

/* main_center/page_container_parts/header_parts/logo.twig */
class __TwigTemplate_5872642676faa530a12baab4c1595ca6246860801b5be94d6995ac8cecbcfb18 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"logo\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context]), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/logo.svg"], "method");
        echo "</a></div>
";
    }

    public function getTemplateName()
    {
        return "main_center/page_container_parts/header_parts/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main_center/page_container_parts/header_parts/logo.twig", "D:\\x-cart\\skins\\admin\\main_center\\page_container_parts\\header_parts\\logo.twig");
    }
}
