<?php

/* noscript.twig */
class __TwigTemplate_e83d895ae2c8c2ddef30935d6e67dc3f8767c9828b6b12e1b29c7b8c1670d85e extends \XLite\Core\Templating\Twig\Template
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
        echo "<noscript>
  <div class=\"noscript\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["This site requires JavaScript to function properly."]), "html", null, true);
        echo "
    <br />";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Please enable JavaScript in your web browser."]), "html", null, true);
        echo "
  </div>
</noscript>
";
    }

    public function getTemplateName()
    {
        return "noscript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "noscript.twig", "D:\\x-cart\\skins\\admin\\noscript.twig");
    }
}
