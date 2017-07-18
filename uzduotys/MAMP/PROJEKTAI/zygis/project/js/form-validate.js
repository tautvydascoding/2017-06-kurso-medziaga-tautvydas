        $.validator.addMethod("nameRegex", function (value, element) {
            return this.optional(element) || /^[a-zÀ-ž\-\s]+$/i.test(value);
        });


      






        $(function () {
            $("#send-message").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 35,
                        nameRegex: true
                    },
                    email: {
                        required: true,
                        email: true,
                        minlength: 5,
                        maxlength: 40
                    },
                    message: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "Prašome įvesti vardą",
                        minlength: "Veskite mažiausiai 3 simbolius",
                        maxlength: "Veskite nedaugiau 35 simbolių",
                        nameRegex: "Veskite tik raides"
                    },
                    email: {
                        required: "Prašome įvesti el. pašto adresą",
                        email: "Prašome įvesti validų el.pašto adresą",
                        minlength: "Veskite mažiausiai 5 simbolius",
                        maxlength: "Veskite nedaugiau 40 simbolių"
                    },
                    message: {
                        required: "Prašome įvesti savo žinutę"
                    }
                },

                errorPlacement: function (label, element) {
                    label.addClass('arrow');
                    label.insertAfter(element);
                }









            });



        });
