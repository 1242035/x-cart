<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig */
class __TwigTemplate_7e7869c3f3a7f73b797db12ecca94dd64b76526a00112d2e5c0595714dec1aa8 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isAmazonConfigured", [], "method")) {
            // line 7
            echo "  ";
            $context["amazonConfig"] = $this->getAttribute(($context["this"] ?? null), "getAmazonConfig", [], "method");
            // line 8
            echo "  <script>
    var amazonConfig = {
      sid: '";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["amazonConfig"] ?? null), "merchant_id", []), "html", null, true);
            echo "',
      mode: '";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["amazonConfig"] ?? null), "mode", []), "html", null, true);
            echo "',
      clientId: '";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["amazonConfig"] ?? null), "client_id", []), "html", null, true);
            echo "'
    };

    window.onAmazonLoginReady = function() {
      define('Amazon/Config', function () {
          return amazonConfig;
      });
      
      amazon.Login.setSandboxMode(";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "isSandboxMode", [], "method"), "html", null, true);
            echo ");
      amazon.Login.setClientId(amazonConfig.clientId);
      amazon.Login.setRegion('";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["amazonConfig"] ?? null), "region", []), "html", null, true);
            echo "');
      amazon.Login.setUseCookie(true);

      ";
            // line 25
            if (( !$this->getAttribute(($context["this"] ?? null), "isLogged", [], "method") || (($this->getAttribute(($context["this"] ?? null), "getTarget", [], "method") == "cart") && $this->getAttribute(($context["this"] ?? null), "isAmazonReturn", [], "method")))) {
                // line 26
                echo "      if (xliteConfig.target !== 'amazon_checkout') {
        amazon.Login.logout();
      }
      ";
            }
            // line 30
            echo "    };
  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 30,  60 => 26,  58 => 25,  52 => 22,  47 => 20,  36 => 12,  32 => 11,  28 => 10,  24 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig", "");
    }
}
