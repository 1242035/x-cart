<?php

/* modules/XC/VendorMessages/page/conversations.twig */
class __TwigTemplate_03af79894f63fa3aa4602d64483590a1f07ea2e0246f37ddde75f4e9f0b2d254 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "isSearchVisible", [], "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\VendorMessages\\View\\SearchPanel\\Message\\Admin\\Main"]]), "html", null, true);
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        $this->startForm("\\XLite\\Module\\XC\\VendorMessages\\View\\Form\\ItemsList\\Conversations");        // line 10
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\VendorMessages\\View\\ItemsList\\Admin\\Conversations"]]), "html", null, true);
        echo "
  ";
        // line 11
        if ($this->getAttribute(($context["this"] ?? null), "hasResults", [], "method")) {
            // line 12
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\VendorMessages\\View\\StickyPanel\\Conversations"]]), "html", null, true);
            echo "
  ";
        }
        $this->endForm();    }

    public function getTemplateName()
    {
        return "modules/XC/VendorMessages/page/conversations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  39 => 11,  34 => 10,  33 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/VendorMessages/page/conversations.twig", "D:\\x-cart\\skins\\admin\\modules\\XC\\VendorMessages\\page\\conversations.twig");
    }
}
