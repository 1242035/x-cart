<?php

/* items_list/model/table/labels/action.edit.twig */
class __TwigTemplate_fb55f964a0a918e4f80a5b80b767f16c4cdc800275188d6e4e1c44a57f02624c extends \XLite\Core\Templating\Twig\Template
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
  <div class=\"edit-label-wrapper\">
    <a
      href=\"javascript:void(0);\"
      class=\"edit always-reload\"
      title=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Click to edit all this label translations"]), "html", null, true);
        echo "\"
      onclick=\"javascript: return openEditLabelDialog(this, ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "label_id", []), "html", null, true);
        echo ", '";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "code", []), "html", null, true);
        echo "');\">
      <i class=\"fa fa-edit\"></i>
    </a>
  </div>

";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/labels/action.edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  26 => 9,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/labels/action.edit.twig", "D:\\x-cart\\skins\\admin\\items_list\\model\\table\\labels\\action.edit.twig");
    }
}
