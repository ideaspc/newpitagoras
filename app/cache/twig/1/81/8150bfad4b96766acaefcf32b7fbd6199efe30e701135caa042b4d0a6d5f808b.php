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

/* default/work/comments.tpl */
class __TwigTemplate_bc414ba030c7d400a9be5789f94ee169444ab21525d6f05ab328dabcfcc44341 extends \Twig\Template
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
        echo "<hr />
<h3>
    ";
        // line 3
        echo get_lang("Comments");
        echo "
</h3>
<hr>
<ul>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 8
            echo "    <li>
        <div class=\"page-header\">
            <a href=\"";
            // line 10
            echo $this->getAttribute(($context["_p"] ?? null), "web_code", []);
            echo "\">
                <img height=\"24\" src=\"";
            // line 11
            echo $this->getAttribute($context["comment"], "picture", []);
            echo "\"/> ";
            echo $this->getAttribute($context["comment"], "complete_name", []);
            echo "
            </a>- ";
            // line 12
            echo $this->getAttribute($context["comment"], "sent_at_with_label", []);
            echo "
        </div>
        <p>
            ";
            // line 15
            if ( !twig_test_empty($this->getAttribute($context["comment"], "comment", []))) {
                // line 16
                echo "                ";
                echo $this->getAttribute($context["comment"], "comment", []);
                echo "
            ";
            } else {
                // line 18
                echo "                ";
                echo get_lang("HereIsYourFeedback");
                echo "
            ";
            }
            // line 20
            echo "        </p>
        ";
            // line 21
            if ( !twig_test_empty($this->getAttribute($context["comment"], "file_url", []))) {
                // line 22
                echo "            <ul class=\"fa-ul\">
                <li>
                    <span class=\"fa-li fa fa-paperclip\"></span>
                    <a href=\"";
                // line 25
                echo $this->getAttribute($context["comment"], "file_url", []);
                echo "\">
                        ";
                // line 26
                echo $this->getAttribute($context["comment"], "file_name_to_show", []);
                echo "
                    </a>
                    ";
                // line 28
                if (($context["is_allowed_to_edit"] ?? null)) {
                    // line 29
                    echo "                        <a href=\"";
                    echo $this->getAttribute($context["comment"], "delete_file_url", []);
                    echo "\">
                            ";
                    // line 30
                    echo Display::get_image("delete.png", 22, get_lang("Delete"));
                    echo "
                        </a>
                    ";
                }
                // line 33
                echo "                </li>
            </ul>
        ";
            }
            // line 36
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</ul>
<br />
";
    }

    public function getTemplateName()
    {
        return "default/work/comments.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  116 => 36,  111 => 33,  105 => 30,  100 => 29,  98 => 28,  93 => 26,  89 => 25,  84 => 22,  82 => 21,  79 => 20,  73 => 18,  67 => 16,  65 => 15,  59 => 12,  53 => 11,  49 => 10,  45 => 8,  41 => 7,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/work/comments.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/work/comments.tpl");
    }
}
