<?php

/* D:\x-cart\skins\customer\modules\XC\ThemeTweaker\themetweaker\layout_editor\panel_parts\hidden_count.twig */
class __TwigTemplate_1463a196bd4162cee9371bb8dc71a379b2717a2f530f0b85f380e37aaddd7eb0 extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-hidden-blocks'>
\t<span class='layout-editor-hidden-blocks_icon'><i class=\"icon\">";
        // line 8
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/ThemeTweaker/themetweaker/layout_editor/icons/hide.svg"]);
        echo "</i></span>
\t<span class='layout-editor-hidden-blocks-counter' v-text=\"hiddenCount\"></span>
\t<span class='layout-editor-hidden-blocks_label'>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["disabled blocks"]), "html", null, true);
        echo "</span>
\t<span class='layout-editor-hidden-blocks_message' v-if=\"!hiddenCount\">";
        // line 11
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["You are now in layout editing mode"]);
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\layout_editor\\panel_parts\\hidden_count.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\layout_editor\\panel_parts\\hidden_count.twig", "");
    }
}
