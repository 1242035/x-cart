<?php

/* items_list\payment/methods/online\body.twig */
class __TwigTemplate_487e1ea53189f717c37d81af238493dc3768e376cf4cb86fb4d40d71300f2bc1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getListCSSClasses", [], "method"), "html", null, true);
        echo "\">

  ";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "getPageData", [], "method")) {
            // line 8
            echo "    <ul>
      ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getPageData", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 10
                echo "      <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLineClass", [0 => $context["method"]], "method"), "html", null, true);
                echo "\" data-module-name=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["method"], "getModuleName", [], "method"), "html", null, true);
                echo "\">
      ";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "payment.methods.list.line", "method" => $context["method"]]]), "html", null, true);
                echo "
      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </ul>
  ";
        }
        // line 16
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list\\payment/methods/online\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  52 => 14,  43 => 11,  36 => 10,  32 => 9,  29 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list\\payment/methods/online\\body.twig", "D:\\x-cart\\skins\\admin\\items_list\\payment\\methods\\online\\body.twig");
    }
}
