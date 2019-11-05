<?php

/* items_list/product/parts/grid.photo.twig */
class __TwigTemplate_2f90417e6e84492fdd98d1d9e92a3a9e4e6b531dc8fda9fdfcccff2d8299f873 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "<div class=\"product-photo\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "photo", "type" => "nested", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/grid.photo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 9,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/product/parts/grid.photo.twig", "D:\\x-cart\\skins\\customer\\items_list\\product\\parts\\grid.photo.twig");
    }
}
