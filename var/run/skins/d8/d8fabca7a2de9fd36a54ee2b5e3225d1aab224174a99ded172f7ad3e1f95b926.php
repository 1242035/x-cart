<?php

/* D:\x-cart\skins\admin\zones\details\parts\field.name.twig */
class __TwigTemplate_af1ec5ea4886fe72d530baf3a778054823590a2825e63c4c5d3c4b97a52a9465 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "zone_name", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Zone name"]), "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "zone", []), "getZoneName", [], "method"), "required" => "true", "wrapperClass" => "zone-name"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\zones\\details\\parts\\field.name.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\zones\\details\\parts\\field.name.twig", "");
    }
}