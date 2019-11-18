<?php

/* form_field/input/checkbox/clean_url.twig */
class __TwigTemplate_45542ab9aee80fa6193645f040e278d0031a61d03df8682208514f2ee7e06562 extends \XLite\Core\Templating\Twig\Template
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
";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 5
($context["this"] ?? null), "getOrigFieldTemplate", [], "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getOrigFieldTemplate", [], "method"), "form_field/input/checkbox/clean_url.twig", 5)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 6
        echo "
<div class=\"clean-url-error\">
  <div class='clean-url-setting-error-msg'></div>
  <div class='clean-url-setting-error-body'></div>
</div>";
    }

    public function getTemplateName()
    {
        return "form_field/input/checkbox/clean_url.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/input/checkbox/clean_url.twig", "D:\\x-cart\\skins\\admin\\form_field\\input\\checkbox\\clean_url.twig");
    }
}
