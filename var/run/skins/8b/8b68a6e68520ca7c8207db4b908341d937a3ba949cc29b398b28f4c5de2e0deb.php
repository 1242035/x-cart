<?php

/* top_links/version_notes/parts/core.twig */
class __TwigTemplate_329b6331829a03566a3446f8ef9a9ce173e7d8f3578f371fa558ffa4f5938943 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"version\"><div>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X-Cart"]), "html", null, true);
        echo "</div><div>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEditionName", [], "method"), "html", null, true);
        echo "&nbsp;";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCurrentCoreVersion", [], "method"), "html", null, true);
        echo "</div></div>
";
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/core.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "top_links/version_notes/parts/core.twig", "D:\\x-cart\\skins\\admin\\top_links\\version_notes\\parts\\core.twig");
    }
}
