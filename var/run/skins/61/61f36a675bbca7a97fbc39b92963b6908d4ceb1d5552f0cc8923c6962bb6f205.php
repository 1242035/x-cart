<?php

/* D:\x-cart\skins\admin\layout_settings\settings\parts\settings.layout_type.twig */
class __TwigTemplate_c4038152b899bdf679d2ef798ed971e6695be3c743fb1071e00024042d4fc478 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"layout-type-selector\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\LayoutSettings\\LayoutTypeSelector", "availableTypes" => $this->getAttribute(($context["this"] ?? null), "getLayoutTypes", [], "method")]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\layout_settings\\settings\\parts\\settings.layout_type.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\layout_settings\\settings\\parts\\settings.layout_type.twig", "");
    }
}