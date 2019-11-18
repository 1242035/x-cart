<?php

/* form_field/clean_urls/page_404.twig */
class __TwigTemplate_6e2f90ff289b1a521a147fdaa250973f84635c26cdeabac378ab6a0899f18aa0 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"input-field-wrapper\">
  <h3>
    <span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getLabel", [], "method")]), "html", null, true);
        echo "</span>
  </h3>
</div>";
    }

    public function getTemplateName()
    {
        return "form_field/clean_urls/page_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/clean_urls/page_404.twig", "D:\\x-cart\\skins\\admin\\form_field\\clean_urls\\page_404.twig");
    }
}
