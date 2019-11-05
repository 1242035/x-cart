<?php

/* modules/XC/VendorMessages/top_link.twig */
class __TwigTemplate_e12f30e298513d2afd177c4c3f4dab97d53c44ec536a503d9d6cfc0f063e1909 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"messages-count\">
    <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMessagesUrl", [], "method"), "html", null, true);
        echo "\" class=\"icon-altmail\">
      <span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Messages"]), "html", null, true);
        echo "</span>
    </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/VendorMessages/top_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/VendorMessages/top_link.twig", "D:\\x-cart\\skins\\crisp_white\\customer\\modules\\XC\\VendorMessages\\top_link.twig");
    }
}
