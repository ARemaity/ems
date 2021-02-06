"use strict";
var KTSweetAlert = {
  init: function () {
  
    $("#alert_update").click(function (e) {
        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: !0,
          confirmButtonText: "Yes, delete it!",
        }).then(function (e) {
          if (result.value) {
            $.ajax({
              url: "action/project/get_projectbyid.php",
              type: "POST",
              data: { id: PID },
              dataType: "json",
              success: function (response) {
                if (response != "0") {
                  Swal.fire("Deleted!", "Your file has been deleted.", "success");
                } else {
                  Swal.fire(
                    "Error",
                    "there is an error Call the developer)",
                    "error"
                  );
                }
              },
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
      }),
      $("#alert_delete").click(function (e) {
        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: !0,
          confirmButtonText: "Yes, delete it!",
        }).then(function (e) {
          if (result.value) {
            $.ajax({
              url: "action/project/get_projectbyid.php",
              type: "POST",
              data: { id: PID },
              dataType: "json",
              success: function (response) {
                if (response != "0") {
                  Swal.fire("Deleted!", "Your file has been deleted.", "success");
                } else {
                  Swal.fire(
                    "Error",
                    "there is an error Call the developer)",
                    "error"
                  );
                }
              },
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
      }
);
  },
};

jQuery(document).ready(function () {
  KTSweetAlert.init();
  //ajax  get single project row from project tbl
  $.ajax({
    url: "action/project/get_projectbyid.php",
    type: "POST",
    data: { id: PID },
    dataType: "json",
    success: function (response) {
      if (response != "0") {
        $("#clientname").text("Client Name : " + response.client_name);
        $("#landnumber").text(response.number);
        $("#phone").append(response.client_phone);
        $("#date").text(response.created_at);
        $("#city").append(response.city);
        // $('#PID1').val(response.PID);
      }
    },
  });
  // ajax REQUEST TO GET EXPENSE ,INCOME, total,total transaction.
  $.ajax({
    url: "action/project/getexpenses.php",
    type: "POST",
    data: { id: PID },
    dataType: "json",
    success: function (response) {
      if (response != "0") {
        $("#exp").append(response.trns);
        $("#incm").append(response.incm);
        $("#total").append(response.trns - response.incm);
        $("#transnumber").append(response.trnscount + " Transactions");
        $("#incmnumber").append(response.incmcount + " income Trans.");
      }
    },
  });
});
