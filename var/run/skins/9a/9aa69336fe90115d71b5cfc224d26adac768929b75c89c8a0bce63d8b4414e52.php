<?php

/* D:\x-cart\skins\admin\items_list\product\table\parts\header\checkbox.twig */
class __TwigTemplate_d5231afda1e77eafd724419b757c9e09b2670b41c1001ba992045460c1f39c8e extends \XLite\Core\Templating\Twig\Template
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
<th class=\"checkboxes\"><input type=\"checkbox\" class=\"check-all\" /></th>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\items_list\\product\\table\\parts\\header\\checkbox.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\items_list\\product\\table\\parts\\header\\checkbox.twig", "");
    }
}
