<?php

/* modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.hide.twig */
class __TwigTemplate_12b36a46f5a7c519a29d08aa144729fc2c93741ece42fa291ec314efbd4f157a extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab", "label" => "", "style" => "themetweaker-tab themetweaker-tab_hide themetweaker-close-icon", "attributes" => ["@click" => "hidePanel"]]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.hide.twig";
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
        return new Twig_Source("", "modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.hide.twig", "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel\\tabs.hide.twig");
    }
}
