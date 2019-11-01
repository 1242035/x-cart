<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.twig */
class __TwigTemplate_7a9fc9de57fa66f48d50c48c9b222c1862857387938b005561f7f5f027468a1c extends \XLite\Core\Templating\Twig\Template
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
<div class=\"return-form\">

  ";
        // line 9
        $this->startForm("\\XLite\\Module\\XC\\CanadaPost\\View\\Form\\CreateReturn");        // line 10
        echo "    
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "capost_create_return.form"]]), "html", null, true);
        echo "

  ";
        $this->endForm();        // line 14
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  28 => 11,  25 => 10,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.twig", "");
    }
}
