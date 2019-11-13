<?php

/* D:\x-cart\skins\common\order\invoice\parts\head.companyAddress.name.twig */
class __TwigTemplate_8513644e014ca81db28e5a245032419de0e7fc1131bf7c29068a3bfedb2358b4 extends \XLite\Core\Templating\Twig\Template
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
<strong>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "company", []), "company_name", []), "html", null, true);
        echo "</strong>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\common\\order\\invoice\\parts\\head.companyAddress.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\common\\order\\invoice\\parts\\head.companyAddress.name.twig", "");
    }
}
