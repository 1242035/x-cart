<?php

/* items_list\body.twig */
class __TwigTemplate_b21896e832306cebd2540e4961d4264f146582274526a368a9fb6b285c0f8528 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasResults", [], "method")) {
            // line 5
            echo "  <div class=\"widget items-list widgetclass-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWidgetClass", [], "method"), "html", null, true);
            echo " widgettarget-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWidgetTarget", [], "method"), "html", null, true);
            echo " sessioncell-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSessionCell", [], "method"), "html", null, true);
            echo "\">
  
    ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getItemsListParams", [], "method")], "method"), "html", null, true);
            echo "
  
    ";
            // line 9
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "isVisible", [], "method")) {
                // line 10
                echo "      <div class=\"table-pager pager-top ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "getCSSClasses", [], "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "display", [], "method"), "html", null, true);
                echo "</div>
    ";
            }
            // line 12
            echo "  
    ";
            // line 13
            if ($this->getAttribute(($context["this"] ?? null), "isHeaderVisible", [], "method")) {
                // line 14
                echo "      <div class=\"list-header\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header", "type" => "inherited"]]), "html", null, true);
                echo "</div>
    ";
            }
            // line 16
            echo "  
    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(            // line 17
($context["this"] ?? null), "getPageBodyTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getPageBodyTemplate", [], "method"), "items_list\\body.twig", 17)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 18
            echo "  
    ";
            // line 19
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "isVisibleBottom", [], "method")) {
                // line 20
                echo "      <div class=\"table-pager pager-bottom ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "getCSSClasses", [], "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "display", [], "method"), "html", null, true);
                echo "</div>
    ";
            }
            // line 22
            echo "  
    ";
            // line 23
            if ($this->getAttribute(($context["this"] ?? null), "isFooterVisible", [], "method")) {
                // line 24
                echo "      <div class=\"list-footer\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "footer", "type" => "inherited"]]), "html", null, true);
                echo "</div>
    ";
            }
            // line 26
            echo "  
  </div>
";
        }
        // line 29
        echo "
";
        // line 30
        if ($this->getAttribute(($context["this"] ?? null), "isEmptyListTemplateVisible", [], "method")) {
            // line 31
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(($context["this"] ?? null), "getEmptyListTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getEmptyListTemplate", [], "method"), "items_list\\body.twig", 31)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "items_list\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  102 => 30,  99 => 29,  94 => 26,  88 => 24,  86 => 23,  83 => 22,  75 => 20,  73 => 19,  70 => 18,  60 => 17,  57 => 16,  51 => 14,  49 => 13,  46 => 12,  38 => 10,  36 => 9,  31 => 7,  21 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list\\body.twig", "D:\\x-cart\\skins\\admin\\items_list\\body.twig");
    }
}
