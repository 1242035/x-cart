<?php

/* menu/quick_menu/top_menu_node.twig */
class __TwigTemplate_35931e96ed16bb9debbf6a5ef3be06365c9aa543536d6b5935e09d57ce95a9e5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"quick-menu-menu menu\">
  <div class=\"title\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Quick menu"]), "html", null, true);
        echo "
    <i class=\"fa fa-angle-right\"></i>
  </div>
  <div class=\"box\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Menu\\Admin\\QuickMenu\\Menu"]]), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "menu/quick_menu/top_menu_node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu/quick_menu/top_menu_node.twig", "D:\\x-cart\\skins\\admin\\menu\\quick_menu\\top_menu_node.twig");
    }
}
