<?php

/* menu/language_selector/node.twig */
class __TwigTemplate_503c3342803215e8ca7e8f13569f2d749671707c60472f51c93cbbac7d760c2c extends \XLite\Core\Templating\Twig\Template
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
<li ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getContainerTagAttributes", [], "method")], "method");
        echo ">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 6
($context["this"] ?? null), "getLinkTemplate", [], "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getLinkTemplate", [], "method"), "menu/language_selector/node.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "
  ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "hasChildren", [], "method")) {
            // line 9
            echo "    <div class=\"box\">
      <ul>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getChildren", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 12
                echo "          ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["child"], "display", [], "method"), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getListName", [], "method")]]), "html", null, true);
            echo "
      </ul>
    </div>
  ";
        }
        // line 18
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "menu/language_selector/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  58 => 14,  49 => 12,  45 => 11,  41 => 9,  39 => 8,  36 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu/language_selector/node.twig", "D:\\x-cart\\skins\\admin\\menu\\language_selector\\node.twig");
    }
}
