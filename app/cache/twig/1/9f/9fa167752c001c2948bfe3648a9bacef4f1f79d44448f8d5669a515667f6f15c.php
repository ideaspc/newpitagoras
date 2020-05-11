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

/* default/agenda/planification.tpl */
class __TwigTemplate_2cf12f359a0a17277fde43dd52cf7873ab96eb44e0ad05a8a217287855e6d455 extends \Twig\Template
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
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/agenda/planification.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["user_id"] = (((($context["student_id"] ?? null) == $this->getAttribute(($context["_u"] ?? null), "id", []))) ? (0) : (($context["student_id"] ?? null)));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        echo ($context["toolbar"] ?? null);
        echo "

    <nav aria-label=\"...\">
        <ul class=\"pager\">
            <li class=\"previous\">
                <a href=\"";
        // line 11
        echo (($this->getAttribute(($context["_p"] ?? null), "web_self", []) . "?") . twig_urlencode_filter(["year" => (($context["search_year"] ?? null) - 1), "user" => ($context["user_id"] ?? null)]));
        echo "\">
                    <span aria-hidden=\"true\">&larr;</span> ";
        // line 12
        echo (($context["search_year"] ?? null) - 1);
        echo "
                </a>
            </li>
            <li class=\"current\">
                ";
        // line 16
        echo ($context["search_year"] ?? null);
        echo "
            </li>
            <li class=\"next\">
                <a href=\"";
        // line 19
        echo (($this->getAttribute(($context["_p"] ?? null), "web_self", []) . "?") . twig_urlencode_filter(["year" => (($context["search_year"] ?? null) + 1), "user" => ($context["user_id"] ?? null)]));
        echo "\">
                    ";
        // line 20
        echo (($context["search_year"] ?? null) + 1);
        echo " <span aria-hidden=\"true\">&rarr;</span>
                </a>
            </li>
        </ul>
    </nav>
    ";
        // line 25
        if ((twig_length_filter($this->env, ($context["sessions"] ?? null)) > 0)) {
            // line 26
            echo "        <div class=\"table-responsive\" id=\"calendar-session-planification\">
            <table class=\"table table-bordered table-condensed\">
                <thead>
                <tr>
                    <th class=\"col-session\">";
            // line 30
            echo get_lang("Session");
            echo "</th>
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 32
                echo "                        <th class=\"col-week text-center\" title=\"";
                echo sprintf(get_lang("WeekX"), $context["i"]);
                echo "\"><span>";
                echo $context["i"];
                echo "</span></th>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </tr>
                </thead>
                <tbody>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sessions"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 38
                echo "                    <tr>
                        <td class=\"col-session\" title=\"";
                // line 39
                echo $this->getAttribute($context["session"], "name", []);
                echo "\">
                            <a href=\"";
                // line 40
                echo ((($this->getAttribute(($context["_p"] ?? null), "web", []) . "session/") . $this->getAttribute($context["session"], "id", [])) . "/about/");
                echo "\">
                                ";
                // line 41
                echo $this->getAttribute($context["session"], "name", []);
                echo "
                            </a>
                        </td>

                        ";
                // line 45
                if (($this->getAttribute($context["session"], "start", []) > 0)) {
                    // line 46
                    echo "                            <td class=\"col-week\" colspan=\"";
                    echo $this->getAttribute($context["session"], "start", []);
                    echo "\">&nbsp;</td>
                        ";
                }
                // line 48
                echo "
                        <td class=\"col-week text-center ";
                // line 49
                echo ((($this->getAttribute($context["session"], "start_in_last_year", []) || $this->getAttribute($context["session"], "no_start", []))) ? ("in_last_year") : (""));
                echo " ";
                echo ((($this->getAttribute($context["session"], "end_in_next_year", []) || $this->getAttribute($context["session"], "no_end", []))) ? ("in_next_year") : (""));
                echo "\"
                            colspan=\"";
                // line 50
                echo $this->getAttribute($context["session"], "duration", []);
                echo "\" title=\"";
                echo $this->getAttribute($context["session"], "human_date", []);
                echo "\"
                            style=\"background-color: ";
                // line 51
                echo $this->getAttribute(($context["colors"] ?? null), $this->getAttribute($context["loop"], "index0", []), [], "array");
                echo "\">
                            <span>
                                <span class=\"sr-only\">";
                // line 53
                echo $this->getAttribute($context["session"], "human_date", []);
                echo "</span>
                            </span>
                        </td>

                        ";
                // line 57
                if ((($this->getAttribute($context["session"], "duration", []) + $this->getAttribute($context["session"], "start", [])) < 52)) {
                    // line 58
                    echo "                            <td class=\"col-week\" colspan=\"";
                    echo ((52 - $this->getAttribute($context["session"], "duration", [])) - $this->getAttribute($context["session"], "start", []));
                    echo "\">&nbsp;</td>
                        ";
                }
                // line 60
                echo "                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 66
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 67
            echo get_lang("ThereIsNotStillASession");
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "default/agenda/planification.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 67,  213 => 66,  207 => 62,  192 => 60,  186 => 58,  184 => 57,  177 => 53,  172 => 51,  166 => 50,  160 => 49,  157 => 48,  151 => 46,  149 => 45,  142 => 41,  138 => 40,  134 => 39,  131 => 38,  114 => 37,  109 => 34,  98 => 32,  94 => 31,  90 => 30,  84 => 26,  82 => 25,  74 => 20,  70 => 19,  64 => 16,  57 => 12,  53 => 11,  44 => 6,  41 => 5,  37 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/agenda/planification.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/agenda/planification.tpl");
    }
}
