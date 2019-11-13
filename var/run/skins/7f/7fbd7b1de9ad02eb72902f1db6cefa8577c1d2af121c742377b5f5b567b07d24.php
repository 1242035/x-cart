<?php

/* D:\x-cart\skins\admin\modules\XC\CanadaPost\products_return\parts\form.actions.twig */
class __TwigTemplate_312017df512f211546b6badffa97ebdbdc85d15e217d944ee567c40e7d1b487d extends \XLite\Core\Templating\Twig\Template
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
<div class=\"actions\">
  
  <div class=\"left-column\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "capost_return.form.actions.left"]]), "html", null, true);
        echo "
  </div>

  <div class=\"right-column\">
    ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "capost_return.form.actions.right"]]), "html", null, true);
        echo "
  </div>

  <div class=\"clear\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\modules\\XC\\CanadaPost\\products_return\\parts\\form.actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 14,  25 => 10,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\modules\\XC\\CanadaPost\\products_return\\parts\\form.actions.twig", "");
    }
}
