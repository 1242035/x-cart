<?php

/* D:\x-cart\skins\crisp_white\customer\layout\header\mobile_header_parts\logo.twig */
class __TwigTemplate_ec706c4b6c510a053387bc47360e74f7188811a46910f93b6f352f5998375334 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"dropdown mobile_header-logo\">
\t";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("layout/header/header.logo.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 8
        $this->loadTemplate("layout/header/header.logo.twig", "D:\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\logo.twig", 8)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 9
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  28 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\logo.twig", "");
    }
}