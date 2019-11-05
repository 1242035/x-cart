<?php

/* images_settings/body.twig */
class __TwigTemplate_08639b43d2a9a56afc95a68ec69a527963dd51246084dbb2fcf1181bcea56bf5 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isImageResizeNotFinished", [], "method")) {
            // line 6
            echo "
  ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\ImageResize\\Progress"]]), "html", null, true);
            echo "

";
        } else {
            // line 10
            echo "
  ";
            // line 11
            $this->startForm("\\XLite\\View\\Form\\ImagesSettings");            // line 12
            echo "
    <ul class=\"table\">
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "images_settings"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "        <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", [], "method"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </ul>

    ";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\StickyPanel\\ImagesSettings"]]), "html", null, true);
            echo "

  ";
            $this->endForm();            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "images_settings/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  58 => 19,  54 => 17,  45 => 15,  41 => 14,  37 => 12,  36 => 11,  33 => 10,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "images_settings/body.twig", "D:\\x-cart\\skins\\admin\\images_settings\\body.twig");
    }
}
