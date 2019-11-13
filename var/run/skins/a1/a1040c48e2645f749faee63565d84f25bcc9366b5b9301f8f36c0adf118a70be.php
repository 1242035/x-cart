<?php

/* cache_management_actions/cell/action.twig */
class __TwigTemplate_85d8c53c19e22c5b03597cb34747fcfbc42f7cbac2db5dce1bff9969e4569d2c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "column", []), "value", []), 1 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "viewParams", [])]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cache_management_actions/cell/action.twig";
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
        return new Twig_Source("", "cache_management_actions/cell/action.twig", "D:\\x-cart\\skins\\admin\\cache_management_actions\\cell\\action.twig");
    }
}
