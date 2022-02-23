
!(function () {
    var a = {
        initValidation: function () {
            One.helpers("validation");
//            jQuery(".workshop-form").validate({
//                ignore: [],
//                rules: {
//                    "no": {required: !0},
//                    "syusai": {required: !0},
//                    "kyousai": {required: !0},
//                    "sien": {required: !0},
//                    "nittei2": {required: !0},
//                    "nittei3": {required: !0},
//                    "nittei1": {required: !0},
//                    "ampm": {required: !0},
//                    "kaizyou1": {required: !0},
//                    "kaizyou3": {required: !0},
//                    "kaizyou4": {required: !0},
//                    "kaizyou2": {required: !0},
//                    "tizu": {required: !0},
//                    "teiin": {required: !0},
//                    "teiin2": {required: !0},
//                    "zyk": {required: !0},
//                    "uketuke1": {required: !0},
//                    "uketuke2": {required: !0},
//                    "mscu": {required: !0},
//                    "zys": {required: !0},
//                    "kingaku1": {required: !0},
//                    "kingaku2": {required: !0},
//                    "khurikomi": {required: !0},
//                    "kigen": {required: !0},
//                    "kfax": {required: !0},
//                    "kemail": {required: !0},
//                    "kousi": {required: !0},
//                    "naiyou": {required: !0},
//                },
//                submitHandler: function (form) {
//
//                    var formdata = jQuery(form).serializeArray();
//                    console.log(formdata);
//
//                    if (jQuery('#formdata').val() == 0) {
//                        jQuery('.workshop-form').hide();
//                        jQuery('.preview-table').show();
//                        jQuery('#formdata').val('1');
//                        var tableBody = '<tr><td>Workshop number</td><td>' + jQuery('[name="no"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>都道府県</td><td>' + jQuery('[name="ken"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Organizer</td><td>' + jQuery('[name="syusai"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Co-sponsored</td><td>' + jQuery('[name="kyousai"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Supporters</td><td>' + jQuery('[name="sien"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Time</td><td>' + jQuery('[name="nittei2"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Reception start time</td><td>' + jQuery('[name="nittei3"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Workshop date</td><td>' + jQuery('[name="nittei1"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Timezone</td><td>' + jQuery('[name="ampm"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Venue name</td><td>' + jQuery('[name="kaizyou1"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Venue address</td><td>' + jQuery('[name="kaizyou3"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Venue tel</td><td>' + jQuery('[name="kaizyou4"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Venue HP address</td><td>' + jQuery('[name="kaizyou2"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Venue map URL</td><td>' + jQuery('[name="tizu"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Capacity</td><td>' + jQuery('[name="teiin"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Capacity1</td><td>' + jQuery('[name="teiin2"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Implementation Guidelines Release Date</td><td>' + jQuery('[name="zyk"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Start accepting application for attendance</td><td>' + jQuery('[name="uketuke1"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>End of application acceptance</td><td>' + jQuery('[name="uketuke2"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Application details correction / cancellation acceptance end date</td><td>' + jQuery('[name="mscu"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Implementation procedure Delete date</td><td>' + jQuery('[name="zys"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Billed amount 1</td><td>' + jQuery('[name="kingaku1"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Billed amount 2</td><td>' + jQuery('[name="kingaku2"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Transfer information</td><td>' + jQuery('[name="khurikomi"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Transfer deadline</td><td>' + jQuery('[name="kigen"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Contact fax number</td><td>' + jQuery('[name="kfax"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Email</td><td>' + jQuery('[name="kemail"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Teacher name</td><td>' + jQuery('[name="kousi"]').val() + '</td></tr>';
//                        tableBody += '<tr><td>Contents</td><td>' + jQuery('[name="naiyou"]').val() + '</td></tr>';
//                        jQuery('.table-body').html(tableBody);
//                        return false;
//                    }
//                    return true;
//                },
//                messages: {
////                    "no": {required: "SDdsdsdsd"},
////                    "val-username": {required: "Please enter a username", minlength: "Your username must consist of at least 3 characters"},
////                    "val-email": "Please enter a valid email address",
////                    "val-password": {required: "Please provide a password", minlength: "Your password must be at least 5 characters long"},
////                    "val-confirm-password": {required: "Please provide a password", minlength: "Your password must be at least 5 characters long", equalTo: "Please enter the same password as above"},
////                    "val-select2": "Please select a value!",
////                    "val-select2-multiple": "Please select at least 2 values!",
////                    "val-suggestions": "What can we do to become better?",
////                    "val-skill": "Please select a skill!",
////                    "val-currency": "Please enter a price!",
////                    "val-website": "Please enter your website!",
////                    "val-phoneus": "Please enter a US phone!",
////                    "val-digits": "Please enter only digits!",
////                    "val-number": "Please enter a number!",
////                    "val-range": "Please enter a number between 1 and 5!",
////                    "val-terms": "You must agree to the service terms!",
//                },
//            });

        },
        toggleFields: function () {
            if (jQuery('[name=name="cms_kaiin_type"]').val() != 3) {
                jQuery('.cms_corporation_type').show();
            } else {
                jQuery('.cms_corporation_type').hide();
            }
            if (jQuery('[name=name="cms_kaiin_member_main"]').val() == 1) {
                jQuery('.group-sec-fields').show();
            } else {
                jQuery('.group-sec-fields').hide();
            }
        },
        submitForm: function () {
            jQuery('.workshop-form').submit();
        },
        init: function () {
            this.initValidation();
            var self = this;
            self.toggleFields();
//            jQuery('body').on('click', '.submit-form', function () {
//                self.submitForm();
//            });
//            jQuery('body').on('click', '.go-back', function () {
//                self.showForm();
//            });
            jQuery('body').on('[name="cms_corporation_type"],[name="cms_kaiin_member_main"]', 'change', function () {
                console.log("hellllll");
                self.toggleFields();
            });
        }
    };
    jQuery(function () {
        a.init();
    });
})();
