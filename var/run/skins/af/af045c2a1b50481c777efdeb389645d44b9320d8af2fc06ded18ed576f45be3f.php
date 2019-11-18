<?php

/* currency_view_info\body.twig */
class __TwigTemplate_abae95c739c0c5635e77b93d569311f0ff5e82757481f32b878c81f858759a45 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"currency-view-info\">
  <span class=\"currency-block\">
    <span class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Example"]), "html", null, true);
        echo ":</span>
    <span class=\"currency currency-zero\">
      <span class=\"value-view\">
        <span class=\"prefix\"></span><span class=\"format\"></span><span class=\"decimal\"></span><span class=\"suffix\"></span>
      </span>
    </span>
    <span class=\"clearfix\"></span>
  </span>
</div>

";
    }

    public function getTemplateName()
    {
        return "currency_view_info\\body.twig";
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
        return new Twig_Source("", "currency_view_info\\body.twig", "D:\\x-cart\\skins\\admin\\currency_view_info\\body.twig");
    }
}
