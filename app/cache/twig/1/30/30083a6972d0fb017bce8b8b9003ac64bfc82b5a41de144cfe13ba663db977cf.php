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

/* default/skill/student_report.tpl */
class __TwigTemplate_440aade1b18b2fe73d909c5001abb730659f2d177c1a9940c7aad7f1de8993e3 extends \Twig\Template
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
        if (($context["allow_skill_tool"] ?? null)) {
            // line 2
            echo "    <div class=\"btn-group\">
        <a class=\"btn btn-default\" href=\"";
            // line 3
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
            echo "social/skills_wheel.php\">
            ";
            // line 4
            echo get_lang("SkillsWheel");
            echo "
        </a>
    </div>
";
        }
        // line 8
        echo "
";
        // line 9
        if (($context["rows"] ?? null)) {
            // line 10
            echo "    <h1 class=\"page-header\">";
            echo get_lang("SkillsAcquired");
            echo "</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>";
            // line 14
            echo get_lang("Badge");
            echo "</th>
                <th>";
            // line 15
            echo get_lang("Skill");
            echo "</th>
                <th>";
            // line 16
            echo get_lang("Date");
            echo "</th>
                <th>";
            // line 17
            echo get_lang("Course");
            echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 22
                echo "            <tr>
                <td>";
                // line 23
                echo $this->getAttribute($context["row"], "skill_badge", []);
                echo "</td>
                <td>";
                // line 24
                echo $this->getAttribute($context["row"], "skill_name", []);
                echo "</td>
                <td>";
                // line 25
                echo $this->getAttribute($context["row"], "achieved_at", []);
                echo "</td>
                ";
                // line 26
                if ($this->getAttribute($context["row"], "course_name", [])) {
                    // line 27
                    echo "                    <td>
                        <img src=\"";
                    // line 28
                    echo $this->getAttribute($context["row"], "course_image", []);
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["row"], "course_name", []);
                    echo "\" width=\"32\">
                        ";
                    // line 29
                    echo $this->getAttribute($context["row"], "course_name", []);
                    echo "
                    </td>
                ";
                } else {
                    // line 32
                    echo "                    <td> - </td>
                ";
                }
                // line 34
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </tbody>
    </table>
    ";
            // line 38
            if (($context["skill_table"] ?? null)) {
                // line 39
                echo "        ";
                echo ($context["skill_table"] ?? null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/skill/student_report.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  129 => 38,  125 => 36,  118 => 34,  114 => 32,  108 => 29,  102 => 28,  99 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  82 => 22,  78 => 21,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  51 => 10,  49 => 9,  46 => 8,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/skill/student_report.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/skill/student_report.tpl");
    }
}
