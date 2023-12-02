var Reservations = {};

(function () {
  Reservations = {
    tab: null,
    form: $("#createForm"),
    codeText: null,

    init: function () {
      this.tab = new URLSearchParams(window.location.search).get("tab");
      if (Reservations.tab) $("#" + Reservations.tab + "Tab").tab("show");

      Reservations.codeText = Reservations.form.data("code-text");

      this.setTab();
      this.initSelect2();
      this.initDatePicker();
      this.initForm();
      $("#preloader").remove();
    },

    initForm: function(){
        Reservations.form.validate({
            errorPlacement: function (error, element) {
                if(element.hasClass('select2') && element.next('.select2-container').length) {
                    error.insertAfter(element.next('.select2-container'));
                } else if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                }
                else {
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
                    date: true
                },
            },
            messages: {
            },
            submitHandler: function (form) {
                var params = { form: form };
                Reservations.create(params);
            }
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
        allowClear: false
      });

      $("#persons").select2({
        placeholder: $("#persons").attr("placeholder"),
        allowClear: false
      });

      $("#time").select2({
        placeholder: $("#time").attr("placeholder"),
        allowClear: false
      });

      $("select2-container").css("width","100%");
    },

    initDatePicker: function () {
      flatpickr("#date");
    },

    create: async function(params) {
        url = params.form.getAttribute("action");
        CSRF = $('input[name="_token"]').val();

        console.log(CSRF);

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
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': CSRF
                        },
                        data: requestData,
                    });

        if (response.type === 'success') {
            Swal.fire(
                Reservations.codeText + ": " + response.body.text,
                '',
                'success'
            );
        }else{
            Swal.fire(
                response.body.text,
                '',
                'error'
            );
        }
        return;
    }
  };
})();

$(document).ready(function () {
  Reservations.init();

  $('button[data-bs-toggle="tab"]').on("shown.bs.tab", function () {
    Reservations.setTab();
  });
});
