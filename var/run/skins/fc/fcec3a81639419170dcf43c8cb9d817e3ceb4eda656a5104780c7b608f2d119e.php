<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/substring.button.twig */
class __TwigTemplate_0e352cca76f7b2efd7dec388178e0e0dfd8a10ab59881c5644718770c7d688f1 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<td class=\"submit-button\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "label" => "Search", "style" => "search-form-submit"]]), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/substring.button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/substring.button.twig", "");
    }
}
