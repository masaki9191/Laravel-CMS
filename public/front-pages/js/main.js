!(function ($) {
    "use strict";
    // Mobile Navigation
    if ($('.nav-menu').length) {
        var $mobile_nav = $('.nav-menu:first').clone().prop({
            class: 'mobile-nav d-lg-none'
        });
        $('body').append($mobile_nav);
        $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><div></div><div></div><div></div><span>メニュー</span></button>');
        $('body').append('<div class="mobile-nav-overly"></div>');

        $(document).on('click', '.mobile-nav-toggle', function (e) {
            $('body').toggleClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('fa-times');
            $('.mobile-nav-overly').toggle();
        });

        $(document).on('click', '.mobile-nav .drop-down > a', function (e) {
            e.preventDefault();
            // $(this).parent().find('ul').toggle();
            $(this).next().toggle();
            // $(this).parent().toggleClass('active');
            $(this).parents('li.drop-down').toggleClass('active');
        });

        $(document).click(function (e) {
            // var container = $(".mobile-nav, .mobile-nav-toggle");
            // if (!container.is(e.target) && container.has(e.target).length === 0) {
            //     if ($('body').hasClass('mobile-nav-active')) {
            //         $('body').removeClass('mobile-nav-active');
            //         $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
            //         $('.mobile-nav-overly').fadeOut();
            //     }
            // }
        });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
        $(".mobile-nav, .mobile-nav-toggle").hide();
    }
    $('.sidebar-toggle').click(function () {
        $('.sidebar').show();
    });
    $('.sidebar-close').click(function () {
        $('.sidebar').hide();
    });

    if ($('.regions').length > 0) {
        $('.regions a').click(function () {
            $('.regions a').each(function (index, element) {
                $(element).removeClass('active');
            });
            $(this).find('input[name="region"]').prop("checked", true);
            $(this).addClass('active');
        });
    }
    $('.footer-links h4').click(function (e) {
        $(this).parent().find('ul').toggle();
        $(this).find('i').toggleClass('fa-plus');
        $(this).find('i').toggleClass('fa-minus');
    });


    $('body').on('click', '.pagination .page-link', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $.get(url, function (data) {
            $('.list-content').html(data);
        });
    });


    var popupBootbox = function (response, params) {
        const bootbox_form = bootbox.dialog({
            title: params.title || 'Create',
            size: params.size || "large",
            className: params.className || "",
            message: response,
            closeButton: true,
            buttons: (params.buttons !== false) && {
                cancel: {
                    label: 'Cancel',
                    className: "btn-default",
                    callback: function () {
                        window.loadingScreen.removeLoading();
                        params.source.data('requestRunning', false);
                        $(this).find('form').trigger("seamlessForm:popup:close", bootbox_form);
                    }
                },
                save: {
                    label: params.labelSubmit || 'Save',
                    className: "btn-primary",
                    callback: function () {
                        const form = $(this).find('form');
                        const data = form.serialize();

                        $.ajax({
                            type: 'POST',
                            url: params.url,
                            data: data,
                            beforeSend: function (xhr, opts) {
                                // window.loadingScreen.addLoading();
                            },
                            success: function (response) {
                                if (response.redirect) {
                                    window.location = response.redirect;
                                    return;
                                }

                                if (response.status == '1') {
                                    alertify.success(response.msg);
                                    params.source.trigger("seamlessForm:save:success", [response]);
                                } else if (response.status == '0') {
                                    alertify.error(response.msg);
                                    params.source.trigger("seamlessForm:save:error", [response]);
                                } else {
                                    const bootbox_form = popupBootbox(response, params);
                                    bootbox_form.on("shown.bs.modal", function () {
                                        params.source.trigger("seamlessForm:save:validationError", bootbox_form);
                                    });
                                }
                            },
                            error: function (resp) {
                                if (resp.status == '422') {
                                    const bootbox_form = popupBootbox(response, params);

                                    bootbox_form.on("shown.bs.modal", function () {
                                        params.source.trigger("seamlessForm:save:validationError", bootbox_form);
                                    });
                                    var html = "";
                                    $.each(resp.responseJSON.errors, function (value, key) {
                                        html += "<li>" + resp.responseJSON.errors[value][0] + "</li>"
                                    });
                                    $(".error-list").html(html);
                                    $(".card-header").show();
                                    $('body').addClass('modal-open');
                                }
                                //  alertify.error("error");
                                params.source.trigger("seamlessForm:save:error", [response]);
                            },
                            complete: function () {
                                window.loadingScreen.removeLoading();
                                params.source.data('requestRunning', false);
                            }
                        });
                    }
                },
            }
        });

//        bootbox_form.find('.modal-dialog').draggable({
//            handle: ".modal-header"
//        });

        return bootbox_form;
    };

    var popupFormFn = function (e) {
        e.preventDefault();

        const $formButton = $(this);
        const url = $formButton.data('remote') || $formButton.attr('href');
        const postUrl = $formButton.data('posturl');
        const title = $formButton.data('title');
        const size = $formButton.data('size');
        const buttons = $formButton.data('buttons');
        const className = $formButton.data('modelclass') || '';
        const labelSubmit = $formButton.data('labelsubmit');
        const bindFunction = $formButton.data('bind-function') || '';
        console.log(postUrl);
        if ($formButton.data('requestRunning')) {
            return;
        }

        $formButton.data('requestRunning', true);

        $.ajax({
            type: 'GET',
            url: url,
            beforeSend: function (xhr, opts) {
                // window.loadingScreen.addLoading();
                $formButton.trigger("seamlessForm:popup:beforeSend", xhr);
            },
            success: function (response) {
                const bootbox_form = popupBootbox(response, {
                    url: postUrl,
                    title: title,
                    size: size,
                    buttons: buttons,
                    source: $formButton,
                    labelSubmit: labelSubmit,
                    className: className,
                });
                $('body').css('padding-right', '0px');

                $formButton.trigger("seamlessForm:popup:success", bootbox_form);


                if (bindFunction != '' && typeof window[bindFunction] == 'function') {
                    window[bindFunction]();
                }
            },
            error: function (response) {
                if (response.responseJSON.msg) {
                    alertify.error(response.responseJSON.msg);
                } else {
                    alertify.error("error");
                }
            },
            complete: function () {
                window.loadingScreen.removeLoading();
                $formButton.data('requestRunning', false);
            }
        });
    };

    $('.seamless-form, body').on('click', '[data-popup="modal"][data-action="form"]', popupFormFn);


})(jQuery);

function auto_grow(element) {
    console.log("here");
    element.style.height = "5px";
    element.style.height = (element.scrollHeight) + "px";
}


$('.collapsedHeading').on('click', function() {
    $(this).find('i').toggleClass('fas fa-plus fas fa-minus');
});

var check = function() {
    return $(window).width() >= 800
}
if (check()) {
    $('.fa-minus').addClass('hide')
}