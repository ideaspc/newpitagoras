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

/* default/message/record_audio.tpl */
class __TwigTemplate_9e4d792d37e54a31a7c423027fd07758f1ce188491ed9b82bf3e4a580a49b8de extends \Twig\Template
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
        echo "<div id=\"record-audio-recordrtc\" class=\"row text-center\">
    <form>
        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">
                <div class=\"form-group\">
                    <span class=\"fa fa-microphone fa-5x fa-fw\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">";
        // line 7
        echo get_lang("RecordAudio");
        echo "</span>
                </div>
                <input type=\"hidden\" name=\"audio_title\" id=\"audio-title-rtc\" value=\"";
        // line 9
        echo ($context["audio_title"] ?? null);
        echo "\">
            </div>
        </div>
        <div class=\"text-center\">
            <div class=\"form-group\">
                <button class=\"btn btn-default\" type=\"button\" id=\"btn-start-record\">
                    <span class=\"fa fa-circle fa-fw\" aria-hidden=\"true\"></span> ";
        // line 15
        echo get_lang("StartRecordingAudio");
        echo "
                </button>
                <button class=\"btn btn-danger hidden\" type=\"button\" id=\"btn-stop-record\" disabled>
                    <span class=\"fa fa-square fa-fw\" aria-hidden=\"true\"></span> ";
        // line 18
        echo get_lang("StopRecordingAudio");
        echo "
                </button>
            </div>
            <div class=\"form-group\">
                <audio class=\"skip hidden center-block\" controls id=\"record-preview\"></audio>
            </div>
        </div>
    </form>
</div>

<div class=\"row\" id=\"record-audio-wami\">
    <div class=\"col-sm-3 col-sm-offset-3\">
        <br>
        <form>
            <div class=\"form-group\">
                <input type=\"hidden\" name=\"audio_title\" id=\"audio-title-wami\" value=\"";
        // line 33
        echo ($context["audio_title"] ?? null);
        echo "\">
            </div>
            <div class=\"form-group text-center\">
                <button class=\"btn btn-default\" type=\"button\" id=\"btn-activate-wami\">
                    <span class=\"fa fa-check fa-fw\" aria-hidden=\"\"></span> ";
        // line 37
        echo get_lang("Activate");
        echo "
                </button>
            </div>
        </form>
    </div>
    <div class=\"col-sm-3\">
        <div id=\"record-audio-wami-container\" class=\"wami-container\"></div>
    </div>
</div>

<script>
    \$(document).on('ready', function () {
        RecordAudio.init(
            {
                blockId: '#record-audio-recordrtc',
                btnStartId: '#btn-start-record',
                btnPauseId: '#btn-pause-record',
                btnPlayId: '#btn-play-record',
                btnStopId: '#btn-stop-record',
                btnSaveId: '',
                plyrPreviewId: '#record-preview',
                directory: '";
        // line 58
        echo ($context["directory"] ?? null);
        echo "',
                reload_page: '";
        // line 59
        echo ($context["reload_page"] ?? null);
        echo "',
                type: 'message',
            },
            {
                blockId: '#record-audio-wami',
                containerId: 'record-audio-wami-container',
                directory: '";
        // line 65
        echo ($context["directory"] ?? null);
        echo "',
                userId: ";
        // line 66
        echo ($context["user_id"] ?? null);
        echo ",
                type: 'message'
            },
            null
        );
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "default/message/record_audio.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 66,  120 => 65,  111 => 59,  107 => 58,  83 => 37,  76 => 33,  58 => 18,  52 => 15,  43 => 9,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/message/record_audio.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/message/record_audio.tpl");
    }
}
