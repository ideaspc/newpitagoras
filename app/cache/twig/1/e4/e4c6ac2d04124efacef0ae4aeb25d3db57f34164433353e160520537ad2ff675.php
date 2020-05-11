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

/* default/agenda/event_list.tpl */
class __TwigTemplate_9d567c2e0cc57da3a2fb70eea852e30d7028fafcb6d23f9ae54e59286e4c5ed9 extends \Twig\Template
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
        echo ($context["agenda_actions"] ?? null);
        echo "

<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agenda_events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 5
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"heading-";
            // line 6
            echo $this->getAttribute($context["event"], "id", []);
            echo "\">
                ";
            // line 7
            if ((($context["is_allowed_to_edit"] ?? null) && ($context["show_action"] ?? null))) {
                // line 8
                echo "                    <div class=\"pull-right\">
                        ";
                // line 9
                if (($this->getAttribute($context["event"], "visibility", []) == 1)) {
                    // line 10
                    echo "                            <a class=\"btn btn-default btn-xs\"
                               href=\"";
                    // line 11
                    if (($context["url"] ?? null)) {
                        echo ($context["url"] ?? null);
                    } else {
                        echo $this->getAttribute($context["event"], "url", []);
                    }
                    echo "&action=change_visibility&visibility=0&id=";
                    echo $this->getAttribute($context["event"], "real_id", []);
                    echo "&type=";
                    echo $this->getAttribute($context["event"], "type", []);
                    echo "\">
                                <img title=\"";
                    // line 12
                    echo "Invisible";
                    echo "\" src=\"";
                    echo Display::get_icon_path("visible.png", 22);
                    echo "\">
                            </a>
                        ";
                } else {
                    // line 15
                    echo "                            ";
                    if ((($this->getAttribute($context["event"], "type", []) == "course") || ($this->getAttribute($context["event"], "type", []) == "session"))) {
                        // line 16
                        echo "                                <a class=\"btn btn-default btn-xs\"
                                   href=\"";
                        // line 17
                        if (($context["url"] ?? null)) {
                            echo ($context["url"] ?? null);
                        } else {
                            echo $this->getAttribute($context["event"], "url", []);
                        }
                        echo "&action=change_visibility&visibility=1&id=";
                        echo $this->getAttribute($context["event"], "real_id", []);
                        echo "&type=";
                        echo $this->getAttribute($context["event"], "type", []);
                        echo "\">
                                    <img title=\"";
                        // line 18
                        echo "Visible";
                        echo "\" src=\"";
                        echo Display::get_icon_path("invisible.png", 22);
                        echo "\">
                                </a>
                            ";
                    }
                    // line 21
                    echo "                        ";
                }
                // line 22
                echo "                    </div>
                ";
            }
            // line 24
            echo "
                <h4 class=\"panel-title\">
                    <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                       href=\"#collapse-";
            // line 27
            echo $this->getAttribute($context["event"], "id", []);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapse-";
            echo $this->getAttribute($context["event"], "id", []);
            echo "\">
                        ";
            // line 28
            echo $this->getAttribute($context["event"], "title", []);
            echo "
                        <br>
                        <small>
                            ";
            // line 31
            echo $this->getAttribute($context["event"], "start_date_localtime", []);
            echo "

                            &dash;

                            ";
            // line 35
            if ($this->getAttribute($context["event"], "allDay", [])) {
                // line 36
                echo "                                ";
                echo get_lang("AllDay");
                echo "
                            ";
            } else {
                // line 38
                echo "                                ";
                echo $this->getAttribute($context["event"], "end_date_localtime", []);
                echo "
                            ";
            }
            // line 40
            echo "                        </small>
                    </a>
                </h4>
            </div>
            <div id=\"collapse-";
            // line 44
            echo $this->getAttribute($context["event"], "id", []);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                 aria-labelledby=\"heading-";
            // line 45
            echo $this->getAttribute($context["event"], "id", []);
            echo "\">
                <ul class=\"list-group\">
                    ";
            // line 47
            if ($this->getAttribute($context["event"], "description", [])) {
                // line 48
                echo "                        <li class=\"list-group-item\">
                            ";
                // line 49
                echo $this->getAttribute($context["event"], "description", []);
                echo "
                        </li>
                    ";
            }
            // line 52
            echo "
                    ";
            // line 53
            if ($this->getAttribute($context["event"], "comment", [])) {
                // line 54
                echo "                        <li class=\"list-group-item\">
                            ";
                // line 55
                echo $this->getAttribute($context["event"], "comment", []);
                echo "
                        </li>
                    ";
            }
            // line 58
            echo "
                    ";
            // line 59
            if ($this->getAttribute($context["event"], "attachment", [])) {
                // line 60
                echo "                        <li class=\"list-group-item\">";
                echo $this->getAttribute($context["event"], "attachment", []);
                echo "</li>
                    ";
            }
            // line 62
            echo "                </ul>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/agenda/event_list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 66,  199 => 62,  193 => 60,  191 => 59,  188 => 58,  182 => 55,  179 => 54,  177 => 53,  174 => 52,  168 => 49,  165 => 48,  163 => 47,  158 => 45,  154 => 44,  148 => 40,  142 => 38,  136 => 36,  134 => 35,  127 => 31,  121 => 28,  115 => 27,  110 => 24,  106 => 22,  103 => 21,  95 => 18,  83 => 17,  80 => 16,  77 => 15,  69 => 12,  57 => 11,  54 => 10,  52 => 9,  49 => 8,  47 => 7,  43 => 6,  40 => 5,  36 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/agenda/event_list.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/agenda/event_list.tpl");
    }
}
