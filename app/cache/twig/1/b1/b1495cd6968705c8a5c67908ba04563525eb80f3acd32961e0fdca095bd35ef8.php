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

/* default/export/pdf_header.tpl */
class __TwigTemplate_22ad0975334c2e2f206af3c7659f5df34e827b1e1a1648ef7a62fcebb3b9502a extends \Twig\Template
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
        echo "<table border=\"0\" width=\"100%\" class=\"pdf-header\">
    <tr>
        <td width=\"30%\">
            ";
        // line 4
        echo ($context["organization"] ?? null);
        echo "
        </td>
        <td width=\"80%\" style=\"text-align: right; font-size: 12px; color: #666666;\">
            <strong>";
        // line 7
        echo ($context["teacher_name"] ?? null);
        echo "</strong>
        </td>
    </tr>
</table>

";
    }

    public function getTemplateName()
    {
        return "default/export/pdf_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/export/pdf_header.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/export/pdf_header.tpl");
    }
}
