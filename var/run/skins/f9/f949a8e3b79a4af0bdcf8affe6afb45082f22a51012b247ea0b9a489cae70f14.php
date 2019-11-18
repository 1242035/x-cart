<?php

/* languages/import/body.twig */
class __TwigTemplate_60a4eac976af8a098b997b7613544d82438761e3cf48fa20a879fb0dc5852438 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"import-language-dialog\">

  ";
        // line 7
        $this->startForm("\\XLite\\View\\Form\\Translations\\LanguageImport");        // line 8
        echo "
  ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isSuccess", [], "method")) {
            // line 10
            echo "    <div class=\"content\">
  
      <div class=\"description\">
  
        ";
            // line 14
            if ( !$this->getAttribute(($context["this"] ?? null), "isImportFinished", [], "method")) {
                // line 15
                echo "          <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The provided file contains the following language labels:"]), "html", null, true);
                echo "</div>
        ";
            }
            // line 17
            echo "        ";
            if ($this->getAttribute(($context["this"] ?? null), "isImportFinished", [], "method")) {
                // line 18
                echo "          <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The language labels have been successfully imported:"]), "html", null, true);
                echo "</div>
        ";
            }
            // line 20
            echo "  
        <ul>
          ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "importFileData", []), "codes", []));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 23
                echo "            <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Language:"]), "html", null, true);
                echo " <span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "language", []), "html", null, true);
                echo " [";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "code", []), "html", null, true);
                echo "]</span>, ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["labels count:"]), "html", null, true);
                echo " <span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "labels_count", []), "html", null, true);
                echo "</span></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "          <li>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Number of ignored rows:"]), "html", null, true);
            echo " <span";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "importFileData", []), "ignored", [])) {
                echo " class=\"red\"";
            }
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "importFileData", []), "ignored", []), "html", null, true);
            echo "</span></li>
        </ul>
  
        ";
            // line 28
            if ( !$this->getAttribute(($context["this"] ?? null), "isImportFinished", [], "method")) {
                // line 29
                echo "          <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Please confirm if you want proceed with the import otherwise cancel the operation."]), "html", null, true);
                echo "</div>
        ";
            }
            // line 31
            echo "  
      </div>
  
      <div class=\"actions\">
        ";
            // line 35
            if ( !$this->getAttribute(($context["this"] ?? null), "isImportFinished", [], "method")) {
                // line 36
                echo "          ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Import", "jsCode" => (("self.location='" . call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "language_import", "import"])) . "'")]]), "html", null, true);
                echo "
        ";
            }
            // line 38
            echo "        ";
            if ( !$this->getAttribute(($context["this"] ?? null), "isImportFinished", [], "method")) {
                // line 39
                echo "          ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Cancel", "jsCode" => (("self.location='" . call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "language_import", "cancel_import"])) . "'")]]), "html", null, true);
                echo "
        ";
            }
            // line 41
            echo "        ";
            if ($this->getAttribute(($context["this"] ?? null), "isImportFinished", [], "method")) {
                // line 42
                echo "          ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Finish", "jsCode" => (("self.location='" . call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "language_import", "cancel_import"])) . "'")]]), "html", null, true);
                echo "
        ";
            }
            // line 44
            echo "      </div>
  
    </div>
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        if ( !$this->getAttribute(($context["this"] ?? null), "isSuccess", [], "method")) {
            // line 50
            echo "    <div class=\"error\">
      <div class=\"title\">";
            // line 51
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Failure: File has the wrong format."]), "html", null, true);
            echo "</div>
      ";
            // line 52
            if ($this->getAttribute(($context["this"] ?? null), "getMessage", [], "method")) {
                // line 53
                echo "        <div class=\"message\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMessage", [], "method"), "html", null, true);
                echo "</div>
      ";
            }
            // line 55
            echo "      <div class=\"description\">
        <div>";
            // line 56
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The language CSV file should be a text file which contains 3 columns per row (columns are separated by comma:"]), "html", null, true);
            echo "</div>
  
        <ul>
          <li>";
            // line 59
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["language code,"]), "html", null, true);
            echo "</li>
          <li>";
            // line 60
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["label name,"]), "html", null, true);
            echo "</li>
          <li>";
            // line 61
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["label translation."]), "html", null, true);
            echo "</li>
        </ul>
  
        <div>";
            // line 64
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Please make sure your file format is as described."]), "html", null, true);
            echo "</div>
  
      </div>
      <div class=\"actions\">
        ";
            // line 68
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Cancel", "jsCode" => (("self.location='" . call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "language_import", "cancel_import"])) . "'")]]), "html", null, true);
            echo "
      </div>
  
    </div>
  ";
        }
        // line 73
        echo "
  ";
        $this->endForm();        // line 75
        echo "
  ";
        // line 76
        if ($this->getAttribute(($context["this"] ?? null), "isDeveloperMode", [], "method")) {
            // line 77
            echo "    <div class=\"elapsed\">Elapsed: ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "importFileData", []), "elapsed", []), "html", null, true);
            echo "</div>
  ";
        }
        // line 79
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "languages/import/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 79,  203 => 77,  201 => 76,  198 => 75,  195 => 73,  187 => 68,  180 => 64,  174 => 61,  170 => 60,  166 => 59,  160 => 56,  157 => 55,  151 => 53,  149 => 52,  145 => 51,  142 => 50,  140 => 49,  137 => 48,  131 => 44,  125 => 42,  122 => 41,  116 => 39,  113 => 38,  107 => 36,  105 => 35,  99 => 31,  93 => 29,  91 => 28,  78 => 25,  61 => 23,  57 => 22,  53 => 20,  47 => 18,  44 => 17,  38 => 15,  36 => 14,  30 => 10,  28 => 9,  25 => 8,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "languages/import/body.twig", "D:\\x-cart\\skins\\admin\\languages\\import\\body.twig");
    }
}
