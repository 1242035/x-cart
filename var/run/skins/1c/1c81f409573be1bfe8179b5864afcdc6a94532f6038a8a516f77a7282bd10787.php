<?php

/* D:\x-cart\skins\customer\checkout\steps\shipping\parts\subsection.payment.twig */
class __TwigTemplate_46d42a881fffb4651b2b8bc4fe0428224a1d6ac420779d4c2003e08bd0b0b1c6 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"subsection payment-section\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "checkout.shipping.selected.sub.payment"]]), "html", null, true);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\checkout\\steps\\shipping\\parts\\subsection.payment.twig";
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
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\checkout\\steps\\shipping\\parts\\subsection.payment.twig", "");
    }
}
