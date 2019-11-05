<?php

/* trial_notice_v2\body.twig */
class __TwigTemplate_1cf36caeaf09cb65e938123a85e47321fed99fff4918821703a65d46aa78cdca extends \XLite\Core\Templating\Twig\Template
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
<div class=\"trial-notice-block";
        // line 5
        if ( !$this->getAttribute(($context["this"] ?? null), "isPopup", [], "method")) {
            echo " alert alert-warning";
        }
        echo "\">
  ";
        // line 6
        if (( !$this->getAttribute(($context["this"] ?? null), "isPopup", [], "method") && $this->getAttribute(($context["this"] ?? null), "isTrialPeriodExpired", [], "method"))) {
            // line 7
            echo "    <h2 class=\"title\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Your X-Cart Business trial has expired!"]), "html", null, true);
            echo "</h2>
  ";
        }
        // line 9
        echo "
  <div class=\"notice\">";
        // line 10
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["You must register your X-Cart installation before using it for real sales. Activate your existing license key or purchase a premium license to skyrocket your business."]);
        echo "</div>

  ";
        // line 12
        if ($this->getAttribute(($context["this"] ?? null), "isTrialPeriodExpired", [], "method")) {
            // line 13
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("trial_notice_v2/activate_key.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("trial_notice_v2/activate_key.twig", "trial_notice_v2\\body.twig", 13)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 14
            echo "
    ";
            // line 15
            if ( !$this->getAttribute(($context["this"] ?? null), "isPopup", [], "method")) {
                // line 16
                echo "      <hr/>
      <div class=\"important\">";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["This message can be removed only through activation of a free or premium license."]), "html", null, true);
                echo "</div>
      <div class=\"faq\">";
                // line 18
                echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Refer to X-Cart license agreement for further details.", ["licenseAgreementURL" => $this->getAttribute(($context["this"] ?? null), "getLicenseAgreementURL", [], "method")]]);
                echo "</div>
    ";
            }
            // line 20
            echo "  ";
        } else {
            // line 21
            echo "  <div class=\"trial-in-progress\">
    ";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => "Remind me on next sign-in", "style" => "remind-on-next-sign-in", "jsCode" => "popup.close();", "attributes" => ["data-segment-click" => "Remind me on next sign-in"]]]), "html", null, true);
            echo "
    ";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => "Purchase a premium license key", "style" => "purchase-license regular-main-button", "jsCode" => (("window.open('" . $this->getAttribute(($context["this"] ?? null), "getPurchaseURL", [], "method")) . "', '_blank');"), "attributes" => ["data-segment-click" => "Purchase a premium license key"]]]), "html", null, true);
            echo "
  </div>

  <div class=\"register-license-key\">
    <a href=\"#\" class=\"open-license-key-form\">";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["I have a license key"]), "html", null, true);
            echo "</a>
    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("trial_notice_v2/activate_key.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 28
            $this->loadTemplate("trial_notice_v2/activate_key.twig", "trial_notice_v2\\body.twig", 28)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 29
            echo "  </div>
  ";
        }
        // line 31
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "trial_notice_v2\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  105 => 29,  100 => 28,  91 => 27,  84 => 23,  80 => 22,  77 => 21,  74 => 20,  69 => 18,  65 => 17,  62 => 16,  60 => 15,  57 => 14,  46 => 13,  44 => 12,  39 => 10,  36 => 9,  30 => 7,  28 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "trial_notice_v2\\body.twig", "D:\\x-cart\\skins\\admin\\trial_notice_v2\\body.twig");
    }
}
