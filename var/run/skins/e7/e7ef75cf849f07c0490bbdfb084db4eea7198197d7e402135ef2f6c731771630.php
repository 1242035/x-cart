<?php

/* D:\x-cart\skins\customer\product\search\parts\advanced.category.twig */
class __TwigTemplate_3df635822a2ffeb31df0db54d68f1a2ff991f6cf27c33b1c572f9bcce3ec2344 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"option-name title-category\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Category"]), "html", null, true);
        echo ":</td>
  <td>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\CategorySelect", "fieldName" => "categoryId", "selectedCategoryIds" => [0 => $this->getAttribute(($context["this"] ?? null), "getCondition", [0 => "categoryId"], "method")], "allOption" => "1", "noneOption" => "0"]]), "html", null, true);
        echo "</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\product\\search\\parts\\advanced.category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\product\\search\\parts\\advanced.category.twig", "");
    }
}
