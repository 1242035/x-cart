<?php

/* D:\x-cart\skins\customer\shopping_cart\parts\item.remove.twig */
class __TwigTemplate_791902fd001c97c0685a0a7cec15e1db56bf0e58001533b9df5f9aeef64eadb2 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-remove delete-from-list\">
  ";
        // line 7
        $this->startForm("\\XLite\\View\\Form\\Cart\\Item\\Delete", ["item" => $this->getAttribute(($context["this"] ?? null), "item", [])]);        // line 8
        echo "    <div>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Image", "label" => "Delete item", "style" => "remove", "jsCode" => "return jQuery(this).closest('form').submit();"]]), "html", null, true);
        echo "</div>
  ";
        $this->endForm();        // line 10
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\shopping_cart\\parts\\item.remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  23 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\shopping_cart\\parts\\item.remove.twig", "");
    }
}
