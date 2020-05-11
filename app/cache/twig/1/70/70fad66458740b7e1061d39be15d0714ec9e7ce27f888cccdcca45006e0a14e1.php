<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/javascript/editor/elfinder_standalone.tpl */
class __TwigTemplate_9980835aa63c788f0708340b36b3b61c1e14f73a7e1f17712ce9a921a6aad601 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["finderFolder"] = ($this->getAttribute(($context["_p"] ?? null), "web", []) . "vendor/studio-42/elfinder/");
        // line 2
        echo "<!-- elFinder CSS (REQUIRED) -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 3
        echo ($context["finderFolder"] ?? null);
        echo "css/elfinder.full.css\">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 4
        echo ($context["finderFolder"] ?? null);
        echo "css/theme.css\">

<!-- elFinder JS (REQUIRED) -->
<script type=\"text/javascript\" src=\"";
        // line 7
        echo ($context["finderFolder"] ?? null);
        echo "js/elfinder.full.js\"></script>

<!-- elFinder translation (OPTIONAL) -->
";
        // line 10
        echo ($context["elfinder_translation_file"] ?? null);
        echo "

<script type=\"text/javascript\" charset=\"utf-8\">
    // Helper function to get parameters from the query string.
    function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\\?&]|&amp;)' + paramName + '=([^&]+)', 'i');
        var match = window.location.search.match(reParam);
        return (match && match.length > 1) ? match[1] : '';
    }

    \$().ready(function() {
        var funcNum = getUrlParam('CKEditorFuncNum');
        var elf = \$('#elfinder').elfinder({
            url : '";
        // line 23
        echo ($this->getAttribute(($context["_p"] ?? null), "web_lib", []) . "elfinder/connectorAction.php?");
        echo ($context["course_condition"] ?? null);
        echo "',  // connector URL (REQUIRED)
            getFileCallback : function(file) {
                window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                window.close();
            },
            startPathHash: 'l2_Lw', // Sets the course driver as default
            resizable: false,
            lang: '";
        // line 30
        echo ($context["elfinder_lang"] ?? null);
        echo "'
        }).elfinder('instance');
    });
</script>
<div id=\"elfinder\"></div>
";
    }

    public function getTemplateName()
    {
        return "default/javascript/editor/elfinder_standalone.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  67 => 23,  51 => 10,  45 => 7,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/javascript/editor/elfinder_standalone.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/javascript/editor/elfinder_standalone.tpl");
    }
}
