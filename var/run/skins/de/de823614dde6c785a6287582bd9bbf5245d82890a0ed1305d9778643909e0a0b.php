<?php

/* D:\x-cart\skins\admin\export\parts\option.attrs.twig */
class __TwigTemplate_912dbf0e710488ab2eec9bc43262631ba58a8e4611d61f53eb5a47228164fbb0 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"attrs-option\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Select\\ExportAttrs", "fieldName" => "options[attrs]", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Export product data with"]), "value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "config", []), "Export", []), "attrs", [])]]), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\export\\parts\\option.attrs.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\export\\parts\\option.attrs.twig", "");
    }
}
