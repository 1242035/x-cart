<?php

/* modules/XC/ThemeTweaker/layout/content/main.center.hidden.twig */
class __TwigTemplate_5c4c24a1743ed871a535cf69570a033ca431e75225358cab1c87681aa899c891 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"hidden-sidebar-content\" class=\"column\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Layout\\Customer\\SidebarHidden", "group" => "center"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/layout/content/main.center.hidden.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ThemeTweaker/layout/content/main.center.hidden.twig", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/layout/content/main.center.hidden.twig");
    }
}