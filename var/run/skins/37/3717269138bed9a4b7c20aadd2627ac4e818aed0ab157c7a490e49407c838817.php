<?php

/* email_settings/queues_note.twig */
class __TwigTemplate_47334e08cd7093199fed9ba4ff41eb63b2c6ecf582b2b0f4bdcff5e6b693530d extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ((($this->getAttribute($this->getAttribute(($context["this"] ?? null), "field", []), "name", []) == "smtp_section") && $this->getAttribute(($context["this"] ?? null), "isQueuesNoteVisible", [], "method"))) {
            // line 8
            echo "    <div class=\"alert alert-info\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["To send email asynchronously and improve website performance we recommend to set up queues in on your server. [Learn how to do it].", ["url" => "https://kb.x-cart.com/en/general_setup/configuring_queues.html"]]);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "email_settings/queues_note.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "email_settings/queues_note.twig", "D:\\x-cart\\skins\\admin\\email_settings\\queues_note.twig");
    }
}
