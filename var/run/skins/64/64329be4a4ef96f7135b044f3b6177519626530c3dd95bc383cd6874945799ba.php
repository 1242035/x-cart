<?php

/* D:\x-cart\skins\customer\checkout\steps\review\parts\place_order.note.twig */
class __TwigTemplate_0dd922e5ef74c662154b1d3ab69f7c4769cb546cc8c5da5c90d6b8f76746cd6e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"notes\">
  <label for=\"place_order_note\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Customer note"]), "html", null, true);
        echo ":</label>
  <textarea name=\"notes\" id=\"place_order_note\" class=\"form-control\"></textarea>
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\checkout\\steps\\review\\parts\\place_order.note.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\checkout\\steps\\review\\parts\\place_order.note.twig", "");
    }
}
