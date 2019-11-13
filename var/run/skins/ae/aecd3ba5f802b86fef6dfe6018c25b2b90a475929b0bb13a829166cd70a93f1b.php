<?php

/* header/parts/script_config.twig */
class __TwigTemplate_ed398c826460fd218fdfbe7c573bd422c2e4b168e5326e42b53faf4bcd31690b extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<script>
  var xliteConfig = {
    script: '";
        // line 9
        echo $this->getAttribute(($context["this"] ?? null), "getScript", [], "method");
        echo "',

    ";
        // line 11
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayAdminScript", [], "method")) {
            // line 12
            echo "    admin_script: '";
            echo $this->getAttribute(($context["this"] ?? null), "getAdminScript", [], "method");
            echo "',
    ";
        }
        // line 14
        echo "
    zone: 'customer',
    target: '";
        // line 16
        echo $this->getAttribute(($context["this"] ?? null), "getTarget", [], "method");
        echo "',
    language: '";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "currentLanguage", []), "getCode", [], "method"), "html", null, true);
        echo "',
    ajax_prefix: '";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAjaxPrefix", [], "method"), "html", null, true);
        echo "',
    form_id: '";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "xlite", []), "formId", []), "html", null, true);
        echo "',
    form_id_name: '";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_constant("XLite::FORM_ID"), "html", null, true);
        echo "',
    developer_mode: ";
        // line 21
        echo (($this->getAttribute(($context["this"] ?? null), "isDeveloperMode", [], "method")) ? ("true") : ("false"));
        echo ",
    clean_url: ";
        // line 22
        echo (($this->getAttribute(($context["this"] ?? null), "isCleanUrlsEnabled", [], "method")) ? ("true") : ("false"));
        echo ",
    clean_urls_base: '";
        // line 23
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "cleansUrlsBase", [], "method"), "html", null, true);
        echo "',
  };
</script>
";
    }

    public function getTemplateName()
    {
        return "header/parts/script_config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  41 => 16,  37 => 14,  31 => 12,  29 => 11,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header/parts/script_config.twig", "D:\\x-cart\\skins\\customer\\header\\parts\\script_config.twig");
    }
}
