<?php

/* modules/XC/ThemeTweaker/code/body.twig */
class __TwigTemplate_721b3e7bf7ddf908ab5247aade68ca43fa311a707f593c6fda43ce710a39b072 extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        $this->startForm("\\XLite\\Module\\XC\\ThemeTweaker\\View\\Form\\Code", ["className" => "custom-code-form"]);        // line 6
        echo "
  <div class=\"formfield-use single-form-field\">
      ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getUseCustomText", [], "method")]), "value" => $this->getAttribute(($context["this"] ?? null), "isUsed", [], "method"), "fieldId" => "use_custom", "fieldName" => "use"]]), "html", null, true);
        echo "
  </div>

  <div class=\"formfield-code\">
    ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\ThemeTweaker\\View\\FormField\\Textarea\\CodeMirror", "fieldName" => "code", "cols" => "140", "rows" => "20", "fieldId" => "code", "codeMode" => $this->getAttribute(($context["this"] ?? null), "getCodeMode", [], "method"), "value" => $this->getAttribute(($context["this"] ?? null), "getFileContent", [], "method"), "fieldOnly" => "true"]]), "html", null, true);
        echo "
  </div>

  ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\StickyPanel\\ItemForm"]]), "html", null, true);
        echo "

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/code/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  34 => 12,  27 => 8,  23 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ThemeTweaker/code/body.twig", "D:\\x-cart\\skins\\admin\\modules\\XC\\ThemeTweaker\\code\\body.twig");
    }
}
