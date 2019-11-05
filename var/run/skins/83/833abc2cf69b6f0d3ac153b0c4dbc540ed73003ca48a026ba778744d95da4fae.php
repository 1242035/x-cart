<?php

/* button/tooltip.twig */
class __TwigTemplate_4ed1f61eb92fb5a14ed78068dd10f78110b901cdd61f4e8b145934c960ef2c4c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getButtonTooltip", [], "method")) {
            // line 6
            echo "<div class=\"button-tooltip-wrapper\">
    <div
            data-toggle=\"popover\"
            data-trigger=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTrigger", [], "method"), "html", null, true);
            echo "\"
            data-placement=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "placement"], "method"), "html", null, true);
            echo "\"
            data-content=\"";
            // line 11
            echo $this->getAttribute(($context["this"] ?? null), "getButtonTooltip", [], "method");
            echo "\"
            data-html=\"true\"
            data-help-id=\"";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getHelpId", [], "method"), "html", null, true);
            echo "\"
            data-delay=\"";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDelay", [], "method"), "html", null, true);
            echo "\"
            data-keep-on-hover=\"";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "isKeepOnHover", [], "method"), "html", null, true);
            echo "\"
            v-xlite-tooltip
            class=\"tooltip-main\">

        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("button/regular.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 19
            $this->loadTemplate("button/regular.twig", "button/tooltip.twig", 19)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 20
            echo "    </div>
</div>
";
        }
        // line 23
        echo "
";
        // line 24
        if ($this->getAttribute(($context["this"] ?? null), "getSeparateTooltip", [], "method")) {
            // line 25
            echo "<div class=\"button-tooltip-wrapper\">
    <div class=\"button-tooltip\">
        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("button/regular.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 27
            $this->loadTemplate("button/regular.twig", "button/tooltip.twig", 27)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 28
            echo "    </div>
    ";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Tooltip", "text" => $this->getAttribute(($context["this"] ?? null), "getSeparateTooltip", [], "method"), "isImageTag" => "true", "className" => "help-icon"]]), "html", null, true);
            echo "
</div>
";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "button/tooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  94 => 29,  91 => 28,  86 => 27,  77 => 25,  75 => 24,  72 => 23,  67 => 20,  62 => 19,  50 => 15,  46 => 14,  42 => 13,  37 => 11,  33 => 10,  29 => 9,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "button/tooltip.twig", "D:\\x-cart\\skins\\admin\\button\\tooltip.twig");
    }
}
