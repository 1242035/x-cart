<?php

/* D:\x-cart\skins\admin\modules\CDev\Paypal\welcome_block\paypal\block.content.twig */
class __TwigTemplate_bdc46baee41da5987d009302c2d2e9da51e84ccae3de9f135acc2c8624a6b6d0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"content\">
  <div class=\"info\">

    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["paypal_welcome_text", ["email" => $this->getAttribute(($context["this"] ?? null), "getPaypalEmail", [], "method")]]);
        echo "

    <div class=\"action\">
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Button\\SignUp", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Launch PayPal"])]]), "html", null, true);
        echo "
    </div>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\modules\\CDev\\Paypal\\welcome_block\\paypal\\block.content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\modules\\CDev\\Paypal\\welcome_block\\paypal\\block.content.twig", "");
    }
}