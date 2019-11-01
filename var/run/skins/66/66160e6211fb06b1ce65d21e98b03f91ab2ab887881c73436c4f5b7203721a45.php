<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.message.twig */
class __TwigTemplate_2da06e59c0f46a9077954e43f466a3a7ad580aaeeda28b1f98f707b169156f33 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"return-message\">

  <label for=\"message\" class=\"for-message\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Message"]), "html", null, true);
        echo "
    <span class=\"form-required\" title=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["This field is required."]), "html", null, true);
        echo "\">*</span>
  </label>

  <div class=\"resizable-textarea\">
    ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Textarea\\Simple", "placeholder" => "Your Message", "fieldName" => "message", "value" => "", "fieldOnly" => "true", "required" => "true"]]), "html", null, true);
        echo "
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  29 => 11,  25 => 10,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.message.twig", "");
    }
}
