<?php

/* file_selector/parts/url_copy_to_local.twig */
class __TwigTemplate_090722a48c2850a6dff231f459d0f1aadfec97552caa79d8ddabb562966e0c7f extends \XLite\Core\Templating\Twig\Template
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
<li class=\"url-copy-to-local input-field\">
  <label for=\"url-copy-to-local\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Checkbox", "value" => "Y", "isChecked" => "true", "attributes" => ["disabled" => "disabled"], "fieldName" => "url_copy_to_local", "fieldOnly" => "true"]]), "html", null, true);
        echo "
    <span>";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Copy file to local server"]), "html", null, true);
        echo "</span>
  </label>
</li>
";
    }

    public function getTemplateName()
    {
        return "file_selector/parts/url_copy_to_local.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 11,  24 => 10,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file_selector/parts/url_copy_to_local.twig", "D:\\x-cart\\skins\\admin\\file_selector\\parts\\url_copy_to_local.twig");
    }
}
