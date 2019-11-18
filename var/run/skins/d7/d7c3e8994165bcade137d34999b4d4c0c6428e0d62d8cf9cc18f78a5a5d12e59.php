<?php

/* consistency_check/page.twig */
class __TwigTemplate_1618c26732200f64afd2be2e727e371e2e8d1fb9681a842cb236ebab944e3d25 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasResults", [], "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\ConsistencyCheck\\Result", "groups" => $this->getAttribute(($context["this"] ?? null), "getGroups", [], "method")]]), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "  <p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Consistency has not yet been checked. Initiate an consistency check by clicking the button \"Refresh consistency status\"."]), "html", null, true);
            echo "</p>
";
        }
        // line 10
        echo "
";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\StickyPanel\\ConsistencyCheck"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "consistency_check/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  36 => 10,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "consistency_check/page.twig", "D:\\x-cart\\skins\\admin\\consistency_check\\page.twig");
    }
}
