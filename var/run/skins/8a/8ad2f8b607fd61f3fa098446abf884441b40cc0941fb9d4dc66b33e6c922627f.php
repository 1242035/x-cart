<?php

/* modules/XC/ThemeTweaker/images/body.twig */
class __TwigTemplate_c5138662fedf2730f358a36932e39857d980eda50fcb9411b19870581ef2f0e0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getImages", [], "method")) {
            // line 6
            echo "<div class=\"items-list-table items-list table-wrapper\">
  <table class=\"list\" cellspacing=\"0\">
    <thead>
      <tr>
        <th>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Image"]), "html", null, true);
            echo "</th>
        <th>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Path for using in custom CSS"]), "html", null, true);
            echo "</th>
        <th>";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["URL"]), "html", null, true);
            echo "</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody class=\"lines\">
      ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getImages", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 18
                echo "        <tr class=\"line\">
          <td class=\"image\"><a href=\"";
                // line 19
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getImageUrl", [0 => $context["image"]], "method"), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getImageUrl", [0 => $context["image"]], "method"), "html", null, true);
                echo "\" alt=\"\" /></a></td>
          <td>images/";
                // line 20
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["image"], "html", null, true);
                echo "</td>
          <td>";
                // line 21
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getImageUrl", [0 => $context["image"]], "method"), "html", null, true);
                echo "</td>
          <td class=\"actions right\">
            <div class=\"cell\">
              <div class=\"separator\"></div>
              <div class=\"action\">
                ";
                // line 26
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\Remove", "buttonName" => "delete[]", "value" => $context["image"]]]), "html", null, true);
                echo "
              </div>
            </div>
          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </tbody>
  </table>
</div>
";
        } else {
            // line 36
            echo "<p class=\"no-images\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["No images uploaded"]), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/images/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  83 => 32,  71 => 26,  63 => 21,  59 => 20,  53 => 19,  50 => 18,  46 => 17,  38 => 12,  34 => 11,  30 => 10,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ThemeTweaker/images/body.twig", "D:\\x-cart\\skins\\admin\\modules\\XC\\ThemeTweaker\\images\\body.twig");
    }
}
