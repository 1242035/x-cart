<?php

/* modules/XC/ThemeTweaker/images_settings/parts/custom_images.twig */
class __TwigTemplate_166c1eb59b952a45f88d3336f4541432949eff11aeb504a69e2ab432ea20882f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"custom-images\">

  <h2>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Custom images"]), "html", null, true);
        echo "</h2>

  <div class=\"new-image\">
    <div>
      <input id=\"new_images\" class=\"inputfile\" type=\"file\" name=\"new_images[]\" multiple />
      <label for=\"new_images\" class=\"input-button\">";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Upload image"]), "html", null, true);
        echo "</label>
      <span class=\"input-filename\"></span>
    </div>
  </div>

  ";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\ThemeTweaker\\View\\Images"]]), "html", null, true);
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/images_settings/parts/custom_images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 19,  32 => 14,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ThemeTweaker/images_settings/parts/custom_images.twig", "D:\\x-cart\\skins\\admin\\modules\\XC\\ThemeTweaker\\images_settings\\parts\\custom_images.twig");
    }
}
