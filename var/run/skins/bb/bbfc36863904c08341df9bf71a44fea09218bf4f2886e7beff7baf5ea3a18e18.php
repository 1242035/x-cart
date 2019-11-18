<?php

/* file_selector/body.twig */
class __TwigTemplate_27d7a5ae88b2402e99401f1d828ca10705be7b4fa02406dd860881a33a0ccc6b extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        $this->startForm("\\XLite\\View\\Form\\FileDialog\\Select", ["formParams" => $this->getAttribute(($context["this"] ?? null), "getFileDialogParams", [], "method")]);        // line 6
        echo "<div class=\"file-selector\">
  <ul class=\"selections-list\">
    ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isAllMode", [], "method")) {
            // line 9
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "file_select_dialog.file_selections"]]), "html", null, true);
            echo "
    ";
        } elseif ($this->getAttribute(        // line 10
($context["this"] ?? null), "isUrlMode", [], "method")) {
            // line 11
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "file_select_dialog.file_selections_url"]]), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "  </ul>
";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "file_select_dialog.actions"]]), "html", null, true);
        echo "
</div>
";
        $this->endForm();        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "file_selector/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  45 => 14,  42 => 13,  36 => 11,  34 => 10,  29 => 9,  27 => 8,  23 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file_selector/body.twig", "D:\\x-cart\\skins\\admin\\file_selector\\body.twig");
    }
}
