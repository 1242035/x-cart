<?php

/* modules/XC/Reviews/review/promo_settings.twig */
class __TwigTemplate_d6dd2186301d3d07d45ae5528d0d02df0ee7d75d4dcf776d06ebb0cdfc6dc523 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "
";
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "getModule", [], "method")) {
            // line 9
            echo "
  ";
            // line 10
            $context["moduleName"] = $this->getAttribute(($context["this"] ?? null), "getModule", [], "method");
            // line 11
            echo "
  ";
            // line 12
            if ((($context["moduleName"] ?? null) == "XC\\Reviews")) {
                // line 13
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\Reviews\\View\\Promo\\ShopperApproved"]]), "html", null, true);
                echo "
  ";
            }
            // line 15
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/review/promo_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  37 => 13,  35 => 12,  32 => 11,  30 => 10,  27 => 9,  25 => 8,  22 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Reviews/review/promo_settings.twig", "D:\\x-cart\\skins\\admin\\modules\\XC\\Reviews\\review\\promo_settings.twig");
    }
}
