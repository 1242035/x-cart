<?php

/* D:\x-cart\skins\crisp_white\customer\layout\header\locale\language.twig */
class __TwigTemplate_e5458b7209a9fdcfc03923c46f9529c7acbf71f932adc05e1c7bcb5a3e364fde extends \XLite\Core\Templating\Twig\Template
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
<span class='language-indicator'>
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "currentLanguage", []), "code", []), "html", null, true);
        echo "
</span>";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\locale\\language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\locale\\language.twig", "");
    }
}