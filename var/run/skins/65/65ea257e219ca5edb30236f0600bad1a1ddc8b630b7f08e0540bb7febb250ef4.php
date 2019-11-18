<?php

/* items_list/model/table/languages/action.csv.twig */
class __TwigTemplate_68ae40bf75bbfb797e42f7ed322e7af696084d4043b7bc4f2b703126eb5287e2 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Link", 1 => ["location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "languages", "getCSV", ["code" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getCode", [], "method")]]), "style" => "download-file", "label" => "", "icon-style" => "fa fa-download"]]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "items_list/model/table/languages/action.csv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/languages/action.csv.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\languages\\action.csv.twig");
    }
}
