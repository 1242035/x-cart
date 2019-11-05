<?php

/* header/parts/nofollow.twig */
class __TwigTemplate_2d19347b3283a2936240ebd8a6440650e3cf7d1c6aeb8fbfd788b950e82956a3 extends \XLite\Core\Templating\Twig\Template
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
<meta name=\"ROBOTS\" content=\"NOFOLLOW\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/nofollow.twig";
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
        return new Twig_Source("", "header/parts/nofollow.twig", "D:\\x-cart\\skins\\admin\\header\\parts\\nofollow.twig");
    }
}
