<?php

/* D:\x-cart\skins\customer\checkout\steps\review\parts\items.includedModifiers.twig */
class __TwigTemplate_9099c0e978b63ef35e7519d19dd879c5852a9ac01d44a183a3bcbf29d8da3779 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"modifiers included-modifiers\">
  ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getItemsIncludeSurchargesTotals", [], "method")) {
            // line 9
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getItemsIncludeSurchargesTotals", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 10
                echo "      <li class='included-surcharge type-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "surcharge", []), "getType", [], "method"), "html", null, true);
                echo "-surcharge code-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "surcharge", []), "getCode", [], "method"), "html", null, true);
                echo "-surcharge'>
        <span class=\"name\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Including X", ["name" => $this->getAttribute($this->getAttribute($context["row"], "surcharge", []), "getName", [], "method")]]), "html", null, true);
                echo ":</span>
          <span class=\"value\">";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["row"], "cost", []), "currency" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getCurrency", [], "method")]]), "html", null, true);
                echo "</span>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  ";
        }
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\checkout\\steps\\review\\parts\\items.includedModifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  50 => 15,  41 => 12,  37 => 11,  30 => 10,  25 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\checkout\\steps\\review\\parts\\items.includedModifiers.twig", "");
    }
}