<?php

/* layout/header/mobile_header_parts/slidebar_menu.twig */
class __TwigTemplate_759fd7d0fb7d6d08f55e65c97bb4ddc62fbcc6a2026e20c5f6a580f9a30d73b3 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"dropdown mobile_header-slidebar\">
  <a id=\"main_menu\" href=\"#slidebar\" class=\"icon-menu\"></a>
</li>";
    }

    public function getTemplateName()
    {
        return "layout/header/mobile_header_parts/slidebar_menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/mobile_header_parts/slidebar_menu.twig", "D:\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\slidebar_menu.twig");
    }
}