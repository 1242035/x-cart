<?php

/* modules/XC/Reviews/average_rating/rating.twig */
class __TwigTemplate_12266ab98f18b23bf52e1635eeab05cb8b44b9ded78f23d9bdc26ea0a918446d extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isVisibleAverageRatingOnPage", [], "method")) {
            // line 6
            echo " <div class=\"rating";
            if ($this->getAttribute(($context["this"] ?? null), "isAllowedRateProduct", [], "method")) {
                echo " edit";
            }
            echo "\">
     ";
            // line 7
            if ($this->getAttribute(($context["this"] ?? null), "isAllowedRateProduct", [], "method")) {
                // line 8
                echo "         ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating", "fieldName" => "rating", "rate" => $this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method"), "is_editable" => $this->getAttribute(($context["this"] ?? null), "isAllowedRateProduct", [], "method"), "max" => "5"]]), "html", null, true);
                echo "
     ";
            }
            // line 10
            echo "     ";
            if ( !$this->getAttribute(($context["this"] ?? null), "isAllowedRateProduct", [], "method")) {
                // line 11
                echo "         ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\VoteBar", "rate" => $this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method"), "max" => "5"]]), "html", null, true);
                echo "
     ";
            }
            // line 13
            echo "
     ";
            // line 14
            if (("tab" != $this->getAttribute(($context["this"] ?? null), "place", []))) {
                // line 15
                echo "         <div class=\"rating-tooltip\">
             ";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "reviews.tooltip.rating"]]), "html", null, true);
                echo "
         </div>
     ";
            }
            // line 19
            echo "
 </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/average_rating/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  56 => 16,  53 => 15,  51 => 14,  48 => 13,  42 => 11,  39 => 10,  33 => 8,  31 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Reviews/average_rating/rating.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/average_rating/rating.twig");
    }
}
