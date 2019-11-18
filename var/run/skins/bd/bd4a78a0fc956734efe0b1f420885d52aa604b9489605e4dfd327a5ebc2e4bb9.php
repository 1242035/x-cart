<?php

/* form_field/clean_urls/about_clean_urls.twig */
class __TwigTemplate_123875cef3b712b557db90ec3b92e797d0142e744236190210e1adbda0515f37 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"input-field-wrapper\">
  <p>
    ";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["More information about clean urls in X-Cart is available in ", ["url" => $this->getAttribute(($context["this"] ?? null), "getCleanURLArticleURL", [], "method")]]);
        echo "
  </p>

  <p>
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Every object stores history with 8 clean urls which were previously used for this object."]), "html", null, true);
        echo "
  </p>

  <p>
    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Also, to manage your redirects you can define 301 redirects in .htaccess file."]);
        echo "
  </p>
</div>";
    }

    public function getTemplateName()
    {
        return "form_field/clean_urls/about_clean_urls.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  31 => 11,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/clean_urls/about_clean_urls.twig", "D:\\x-cart\\skins\\admin\\form_field\\clean_urls\\about_clean_urls.twig");
    }
}
