
!(function () {
    var a = {
        initValidation: function () {
            One.helpers("validation");
            jQuery(".workshop-form").validate({
                ignore: [],
                rules: {
                    "name1": {required: !0},
                    "name2": {required: !0},
                    "kana1": {required: !0},
                    "kana2": {required: !0},
                    "sex": {required: !0},
                    "post1": {required: !0},
                    "post2": {required: !0},
                    "address1": {required: !0},
                    "address2": {required: !0},
                    "member": {required: !0},
                    "cname": {required: !0},
                    "ceigyou": {required: !0},
                    "cpost1": {required: !0},
                    "cpost2": {required: !0},
                    "caddress1": {required: !0},
                    "caddress2": {required: !0},
                    "mail": {required: !0},
                    "tel1": {required: !0},
                    "tel2": {required: !0},
                    "tel3": {required: !0},
                    "fax1": {required: !0},
                    "fax2": {required: !0},
                    "fax3": {required: !0},
                    "kigen": {required: !0},
                    "kfax": {required: !0},
                    "kemail": {required: !0},
                    "kousi": {required: !0},
                    "naiyou": {required: !0},
                },
                submitHandler: function (form) {

                    var formdata = jQuery(form).serializeArray();
                    console.log(formdata);

                    if (jQuery('#formdata').val() == 0) {
                        jQuery('.workshop-form').hide();
                        jQuery('.preview-table').show();
                        jQuery('#formdata').val('1');
                        var tableBody = '<tr><td>Student name</td><td>' + jQuery('[name="name1"]').val() + ' ' + jQuery('[name="name2"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Student name Furigana</td><td>' + jQuery('[name="kana1"]').val() + ' ' + jQuery('[name="kana2"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Gender</td><td>' + jQuery('[name="sex"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Home zip code</td><td>' + jQuery('[name="post1"]').val() + ' ' + jQuery('[name="post2"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Home Address</td><td>' + jQuery('[name="address1"]').val() + ' ' + jQuery('[name="address2"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Member classification (number)</td><td>' + jQuery('[name="member"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Company name</td><td>' + jQuery('[name="cname"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Office name</td><td>' + jQuery('[name="ceigyou"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Work zip code</td><td>' + jQuery('[name="cpost1"]').val() + ' ' + jQuery('[name="cpost2"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Work address</td><td>' + jQuery('[name="caddress1"]').val() + ' ' + jQuery('[name="caddress2"]').val() + '</td></tr>';
                        tableBody += '<tr><td>Email</td><td>' + jQuery('[name="mail"]').val() + '</td></tr>';
                        tableBody += '<tr><td>TEL</td><td>' + jQuery('[name="tel1"]').val() + ' ' + jQuery('[name="tel1"]').val() + ' ' + jQuery('[name="tel3"]').val() + '</td></tr>';
                        tableBody += '<tr><td>FAX</td><td>' + jQuery('[name="fax1"]').val() + ' ' + jQuery('[name="fax2"]').val() + ' ' + jQuery('[name="fax3"]').val() + '</td></tr>';
                        jQuery('.table-body').html(tableBody);
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
            jQuery('.workshop-form').show();
            jQuery('.preview-table').hide();
            jQuery('#formdata').val('0');
        },
        submitForm: function () {
            jQuery('.workshop-form').submit();
        },
        init: function () {
            this.initValidation();
            var self = this;
            jQuery('body').on('click', '.submit-form', function () {
                self.submitForm();
            });
            jQuery('body').on('click', '.go-back', function () {
                self.showForm();
            });
        }
    };
    jQuery(function () {
        a.init();
    });
})();
