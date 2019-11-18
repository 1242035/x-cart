<?php

/* items_list/model/table/labels/action.add.twig */
class __TwigTemplate_a8dcc61c99ec06ec4d41d5157224f478ed4eaea0149c664adcd9a40e45e1061b extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\LanguagesModify\\Button\\AddNewLabel", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add new label"]), "language" => "ru"]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "items_list/model/table/labels/action.add.twig";
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
        return new Twig_Source("", "items_list/model/table/labels/action.add.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\labels\\action.add.twig");
    }
}
