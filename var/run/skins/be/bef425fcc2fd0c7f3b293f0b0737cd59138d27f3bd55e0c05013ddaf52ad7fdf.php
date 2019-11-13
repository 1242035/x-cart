<?php

/* modules/XC/ThemeTweaker/themetweaker_panel/panel.twig */
class __TwigTemplate_6da8ead19d467f0e3c685a41b8a98562473043a510f6873f402f9cff0b49227d extends \XLite\Core\Templating\Twig\Template
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
<div id=\"themetweaker-panel-loader-point\">
  <xlite-themetweaker-panel inline-template mode=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getThemeTweakerMode", [], "method"), "html", null, true);
        echo "\">
    <div class=\"themetweaker-panel-wrapper themetweaker-panel--initial ";
        // line 7
        echo (($this->getAttribute(($context["this"] ?? null), "getThemeTweakerMode", [], "method")) ? ("state-on") : ("state-off"));
        echo "\">
      <div id=\"themetweaker-panel\" class=\"themetweaker-panel\">
        <div class=\"themetweaker-panel--inner\" :class=\"panelClasses\">
          <div class=\"themetweaker-panel--header\">
            ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "themetweaker-panel--header"]]), "html", null, true);
        echo "
          </div>
          <div class=\"themetweaker-panel--body\" v-show=\"mode && isExpanded\" transition=\"expand\">
            ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "themetweaker-panel--body"]]), "html", null, true);
        echo "
          </div>
        </div>
      </div>
      ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "themetweaker-panel-extensions"]]), "html", null, true);
        echo "
    </div>
  </xlite-themetweaker-panel>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/themetweaker_panel/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  40 => 14,  34 => 11,  27 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ThemeTweaker/themetweaker_panel/panel.twig", "D:\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel.twig");
    }
}
