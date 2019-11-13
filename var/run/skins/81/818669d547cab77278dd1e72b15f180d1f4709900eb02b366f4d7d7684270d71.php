<?php

/* D:\x-cart\skins\admin\order\page\parts\note.note.twig */
class __TwigTemplate_543a05bf37284b93d8b149517dae3b7ba2371e8ce34f0a8bb8033169bcb4793c extends \XLite\Core\Templating\Twig\Template
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
<div class=\"admin-note\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "label" => "Order note", "fieldName" => "adminNotes", "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getAdminNotes", [], "method")]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\order\\page\\parts\\note.note.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\order\\page\\parts\\note.note.twig", "");
    }
}
