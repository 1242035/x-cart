<?php

/* D:\x-cart\skins\customer\product\details\parts\common.quicklook.form.twig */
class __TwigTemplate_fd36851756b29fa1f6c0a5592d7f095295fb503e883806676892d53bed30788c extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Product\\AddToCart", ["product" => $this->getAttribute(($context["this"] ?? null), "product", []), "className" => "product-details box-product", "validationEngine" => "1"]);        // line 8
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.details.quicklook.info.form"]]), "html", null, true);
        echo "
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\product\\details\\parts\\common.quicklook.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\product\\details\\parts\\common.quicklook.form.twig", "");
    }
}
