<?php

/* D:\x-cart\skins\crisp_white\customer\product\details\parts\page.image.twig */
class __TwigTemplate_4f6d140da33dad3f7cf981bd85922b33290d1dc626a26e3926a0225dae5163a8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"image";
        if ( !$this->getAttribute(($context["this"] ?? null), "isLoupeVisible", [], "method")) {
            echo " empty";
        }
        echo "\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.details.page.image"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\crisp_white\\customer\\product\\details\\parts\\page.image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\crisp_white\\customer\\product\\details\\parts\\page.image.twig", "");
    }
}