<?php

/* images_settings/table/cell.name.twig */
class __TwigTemplate_8da3dcc262089b2b069e4a9eaa8be9c2a16820e578da3624ea5b8e52a6f9fb27 extends \XLite\Core\Templating\Twig\Template
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
<span>
";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getName", [], "method");
        echo "
</span>
";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isNameTooltipVisible", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 9
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "text" => $this->getAttribute(($context["this"] ?? null), "getNameTooltip", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), "isImageTag" => "true", "className" => "help-icon", "placement" => "auto bottom"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "images_settings/table/cell.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  28 => 8,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "images_settings/table/cell.name.twig", "D:\\x-cart\\skins\\admin\\images_settings\\table\\cell.name.twig");
    }
}
