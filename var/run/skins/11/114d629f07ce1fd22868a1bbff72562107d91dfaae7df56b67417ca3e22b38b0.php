<?php

/* D:\x-cart\skins\customer\modules\XC\ThemeTweaker\themetweaker\layout_editor\list_item_parts\action_hide.twig */
class __TwigTemplate_327e3afebf4e6509839d0cbf8622c8b90e15dc00adf9d951a8fda5a56e30e94b extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ListItemAction", 1 => ["tooltip" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Disable block"]), "style" => "list-item-action__hide", "event" => "layout.hide", "icon-style" => "fa-eye"]]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\layout_editor\\list_item_parts\\action_hide.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\layout_editor\\list_item_parts\\action_hide.twig", "");
    }
}