<?php

/* D:\x-cart\skins\customer\layout\header\header.bar.mobilesearch.twig */
class __TwigTemplate_c0681abd5ae040955d8c0f24e05cec04e8b4ae2a654eb43c6804c1d7006890e3 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"mobile_search\">
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Form\\Product\\Search\\Customer\\Simple"]]), "html", null, true);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\layout\\header\\header.bar.mobilesearch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\layout\\header\\header.bar.mobilesearch.twig", "");
    }
}