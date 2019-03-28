
/**
* Theme: Moltran Admin Template
* Author: Coderthemes
* Form Validator
*/

!function($) {
    "use strict";

    var FormValidator = function() {
        this.$commentForm = $("#commentForm"), //this could be any form, for example we are specifying the comment form
        this.$signupForm = $("#signupForm");
    };

    //init
    FormValidator.prototype.init = function() {
        //validator plugin
        $.validator.setDefaults({
            submitHandler: function() { alert("submitted!"); }
        });

        // validate the comment form when it is submitted
        this.$commentForm.validate();

        // validate signup form on keyup and submit
        this.$signupForm.validate({
            rules: {
                firstname: "required",
                lastname: "required",
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"
            },
            messages: {
                firstname: "请填写",
                lastname: "请填写",
                username: {
                    required: "请填写",
                    minlength: "太短"
                },
                password: {
                    required: "请填写",
                    minlength: "不够长"
                },
                confirm_password: {
                    required: "请填写",
                    minlength: "太短",
                    equalTo: "请填写"
                },
                email: "请填写",
                agree: "请确认"
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if(firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });

    },
    //init
    $.FormValidator = new FormValidator, $.FormValidator.Constructor = FormValidator
}(window.jQuery),


//initializing 
function($) {
    "use strict";
    $.FormValidator.init()
}(window.jQuery);