<?php

/* consistency_check/result.twig */
class __TwigTemplate_c7c899e7b47a9ec961be563583b1605b018ea4f173630f3ac66eb519a928f805 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"consistency-wrapper\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getGroups", [], "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["groupName"] => $context["group"]) {
            // line 7
            echo "    ";
            if ($context["group"]) {
                // line 8
                echo "      <div class=\"consistency-group consistency-group-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_replace_filter($context["groupName"], ["\\" => ""]), "html", null, true);
                echo "\">
        <h2>";
                // line 9
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", []), "html", null, true);
                echo "</h2>
        <div class=\"consistency-list\">
          ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "list", []));
                foreach ($context['_seq'] as $context["inconsistencyServiceName"] => $context["inconsistency"]) {
                    // line 12
                    echo "            ";
                    if ($context["inconsistency"]) {
                        // line 13
                        echo "              <div class=\"consistency-list-type type-";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["inconsistencyServiceName"], "html", null, true);
                        echo "\">
                <div class=\"type-heading\">
                  <span>";
                        // line 15
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["inconsistency"], "name", []), "html", null, true);
                        echo "</span>
                </div>
                ";
                        // line 17
                        if ($this->getAttribute($context["inconsistency"], "list", [])) {
                            // line 18
                            echo "                  <ul class=\"files-list\">
                    ";
                            // line 19
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["inconsistency"], "list", []));
                            foreach ($context['_seq'] as $context["itemName"] => $context["item"]) {
                                // line 20
                                echo "                      <li class=\"files-list-item\">";
                                echo $context["item"];
                                echo "</li>
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['itemName'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 22
                            echo "                  </ul>
                ";
                        }
                        // line 24
                        echo "              </div>
            ";
                    }
                    // line 26
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['inconsistencyServiceName'], $context['inconsistency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        </div>
      </div>
    ";
            }
            // line 30
            echo "  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "    <p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["There are no inconsistencies found"]), "html", null, true);
            echo "</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "consistency_check/result.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  101 => 31,  96 => 30,  91 => 27,  85 => 26,  81 => 24,  77 => 22,  68 => 20,  64 => 19,  61 => 18,  59 => 17,  54 => 15,  48 => 13,  45 => 12,  41 => 11,  36 => 9,  31 => 8,  28 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "consistency_check/result.twig", "D:\\x-cart\\skins\\admin\\consistency_check\\result.twig");
    }
}
