<?php

/* modules/Amazon/PayWithAmazon/method_style.twig */
class __TwigTemplate_ee50e69c9e76bb2ae7fa4b2badc5a26b5e3f655a0e071136b4b0dd0ac3be2231 extends \XLite\Core\Templating\Twig\Template
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
<style type=\"text/css\">
.module-name-Amazon_PayWithAmazon .payment-logo img {
    margin-top: 7px;
}
</style>";
    }

    public function getTemplateName()
    {
        return "modules/Amazon/PayWithAmazon/method_style.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/Amazon/PayWithAmazon/method_style.twig", "D:\\x-cart\\skins\\admin\\modules\\Amazon\\PayWithAmazon\\method_style.twig");
    }
}
