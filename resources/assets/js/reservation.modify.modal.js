var ModifyReservationModal = {};

(function () {
    ModifyReservationModal = {
        num: $("#modifyNum"),
        name: $("#modifyName"),
        email: $("#modifyEmail"),
        location: $("#modifyLocation"),
        persons: $("#modifyPersons"),
        date: $("#modifyDate"),
        time: $("#modifyTime"),
        modal: $("#reservationModifyModal"),
        form: $("#reservationModifyForm"),
        bmodal: null,
        cancelReservationRoute: null,
        confirm: null,
        cancelReservationTitle: null,

        init: function () {
            ModifyReservationModal.cancelReservationRoute = ModifyReservationModal.form.data("delete-route");
            ModifyReservationModal.confirm = ModifyReservationModal.form.data("confirm");
            ModifyReservationModal.cancelReservationTitle = ModifyReservationModal.form.data("cancel-reservation-title");
            ModifyReservationModal.bmodal = new bootstrap.Modal("#reservationModifyModal");

            ModifyReservationModal.initSelect2();
            ModifyReservationModal.initDatePicker();
            ModifyReservationModal.initForm();
        },

        initForm: function () {
            ModifyReservationModal.form.validate({
                errorPlacement: function (error, element) {
                    if (
                        element.hasClass("select2") &&
                        element.next(".select2-container").length
                    ) {
                        error.insertAfter(element.next(".select2-container"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                rules: {
                    num: {
                        required: true,
                    },
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
                    ModifyReservationModal.modify(params);
                },
            });
        },

        initSelect2: function () {
            $("#modifyLocation").select2({
                placeholder: $("#modifyLocation").attr("placeholder"),
                allowClear: false,
            });

            $("#modifyPersons").select2({
                placeholder: $("#modifyPersons").attr("placeholder"),
                allowClear: false,
            });

            $("#modifyTime").select2({
                placeholder: $("#modifyTime").attr("placeholder"),
                allowClear: false,
            });

            $("select2-container").css("width", "100%");
        },

        initDatePicker: function () {
            flatpickr("#modifyDate");
        },

        modify: async function (params) {
            var url = params.form.getAttribute("action");
            url = url.replace("item_num", ModifyReservationModal.num);

            var requestData = {
                num: $("#modifyNum").val(),
                customer_full_name: $("#modifyName").val(),
                customer_email: $("#modifyEmail").val(),
                number_persons: $("#modifyPersons").val(),
                restaurant_num: $("#modifyLocation").val(),
                time: $("#modifyTime").val(),
                date: $("#modifyDate").val(),
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
                Swal.fire(response.body.message,"","success");
            } else {
                Swal.fire(response.body.message, "", "error");
            }
            return;
        },

        resetForm: function () {
            // Utils.resetForm(this.form);
        },
    };
})();

$(document).ready(function () {
    ModifyReservationModal.init();

    ModifyReservationModal.modal.on("hidden.bs.modal", function (e) {
        ModifyReservationModal.resetForm();
    });

    ModifyReservationModal.modal.on("shown.bs.modal", function (e) {
        ModifyReservationModal.initSelect2();
        ModifyReservationModal.initDatePicker();
    });

    ModifyReservationModal.modal.on("click","#cancelReservationBtn", function(e){
        e.preventDefault();

        var url = ModifyReservationModal.cancelReservationRoute;
        var params = {};
        params.url = url.replace("item_num", ModifyReservationModal.num);

        Swal.fire({
            title: ModifyReservationModal.cancelReservationTitle,
            showCancelButton: true,
            confirmButtonText: ModifyReservationModal.confirm,
            }).then(async (result) => {
                if (result.isConfirmed) {
                    var response = await fetch(url);

                    if (response.type === "success") {
                        Swal.fire(response.body.message,"","success");
                    } else {
                        Swal.fire(response.body.message, "", "error");
                    }
                }
                return;
        });
    });
});
