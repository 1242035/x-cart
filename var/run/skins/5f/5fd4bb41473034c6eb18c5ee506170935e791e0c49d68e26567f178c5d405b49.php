<?php

/* modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.save.twig */
class __TwigTemplate_db8c32e9bd44b1af2d0360b095c30a252af12d95bc970cfb5d30e860f5afee70 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerButton", "label" => "Save", "style" => "themetweaker-action themetweaker-action_save", "attributes" => ["@click" => "onSaveClick", "v-show" => "mode", "data-panel-save-button" => "data-panel-save-button", ":class" => "saveButtonClasses", ":disabled" => "isSaveDisabled", "data-toggle" => "tooltip", "data-placement" => "top", "data-html" => "true", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["themetweaker.shortcut.save"])]]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.save.twig", "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel\\actions.save.twig");
    }
}
