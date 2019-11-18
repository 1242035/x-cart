<?php

/* form_field/clean_urls/home_page.twig */
class __TwigTemplate_a24e5a5b995419443cbb08791ff4b001b8c3f6b5701e22a7f3686a180baff3de extends \XLite\Core\Templating\Twig\Template
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
<div class=\"input-field-wrapper\">
  <h3>
    <span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getLabel", [], "method")]), "html", null, true);
        echo "</span>
    <a class=\"edit-link\" href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFrontPageEditURL", [], "method"), "html", null, true);
        echo "\">
      <i class=\"fa fa-edit icon\"></i>
    </a>
  </h3>

  <div class=\"homepage\">
    <ul class=\"table\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getHomepageElementsList", [], "method"));
        foreach ($context['_seq'] as $context["name"] => $context["element"]) {
            // line 16
            echo "        <li>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Label", "label" => $this->getAttribute($context["element"], "label", []), "fieldName" => $context["name"], "value" => $this->getAttribute($context["element"], "value", [])]]), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "form_field/clean_urls/home_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  42 => 16,  38 => 15,  28 => 8,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/clean_urls/home_page.twig", "D:\\x-cart\\skins\\admin\\form_field\\clean_urls\\home_page.twig");
    }
}
