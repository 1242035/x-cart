<?php

/* D:\x-cart\skins\customer\operate_as_user\parts\finish-button.twig */
class __TwigTemplate_ab8d158f13bd7f981b6201e863052d424561c74e09f66d83e39685cfc428270e extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "location" => $this->getAttribute(($context["this"] ?? null), "getFinishOperateAsUrl", [], "method"), "style" => "finish-button btn-sm", "label" => "Quit", "disabled" => "false"]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\operate_as_user\\parts\\finish-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\operate_as_user\\parts\\finish-button.twig", "");
    }
}
