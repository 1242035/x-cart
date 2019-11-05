<?php

/* settings/summary/body.twig */
class __TwigTemplate_ca81f232ddfc75ee3b84a0c6fd3b7af785dc9610d1d6d5caa5266b88d906a282 extends \XLite\Core\Templating\Twig\Template
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
<fieldset>
  <div>
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "environment.before"]]), "html", null, true);
        echo "

    <table cellspacing=\"1\" cellpadding=\"5\" class=\"settings-table\">

      <tr>
        <td class=\"setting-name\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Core version"]), "html", null, true);
        echo ":</td>
        <td>";
        // line 13
        echo $this->getAttribute(($context["this"] ?? null), "core_version", []);
        if ($this->getAttribute(($context["this"] ?? null), "answeredVersion", [])) {
            echo "&nbsp;&nbsp;(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["verified version"]), "html", null, true);
            echo ": ";
            if ($this->getAttribute(($context["this"] ?? null), "answeredVersionError", [])) {
                // line 14
                echo "            <span class=\"star\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["unknown"]), "html", null, true);
                echo "</span>";
            } else {
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "answeredVersion", []), "html", null, true);
            }
            echo ")";
        }
        echo "</td>
      </tr>

      ";
        // line 17
        if ($this->getAttribute(($context["this"] ?? null), "answeredVersionError", [])) {
            // line 18
            echo "        <tr>
          <td class=\"setting-name\">";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Loopback test"]), "html", null, true);
            echo ":</td>
          <td><textarea name=\"answered_version\" class=\"form-control\" cols=\"80\" rows=\"5\" style=\"FONT-SIZE: 10px;\"
                        readonly>";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "answeredVersion", []), "html", null, true);
            echo "</textarea></td>
        </tr>
      ";
        }
        // line 24
        echo "
      <tr>
        <td class=\"setting-name\">";
        // line 26
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Installation directory"]), "html", null, true);
        echo ":</td>
        <td>
          <div>";
        // line 28
        echo $this->getAttribute(($context["this"] ?? null), "root_folder", []);
        echo "</div>
          <div class=\"form-field-comment\">
            <a href=\"";
        // line 30
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getInstallationDirectoryHelpLink", [], "method"), "html", null, true);
        echo "\" target=\"blank_\"
               class=\"navigation-path\">";
        // line 31
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["How do I move X-Cart?"]), "html", null, true);
        echo "<i class=\"icon fa fa-external-link\"></i></a>
          </div>
        </td>
      </tr>

      <tr>
        <td class=\"setting-name\">PHP:</td>
        <td>
          <div>";
        // line 39
        echo $this->getAttribute(($context["this"] ?? null), "phpversion", []);
        echo "</div>
          <div class=\"form-field-comment\">
            <a href=\"";
        // line 41
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "settings", "phpinfo", ["page" => "Environment"]]), "html", null, true);
        echo "\" target=\"blank_\"
               class=\"navigation-path\">";
        // line 42
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["details"]), "html", null, true);
        echo "</a>
          </div>
        </td>
      </tr>

      <tr>
        <td class=\"setting-name\">";
        // line 48
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["MySQL server"]), "html", null, true);
        echo ":</td>
        <td>
          <span>";
        // line 50
        echo $this->getAttribute(($context["this"] ?? null), "mysql_server", []);
        echo "&nbsp;</span>
          ";
        // line 51
        if ($this->getAttribute(($context["this"] ?? null), "innodb_support", [])) {
            // line 52
            echo "            <span>(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["InnoDB engine support enabled"]), "html", null, true);
            echo ")</span>
          ";
        }
        // line 54
        echo "          ";
        if ( !$this->getAttribute(($context["this"] ?? null), "innodb_support", [])) {
            // line 55
            echo "            <span
                class=\"error-message\">";
            // line 56
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Warning! InnoDB engine is not supported. It is required for software operation"]), "html", null, true);
            echo "</span>
          ";
        }
        // line 58
        echo "        </td>
      </tr>

      <tr>
        <td class=\"setting-name\">";
        // line 62
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Web server"]), "html", null, true);
        echo ":</td>
        <td>";
        // line 63
        echo $this->getAttribute(($context["this"] ?? null), "web_server", []);
        echo "</td>
      </tr>

      <tr>
        <td class=\"setting-name\">";
        // line 67
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Operating system"]), "html", null, true);
        echo ":</td>
        <td>";
        // line 68
        echo $this->getAttribute(($context["this"] ?? null), "os_type", []);
        echo "</td>
      </tr>

      <tr>
        <td class=\"setting-name\">";
        // line 72
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Date and time on the server"]), "html", null, true);
        echo ":</td>
        <td>";
        // line 73
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getServerDateTime", [], "method"), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getServerTimeZone", [], "method"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td class=\"setting-name\">";
        // line 77
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Date and time in the shop"]), "html", null, true);
        echo ":</td>
        <td>";
        // line 78
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getShopDateTime", [], "method"), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getShopTimezone", [], "method"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td class=\"setting-name\">";
        // line 82
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["XML parser"]), "html", null, true);
        echo ":</td>
        <td>";
        // line 83
        echo $this->getAttribute(($context["this"] ?? null), "xml_parser", []);
        echo "</td>
      </tr>

      <tr>
        <td class=\"setting-name\">GDLib:</td>
        <td>";
        // line 88
        if ($this->getAttribute(($context["this"] ?? null), "gdlib", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "gdlib", []), "html", null, true);
        } else {
            echo "<span class=\"error-message\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Not detected"]), "html", null, true);
            echo "</span><br/>
            <b>";
            // line 89
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Warning!"]), "html", null, true);
            echo "</b> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["PHP 'gd' extension is not installed."]), "html", null, true);
        }
        echo "</td>
      </tr>

      <tr>
        <td class=\"setting-name\">";
        // line 93
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Translation driver"]), "html", null, true);
        echo ":</td>
        <td>";
        // line 94
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTranslationDriver", [], "method"), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <td class=\"setting-name\">";
        // line 98
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Curl version"]), "html", null, true);
        echo ":</td>
        <td>";
        // line 99
        if ($this->getAttribute(($context["this"] ?? null), "libcurl", [])) {
            echo $this->getAttribute(($context["this"] ?? null), "libcurl", []);
        } else {
            echo "<span class=\"star\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["unknown"]), "html", null, true);
            echo "</span>";
        }
        // line 100
        echo "        </td>
      </tr>
    </table>
  </div>
</fieldset>

";
        // line 106
        if (($this->getAttribute(($context["this"] ?? null), "libcurl", []) || $this->getAttribute(($context["this"] ?? null), "license_keys", []))) {
            // line 107
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("settings/base.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("settings/base.twig", "settings/summary/body.twig", 107)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 109
        echo "
<fieldset>
  <legend class=\"separated\">
    <h2>";
        // line 112
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Installation requirements"]), "html", null, true);
        echo "</h2>
  </legend>
  <div class=\"two-column\">
    <div class=\"left-column\">
      <h3>";
        // line 116
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Critical"]), "html", null, true);
        echo "</h3>
      <table cellspacing=\"1\" cellpadding=\"5\" class=\"settings-table critical-requirements-table\">
        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getCriticalRequirements", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["requirement"]) {
            // line 119
            echo "          ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Requirement", "requirement" => $context["requirement"], "name" => $context["name"], "odd" => ($this->getAttribute($context["loop"], "index", []) % 2 == 1)]]), "html", null, true);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "      </table>
    </div>

    <div class=\"right-column\">
      <h3>";
        // line 125
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Non-critical"]), "html", null, true);
        echo "</h3>
      <table cellspacing=\"1\" cellpadding=\"5\" class=\"settings-table non-critical-requirements-table\">
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getNonCriticalRequirements", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["requirement"]) {
            // line 128
            echo "          ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Requirement", "requirement" => $context["requirement"], "name" => $context["name"], "odd" => ($this->getAttribute($context["loop"], "index", []) % 2 == 1)]]), "html", null, true);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "      </table>
    </div>
  </div>
</fieldset>";
    }

    public function getTemplateName()
    {
        return "settings/summary/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 130,  355 => 128,  338 => 127,  333 => 125,  327 => 121,  310 => 119,  293 => 118,  288 => 116,  281 => 112,  276 => 109,  264 => 107,  262 => 106,  254 => 100,  246 => 99,  242 => 98,  235 => 94,  231 => 93,  221 => 89,  213 => 88,  205 => 83,  201 => 82,  192 => 78,  188 => 77,  179 => 73,  175 => 72,  168 => 68,  164 => 67,  157 => 63,  153 => 62,  147 => 58,  142 => 56,  139 => 55,  136 => 54,  130 => 52,  128 => 51,  124 => 50,  119 => 48,  110 => 42,  106 => 41,  101 => 39,  90 => 31,  86 => 30,  81 => 28,  76 => 26,  72 => 24,  66 => 21,  61 => 19,  58 => 18,  56 => 17,  43 => 14,  36 => 13,  32 => 12,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/summary/body.twig", "D:\\x-cart\\skins\\admin\\settings\\summary\\body.twig");
    }
}
