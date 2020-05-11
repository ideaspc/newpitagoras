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

/* default/work/view.tpl */
class __TwigTemplate_bed965bf114e3acd479726749ddf54039b0093bd8e841cc65e585a02a3b2de5e extends \Twig\Template
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
        echo "<div class=\"page-header\">
    <h2>
        ";
        // line 3
        echo $this->getAttribute(($context["work"] ?? null), "title", []);
        echo "
    </h2>
</div>

";
        // line 7
        if ($this->getAttribute(($context["work"] ?? null), "description", [])) {
            // line 8
            echo "<h3>
    ";
            // line 9
            echo get_lang("Description");
            echo "
</h3>
<p>
    ";
            // line 12
            echo $this->getAttribute(($context["work"] ?? null), "description", []);
            echo "
</p>
";
        }
        // line 15
        echo "
";
        // line 16
        echo ($context["form"] ?? null);
        echo "

";
        // line 18
        if (($this->getAttribute(($context["work"] ?? null), "contains_file", []) && $this->getAttribute(($context["work"] ?? null), "show_content", []))) {
            // line 19
            echo "<h3>
    ";
            // line 20
            echo get_lang("Content");
            echo "
</h3>
<p>
    ";
            // line 23
            echo $this->getAttribute(($context["work"] ?? null), "show_content", []);
            echo "
</p>
";
        }
        // line 26
        echo "
";
        // line 27
        $this->loadTemplate(api_find_template("work/comments.tpl"), "default/work/view.tpl", 27)->display($context);
    }

    public function getTemplateName()
    {
        return "default/work/view.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  83 => 26,  77 => 23,  71 => 20,  68 => 19,  66 => 18,  61 => 16,  58 => 15,  52 => 12,  46 => 9,  43 => 8,  41 => 7,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/work/view.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/work/view.tpl");
    }
}
