<?php

/* D:\x-cart\skins\admin\export\parts\popup.completed.message.twig */
class __TwigTemplate_299b693b56f77fef98c580d0ded071a743e695b6a7a909002d47c8a9ce8eb0fa extends \XLite\Core\Templating\Twig\Template
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
 <p class=\"help\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The download should start automatically. Click the link if does not start."]), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\export\\parts\\popup.completed.message.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\export\\parts\\popup.completed.message.twig", "");
    }
}
