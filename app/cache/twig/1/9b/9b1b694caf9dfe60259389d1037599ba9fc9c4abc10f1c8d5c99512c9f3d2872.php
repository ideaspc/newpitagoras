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

/* default/social/myfiles.tpl */
class __TwigTemplate_f14385919e8427f0be02b57cff29f2f17e459a2204c7ee3b5ed8568fc7d35131 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/social/myfiles.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"social-network-menu\">
                ";
        // line 7
        echo ($context["social_avatar_block"] ?? null);
        echo "
                ";
        // line 8
        echo ($context["social_menu_block"] ?? null);
        echo "
            </div>
        </div>
        <div id=\"wallMessages\" class=\"col-md-9\" style=\"min-height:1px\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"message_ajax_reponse\" class=\"\"></div>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 18
        echo ($context["social_right_content"] ?? null);
        echo "
            </div>
            <div id=\"display_response_id\" class=\"col-md-12\"></div>
            ";
        // line 21
        echo ($context["social_auto_extend_link"] ?? null);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "default/social/myfiles.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  63 => 18,  50 => 8,  46 => 7,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/myfiles.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/social/myfiles.tpl");
    }
}
