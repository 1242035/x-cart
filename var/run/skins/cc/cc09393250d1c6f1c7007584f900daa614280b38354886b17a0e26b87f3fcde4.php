<?php

/* D:\x-cart\skins\admin\modules\XC\SagePay\sagepay_description.twig */
class __TwigTemplate_b967ac613c22d42ba4e8506a2862d30ea802d1b0daea2cf31c8f52794100b832 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getServiceName", [], "method") == "SagePay form protocol")) {
            // line 8
            echo "  <div class=\"description\">
  ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["SagePay Form admin description"]);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\modules\\XC\\SagePay\\sagepay_description.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\modules\\XC\\SagePay\\sagepay_description.twig", "");
    }
}
