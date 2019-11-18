<?php

/* items_list/model/table/languages/cell.name.twig */
class __TwigTemplate_495c723497311042f3e282ac42256a1af9a61af2ba789718ff1c9fab5d9b3a36 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"flag\"><img src=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getFlagURL", [], "method"), "html", null, true);
        echo "\" /></span>
<a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "labels", "", ["code" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getCode", [], "method")]]), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getName", [], "method"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/languages/cell.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/languages/cell.name.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\languages\\cell.name.twig");
    }
}
