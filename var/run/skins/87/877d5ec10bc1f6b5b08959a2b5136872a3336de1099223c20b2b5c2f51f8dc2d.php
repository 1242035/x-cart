<?php

/* items_list/model/table/order/cell.profile.twig */
class __TwigTemplate_8bd542bee6d09529b0be2884c7afee980d995b2792acf947a0f11ad0571fa1e4 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        ob_start();
        // line 6
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "origProfile", []), "anonymous", [])) {
            // line 7
            echo "    <div class=\"profile-anonymous-icon\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Anonymous Customer"]), "html", null, true);
            echo "\">
      ";
            // line 8
            echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/anonymous.svg"], "method");
            echo "
    </div>
  ";
        }
        // line 11
        echo "  ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "origProfile", []), "anonymous", [])) {
            // line 12
            echo "    <div class=\"profile-icon\">&nbsp;</div>
  ";
        }
        // line 14
        echo "
  <div class=\"profile-box\">
    ";
        // line 16
        if ($this->getAttribute(($context["this"] ?? null), "isProfileRemoved", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 17
            echo "      <span class=\"removed-profile-name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (($this->getAttribute(($context["this"] ?? null), "getColumnValue", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["this"] ?? null), "getColumnValue", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), call_user_func_array($this->env->getFunction('t')->getCallable(), ["Anonymous"]))) : (call_user_func_array($this->env->getFunction('t')->getCallable(), ["Anonymous"]))), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 19
            echo "      <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "profile", "", ["profile_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "origProfile", []), "getProfileId", [], "method")]]), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getColumnValue", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), "html", null, true);
            echo "</a>
    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "profile", [])) {
            // line 22
            echo "      <span class=\"profile-email\"><a href=\"mailto:";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "profile", []), "getLogin", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "profile", []), "getLogin", [], "method"), "html", null, true);
            echo "</a></span>
    ";
        }
        // line 24
        echo "  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  68 => 22,  65 => 21,  57 => 19,  51 => 17,  49 => 16,  45 => 14,  41 => 12,  38 => 11,  32 => 8,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/order/cell.profile.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\order\\cell.profile.twig");
    }
}
