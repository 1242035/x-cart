<?php

/* items_list/model/table/labels/head.name.twig */
class __TwigTemplate_5b5e9bbcdbc73717de4d6f4f13faa715cf74573d42ae590aef720757830bc6d2 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<div>
  <div class=\"table-header\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Label"]), "html", null, true);
        echo "</div>
</div>
<div class=\"translations-header\">
  <div class=\"table-header\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Translations"]), "html", null, true);
        echo "</div>
  <div class=\"subheader\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Default: {{code}}", ["code" => twig_upper_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDefaultLanguage", [], "method"))]]), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/labels/head.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  29 => 9,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/labels/head.name.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\labels\\head.name.twig");
    }
}
