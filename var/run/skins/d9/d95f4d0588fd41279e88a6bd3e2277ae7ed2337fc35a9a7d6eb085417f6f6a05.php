<?php

/* D:\x-cart\skins\admin\export\parts\completed.buttons.export.twig */
class __TwigTemplate_377b8cf9884bb452aadd1d5c48b7b7886d8e53bf26bb7fb40d95eabe0075e194 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "export"]), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["New Export"]), "style" => "main-button"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\export\\parts\\completed.buttons.export.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\export\\parts\\completed.buttons.export.twig", "");
    }
}
