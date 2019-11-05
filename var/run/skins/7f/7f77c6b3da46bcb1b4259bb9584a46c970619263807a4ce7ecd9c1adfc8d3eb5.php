<?php

/* popup/backstock_status_change_notification/body.twig */
class __TwigTemplate_c00e548a8c12f9203fcb2e5007411fad9f9c6fabcc77c5daa2137658d548d906 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"backstock-status-change-notification\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "backstock_status_change_notification.before"]]), "html", null, true);
        echo "

  <div class=\"message\">
    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["The Backorder status will be reset for the items. The stock quantity of the backorder items will not change. Adjust it manually if necessary."]);
        echo "
  </div>

  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "backstock_status_change_notification.after"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "popup/backstock_status_change_notification/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  29 => 9,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "popup/backstock_status_change_notification/body.twig", "D:\\x-cart\\skins\\admin\\popup\\backstock_status_change_notification\\body.twig");
    }
}
