<?php

/* D:\x-cart\skins\common\order\invoice\parts\items\items.head.item.twig */
class __TwigTemplate_d7e309f1f70dc71397c6eab6d118e0f1a4ea1ddd27963353b334ed0e07f58935 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"item\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Item list"]), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\common\\order\\invoice\\parts\\items\\items.head.item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\common\\order\\invoice\\parts\\items\\items.head.item.twig", "");
    }
}
