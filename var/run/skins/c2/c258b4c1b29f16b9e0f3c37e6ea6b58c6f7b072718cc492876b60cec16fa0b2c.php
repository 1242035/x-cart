<?php

/* D:\x-cart\skins\admin\profile\add_user.twig */
class __TwigTemplate_c6da3c75495978b5d3cd1404292d8464e50f228bc71573048ec93188daf16285 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\AddUser", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add user"]), "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "profile", "", ["mode" => "register"]])]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\profile\\add_user.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\profile\\add_user.twig", "");
    }
}
