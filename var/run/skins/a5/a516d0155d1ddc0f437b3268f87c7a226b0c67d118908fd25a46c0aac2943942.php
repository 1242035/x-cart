<?php

/* D:\x-cart\skins\customer\modules\XC\ThemeTweaker\themetweaker_panel\panel_extensions\confirm_reset_layout_modal.twig */
class __TwigTemplate_2697f317ba0c5416016c3df8d79397da7c7d9ce23375a99b995903112d432807 extends \XLite\Core\Templating\Twig\Template
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
<xlite-themetweaker-modal :show=\"isResetLayoutConfirmVisible\" namespace=\"resetLayoutConfirm\">
  <p slot=\"body\" class=\"text-center\">";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Are you sure you want to reset current layout? Custom layout settings will be lost."]);
        echo "</p>
</xlite-themetweaker-modal>";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel_extensions\\confirm_reset_layout_modal.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel_extensions\\confirm_reset_layout_modal.twig", "");
    }
}
