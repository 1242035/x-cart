<?php

/* file_uploader/parts/menu.delete.twig */
class __TwigTemplate_ade8bbe4ea7020d1271a4ee7c47e9094380d89a7ddad3227d2daaa9b8f6d322a extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute(($context["this"] ?? null), "hasFile", [], "method") && $this->getAttribute(($context["this"] ?? null), "isRemovable", [], "method"))) {
            // line 8
            echo "  <li role=\"presentation\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"delete\" @click.prevent=\"toggleDelete\">
      <i class=\"button-icon fa-trash-o\"></i>
      <span>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Delete"]), "html", null, true);
            echo "</span>
    </a>
  </li>
  <li role=\"presentation\" class=\"undelete\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"delete\" @click.prevent=\"toggleDelete\">
      <div class=\"diagonal\"></div>
      <i class=\"button-icon fa-trash-o\"></i>
      <span>";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Undelete"]), "html", null, true);
            echo "</span>
    </a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "file_uploader/parts/menu.delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 18,  29 => 11,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file_uploader/parts/menu.delete.twig", "D:\\x-cart\\skins\\common\\file_uploader\\parts\\menu.delete.twig");
    }
}
