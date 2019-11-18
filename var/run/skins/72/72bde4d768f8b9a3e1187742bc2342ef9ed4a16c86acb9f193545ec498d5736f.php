<?php

/* languages/languages/body.twig */
class __TwigTemplate_542f53d508e22b9fc7a44c9be406524270e51588b575a4e5f756fc760d1c1ead extends \XLite\Core\Templating\Twig\Template
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
<div class=\"languages\">

  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\ItemsList\\Model\\Translation\\Languages"]]), "html", null, true);
        echo "

  <div class=\"language-list-bottom\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "languages.bottom-list"]]), "html", null, true);
        echo "
  </div>

  ";
        // line 13
        if ($this->getAttribute(($context["this"] ?? null), "isImportActive", [], "method")) {
            // line 14
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\ImportLanguage"]]), "html", null, true);
            echo "
  ";
        }
        // line 16
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "languages/languages/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  38 => 14,  36 => 13,  30 => 10,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "languages/languages/body.twig", "D:\\x-cart\\skins\\admin\\languages\\languages\\body.twig");
    }
}
