<?php

/* popup/backstock_status_change_notification/buttons.twig */
class __TwigTemplate_805376fe19741d2e188c073b0fbb1c668e1085537a52c816255aac3d0a9ff161 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"buttons\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => "Continue", "jsCode" => "core.trigger(\"confirmBackorderChanges\")", "style" => "regular-main-button"]]), "html", null, true);
        echo "
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => "Discard", "jsCode" => "core.trigger(\"discardBackorderChanges\")"]]), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "popup/backstock_status_change_notification/buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "popup/backstock_status_change_notification/buttons.twig", "D:\\x-cart\\skins\\admin\\popup\\backstock_status_change_notification\\buttons.twig");
    }
}