<?php

/* D:\x-cart\skins\admin\modules\XC\CanadaPost\products_return\parts\form.action.left.status.twig */
class __TwigTemplate_507f1b05a1e870297b144ecb0c44c3fe7c33561d3c3b361895179e9827cf19ba extends \XLite\Core\Templating\Twig\Template
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
<div class=\"status\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\CanadaPost\\View\\FormField\\Select\\ReturnStatus", "label" => "Status", "fieldName" => "postedData[status]", "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "productsReturn", []), "getStatus", [], "method")]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\modules\\XC\\CanadaPost\\products_return\\parts\\form.action.left.status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\modules\\XC\\CanadaPost\\products_return\\parts\\form.action.left.status.twig", "");
    }
}
