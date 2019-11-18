<?php

/* modules/CDev/XMLSitemap/admin\body.twig */
class __TwigTemplate_73854155c6b4a5b4daaec437e23a5661f14905884b10e19b1f4e8b0d02737cba extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isSitemapGenerationNotFinished", [], "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\XMLSitemap\\View\\SitemapGeneration\\Progress"]]), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "  <div class=\"sitemap settings general-settings\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Generate XML-Sitemap", "jsCode" => (("self.location='" . call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "sitemap", "Generate"])) . "'"), "style" => "action always-enabled generate-button"]]), "html", null, true);
            echo "
    <p class=\"url\">";
            // line 10
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["XML sitemap URL: X", ["url" => $this->getAttribute(($context["this"] ?? null), "getSitemapURL", [], "method")]]);
            echo "</p>

    <h2>";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sitemap settings"]), "html", null, true);
            echo "</h2>

    ";
            // line 14
            $this->startForm("\\XLite\\Module\\CDev\\XMLSitemap\\View\\Form\\Sitemap");            // line 15
            echo "
    <ul class=\"table default-table\">
      <li class=\"input input-checkbox first\">
        <div class=\"table-label engines-label\">
          <label for=\"engines\" title=\"\">
            ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Mark, the search engines you want to inform of the structure of your site using the site map"]), "html", null, true);
            echo "
          </label>
        </div>
        <div class=\"table-value engines-value\">
          <span class=\"input-field-wrapper input input-checkbox\">
            <ul class=\"engines multiple-selector\">
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getEngines", [], "method"));
            foreach ($context['_seq'] as $context["key"] => $context["engine"]) {
                // line 27
                echo "                <li>
                  <label for=\"engine";
                // line 28
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                    <input type=\"checkbox\" name=\"engines[]\" value=\"";
                // line 29
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" id=\"engine";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" />
                    <span>";
                // line 30
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["engine"], "title", [])]), "html", null, true);
                echo "</span>
                  </label>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['engine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </ul>
          </span>
        </div>
      </li>
    </ul>

    ";
            // line 40
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\XMLSitemap\\View\\Form\\Settings", "category" => "CDev\\XMLSitemap"]]), "html", null, true);
            echo "

    ";
            // line 42
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\StickyPanel\\ItemForm"]]), "html", null, true);
            echo "
    ";
            $this->endForm();            // line 44
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/XMLSitemap/admin\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 44,  104 => 42,  99 => 40,  91 => 34,  81 => 30,  75 => 29,  71 => 28,  68 => 27,  64 => 26,  55 => 20,  48 => 15,  47 => 14,  42 => 12,  37 => 10,  33 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/CDev/XMLSitemap/admin\\body.twig", "D:\\x-cart\\skins\\admin\\modules\\CDev\\XMLSitemap\\admin\\body.twig");
    }
}
