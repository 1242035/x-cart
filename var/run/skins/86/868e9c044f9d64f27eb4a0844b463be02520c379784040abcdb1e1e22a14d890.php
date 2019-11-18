<?php

/* promotions/simple_blocks/multicurrency.twig */
class __TwigTemplate_b4e17a579168d404ef31b6dde930b83a04c54ac173a68b654317604389abdcb7 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\SimplePromoBlock", "promoId" => "multi-currency-1"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "promotions/simple_blocks/multicurrency.twig";
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
        return new Twig_Source("", "promotions/simple_blocks/multicurrency.twig", "D:\\x-cart\\skins\\admin\\promotions\\simple_blocks\\multicurrency.twig");
    }
}
