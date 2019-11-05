<?php

/* 404.twig */
class __TwigTemplate_2b3b273d5624c586ac88bf76b24c6fa7f737b8eb1ae62e31806dc8be430288ae extends \XLite\Core\Templating\Twig\Template
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
        echo "<h2 class=\"page-not-found\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Page not found"]), "html", null, true);
        echo "</h2>

";
        // line 6
        if (($this->getAttribute(($context["this"] ?? null), "getPageType", [], "method") == "product")) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "404.product"]]), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute(        // line 8
($context["this"] ?? null), "getPageType", [], "method") == "category")) {
            // line 9
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "404.category"]]), "html", null, true);
            echo "
";
        } else {
            // line 11
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "404.default"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  34 => 9,  32 => 8,  27 => 7,  25 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "404.twig", "D:\\x-cart\\skins\\customer\\404.twig");
    }
}
