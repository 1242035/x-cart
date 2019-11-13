<?php

/* D:\x-cart\skins\customer\modules\XC\FastLaneCheckout\sections\details\included_modifiers.twig */
class __TwigTemplate_44d4bf6027bc1cbd46ce636c1afc54349fc7ebd11399ed9a63a748a8acfba2c0 extends \XLite\Core\Templating\Twig\Template
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
<included-modifiers inline-template>
    <ul class=\"included-modifiers\" v-html=\"included_modifiers_data\"></ul>
</included-modifiers>";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\sections\\details\\included_modifiers.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\FastLaneCheckout\\sections\\details\\included_modifiers.twig", "");
    }
}
