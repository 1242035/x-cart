<?php

/* D:\x-cart\skins\customer\modules\XC\ThemeTweaker\themetweaker\layout_editor\panel_parts\help_message.twig */
class __TwigTemplate_f46c4ce0753b5c97e807f5238b89d9280f6c30b7d9fa15cdf3756559c4bc51c4 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isNotOptimalTarget", [], "method")) {
            // line 8
            echo "<div class='layout-editor-help-message'>
\t<i class=\"fa fa-info-circle\"></i> ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Open home or category pages for more opportunities to adjust the website structure"]);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\layout_editor\\panel_parts\\help_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\layout_editor\\panel_parts\\help_message.twig", "");
    }
}