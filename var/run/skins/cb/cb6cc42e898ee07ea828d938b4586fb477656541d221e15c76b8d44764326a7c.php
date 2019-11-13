<?php

/* D:\x-cart\skins\mail\common\failed_transaction\parts\transaction_url.twig */
class __TwigTemplate_c685faf472f80a3aaa02d76d8e5fb38812d4e0b13287d28557e526a1a0f5288e extends \XLite\Core\Templating\Twig\Template
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
<p>
  ";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["You can find the failed transaction here", ["url" => $this->getAttribute(($context["this"] ?? null), "transactionSearchURL", [])]]);
        echo "
<p>";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\mail\\common\\failed_transaction\\parts\\transaction_url.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\mail\\common\\failed_transaction\\parts\\transaction_url.twig", "");
    }
}
