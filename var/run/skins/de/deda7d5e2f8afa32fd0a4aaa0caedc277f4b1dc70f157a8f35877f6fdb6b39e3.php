<?php

/* modules/XC/ProductComparison/mobile_header_parts/navbar/account/additional/compare.twig */
class __TwigTemplate_1040110a8ab631b0cfb47047393fb1284d4c14300a0f7468dccc0b0dcddf6d59 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\CrispWhiteSkin\\View\\AddToCompare\\ProductCompareLink"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ProductComparison/mobile_header_parts/navbar/account/additional/compare.twig";
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
        return new Twig_Source("", "modules/XC/ProductComparison/mobile_header_parts/navbar/account/additional/compare.twig", "D:\\x-cart\\skins\\crisp_white\\customer\\modules\\XC\\ProductComparison\\mobile_header_parts\\navbar\\account\\additional\\compare.twig");
    }
}