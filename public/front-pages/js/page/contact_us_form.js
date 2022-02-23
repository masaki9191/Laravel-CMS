
!(function () {
    var a = {
        initValidation: function () {
            jQuery(".contact-form").validate({
                ignore: [],
                rules: {
                    "name1": {required: !0},
                    "name2": {required: !0},
                    "kana1": {required: !0},
                    "kana2": {required: !0},
                    "type": {required: !0},
                    "cname": {required: !0},
                    "content": {required: !0},
                    "mail": {required: !0},
                    "tel1": {required: !0},
                    "tel2": {required: !0}
                   
                },
                submitHandler: function (form) {
                    var formdata = jQuery(form).serializeArray();
                    if (jQuery('#formdata').val() == 0) {
                        jQuery('.form-fields').hide();
                        jQuery('.form-preview').show();
                        jQuery('#formdata').val('1');
                        $('.name').text(jQuery('[name="name1"]').val() + ' ' + jQuery('[name="name2"]').val());
                        $('.kana').text(jQuery('[name="kana1"]').val() + ' ' + jQuery('[name="kana1"]').val());
                        $('.content-field').text(jQuery('[name="content"]').val());
                        $('.type').text(jQuery('[name="type"]:checked').next('label').text());
                        $('.address').text(jQuery('[name="address2"]').val());
                        $('.cname').text(jQuery('[name="cname"]').val());
                        $('.mail').text(jQuery('[name="mail"]').val());
                        $('.tel').text(jQuery('[name="tel1"]').val() + ' ' + jQuery('[name="tel1"]').val() + ' ' + jQuery('[name="tel3"]').val());
                        return false;
                    }
                    return true;
                },
                messages: {
//                    "no": {required: "SDdsdsdsd"},
//                    "val-username": {required: "Please enter a username", minlength: "Your username must consist of at least 3 characters"},
//                    "val-email": "Please enter a valid email address",
//                    "val-password": {required: "Please provide a password", minlength: "Your password must be at least 5 characters long"},
//                    "val-confirm-password": {required: "Please provide a password", minlength: "Your password must be at least 5 characters long", equalTo: "Please enter the same password as above"},
//                    "val-select2": "Please select a value!",
//                    "val-select2-multiple": "Please select at least 2 values!",
//                    "val-suggestions": "What can we do to become better?",
//                    "val-skill": "Please select a skill!",
//                    "val-currency": "Please enter a price!",
//                    "val-website": "Please enter your website!",
//                    "val-phoneus": "Please enter a US phone!",
//                    "val-digits": "Please enter only digits!",
//                    "val-number": "Please enter a number!",
//                    "val-range": "Please enter a number between 1 and 5!",
//                    "val-terms": "You must agree to the service terms!",
                },
            });

        },
        showForm: function () {
            jQuery('.form-preview').hide();
            jQuery('.form-fields').show();
            jQuery('#formdata').val('0');
        },
        submitForm: function () {
           jQuery('.contact-form').submit();
        },
      
        init: function () {
            this.initValidation();
            var self = this;
            jQuery('body').on('click', '.submit-form', function () {
               self.submitForm();
            });
            jQuery('#content').on('click', '.show-form-btn', function () {
                self.showForm();
            });
        }
    };
    jQuery(function () {
        a.init();
    });
})();
