<?php

/* D:\x-cart\skins\admin\promotions\simple_blocks\wholesale.twig */
class __TwigTemplate_99b411bc8558b1845b5d63ebcb58c4eee86c784df9b8ecd45ce2b2acb77daa2c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\SimplePromoBlock", "promoId" => "wholesale-prices-1", "promoClasses" => [0 => "inventory-wholesale"]]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\promotions\\simple_blocks\\wholesale.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\promotions\\simple_blocks\\wholesale.twig", "");
    }
}
