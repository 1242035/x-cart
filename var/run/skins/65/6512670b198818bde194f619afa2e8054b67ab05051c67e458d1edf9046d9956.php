<?php

/* D:\x-cart\skins\customer\modules\XC\FastLaneCheckout\sections\details\order_total.twig */
class __TwigTemplate_a40de933f9b4dadedec85cb2a92e5f2f7a2daf2c215e1a06acaf0e44a1f59718 extends \XLite\Core\Templating\Twig\Template
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
<order-total inline-template>
    <div class=\"order-total\" v-text='total_text'></div>
    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("checkout/steps/review/parts/items.paid.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 9
        $this->loadTemplate("checkout/steps/review/parts/items.paid.twig", "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\sections\\details\\order_total.twig", 9)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 10
        echo "</order-total>";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\sections\\details\\order_total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  29 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\sections\\details\\order_total.twig", "");
    }
}