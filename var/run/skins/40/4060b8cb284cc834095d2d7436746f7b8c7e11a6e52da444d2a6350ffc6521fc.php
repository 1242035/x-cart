<?php

/* D:\x-cart\skins\customer\layout\content\main.center.right.twig */
class __TwigTemplate_30f8a43f0f7eea3ded3a2022dd41b0db302dd53743c769272a6ac9ad89abdab3 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "layout", []), "isSidebarSecondVisible", [], "method")) {
            // line 8
            echo "  <div id=\"sidebar-second\" class=\"column sidebar\">
    <div class=\"section\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Layout\\Customer\\SidebarSecond", "group" => "sidebar"]]), "html", null, true);
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\layout\\content\\main.center.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\layout\\content\\main.center.right.twig", "");
    }
}