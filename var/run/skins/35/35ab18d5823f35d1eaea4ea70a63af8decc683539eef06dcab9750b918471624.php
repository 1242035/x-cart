<?php

/* D:\x-cart\skins\admin\file_selector\parts\local_server_input.twig */
class __TwigTemplate_b76c1586bc57802d40112d20c52d0608930f24f29158d565217afa54e0519b51 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"local-server-input input-field\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "local_server_file", "fieldOnly" => "true", "value" => ""]]), "html", null, true);
        echo "
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\BrowseServer", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Browse server"]), "name" => "local_server_file"]]), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\file_selector\\parts\\local_server_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\file_selector\\parts\\local_server_input.twig", "");
    }
}
