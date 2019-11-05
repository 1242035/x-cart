<?php

/* header/parts/meta_compat_ie.twig */
class __TwigTemplate_4dc660ddc1174a70729082d2ec87f67473cd1d7fe61bf3bf7ad2240a609813b6 extends \XLite\Core\Templating\Twig\Template
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
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/meta_compat_ie.twig";
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
        return new Twig_Source("", "header/parts/meta_compat_ie.twig", "D:\\x-cart\\skins\\customer\\header\\parts\\meta_compat_ie.twig");
    }
}
