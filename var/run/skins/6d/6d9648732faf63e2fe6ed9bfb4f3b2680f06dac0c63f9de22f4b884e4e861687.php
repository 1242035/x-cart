<?php

/* D:\x-cart\skins\admin\jscontainer\parts\register_resources.twig */
class __TwigTemplate_36ebf7107c226c64e8cbef359c3d28a729f5287ce94839034b67d06d0a4e9473 extends \XLite\Core\Templating\Twig\Template
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
        echo "<script type=\"application/javascript\">
  (function () {
    var resources = ";
        // line 8
        echo $this->getAttribute(($context["this"] ?? null), "getResourceRegistry", [], "method");
        echo ";

    if (window.CoreAMD !== undefined) {
      require('js/core', function (core) {
        core.registerResources(resources);
        core.htmlResourcesLoadDeferred.resolve();
      });
    } else {
      document.addEventListener('amd-ready', function (event) {
        require('js/core', function (core) {
          core.registerResources(resources);
          core.htmlResourcesLoadDeferred.resolve();
        });
      });
    }
  })();
</script>
";
    }

    public function getTemplateName()
    {
        return "D:\\x-cart\\skins\\admin\\jscontainer\\parts\\register_resources.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "D:\\x-cart\\skins\\admin\\jscontainer\\parts\\register_resources.twig", "");
    }
}
