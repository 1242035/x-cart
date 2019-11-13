<?php

/* D:\x-cart\skins\customer\signin\signin_title.twig */
class __TwigTemplate_6a1f60d79c8e747f0d429e82261cbc44620ff297277e50da821dfc7922033559 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"signin-anonymous-title-description\">";
        echo $this->getAttribute(($context["this"] ?? null), "getSigninAnonymousTitle", [], "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\signin\\signin_title.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\signin\\signin_title.twig", "");
    }
}
