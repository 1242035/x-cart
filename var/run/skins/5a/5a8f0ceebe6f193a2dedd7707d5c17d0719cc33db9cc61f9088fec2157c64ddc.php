<?php

/* button/switcher_standalone.twig */
class __TwigTemplate_59ba88a7f51a4b26d66fb12cf818bbb3b5aa23eceac9df43ebd9f4d0ec0d99b0 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"standalone-switch\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => $this->getAttribute(        // line 8
($context["this"] ?? null), "getParam", [0 => "label"], "method"), "labelHelp" => $this->getAttribute(        // line 9
($context["this"] ?? null), "getParam", [0 => "labelHelp"], "method"), "value" => $this->getAttribute(        // line 10
($context["this"] ?? null), "getValue", [], "method")]]), "html", null, true);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "button/switcher_standalone.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  29 => 9,  28 => 8,  27 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "button/switcher_standalone.twig", "D:\\x-cart\\skins\\admin\\button\\switcher_standalone.twig");
    }
}
