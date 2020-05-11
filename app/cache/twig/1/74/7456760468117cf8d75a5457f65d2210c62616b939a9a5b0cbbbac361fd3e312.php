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

/* default/learnpath/scorm_list.tpl */
class __TwigTemplate_c03e5dc58e68eca86fbcdb36063474dfe7e3d16e4aa11285230cf896554d9f35 extends \Twig\Template
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
        if ( !twig_test_empty(($context["data_list"] ?? null))) {
            // line 2
            echo "<div id=\"learning_path_toc\" class=\"scorm-list\">
    <div class=\"scorm-title\">
        <h4>";
            // line 4
            echo ($context["lp_title_scorm"] ?? null);
            echo "</h4>
    </div>
    <div class=\"scorm-body\">
        <div id=\"inner_lp_toc\" class=\"inner_lp_toc scrollbar-light\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "            <div id=\"toc_";
                echo $this->getAttribute($context["item"], "id", []);
                echo "\" class=\"";
                echo $this->getAttribute($context["item"], "class", []);
                echo " item-";
                echo $this->getAttribute($context["item"], "type", []);
                echo "\">
                ";
                // line 10
                if (($this->getAttribute($context["item"], "type", []) == "dir")) {
                    // line 11
                    echo "                <div class=\"section ";
                    echo $this->getAttribute($context["item"], "css_level", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "description", []);
                    echo "\">
                    ";
                    // line 12
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "
                </div>
                ";
                } else {
                    // line 15
                    echo "                <div class=\"item ";
                    echo $this->getAttribute($context["item"], "css_level", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "description", []);
                    echo "\">
                    <a name=\"atoc_";
                    // line 16
                    echo $this->getAttribute($context["item"], "id", []);
                    echo "\"></a>
                    <a data-type=\"type-";
                    // line 17
                    echo $this->getAttribute($context["item"], "type", []);
                    echo "\" class=\"items-list\"  href=\"#\"
                       onclick=\"switch_item('";
                    // line 18
                    echo $this->getAttribute($context["item"], "current_id", []);
                    echo "','";
                    echo $this->getAttribute($context["item"], "id", []);
                    echo "'); return false;\">
                        ";
                    // line 19
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "
                    </a>
                </div>
                ";
                }
                // line 23
                echo "            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div>
    </div>
</div>
";
        }
        // line 29
        echo "
";
        // line 30
        if ( !twig_test_empty(($context["data_panel"] ?? null))) {
            // line 31
            echo "<div id=\"learning_path_toc\" class=\"scorm-collapse\">
    <div class=\"scorm-title\">
        <h4>
             ";
            // line 34
            echo ($context["lp_title_scorm"] ?? null);
            echo "
        </h4>
    </div>
    <div class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\">
        ";
            // line 38
            if ($this->getAttribute(($context["data_panel"] ?? null), "not_parents", [])) {
                // line 39
                echo "            <ul class=\"scorm-collapse-list\">
                ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data_panel"] ?? null), "not_parents", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    echo "                <li id=\"toc_";
                    echo $this->getAttribute($context["item"], "id", []);
                    echo "\" class=\"";
                    echo $this->getAttribute($context["item"], "class", []);
                    echo " item-";
                    echo $this->getAttribute($context["item"], "type", []);
                    echo "\">
                    <div class=\"sub-item type-";
                    // line 42
                    echo $this->getAttribute($context["item"], "type", []);
                    echo "\">
                        <a name=\"atoc_";
                    // line 43
                    echo $this->getAttribute($context["item"], "id", []);
                    echo "\"></a>
                        <a data-type=\"type-";
                    // line 44
                    echo $this->getAttribute($context["item"], "type", []);
                    echo "\" class=\"item-action\" href=\"#\"
                           onclick=\"switch_item('";
                    // line 45
                    echo $this->getAttribute($context["item"], "current_id", []);
                    echo "','";
                    echo $this->getAttribute($context["item"], "id", []);
                    echo "'); return false;\">
                            <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                            ";
                    // line 47
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "
                        </a>
                    </div>
                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            </ul>
        ";
            }
            // line 54
            echo "
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data_panel"] ?? null), "are_parents", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 56
                echo "            <div class=\"panel panel-default ";
                echo (($this->getAttribute($context["item"], "parent", [])) ? ("lower") : ("higher"));
                echo "\" data-lp-id=\"";
                echo $this->getAttribute($context["item"], "id", []);
                echo "\"
                 ";
                // line 57
                echo (($this->getAttribute($context["item"], "parent", [])) ? ((("data-lp-parent=\"" . $this->getAttribute($context["item"], "parent", [])) . "\"")) : (""));
                echo ">
                <div class=\"status-heading\">
                    <div class=\"panel-heading\" role=\"tab\" id=\"heading-";
                // line 59
                echo $this->getAttribute($context["item"], "id", []);
                echo "\">
                        <h4>
                            <a class=\"item-header\" role=\"button\" data-toggle=\"collapse\"
                                data-parent=\"#scorm-panel";
                // line 62
                echo (($this->getAttribute($context["item"], "parent", [])) ? (("-" . $this->getAttribute($context["item"], "parent", []))) : (""));
                echo "\"
                                href=\"#collapse-";
                // line 63
                echo $this->getAttribute($context["item"], "id", []);
                echo "\" aria-expanded=\"true\"
                                aria-controls=\"collapse-";
                // line 64
                echo $this->getAttribute($context["item"], "id", []);
                echo "\">
                                ";
                // line 65
                echo $this->getAttribute($context["item"], "title", []);
                echo "
                            </a>
                        </h4>
                    </div>
                </div>
                <div id=\"collapse-";
                // line 70
                echo $this->getAttribute($context["item"], "id", []);
                echo "\" class=\"panel-collapse collapse ";
                echo $this->getAttribute($context["item"], "parent_current", []);
                echo "\"
                     role=\"tabpanel\" aria-labelledby=\"heading-";
                // line 71
                echo $this->getAttribute($context["item"], "id", []);
                echo "\">
                    <div class=\"panel-body\">
                        <ul class=\"list\">
                            ";
                // line 74
                $context["counter"] = 0;
                // line 75
                echo "                            ";
                $context["final"] = twig_length_filter($this->env, $this->getAttribute($context["item"], "children", []));
                // line 76
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 77
                    echo "                            ";
                    $context["counter"] = (($context["counter"] ?? null) + 1);
                    // line 78
                    echo "                            <li id=\"toc_";
                    echo $this->getAttribute($context["subitem"], "id", []);
                    echo "\"
                                class=\"";
                    // line 79
                    echo $this->getAttribute($context["subitem"], "class", []);
                    echo " ";
                    echo $this->getAttribute($context["subitem"], "type", []);
                    echo " ";
                    echo (((($context["counter"] ?? null) == ($context["final"] ?? null))) ? ("final") : (""));
                    echo "\">
                                <div class=\"sub-item item-";
                    // line 80
                    echo $this->getAttribute($context["subitem"], "type", []);
                    echo "\">
                                    <a name=\"atoc_";
                    // line 81
                    echo $this->getAttribute($context["subitem"], "id", []);
                    echo "\"></a>
                                    <a data-type=\"type-";
                    // line 82
                    echo $this->getAttribute($context["subitem"], "type", []);
                    echo "\" class=\"item-action\" href=\"#\"
                                       onclick=\"switch_item('";
                    // line 83
                    echo $this->getAttribute($context["subitem"], "current_id", []);
                    echo "','";
                    echo $this->getAttribute($context["subitem"], "id", []);
                    echo "'); return false;\">
                                        <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
                                        ";
                    // line 85
                    echo $this->getAttribute($context["subitem"], "title", []);
                    echo "
                                    </a>
                                </div>
                            </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                        </ul>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/learnpath/scorm_list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 95,  294 => 90,  283 => 85,  276 => 83,  272 => 82,  268 => 81,  264 => 80,  256 => 79,  251 => 78,  248 => 77,  243 => 76,  240 => 75,  238 => 74,  232 => 71,  226 => 70,  218 => 65,  214 => 64,  210 => 63,  206 => 62,  200 => 59,  195 => 57,  188 => 56,  184 => 55,  181 => 54,  177 => 52,  166 => 47,  159 => 45,  155 => 44,  151 => 43,  147 => 42,  138 => 41,  134 => 40,  131 => 39,  129 => 38,  122 => 34,  117 => 31,  115 => 30,  112 => 29,  106 => 25,  99 => 23,  92 => 19,  86 => 18,  82 => 17,  78 => 16,  71 => 15,  65 => 12,  58 => 11,  56 => 10,  47 => 9,  43 => 8,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/learnpath/scorm_list.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/learnpath/scorm_list.tpl");
    }
}
