<?php

/* list_container.twig */
class __TwigTemplate_507f4c49360d86df165aa89d7259212cfa99b8a0c707538be16408748f1cec39 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"list-container\" data-group=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getGroupName", [], "method"), "html", null, true);
        echo "\">
\t";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "displayInnerContent", [], "method");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "list_container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list_container.twig", "D:\\x-cart\\skins\\customer\\list_container.twig");
    }
}
