<?php

/* layout/header/locale_menu/language_single.twig */
class __TwigTemplate_053cc558e120ca6a67978e86d0b23955b1787875094752193041e85de5ccfd22 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"locale_language-selector\">
  <li>
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\CrispWhiteSkin\\View\\LanguageSelector\\Customer"]]), "html", null, true);
        echo "
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "layout/header/locale_menu/language_single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/locale_menu/language_single.twig", "D:\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\locale_menu\\language_single.twig");
    }
}
