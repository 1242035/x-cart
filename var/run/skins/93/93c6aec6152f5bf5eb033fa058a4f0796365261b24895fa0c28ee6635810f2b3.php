<?php

/* D:\x-cart\skins\admin\modules\CDev\Paypal\items_list\payment\methods\parts\action.right.after.twig */
class __TwigTemplate_e2b231297ec57e6701a39a9c0f3e9252b51e2e70f4d3e2911915771c038c44cc extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "
";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getReferralPageURL", [], "method") || $this->getAttribute(($context["this"] ?? null), "getKnowledgeBasePageURL", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method"))) {
            // line 10
            echo "  <div class=\"learn-more\">
    ";
            // line 11
            if ($this->getAttribute(($context["this"] ?? null), "getKnowledgeBasePageURL", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method")) {
                // line 12
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getKnowledgeBasePageURL", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Learn More"]), "html", null, true);
                echo "</a>
    ";
            }
            // line 14
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getReferralPageURL", [], "method") && $this->getAttribute(($context["this"] ?? null), "getKnowledgeBasePageURL", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method"))) {
                // line 15
                echo "      <span>&amp;</span>
    ";
            }
            // line 17
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getReferralPageURL", [], "method")) {
                // line 18
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getReferralPageURL", [], "method"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sign Up"]), "html", null, true);
                echo "</a>
    ";
            }
            // line 20
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\modules\\CDev\\Paypal\\items_list\\payment\\methods\\parts\\action.right.after.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  47 => 18,  44 => 17,  40 => 15,  37 => 14,  29 => 12,  27 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\modules\\CDev\\Paypal\\items_list\\payment\\methods\\parts\\action.right.after.twig", "");
    }
}
