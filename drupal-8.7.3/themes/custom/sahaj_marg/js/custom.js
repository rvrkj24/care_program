(function($, document, window, viewport) {
    'use strict';
    var timers = {};

    function IntervalTimer(callback, interval) {
        var timerId, startTime, remaining = 0;
        var state = 0; //  0 = idle, 1 = running, 2 = paused, 3= resumed

        this.pause = function() {
            if (state != 1) return;

            remaining = interval - (new Date() - startTime);
            window.clearInterval(timerId);
            state = 2;
        };

        this.resume = function() {
            if (state != 2) return;

            state = 3;
            window.setTimeout(this.timeoutCallback, remaining);
        };

        this.timeoutCallback = function() {
            if (state != 3) return;

            callback();

            startTime = new Date();
            timerId = window.setInterval(callback, interval);
            state = 1;
        };

        startTime = new Date();
        timerId = window.setInterval(callback, interval);
        state = 1;
    }

    function calc(theform) {
        var with2Decimals = theform.toString().match(/^-?\d+(?:\\d{0})?/)[0];
        return with2Decimals
    }

    function secondsTimeSpanToHMS(s) {
        var h = Math.floor(s / 3600); //Get whole hours
        s -= h * 3600;
        var m = Math.floor(s / 60); //Get remaining minutes
        s -= m * 60;
        return h + ":" + (m < 10 ? '0' + m : m) + ":" + (s < 10 ? '0' + calc(s) : calc(s)); //zero padding on minutes and seconds
    }

    function playpause(audio_id) {
        if (document.getElementById(audio_id).paused) {
            document.getElementById(audio_id).play();
            $("." + audio_id).html('<i class="audio-btn fas fa-pause-circle fa-2x"></i>');
            if (timers[audio_id + '_timer']) {
                timers[audio_id + '_timer'].resume();
            } else {
                timers[audio_id + '_timer'] = new IntervalTimer(function() {
                    updateduration(document.getElementById(audio_id).currentTime, document.getElementById(audio_id).duration, audio_id);
                }, document.getElementById(audio_id).duration);
            }
        } else {
            document.getElementById(audio_id).pause();
            $("." + audio_id).html('<i class="audio-btn fas fa-play-circle fa-2x"></i>');
            timers[audio_id + '_timer'].pause();
        }
    }

    function updateduration(currenttime, duration, audio_id) {
        $('.audio-duration-' + audio_id).html('<span class="currentduration">' + secondsTimeSpanToHMS(currenttime) + ' </span> | ' + secondsTimeSpanToHMS(duration));
        var dark_percent = (currenttime / (duration) * 100);
        var light_percent = 100 - dark_percent;
        $('#audio-tracker-' + audio_id + ' .show-prog-wrap .dark-audio-progress').width(dark_percent + '%');
        $('#audio-tracker-' + audio_id + ' .show-prog-wrap .light-audio-progress').width(light_percent + '%');
    }

    Drupal.behaviors.custombehaviour = {
        attach: function(context, settings) {
            /*if (!$('.archive-of-talks-card-list-view .views-exposed-form').hasClass('row')) {
                $('.archive-of-talks-card-list-view .views-exposed-form').addClass('row');
                $('.archive-of-talks-card-list-view .views-exposed-form .js-form-item').addClass('col');
                $('.archive-of-talks-card-list-view .views-exposed-form .form-actions').addClass('col');
            }*/
			
			if (!$('.views-exposed-form').hasClass('row')) {
                $('.views-exposed-form').addClass('row');
                $('.views-exposed-form .js-form-item').addClass('col');
                $('.views-exposed-form .form-actions').addClass('col');
            }
			
            if ($("#search-psuedo").length) {
                $('#search-psuedo').val($('.form-item-title input').val());
            }
            if ($('.media-selector #psuedo-media-selector').length) {

            } else {
                $('.media-selector').append($('.js-form-type-select.form-item-tid.js-form-item-tid select').clone().prop('id', 'psuedo-media-selector').removeClass().addClass('psuedo-media-selector').data('drupal-selector', ''));
            }

            $('.archive-of-talks-row-container .other-contents-container .description .ebook').each(function() {
                $(this).parent().parent().find('.action-button-container .transcript-modal-trigger').css('display', 'none');
            });

            // Audio Page
            if ($('.inline_audio').length) {
                setTimeout(function() {
                    $('.tracker-audio').each(function() {
                        var audio_id = $(this).data('audio-id');
                        $('.audio-duration-' + audio_id).html('<span class="currentduration">0:00:00</span>' + ' | ' + secondsTimeSpanToHMS(document.getElementById(audio_id).duration));
                    });
                }, 1000);
                $('.play-pause').on('click', function(e) {
                    var audio_id = $(this).data('audio-id');
                    playpause(audio_id);
                });
                $('.show-prog-wrap').on('click', function(e) {
                    var $this = $(this);
                    var widthclicked = e.pageX - $this.offset().left;
                    var totalWidth = $this.width();
                    var calc = (widthclicked / totalWidth);
                    var audio_id = $(this).data('audio-id');
                    var audio = document.getElementById(audio_id);
                    var total_duration = audio.duration;
                    audio.currentTime = parseInt(calc * total_duration);
                });
            }

            $('#psuedo-media-selector').on('change', function() {
                $('.js-form-type-select.form-item-tid.js-form-item-tid select').val($(this).val());
                $('.form-item-title').parent().find('.form-actions input[type="submit"]').trigger('click');
            });
            $('#psuedo-media-selector').blur(function() {
                $('.js-form-type-select.form-item-tid.js-form-item-tid select').val($(this).val());
                $('.form-item-title').parent().find('.form-actions input[type="submit"]').trigger('click');
            });
            $('#search-psuedo').keyup(function() {
                $('.form-item-title input').val($(this).val());
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if (keycode == '13') {
                    $('.form-item-title').parent().find('.form-actions input[type="submit"]').trigger('click');
                }
            });

            $('.search-bar-trigger', context).click(function(e) {
                $('.search-block-form').slideToggle("slow");
                $('.close-icon-container').toggle();
                $('.search-icon-container').toggle();
            });

            $('.dropdown-menu a.dropdown-toggle', context).click(function(e) {
                var $el = $(this);
                var $parent = $(this).offsetParent(".dropdown-menu");
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass('show');

                $(this).parent("li").toggleClass('show');

                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-menu .show').removeClass("show");
                });

                if (!$parent.parent().hasClass('navbar-nav')) {
                    $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
                }

                return false;
            });
            $('.sidebar-menu .panel.panel-default', context).each(function() {
                var trigger = $(this).find('.collapse-handle').attr('aria-controls');
                if ($(this).find('.panel-heading a.is-active').length) {
                    $('#' + trigger).collapse('show');
                }
                if ($(this).find('.panel-body a.is-active').length) {
                    $('#' + trigger).collapse('show');
                }
            });
            $(window).resize(function() {
                if ($(window).width() >= 1200) {
                    $('a.smd-link').click(function(event) {
                        event.preventDefault();
                        if ($(this).attr('href')) {
                            window.location.href = $(this).attr('href');
                        }
                    });
                }
            });



            if ($('.top-banner-content').length) {
                $('.top-banner-content .top-banner-container').each(function() {
                    var bg_img = $(this).attr('data-background-image-url');
                    $(this).css('background-image', 'url(' + bg_img + ')');
                });
            }
            if ($('.top-banner-container').length) {
                $('.top-banner-container').each(function() {
                    var bg_img = $(this).attr('data-background-image-url');
                    $(this).css('background-image', 'url(' + bg_img + ')');
                });
            }
            var url_arr = location.pathname.split("/");
            $('.customtabs-tabs a[href^="' + location.pathname + '"]').parent().parent().parent().addClass('active');
            setTimeout(function() {
                $('select.language-select-box option').each(function() {
                    if ($(this).hasClass('is-active')) {
                        $(this).attr('selected', 'selected');
                    }
                });
            }, 1000);

        }
    }

    $(document).ready(function() {

        if ($('.calc-width').length) {
            setTimeout(function() {
                $('.calc-width-option').text($('.language-select-box option:selected').text());
                $('select.links.language-select-box.form-control').width($('select.calc-width').width());
            }, 1000);

            $('.calc-width-option').text($('.user-account-menu option:selected').text());
            $('select.user-account-menu').width($('select.calc-width').width());
        }


        if ($(window).width() >= 1200) {
            $('a.smd-link').click(function(event) {
                event.preventDefault();
                if ($(this).attr('href')) {
                    window.location.href = $(this).attr('href');
                }
            });
        }

        /* TO KEEP FOR FUTURE USE
        $('.user-profile-account select').on('focus', function(e) {
          $(this).parent().addClass('active');
        });
        $('.user-profile-account select').on('blur', function(e) {
          $(this).parent().removeClass('active');
        });*/

        $('.user-account-menu').on('focus', function(e) {
            $(this).addClass('active');
        });
        $('.user-account-menu').on('blur', function(e) {
            $(this).removeClass('active');
        });

        $('#question-form').addClass('form-inline');
        $(".useracc").removeAttr("target");

        /* Faq page slideup content */
        $("ul.faqtopics li a").click(function(event) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
        });
		
		//ask daaji new video loading categories 
		$( ".categories a" ).addClass( "float-left box-text" );
		$( ".more-link" ).addClass( "viewall text-center" );
		$(".js-form-item-question").addClass("col-md-9");
		$(".js-form-submit").addClass("commonquestion");
		
		$("a[href='https://kanhareg.sahajmarg.org/reg/#/kanha']").click(function(){
			window.open(this.href);
			return false;
		  });
	
    });



})(jQuery, document, window, ResponsiveBootstrapToolkit);