<?php

/* D:\x-cart\skins\customer\layout\header\header.bar.links.logged.logout.twig */
class __TwigTemplate_3b444926b8ede60bc74fd2a4314fc284537a10c5ec2b4544464b479127ca4d61 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-1 last\"><a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "login", "logoff"]), "html", null, true);
        echo "\" class=\"log-in\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Log out"]), "html", null, true);
        echo "</a></li>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\customer\\layout\\header\\header.bar.links.logged.logout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\customer\\layout\\header\\header.bar.links.logged.logout.twig", "");
    }
}
