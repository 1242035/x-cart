<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/Paypal/welcome_block/paypal/block.footer.twig */
class __TwigTemplate_c6b7b3dce6776911b1e250a7c4305ad3d2109d30742bdd9b410e30f6b6e31ba2 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"welcome-footer\">

  <div class=\"bg\"></div>

  <div class=\"do-not-show\">
    <input type=\"checkbox\" name=\"hide_welcome_block_paypal\" id=\"hide_welcome_block_paypal\" class=\"hide-welcome-block\" />
    <label for=\"hide_welcome_block_paypal\">";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Do not show at startup anymore"]), "html", null, true);
        echo "</label>
  </div>
  <div class=\"close-button\">";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["CLOSE"]), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/Paypal/welcome_block/paypal/block.footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  28 => 13,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/Paypal/welcome_block/paypal/block.footer.twig", "");
    }
}