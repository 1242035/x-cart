<?php

/* D:\x-cart\skins\admin\footer\right\marketplace_terms.twig */
class __TwigTemplate_9b9106dcc72b0a2d54a9eb86e1bf04c03f3d264a86e2e08316544a8e0ee9af48 extends \XLite\Core\Templating\Twig\Template
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
        if ((($this->getAttribute(($context["this"] ?? null), "getTarget", [], "method") == "addons_list_marketplace") || ($this->getAttribute(($context["this"] ?? null), "getTarget", [], "method") == "addons_list_installed"))) {
            // line 7
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getXCartURL", [0 => "https://www.x-cart.com/module-marketplace-terms-of-use.html"], "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Module Marketplace. Terms of use"]), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\footer\\right\\marketplace_terms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\footer\\right\\marketplace_terms.twig", "");
    }
}
