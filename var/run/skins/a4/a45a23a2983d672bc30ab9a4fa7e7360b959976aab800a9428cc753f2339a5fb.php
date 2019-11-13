<?php

/* D:\x-cart\skins\admin\welcome_block\root_admin\title.twig */
class __TwigTemplate_999851fc6f226b22ddb54b0386f3aa5640a70fec641cd4da65584da24220464d extends \XLite\Core\Templating\Twig\Template
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
<h1 class=\"block-heading\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Steps to complete your store for real sales", ["url" => $this->getAttribute(($context["this"] ?? null), "getShopURL", [], "method")]]);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\welcome_block\\root_admin\\title.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\welcome_block\\root_admin\\title.twig", "");
    }
}
