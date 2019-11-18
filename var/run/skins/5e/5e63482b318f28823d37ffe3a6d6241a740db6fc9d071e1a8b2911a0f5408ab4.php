<?php

/* languages/labels/parts/list.languages.twig */
class __TwigTemplate_44d00b2e66028f20f716b05680de294151c54fe8f4e4e813eadc72e283a145a3 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getLanguages", [], "method")) {
            // line 6
            echo "  <ul class=\"languages-list\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getLanguages", [], "method"));
            foreach ($context['_seq'] as $context["id"] => $context["lng"]) {
                // line 8
                echo "      <li>
        ";
                // line 9
                if (($this->getAttribute($context["lng"], "code", []) != $this->getAttribute(($context["this"] ?? null), "getCode", [], "method"))) {
                    // line 10
                    echo "          <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "labels", "", ["code" => $this->getAttribute($context["lng"], "getCode", [], "method")]]), "html", null, true);
                    echo "\">
              <span class=\"flag\"><img src=\"";
                    // line 11
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["lng"], "getFlagURL", [], "method"), "html", null, true);
                    echo "\" /></span>
              <span>";
                    // line 12
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["lng"], "getName", [], "method"), "html", null, true);
                    echo "</span>
          </a>
        ";
                }
                // line 15
                echo "        ";
                if (($this->getAttribute($context["lng"], "code", []) == $this->getAttribute(($context["this"] ?? null), "getCode", [], "method"))) {
                    // line 16
                    echo "          <span class='active'>
              <span class=\"flag\"><img src=\"";
                    // line 17
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["lng"], "getFlagURL", [], "method"), "html", null, true);
                    echo "\" /></span>
              <span>";
                    // line 18
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["lng"], "getName", [], "method"), "html", null, true);
                    echo "</span>
          </span>
        ";
                }
                // line 21
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['lng'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "languages/labels/parts/list.languages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  67 => 21,  61 => 18,  57 => 17,  54 => 16,  51 => 15,  45 => 12,  41 => 11,  36 => 10,  34 => 9,  31 => 8,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "languages/labels/parts/list.languages.twig", "D:\\x-cart\\skins\\admin\\languages\\labels\\parts\\list.languages.twig");
    }
}
