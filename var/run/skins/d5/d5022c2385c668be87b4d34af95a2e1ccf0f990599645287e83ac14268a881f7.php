<?php

/* D:\x-cart\skins\customer\product\search\parts\phrase.any.twig */
class __TwigTemplate_51a9ae5d05c76d8e34e5209a4d468c3959ef3b66660cc6ce397e8b19097cecfa extends \XLite\Core\Templating\Twig\Template
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
<li>
  <input type=\"radio\" name=\"including\" id=\"including-any\" value=\"any\" ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "getChecked", [0 => "including", 1 => "any"], "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"including-any\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Any word"]), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\product\\search\\parts\\phrase.any.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\product\\search\\parts\\phrase.any.twig", "");
    }
}
