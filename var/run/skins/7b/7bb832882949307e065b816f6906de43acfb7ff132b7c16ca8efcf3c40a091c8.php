<?php

/* modules/CDev/XMLSitemap/admin/tabs.twig */
class __TwigTemplate_e03bcb3f938a55c6df826f36986b040f08dd735f8145915094a8b328bcc2c97d extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Tabs\\SeoSettings"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/XMLSitemap/admin/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/CDev/XMLSitemap/admin/tabs.twig", "D:\\x-cart\\skins\\admin\\modules\\CDev\\XMLSitemap\\admin\\tabs.twig");
    }
}
