<?php

/* top_links/version_notes/parts/base.twig */
class __TwigTemplate_b0980d1e8ca5e379dd5d83d2615066912134d998a86c0fb50eb3218178cb2727 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "auth", []), "isLogged", [], "method")) {
            // line 7
            echo "  <div class=\"base-version\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X-Cart shopping cart software"]), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "top_links/version_notes/parts/base.twig", "D:\\x-cart\\skins\\admin\\top_links\\version_notes\\parts\\base.twig");
    }
}