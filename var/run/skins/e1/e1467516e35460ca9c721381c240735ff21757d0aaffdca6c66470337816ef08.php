<?php

/* D:\x-cart\skins\customer\404\parts\product\product_text.twig */
class __TwigTemplate_a6292d052173d3b18c861cd391b83d2fd9b0d8f4c984e54fdc54bb0e959a5630 extends \XLite\Core\Templating\Twig\Template
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
<p class=\"page-404\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sorry, this product is no longer available."]), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\404\\parts\\product\\product_text.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\404\\parts\\product\\product_text.twig", "");
    }
}
