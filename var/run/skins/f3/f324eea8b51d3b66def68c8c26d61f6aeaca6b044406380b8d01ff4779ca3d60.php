<?php

/* D:\x-cart\skins\admin\notifications\list.twig */
class __TwigTemplate_92dfb1c58b23c8ae1f015c5513fd66b8497ac452e4c749036494854f2bb95ead extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isDOMWarningVisible", [], "method")) {
            // line 8
            echo "<div class=\"alert alert-warning attachment-warning\">
    ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["dom.extension.alert"]);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\notifications\\list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\notifications\\list.twig", "");
    }
}
