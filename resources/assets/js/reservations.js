var Reservations = {};

(function () {
    Reservations = {
        tab: null,
        form: $("#createForm"),
        modifyForm: $("#modifyForm"),
        codeText: null,

        init: function () {
            Reservations.tab = new URLSearchParams(window.location.search).get("tab");
            if (Reservations.tab) $("#" + Reservations.tab + "Tab").tab("show");

            Reservations.codeText = Reservations.form.data("code-text");

            Reservations.setTab();
            Reservations.initSelect2();
            Reservations.initDatePicker();
            Reservations.initCreateForm();
            Reservations.initModifyForm();
            $("#preloader").remove();
        },

        initCreateForm: function () {
            Reservations.form.validate({
                errorPlacement: function (error, element) {
                    if (
                        element.hasClass("select2") &&
                        element.next(".select2-container").length
                    ) {
                        error.insertAfter(element.next(".select2-container"));
                    } else if (element.parent(".input-group").length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                },
                rules: {
                    name: {
                        required: true,
                        maxlength: 512,
                    },
                    email: {
                        required: true,
                        email: true,
                        maxlength: 256,
                    },
                    location: {
                        required: true,
                        maxlength: 16,
                    },
                    persons: {
                        required: true,
                    },
                    time: {
                        required: true,
                    },
                    date: {
                        required: true,
                        date: true,
                    },
                },
                messages: {},
                submitHandler: function (form) {
                    var params = { form: form };
                    Reservations.create(params);
                },
            });
        },

        initModifyForm: function () {
            Reservations.modifyForm.validate({
                errorPlacement: function (error, element) {
                    if (
                        element.hasClass("select2") &&
                        element.next(".select2-container").length
                    ) {
                        error.insertAfter(element.next(".select2-container"));
                    } else if (element.parent(".input-group").length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                },
                rules: {
                    reservationCancel: {
                        required: true,
                        maxlength: 32,
                    },
                },
                messages: {},
                submitHandler: function (form) {
                    var params = { form: form };
                    Reservations.get(params);
                },
            });
        },

        setTab: function () {
            $(".tabPane").addClass("d-none");
            $(".tabPane.active").removeClass("d-none");
            Reservations.initSelect2();
        },

        initSelect2: function () {
            $("#location").select2({
                placeholder: $("#location").attr("placeholder"),
                allowClear: false,
            });

            $("#persons").select2({
                placeholder: $("#persons").attr("placeholder"),
                allowClear: false,
            });

            $("#time").select2({
                placeholder: $("#time").attr("placeholder"),
                allowClear: false,
            });

            $("select2-container").css("width", "100%");
        },

        initDatePicker: function () {
            flatpickr("#date");
        },

        create: async function (params) {
            url = params.form.getAttribute("action");

            var requestData = {
                customer_full_name: $("#name").val(),
                customer_email: $("#email").val(),
                number_persons: $("#persons").val(),
                restaurant_num: $("#location").val(),
                time: $("#time").val(),
                date: $("#date").val(),
            };

            var response = await $.ajax({
                url: url,
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": CSRF,
                },
                data: requestData,
            });

            if (response.type === "success") {
                Swal.fire(
                    Reservations.codeText + ": " + response.body.text,
                    "",
                    "success"
                );
            } else {
                Swal.fire(response.body.text, "", "error");
            }
            return;
        },

        get: async function (params) {
            var url = params.form.getAttribute("action");

            var requestData = {
                code: $("#reservationModify").val(),
            };

            var response = await $.ajax({
                url: url,
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": CSRF,
                },
                data: requestData,
            });

            if (response.type === "success") {
                var reservation = response.body.reservation;

                ModifyReservationModal.num.val(reservation.num);
                ModifyReservationModal.name.val(reservation.customer_full_name);
                ModifyReservationModal.email.val(reservation.customer_email);
                ModifyReservationModal.location.val(reservation.restaurant_num);
                ModifyReservationModal.persons.val(reservation.number_persons);
                ModifyReservationModal.date.val(reservation.date);
                ModifyReservationModal.time.val(reservation.time);

                ModifyReservationModal.bmodal.show();
            } else {
                Swal.fire(response.body.message, "", "error");
            }
            return;
        },
    };
})();

$(document).ready(function () {
    Reservations.init();

    $('button[data-bs-toggle="tab"]').on("shown.bs.tab", function () {
        Reservations.setTab();
    });
});
