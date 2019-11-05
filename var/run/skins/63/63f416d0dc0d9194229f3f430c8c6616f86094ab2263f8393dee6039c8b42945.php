<?php

/* powered_by.twig */
class __TwigTemplate_cac7b2f4eb50d877ceaf0103a15eb42e34ead7d778a902abd6573b773a70913d extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<div class=\"powered-by\">
  <p class=\"copyright\">&copy; ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCompanyYear", [], "method"), "html", null, true);
        echo " ";
        echo $this->getAttribute(($context["this"] ?? null), "getMessage", [], "method");
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "powered_by.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "powered_by.twig", "D:\\x-cart\\skins\\admin\\powered_by.twig");
    }
}
