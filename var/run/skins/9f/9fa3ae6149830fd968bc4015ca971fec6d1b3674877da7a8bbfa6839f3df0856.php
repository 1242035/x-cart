<?php

/* items_list/model/table/languages/action.help.twig */
class __TwigTemplate_889c053a5bf7957da77fcd189c8feaea82fef35835bcb430f7ca1aa4945279f8 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getLanguageHelpMessage", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Tooltip", "id" => "menu-links-help-text", "text" => $this->getAttribute(($context["this"] ?? null), "getLanguageHelpMessage", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), "isImageTag" => "true", "className" => "help-small-icon"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table/languages/action.help.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/languages/action.help.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\languages\\action.help.twig");
    }
}
