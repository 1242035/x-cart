<?php

/* D:\x-cart\skins\customer\product\details\parts\common.product-editable-attributes.twig */
class __TwigTemplate_b0406af5dd310d6c3297fb87c156803d17757590023f060023244a3aeb24bbb7 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Product\\Details\\Customer\\EditableAttributes", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\product\\details\\parts\\common.product-editable-attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\product\\details\\parts\\common.product-editable-attributes.twig", "");
    }
}
