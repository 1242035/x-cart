<?php

/* D:\x-cart\skins\admin\shipping\add_method\parts\offline_create.twig */
class __TwigTemplate_c2e4a5f7070e89aa073e5c381caef4baaf9003d403c1a6142dfd5023fed794b0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"offline-shipping-create\">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 7
($context["this"] ?? null), "getOfflineHelpTemplate", [], "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getOfflineHelpTemplate", [], "method"), "D:\\x-cart\\skins\\admin\\shipping\\add_method\\parts\\offline_create.twig", 7)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 8
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Model\\Shipping\\Offline"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\shipping\\add_method\\parts\\offline_create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\shipping\\add_method\\parts\\offline_create.twig", "");
    }
}
