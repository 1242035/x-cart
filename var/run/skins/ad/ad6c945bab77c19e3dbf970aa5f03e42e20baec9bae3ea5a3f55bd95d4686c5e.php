<?php

/* D:\x-cart\skins\customer\mini_cart\horizontal\parts\items.twig */
class __TwigTemplate_9632089c3a61191830001e154e95b9f048d84a1c377de8e12ba695ce33261c0f extends \XLite\Core\Templating\Twig\Template
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
        echo "<div ";
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getItemsContainerAttributes", [], "method")], "method");
        echo ">

  <p class=\"title\">
    <a href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "cart"]), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X items in bag", ["count" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "countQuantity", [], "method")]]), "html", null, true);
        echo "</a>
  </p>

  ";
        // line 12
        if ($this->getAttribute(($context["this"] ?? null), "hasItems", [], "method")) {
            // line 13
            echo "    <ul>
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getItemsList", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "        <li>
          ";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "minicart.horizontal.item", "item" => $context["item"]]]), "html", null, true);
                echo "
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </ul>
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if ($this->getAttribute(($context["this"] ?? null), "isTruncated", [], "method")) {
            // line 23
            echo "    <p class=\"other-items\"><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "cart"]), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Other items"]), "html", null, true);
            echo "</a></p>
  ";
        }
        // line 25
        echo "
  <p class=\"subtotal\">
    <strong>";
        // line 27
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Subtotal"]), "html", null, true);
        echo ":</strong>
    <span>";
        // line 28
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatPrice", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getDisplaySubtotal", [], "method"), 1 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getCurrency", [], "method"), 2 => 1], "method"), "html", null, true);
        echo "</span>
  </p>

  <hr />

  <div class=\"buttons-row\">
    ";
        // line 34
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "minicart.horizontal.buttons"]]), "html", null, true);
        echo "
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\mini_cart\\horizontal\\parts\\items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  80 => 28,  76 => 27,  72 => 25,  64 => 23,  62 => 22,  59 => 21,  55 => 19,  46 => 16,  43 => 15,  39 => 14,  36 => 13,  34 => 12,  26 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\mini_cart\\horizontal\\parts\\items.twig", "");
    }
}
