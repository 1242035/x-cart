<?php

/* header/parts/meta_mobile_capable.twig */
class __TwigTemplate_617a3cb47ca2b05a7e082e691379e68f7d0cd85ed2a84f57312051e34ab9d635 extends \XLite\Core\Templating\Twig\Template
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
<meta name=\"apple-mobile-web-app-capable\"   content=\"yes\" />
<meta name=\"mobile-web-app-capable\"         content=\"yes\" />";
    }

    public function getTemplateName()
    {
        return "header/parts/meta_mobile_capable.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header/parts/meta_mobile_capable.twig", "D:\\x-cart\\skins\\customer\\header\\parts\\meta_mobile_capable.twig");
    }
}
