<?php

/* modules/XC/MailChimp/settings/header.twig */
class __TwigTemplate_b34c296eb2c4705beaa06cd988474e0462869c635f8c07239607c02d2e575e05 extends \XLite\Core\Templating\Twig\Template
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
        $context["mailchimpSignupLink"] = "https://login.mailchimp.com/signup?source=website&pid=xcart";
        // line 6
        $context["oauthLink"] = call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "mailchimp_options", "authenticate"]);
        // line 7
        echo "
<div class=\"mailchimp-welcome promo-banner\">
  <div class=\"promo-banner-logo\">
    <a href=\"https://login.mailchimp.com/signup?source=website&pid=xcart\" target=\"_blank\">
      <img src=\"skins/admin/";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDir", [], "method"), "html", null, true);
        echo "/images/logo.png\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["MailChimp"]), "html", null, true);
        echo "\" class=\"logo\"/>
    </a>
  </div>
  <div class=\"promo-banner-content\">
    <div>";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["mailchimp_settings_promo_text"]), "html", null, true);
        echo "</div>
    <div class=\"actions\">
      ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\SimpleLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sign Up"]), "blank" => true, "location" => ($context["mailchimpSignupLink"] ?? null), "style" => "btn regular-main-button"]]), "html", null, true);
        echo "
      ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\SimpleLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Connect with your MailChimp account"]), "location" => ($context["oauthLink"] ?? null), "style" => "btn regular-button always-enabled link"]]), "html", null, true);
        echo "
      <span class=\"separator\">
        ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["or"]), "html", null, true);
        echo "
      </span>
      ";
        // line 22
        $this->startForm("XLite\\Module\\XC\\MailChimp\\View\\Form\\MailChimpHeader", ["className" => "manual-api-key-form"]);        // line 23
        echo "      ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "mailchimp_key", "fieldOnly" => true, "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Enter your MailChimp API key manually"])]]), "html", null, true);
        echo "
      ";
        $this->endForm();        // line 25
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/MailChimp/settings/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  61 => 23,  60 => 22,  55 => 20,  50 => 18,  46 => 17,  41 => 15,  32 => 11,  26 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/MailChimp/settings/header.twig", "D:\\x-cart\\skins\\admin\\modules\\XC\\MailChimp\\settings\\header.twig");
    }
}
