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

/* default/learnpath/view.tpl */
class __TwigTemplate_92a61b7163fe5a866d71c97441e1ec7716fd4b105d3a0237a0a3e9787b15185f extends \Twig\Template
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
        echo "<div id=\"learning_path_main\" class=\"";
        echo ((($context["is_allowed_to_edit"] ?? null)) ? ("lp-view-include-breadcrumb") : (""));
        echo " ";
        echo (((($context["lp_mode"] ?? null) == "embedframe")) ? ("lp-view-collapsed") : (""));
        echo "\">
    ";
        // line 2
        if ((($context["show_left_column"] ?? null) == 1)) {
            // line 3
            echo "    <div id=\"learning_path_left_zone\" class=\"sidebar-scorm\">
        <div class=\"lp-view-zone-container\">
            <div id=\"scorm-info\">
                <div id=\"panel-scorm\" class=\"panel-body\">
                    <div class=\"image-avatar\">
                        ";
            // line 8
            if ((($context["lp_author"] ?? null) == "")) {
                // line 9
                echo "                           <div class=\"text-center\">
                                ";
                // line 10
                echo ($context["lp_preview_image"] ?? null);
                echo "
                            </div>
                        ";
            } else {
                // line 13
                echo "                            <div class=\"media\">
                                <div class=\"media-left\">
                                    ";
                // line 15
                echo ($context["lp_preview_image"] ?? null);
                echo "
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"description-autor\"> ";
                // line 18
                echo ($context["lp_author"] ?? null);
                echo " </div>
                                </div>
                            </div>
                        ";
            }
            // line 22
            echo "                    </div>
                    ";
            // line 23
            if (($context["show_audio_player"] ?? null)) {
                // line 24
                echo "                        <div id=\"lp_media_file\" class=\"audio-scorm\">
                            ";
                // line 25
                echo ($context["media_player"] ?? null);
                echo "
                        </div>
                    ";
            }
            // line 28
            echo "
                    ";
            // line 29
            if ((($context["lp_accumulate_work_time"] ?? null) != "")) {
                // line 30
                echo "                        ";
                ob_start();
                // line 31
                echo "                        <style>
                            #timer .container{display:table;background:#777;color:#eee;font-weight:bold;width:100%;text-align:center;text-shadow:1px 1px 4px #999;}
                            #timer .container div{display:table-cell;font-size:24px;padding:0px;width:20px;}
                            #timer .container .divider{width:10px;color:#ddd;}
                            #btn-comenzar{box-sizing:border-box;background:#eee;border:none;margin:0 auto;padding:20px;width:100%;font-size:30px;color:#777;}
                            #btn-comenzar:hover{background:#fff;}
                        </style>
                        <script>
                            \$(function() {
                                var timerData = {
                                    hour: parseInt(\$(\"#hour\").text()),
                                    minute: parseInt(\$(\"#minute\").text()),
                                    second:  parseInt(\$(\"#second\").text())
                                };
                                //window.timerInterval = null;
                                clearInterval(window.timerInterval);
                                window.timerInterval = setInterval(function(){
                                    // Seconds
                                    timerData.second++;
                                    if (timerData.second >= 60) {
                                        timerData.second = 0;
                                        timerData.minute++;
                                    }

                                    // Minutes
                                    if (timerData.minute >= 60) {
                                        timerData.minute = 0;
                                        timerData.hour++;
                                    }

                                    \$(\"#hour\").text(timerData.hour < 10 ? '0' + timerData.hour : timerData.hour);
                                    \$(\"#minute\").text(timerData.minute < 10 ? '0' + timerData.minute : timerData.minute);
                                    \$(\"#second\").text(timerData.second < 10 ? '0' + timerData.second : timerData.second);
                                }, 1000);
                            })
                        </script>
                        <div class=\"row\">
                            <div class=\"col-xs-4\">
                                <b>
                                    ";
                // line 70
                echo sprintf(get_lang("ProgressSpentInLp"), ($context["lp_accumulate_work_time"] ?? null));
                echo "
                                </b>
                            </div>
                            <div class=\"col-xs-8\">
                                <div id=\"progress_bar\">
                                    ";
                // line 75
                echo ($context["progress_bar"] ?? null);
                echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-4\">
                                <b>
                                    ";
                // line 83
                echo sprintf(get_lang("TimeSpentInLp"), ($context["lp_accumulate_work_time"] ?? null));
                echo "
                                </b>
                            </div>
                            <div class=\"col-xs-8\">
                                <div id=\"timer\">
                                    <div class=\"container\">
                                        <div id=\"hour\">";
                // line 89
                echo ($context["hour"] ?? null);
                echo "</div>
                                        <div class=\"divider\">:</div>
                                        <div id=\"minute\">";
                // line 91
                echo ($context["minute"] ?? null);
                echo "</div>
                                        <div class=\"divider\">:</div>
                                        <div id=\"second\">";
                // line 93
                echo ($context["second"] ?? null);
                echo "</div>

                                        <div id=\"slash\"> / </div>
                                        <div>";
                // line 96
                echo ($context["hour_min"] ?? null);
                echo "</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                $context["lp_progress"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 102
                echo "                    ";
            } else {
                // line 103
                echo "                        ";
                ob_start();
                // line 104
                echo "                            <div id=\"progress_bar\">
                                ";
                // line 105
                echo ($context["progress_bar"] ?? null);
                echo "
                            </div>
                        ";
                $context["lp_progress"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 108
                echo "                    ";
            }
            // line 109
            echo "
                    ";
            // line 110
            if ((($context["gamification_mode"] ?? null) == 1)) {
                // line 111
                echo "                        <!--- gamification -->
                        <div id=\"scorm-gamification\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    ";
                // line 115
                if ((($context["gamification_stars"] ?? null) > 0)) {
                    // line 116
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ($context["gamification_stars"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 117
                        echo "                                            <em class=\"fa fa-star level\"></em>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                                    ";
                }
                // line 120
                echo "
                                    ";
                // line 121
                if ((($context["gamification_stars"] ?? null) < 4)) {
                    // line 122
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (4 - ($context["gamification_stars"] ?? null))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 123
                        echo "                                            <em class=\"fa fa-star\"></em>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "                                    ";
                }
                // line 126
                echo "                                </div>
                                <div class=\"col-xs-6 text-right\">
                                    ";
                // line 128
                echo sprintf(get_lang("XPoints"), ($context["gamification_points"] ?? null));
                echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12 navegation-bar\">
                                   ";
                // line 133
                echo ($context["lp_progress"] ?? null);
                echo "
                                </div>
                            </div>
                        </div>
                        <!--- end gamification -->
                    ";
            } else {
                // line 139
                echo "                       ";
                echo ($context["lp_progress"] ?? null);
                echo "
                    ";
            }
            // line 141
            echo "
                    ";
            // line 142
            echo ($context["teacher_toc_buttons"] ?? null);
            echo "
                </div>
            </div>
            ";
            // line 146
            echo "            <div id=\"toc_id\" class=\"scorm-body\" name=\"toc_name\">
                ";
            // line 147
            $this->loadTemplate(api_find_template("learnpath/scorm_list.tpl"), "default/learnpath/view.tpl", 147)->display($context);
            // line 148
            echo "            </div>
            ";
            // line 150
            echo "        </div>
    </div>
    ";
            // line 153
            echo "    ";
        }
        // line 154
        echo "
    ";
        // line 156
        echo "    <div id=\"learning_path_right_zone\" class=\"";
        echo (((($context["show_left_column"] ?? null) == 1)) ? ("content-scorm") : ("no-right-col"));
        echo "\">
        <div class=\"lp-view-zone-container\">
            <div class=\"lp-view-tabs\">
                <div id=\"navTabsbar\" class=\"nav-tabs-bar\">
                    <ul id=\"navTabs\" class=\"nav nav-tabs tabs-right\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\">
                            <a href=\"#lp-view-content\" title=\"";
        // line 162
        echo get_lang("Lesson");
        echo "\"
                               aria-controls=\"lp-view-content\" role=\"tab\" data-toggle=\"tab\">
                                <span class=\"fa fa-book fa-2x fa-fw\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">";
        // line 165
        echo get_lang("Lesson");
        echo "</span>
                            </a>
                        </li>
                        <li role=\"presentation\">
                            <a href=\"#lp-view-forum\" title=\"";
        // line 169
        echo get_lang("Forum");
        echo "\"
                               aria-controls=\"lp-view-forum\" role=\"tab\" data-toggle=\"tab\">
                                <span class=\"fa fa-commenting-o fa-2x fa-fw\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">";
        // line 172
        echo get_lang("Forum");
        echo "</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <nav id=\"btn-menu-float\" class=\"circular-menu\">
                    <div class=\"circle\">
                        ";
        // line 179
        if ((($context["show_left_column"] ?? null) == 1)) {
            // line 180
            echo "                            <a href=\"#\" title = \"";
            echo get_lang("Expand");
            echo "\" id=\"lp-view-expand-toggle\"
                               class=\"icon-toolbar expand\" role=\"button\">
                                ";
            // line 182
            if ((($context["lp_mode"] ?? null) == "embedframe")) {
                // line 183
                echo "                                    <span class=\"fa fa-compress\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">";
                // line 184
                echo get_lang("Expand");
                echo "</span>
                                ";
            } else {
                // line 186
                echo "                                    <span class=\"fa fa-expand\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">";
                // line 187
                echo get_lang("Expand");
                echo "</span>
                                ";
            }
            // line 189
            echo "                            </a>
                        ";
        }
        // line 191
        echo "                        <a id=\"home-course\"
                           title = \"";
        // line 192
        echo get_lang("Home");
        echo "\"
                           href=\"";
        // line 193
        echo ($context["button_home_url"] ?? null);
        echo "\"
                           class=\"icon-toolbar\" target=\"_self\"
                           onclick=\"javascript: window.parent.API.save_asset();\">
                            <em class=\"fa fa-home\"></em> <span class=\"hidden-xs hidden-sm\"></span>
                        </a>
                        ";
        // line 198
        echo ($context["navigation_bar"] ?? null);
        echo "
                    </div>
                    <a class=\"menu-button fa fa-bars icons\" href=\"#\"></a>
                </nav>

                <div id=\"tab-iframe\" class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"lp-view-content\">
                        <div id=\"wrapper-iframe\">
                        ";
        // line 206
        if ((($context["lp_mode"] ?? null) == "fullscreen")) {
            // line 207
            echo "                            <iframe
                                id=\"content_id_blank\"
                                name=\"content_name_blank\"
                                src=\"blank.php\"
                                style=\"width:100%; height:100%\"
                                border=\"0\"
                                frameborder=\"0\"
                                allowfullscreen=\"true\"
                                webkitallowfullscreen=\"true\" mozallowfullscreen=\"true\"></iframe>
                        ";
        } else {
            // line 217
            echo "                            <iframe
                                id=\"content_id\"
                                name=\"content_name\"
                                src=\"";
            // line 220
            echo ($context["iframe_src"] ?? null);
            echo "\"
                                style=\"width:100%; height:100%\"
                                border=\"0\"
                                frameborder=\"0\"
                                allowfullscreen=\"true\"
                                webkitallowfullscreen=\"true\" mozallowfullscreen=\"true\"></iframe>
                        ";
        }
        // line 227
        echo "                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"lp-view-forum\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 236
        echo "</div>

<script>
    document.querySelector('.menu-button').onclick = function(e) {
        e.preventDefault(); document.querySelector('.circle').classList.toggle('open');
    }
    var LPViewUtils = {
        setHeightLPToc: function () {
            var scormInfoHeight = \$('#scorm-info').outerHeight(true);
            \$('#learning_path_toc').css({
                top: scormInfoHeight
            });
        }
    };

    \$(function() {
        if (/iPhone|iPod|iPad/.test(navigator.userAgent)) {
            // Fix an issue where you cannot scroll below first screen in
            // learning paths on Apple devices
            document.getElementById('wrapper-iframe').setAttribute(
                'style',
                'width:100%; overflow:auto; position:auto; -webkit-overflow-scrolling:touch !important;'
            );
            // Fix another issue whereby buttons do not react to click below
            // second screen in learning paths on Apple devices
            document.getElementById('content_id').setAttribute('style', 'overflow: auto;');
        }

        ";
        // line 264
        if ((($context["lp_mode"] ?? null) == "embedframe")) {
            // line 265
            echo "            //\$('#learning_path_main').addClass('lp-view-collapsed');
            \$('#lp-view-expand-button, #lp-view-expand-toggle').on('click', function (e) {
                e.preventDefault();
                \$('#learning_path_main').toggleClass('lp-view-collapsed');
                \$('#lp-view-expand-toggle span.fa').toggleClass('fa-compress');
                \$('#lp-view-expand-toggle span.fa').toggleClass('fa-expand');
                var className = \$('#lp-view-expand-toggle span.fa').attr('class');
                if (className == 'fa fa-expand') {
                    \$(this).attr('title', '";
            // line 273
            echo get_lang("Expand");
            echo "');
                } else {
                    \$(this).attr('title', '";
            // line 275
            echo get_lang("Collapse");
            echo "');
                }

                if(\$('#navTabsbar').is(':hidden')) {
                    \$('#navTabsbar').show();
                } else {
                    \$('#navTabsbar').hide();
                }
            });
        ";
        } else {
            // line 285
            echo "            \$('#lp-view-expand-button, #lp-view-expand-toggle').on('click', function (e) {
                e.preventDefault();
                \$('#learning_path_main').toggleClass('lp-view-collapsed');
                \$('#lp-view-expand-toggle span.fa').toggleClass('fa-expand');
                \$('#lp-view-expand-toggle span.fa').toggleClass('fa-compress');

                var className = \$('#lp-view-expand-toggle span.fa').attr('class');
                if (className == 'fa fa-expand') {
                    \$(this).attr('title', '";
            // line 293
            echo get_lang("Expand");
            echo "');
                } else {
                    \$(this).attr('title', '";
            // line 295
            echo get_lang("Collapse");
            echo "');
                }
            });
        ";
        }
        // line 299
        echo "
        \$('.lp-view-tabs').on('click', '.disabled', function (e) {
            e.preventDefault();
        });

        \$('a#ui-option').on('click', function (e) {
            e.preventDefault();
            var icon = \$(this).children('.fa');
            if (icon.is('.fa-chevron-up')) {
                icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');

                return;
            }
            icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
        });

        LPViewUtils.setHeightLPToc();

        \$('.image-avatar img').load(function () {
            LPViewUtils.setHeightLPToc();
        });

        \$('.scorm_item_normal a, #scorm-previous, #scorm-next').on('click', function () {
            \$('.lp-view-tabs').animate({opacity: 0}, 500);
        });

        \$('#learning_path_right_zone #lp-view-content iframe').on('load', function () {
            \$('.lp-view-tabs a[href=\"#lp-view-content\"]').tab('show');
            \$('.lp-view-tabs').animate({opacity: 1}, 500);
        });

        loadForumThread(";
        // line 330
        echo ($context["lp_id"] ?? null);
        echo ", ";
        echo ($context["lp_current_item_id"] ?? null);
        echo ");
        checkCurrentItemPosition(";
        // line 331
        echo ($context["lp_current_item_id"] ?? null);
        echo ");

        ";
        // line 333
        if (twig_in_filter(($context["glossary_extra_tools"] ?? null), ($context["glossary_tool_available_list"] ?? null))) {
            // line 334
            echo "            // Loads the glossary library.
            (function () {
                ";
            // line 336
            if ((($context["show_glossary_in_documents"] ?? null) == "ismanual")) {
                // line 337
                echo "                    \$.frameReady(
                        function(){
                            //  \$(\"<div>I am a div courses</div>\").prependTo(\"body\");
                        },
                        \"#content_id\",
                        [
                            { type:\"script\", id:\"_fr1\", src:\"";
                // line 343
                echo ($context["jquery_web_path"] ?? null);
                echo "\", deps: [
                                { type:\"script\", id:\"_fr4\", src:\"";
                // line 344
                echo ($context["jquery_ui_js_web_path"] ?? null);
                echo "\"},
                                { type:\"script\", id:\"_fr2\", src:\"";
                // line 345
                echo $this->getAttribute(($context["_p"] ?? null), "web_lib", []);
                echo "javascript/jquery.highlight.js\"},
                                ";
                // line 346
                echo ($context["fix_link"] ?? null);
                echo "
                            ]},
                            { type:\"stylesheet\", id:\"_fr5\", src:\"";
                // line 348
                echo ($context["jquery_ui_css_web_path"] ?? null);
                echo "\"},
                        ]
                    );
                ";
            } elseif ((            // line 351
($context["show_glossary_in_documents"] ?? null) == "isautomatic")) {
                // line 352
                echo "                    \$.frameReady(
                        function(){
                            //  \$(\"<div>I am a div courses</div>\").prependTo(\"body\");
                        },
                        \"#content_id\",
                        [
                            { type:\"script\", id:\"_fr1\", src:\"";
                // line 358
                echo ($context["jquery_web_path"] ?? null);
                echo "\", deps: [
                                { type:\"script\", id:\"_fr4\", src:\"";
                // line 359
                echo ($context["jquery_ui_js_web_path"] ?? null);
                echo "\"},
                                { type:\"script\", id:\"_fr2\", src:\"";
                // line 360
                echo $this->getAttribute(($context["_p"] ?? null), "web_lib", []);
                echo "javascript/jquery.highlight.js\"},
                                ";
                // line 361
                echo ($context["fix_link"] ?? null);
                echo "
                            ]},
                            { type:\"stylesheet\", id:\"_fr5\", src:\"";
                // line 363
                echo ($context["jquery_ui_css_web_path"] ?? null);
                echo "\"},
                        ]
                    );
                ";
            } elseif ((            // line 366
($context["fix_link"] ?? null) != "")) {
                // line 367
                echo "                    \$.frameReady(
                        function(){
                            //  \$(\"<div>I am a div courses</div>\").prependTo(\"body\");
                        },
                        \"#content_id\",
                        [
                            { type:\"script\", id:\"_fr1\", src:\"";
                // line 373
                echo ($context["jquery_web_path"] ?? null);
                echo "\", deps: [
                                { type:\"script\", id:\"_fr4\", src:\"";
                // line 374
                echo ($context["jquery_ui_js_web_path"] ?? null);
                echo "\"},
                                ";
                // line 375
                echo ($context["fix_link"] ?? null);
                echo "
                            ]},
                            { type:\"stylesheet\", id:\"_fr5\", src:\"";
                // line 377
                echo ($context["jquery_ui_css_web_path"] ?? null);
                echo "\"},
                        ]
                    );
                ";
            }
            // line 381
            echo "            })();
        ";
        }
        // line 383
        echo "        ";
        if ((($context["disable_js_in_lp_view"] ?? null) == 0)) {
            // line 384
            echo "            \$(function() {
                var arr = ['link', 'sco'];

                if (\$.inArray(olms.lms_item_type, arr) == -1) {
                    ";
            // line 388
            echo ($context["frame_ready"] ?? null);
            echo "
                }
            });
        ";
        }
        // line 392
        echo "
        \$(window).on('resize', function () {
            LPViewUtils.setHeightLPToc();
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "default/learnpath/view.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 392,  685 => 388,  679 => 384,  676 => 383,  672 => 381,  665 => 377,  660 => 375,  656 => 374,  652 => 373,  644 => 367,  642 => 366,  636 => 363,  631 => 361,  627 => 360,  623 => 359,  619 => 358,  611 => 352,  609 => 351,  603 => 348,  598 => 346,  594 => 345,  590 => 344,  586 => 343,  578 => 337,  576 => 336,  572 => 334,  570 => 333,  565 => 331,  559 => 330,  526 => 299,  519 => 295,  514 => 293,  504 => 285,  491 => 275,  486 => 273,  476 => 265,  474 => 264,  444 => 236,  434 => 227,  424 => 220,  419 => 217,  407 => 207,  405 => 206,  394 => 198,  386 => 193,  382 => 192,  379 => 191,  375 => 189,  370 => 187,  367 => 186,  362 => 184,  359 => 183,  357 => 182,  351 => 180,  349 => 179,  339 => 172,  333 => 169,  326 => 165,  320 => 162,  310 => 156,  307 => 154,  304 => 153,  300 => 150,  297 => 148,  295 => 147,  292 => 146,  286 => 142,  283 => 141,  277 => 139,  268 => 133,  260 => 128,  256 => 126,  253 => 125,  246 => 123,  241 => 122,  239 => 121,  236 => 120,  233 => 119,  226 => 117,  221 => 116,  219 => 115,  213 => 111,  211 => 110,  208 => 109,  205 => 108,  199 => 105,  196 => 104,  193 => 103,  190 => 102,  181 => 96,  175 => 93,  170 => 91,  165 => 89,  156 => 83,  145 => 75,  137 => 70,  96 => 31,  93 => 30,  91 => 29,  88 => 28,  82 => 25,  79 => 24,  77 => 23,  74 => 22,  67 => 18,  61 => 15,  57 => 13,  51 => 10,  48 => 9,  46 => 8,  39 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/learnpath/view.tpl", "/home4/mdmaster/public_html/www/nuevopitagoras.com/main/template/default/learnpath/view.tpl");
    }
}
