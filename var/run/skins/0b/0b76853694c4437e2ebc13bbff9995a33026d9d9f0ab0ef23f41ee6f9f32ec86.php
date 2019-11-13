<?php

/* D:\x-cart\skins\customer\checkout\success_message.twig */
class __TwigTemplate_732bc134ae927803d3ac899faec4c338b845b4d092fcd4589d0b30f373d7c7d8 extends \XLite\Core\Templating\Twig\Template
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
<p>";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Congratulations! Your order has been placed successfully"]);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\checkout\\success_message.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\checkout\\success_message.twig", "");
    }
}
