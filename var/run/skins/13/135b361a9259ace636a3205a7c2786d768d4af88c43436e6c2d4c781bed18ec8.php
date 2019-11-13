<?php

/* D:\x-cart\skins\common\order\invoice\parts\head.address.twig */
class __TwigTemplate_a1f83058ba1f6478c5371aa04a10c535292638fb3c1cec76753875c2b5c685d2 extends \XLite\Core\Templating\Twig\Template
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
        $context["company"] = $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getCompanyConfiguration", [], "method");
        // line 8
        echo "
<td class=\"right-adresses-part address\">
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "invoice.subhead.companyAddress", "company" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getCompanyConfiguration", [], "method")]]), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\common\\order\\invoice\\parts\\head.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\common\\order\\invoice\\parts\\head.address.twig", "");
    }
}
