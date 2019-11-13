<?php

/* mini_cart/horizontal/parts/link.twig */
class __TwigTemplate_2b3578d3156c1c8ab8793953c9fbfec44a56c0866bec8f12b824682e187ec0e1 extends \XLite\Core\Templating\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["_X_ items", ["count" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "countQuantity", [], "method")]]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mini_cart/horizontal/parts/link.twig";
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
        return new Twig_Source("", "mini_cart/horizontal/parts/link.twig", "D:\\x-cart\\skins\\customer\\mini_cart\\horizontal\\parts\\link.twig");
    }
}
