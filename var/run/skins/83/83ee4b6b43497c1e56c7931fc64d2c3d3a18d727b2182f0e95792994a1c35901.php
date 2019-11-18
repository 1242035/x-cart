<?php

/* payment/configuration/banner.twig */
class __TwigTemplate_b51f577c6f231e54492abe159a305c0d4aedd79e65ee617813b3140918b358fb extends \XLite\Core\Templating\Twig\Template
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
        $context["banner"] = $this->getAttribute(($context["this"] ?? null), "getBanner", [], "method");
        // line 5
        if (($context["banner"] ?? null)) {
            // line 6
            echo "<div class=\"payment-page-banner\">
  <a href=\"";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBannerURL", [0 => ($context["banner"] ?? null)], "method"), "html", null, true);
            echo "\" target=\"_blank\">
    <img src=\"";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBannerImg", [0 => ($context["banner"] ?? null)], "method"), "html", null, true);
            echo "\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Payment"]), "html", null, true);
            echo "\" class=\"payments-banner\"/>
  </a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "payment/configuration/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  26 => 7,  23 => 6,  21 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "payment/configuration/banner.twig", "D:\\x-cart\\skins\\admin\\payment\\configuration\\banner.twig");
    }
}
