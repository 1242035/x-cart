<?php

/* form_field/clean_urls/page_title_format.twig */
class __TwigTemplate_0435a86aeaf816ec09c29e2d8418217d4bf4db836d3728b876163870a3294869 extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"input-field-wrapper\">
  <h3>
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getLabel", [], "method")]), "html", null, true);
        echo "
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "text" => $this->getAttribute(($context["this"] ?? null), "getHelpLabel", [], "method"), "isImageTag" => "true", "className" => "help-icon"]]), "html", null, true);
        echo "
  </h3>
</span>";
    }

    public function getTemplateName()
    {
        return "form_field/clean_urls/page_title_format.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/clean_urls/page_title_format.twig", "D:\\x-cart\\skins\\admin\\form_field\\clean_urls\\page_title_format.twig");
    }
}
