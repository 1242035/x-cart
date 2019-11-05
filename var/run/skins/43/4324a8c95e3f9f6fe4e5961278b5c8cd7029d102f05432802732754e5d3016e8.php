<?php

/* images_settings/parts/resize_quality.twig */
class __TwigTemplate_dc449297a621d2c38e7cb7e080103ea9efa7a5d791aeb21077d90e48af334bf3 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text\\Integer", "fieldName" => "resize_quality", "value" => $this->getAttribute(($context["this"] ?? null), "getResizeQuality", [], "method"), "label" => "Image quality after resize", "min" => 1, "max" => 100]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "images_settings/parts/resize_quality.twig";
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
        return new Twig_Source("", "images_settings/parts/resize_quality.twig", "D:\\x-cart\\skins\\admin\\images_settings\\parts\\resize_quality.twig");
    }
}
