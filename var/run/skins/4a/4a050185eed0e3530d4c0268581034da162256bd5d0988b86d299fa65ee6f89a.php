<?php

/* D:\x-cart\skins\admin\order\packing_slip\parts\body\items\items.head.name.twig */
class __TwigTemplate_1c6629b528df7bc386d8245975f0a49ce33b51c7e38095ee5b5cbc198ebc9620 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Product"]), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\order\\packing_slip\\parts\\body\\items\\items.head.name.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\order\\packing_slip\\parts\\body\\items\\items.head.name.twig", "");
    }
}
