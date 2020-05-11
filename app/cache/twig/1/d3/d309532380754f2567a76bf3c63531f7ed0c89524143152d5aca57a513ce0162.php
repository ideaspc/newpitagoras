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

/* default/announcement/slider.tpl */
class __TwigTemplate_05746b3c91de7014251d4ea8632427d9c904cb77929c38a98a7f3ca0b2787007 extends \Twig\Template
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
    <h4>";
        // line 2
        echo get_lang("SystemAnnouncements");
        echo "</h4>
</div>
<div id=\"carousel-announcement\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["announcements"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
            // line 8
            echo "        <li data-target=\"#carousel-announcement\" data-slide-to=\"";
            echo $this->getAttribute($context["loop"], "index0", []);
            echo "\" ";
            if (($this->getAttribute($context["loop"], "index0", []) == 0)) {
                echo " class=\"active\" ";
            }
            echo "></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["announcements"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
            // line 15
            echo "        <div class=\"item ";
            if (($this->getAttribute($context["loop"], "index0", []) == 0)) {
                echo " active ";
            }
            echo "\">
            <div class=\"carousel-caption\">
                ";
            // line 17
            echo $this->getAttribute($context["announcement"], "title", []);
            echo "
            </div>
            <div class=\"carousel-content\">
                ";
            // line 20
            if ($this->getAttribute($context["announcement"], "readMore", [])) {
                // line 21
                echo "                <div class=\"block-text\">
                    ";
                // line 22
                echo $this->getAttribute($context["announcement"], "content", []);
                echo "
                    <a href=\"";
                // line 23
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "news_list.php?id=";
                echo $this->getAttribute($context["announcement"], "id", []);
                echo "\">";
                echo get_lang("More");
                echo "</a>
                </div>
                ";
            } else {
                // line 26
                echo "                    <div class=\"block-image\">
                        ";
                // line 27
                echo $this->getAttribute($context["announcement"], "content", []);
                echo "
                    </div>
              ";
            }
            // line 30
            echo "            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel-announcement\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-announcement\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "default/announcement/slider.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 33,  144 => 30,  138 => 27,  135 => 26,  125 => 23,  121 => 22,  118 => 21,  116 => 20,  110 => 17,  102 => 15,  85 => 14,  79 => 10,  58 => 8,  41 => 7,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/announcement/slider.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/announcement/slider.tpl");
    }
}
