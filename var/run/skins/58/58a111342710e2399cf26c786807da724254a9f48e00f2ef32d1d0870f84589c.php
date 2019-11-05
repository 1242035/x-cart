<?php

/* form_field/file_uploader/single.twig */
class __TwigTemplate_a49eaf2614de6c1a44e1960a080b609117ce50b69ce9c98b793ff9a92a78be37 extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo ">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getFileUploaderWidget", [], "method"), "object" => $this->getAttribute(($context["this"] ?? null), "getValue", [], "method"), "maxWidth" => $this->getAttribute(($context["this"] ?? null), "getMaxWidth", [], "method"), "maxHeight" => $this->getAttribute(($context["this"] ?? null), "getMaxHeight", [], "method"), "isImage" => $this->getAttribute(($context["this"] ?? null), "isImage", [], "method"), "fieldName" => $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "isViaUrlAllowed" => $this->getAttribute(($context["this"] ?? null), "isViaUrlAllowed", [], "method"), "helpMessage" => ((($context["object"] ?? null)) ? (null) : ($this->getAttribute(($context["this"] ?? null), "helpMessage", [])))]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "form_field/file_uploader/single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/file_uploader/single.twig", "D:\\x-cart\\skins\\admin\\form_field\\file_uploader\\single.twig");
    }
}
