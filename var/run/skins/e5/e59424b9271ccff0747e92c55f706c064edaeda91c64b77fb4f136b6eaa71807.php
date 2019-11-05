<?php

/* items_list/product/parts/common.added-mark.twig */
class __TwigTemplate_2d30a47bc8471fbbac912ae19c8ce768cd85ad2bae0c19b57025f990b2abae68 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div title=\"Added to cart\" class=\"added-to-cart\"><i class=\"icon-ok-mark\"></i></div>
";
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.added-mark.twig";
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
        return new Twig_Source("", "items_list/product/parts/common.added-mark.twig", "D:\\x-cart\\skins\\crisp_white\\customer\\items_list\\product\\parts\\common.added-mark.twig");
    }
}
