<?php

/* modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_save_modal.twig */
class __TwigTemplate_71090a8e34b8499e8e0f1c0d402bb57f062530be1949c2f8163d2101282e95da extends \XLite\Core\Templating\Twig\Template
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
<xlite-themetweaker-modal :show=\"isSaveConfirmVisible\" namespace=\"saveConfirm\">
  <p slot=\"body\" class=\"text-center\">";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Some edited templates were selected to be disabled. You can enable them on the Edited templates page in the Admin area."]);
        echo "</p>
</xlite-themetweaker-modal>";
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_save_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_save_modal.twig", "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel_extensions\\confirm_save_modal.twig");
    }
}
