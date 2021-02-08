function myfunc() {}

("use strict");
var post_url;
var form_data;

var KTSweetAlert = {
  init: function () {
    $("#expensesmodal").click(function (e) {
        $("#expensemodal").modal("show");
      
      $("#project_form3").on("submit", function (event) {
        $("#expensemodal").modal("hide");
        event.preventDefault();
        post_url = $(this).attr("action"); //get form action url
        form_data = $(this).serialize(); //Encode form elements for submission

        Swal.fire({
          title: "Are you sure?",
          text: "You want to insert this expense",
          icon: "warning",
          showCancelButton: !0,
          confirmButtonText: "Yes, Insert it!",
        }).then(function (e) {
          if (e.value) {
            $.post(post_url, form_data, function (response) {
              if (response == "1") {
                Swal.fire(
                  "Inserted!",
                  "expense has been Inserted.",
                  "success"
                );
                $("#insrtextrans")
                  .closest("form")
                  .find("input[type=text], textarea")
                  .val("");
               
              } else {
                Swal.fire(
                  "Error",
                  "there is an error Call the developer)",
                  "error"
                );
              }
            });

            // ajax request
            // TODO: on response we fire swal deleted or there is an error;
            //HACK: success // Swal.fire(
            //     "Deleted!",
            //     "Your file has been deleted.",
            //     "success"
            // );
            //HACK: failed// Swal.fire(
            //     "Error",
            //     "there is an error Call the developer)",
            //     "error"
            // );
          }
        });
      });
    });
     
  },
};

jQuery(document).ready(function () {
  KTSweetAlert.init();
  //ajax  get single project row from project tbl

   


 
























});
