<?php

/* items_list/product/parts/grid.buttons-container.twig */
class __TwigTemplate_5b8f132a4201c0fe07659a6e5b8eb4a7f4e48a5ba721c140a157c9130f4bd4b6 extends \XLite\Core\Templating\Twig\Template
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
 <div class=\"buttons-container\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "buttons", "type" => "inherited", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
        echo "
 </div>";
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/grid.buttons-container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/product/parts/grid.buttons-container.twig", "D:\\x-cart\\skins\\crisp_white\\customer\\items_list\\product\\parts\\grid.buttons-container.twig");
    }
}
