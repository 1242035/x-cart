<?php

/* https_settings\body.twig */
class __TwigTemplate_77a7a3cb04e6d16985d339fae9f6d037d6fe9a15cf62dad26cd80e6ecdb0dfe2 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"https-settings-dialog\">

  ";
        // line 8
        echo "
  ";
        // line 9
        if ( !$this->getAttribute(($context["this"] ?? null), "isEnabledHTTPS", [], "method")) {
            // line 10
            echo "    <p class=\"note\">
      ";
            // line 11
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Before enabling HTTPS protocol read this article:", ["articleUrl" => $this->getAttribute(($context["this"] ?? null), "getArticleUrl", [], "method")]]);
            echo "
    </p>

    ";
            // line 14
            if ($this->getAttribute(($context["this"] ?? null), "isAvailableHTTPS", [], "method")) {
                // line 15
                echo "      ";
                if ($this->getAttribute(($context["this"] ?? null), "isValidSSL", [], "method")) {
                    // line 16
                    echo "        <div class=\"alert alert-warning\">
          ";
                    // line 17
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The secure protocol for your website is disabled."]), "html", null, true);
                    echo "
        </div>
      ";
                }
                // line 20
                echo "      ";
                if ( !$this->getAttribute(($context["this"] ?? null), "isValidSSL", [], "method")) {
                    // line 21
                    echo "        <div class=\"alert alert-danger\">
          ";
                    // line 22
                    echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["X-Cart could not find a valid SSL certificate on your server X.", ["domain" => $this->getAttribute(($context["this"] ?? null), "getDomain", [], "method")]]);
                    echo "
          <br>
          ";
                    // line 24
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Although you can switch the store to use the secure protocol for the website pages, most Internet browsers will likely display a warning message scaring your website visitors away."]), "html", null, true);
                    echo "
          <br>
          ";
                    // line 26
                    echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["You can get more information using this service: ", ["url" => $this->getAttribute(($context["this"] ?? null), "getReadMoreLink", [], "method")]]);
                    echo "
        </div>
      ";
                }
                // line 29
                echo "    ";
            } else {
                // line 30
                echo "      <div class=\"alert alert-danger\">
        ";
                // line 31
                echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["To enable secure protocol for your website pages you need a valid SSL certificate purchased for the website domain and installed on your server.", ["domain" => $this->getAttribute(($context["this"] ?? null), "getDomain", [], "method")]]);
                echo "
      </div>
    ";
            }
            // line 34
            echo "  ";
        } else {
            // line 35
            echo "
    ";
            // line 36
            if ($this->getAttribute(($context["this"] ?? null), "isValidSSL", [], "method")) {
                // line 37
                echo "      <div class=\"alert alert-success\">
        ";
                // line 38
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The secure protocol for your website is enabled."]), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 41
            echo "
    ";
            // line 42
            if (($this->getAttribute(($context["this"] ?? null), "isAvailableHTTPS", [], "method") &&  !$this->getAttribute(($context["this"] ?? null), "isValidSSL", [], "method"))) {
                // line 43
                echo "      <p>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The HTTPS protocol is enabled for your website"]), "html", null, true);
                echo ".</p>
      <div class=\"alert alert-warning\">
        ";
                // line 45
                echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["X-Cart could not find a valid SSL certificate on your server X.", ["domain" => $this->getAttribute(($context["this"] ?? null), "getDomain", [], "method")]]);
                echo "
        <br>
        ";
                // line 47
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Although you can switch the store to use the secure protocol for the website pages, most Internet browsers will likely display a warning message scaring your website visitors away."]), "html", null, true);
                echo "
        <br>
        ";
                // line 49
                echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["You can get more information using this service: ", ["url" => $this->getAttribute(($context["this"] ?? null), "getReadMoreLink", [], "method")]]);
                echo "
      </div>
    ";
            }
            // line 52
            echo "
  ";
        }
        // line 54
        echo "
  ";
        // line 56
        echo "
  ";
        // line 57
        if (($this->getAttribute(($context["this"] ?? null), "isEnabledHTTPS", [], "method") && $this->getAttribute(($context["this"] ?? null), "isValidSSL", [], "method"))) {
            // line 58
            echo "    <p class=\"note\">
      ";
            // line 59
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Your store is configured to use the secure protocol for the store back-end and checkout, sign-in and profile pages."]), "html", null, true);
            echo "
    </p>
  ";
        }
        // line 62
        echo "
  ";
        // line 63
        if ((($this->getAttribute(($context["this"] ?? null), "isAvailableHTTPS", [], "method") && $this->getAttribute(($context["this"] ?? null), "isValidSSL", [], "method")) &&  !$this->getAttribute(($context["this"] ?? null), "isEnabledHTTPS", [], "method"))) {
            // line 64
            echo "    <p class=\"note\">
      ";
            // line 65
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["We have found a valid SSL certificate installed on the server. Now you can switch the store to use the secure protocol for the store back-end and checkout, sign-in and profile pages."]), "html", null, true);
            echo "
    </p>
  ";
        }
        // line 68
        echo "</div>

";
        // line 70
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\StickyPanel\\HttpsSettings"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "https_settings\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 70,  165 => 68,  159 => 65,  156 => 64,  154 => 63,  151 => 62,  145 => 59,  142 => 58,  140 => 57,  137 => 56,  134 => 54,  130 => 52,  124 => 49,  119 => 47,  114 => 45,  108 => 43,  106 => 42,  103 => 41,  97 => 38,  94 => 37,  92 => 36,  89 => 35,  86 => 34,  80 => 31,  77 => 30,  74 => 29,  68 => 26,  63 => 24,  58 => 22,  55 => 21,  52 => 20,  46 => 17,  43 => 16,  40 => 15,  38 => 14,  32 => 11,  29 => 10,  27 => 9,  24 => 8,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "https_settings\\body.twig", "D:\\x-cart\\skins\\admin\\https_settings\\body.twig");
    }
}
