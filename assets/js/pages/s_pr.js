function myfunc(){  }











"use strict";
var post_url;
var form_data;

var KTSweetAlert = {


  init: function () {
  
    $("#etransactions").click(function (e) {

      $('#insertmodal').modal('show');	 
      $('#projectidinput').val(PID);
      $("#insrtextrans").on('submit', function (event) {
        $('#insertmodal').modal('hide');	 
        event.preventDefault();
        post_url = $(this).attr("action"); //get form action url
        form_data = $(this).serialize(); //Encode form elements for submission
        
        Swal.fire({
          title: "Are you sure?",
          text: "You want to insert this transaction",
          icon: "warning",
          showCancelButton: !0,
          confirmButtonText: "Yes, Insert it!",
        }).then(function (e) {
          if (e.value) {
           
        $.post(post_url, form_data, function (response) {

          
          if (response == '1') {
            
            Swal.fire("Inserted!", "Transaction has been Inserted.", "success");
            $("#insrtextrans").closest('form').find("input[type=text], textarea").val("");
            location.reload();
           
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
      }),
      $("#nproject").click(function (e) {
        $.ajax({
          url: "action/project/edit_project.php",
          type: "POST",
          data: { id:PID },
          dataType: 'json',
          success: function (response) {
            if(response!='0'){
              $('#clientname1').val(response.client_name);
              $('#phonenumber1').val(response.client_phone);
              $('#city1').val(response.city);
              $('#number1').val(response.number);
              $('#PID1').val(response.PID);

              $('#updatemodal').modal('show');	 
    
            }
          },
        });
        $("#project_form").on('submit', function (event) {
          event.preventDefault(); 
          var post_url = $(this).attr("action"); //get form action url
          var form_data = $(this).serialize(); //Encode form elements for submission

        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: !0,
          confirmButtonText: "Yes, delete it!",
        }).then(function (e) {
          if (e.value) {
            $.post(post_url, form_data, function (response) {


              if (response == '1') {
                Swal.fire("Inserted!", "Transaction has been Inserted.", "success");
                location.reload();
              } else {
  
                Swal.fire(
                  "Error",
                  "there is an error Call the developer)",
                  "error"
                );
           
              }
          });

          }
        });
        
    });





















      });
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














