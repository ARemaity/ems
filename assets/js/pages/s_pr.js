

"use strict"
var post_url;
var form_data;
var did;//since in the delete transaction method this.id coukdnt bee acessed inside swap.fire deleteid
var eid;///expense id for edit expense id

var incmdid;//income delete id

var datatable1;
var datatable2;


// Class definition

var KTDatatable_expense = function() {


  var kt_expense={
  data: {
      type: 'remote',
      source: {
          read: {
              url: path+'action/expense_tran/get.php',
      
              map: function(raw) {
                  // sample data mapping
                  var dataSet = raw;
                  if (typeof raw.data !== 'undefined') {
                      dataSet = raw.data;
                  }
                  return dataSet;
              },
          },
      },
      pageSize: 10,
      serverPaging: true,
      serverFiltering: true,
      serverSorting: true,
  },

  // layout definition
  layout: {
      scroll: false,
      footer: false,
  },

  // column sorting
  sortable: true,

  pagination: true,

  search: {
      input: $('#kt_datatable_search_query'),
      key: 'generalSearch'
  },

  // columns definition
  columns: [
      {
          field: 'ETID',
          title: '#',
          sortable: false,
          width: 20,
          selector: {
              class: 'kt-checkbox--solid'
          },
          textAlign: 'center',
      }, {
          field: "name",
          title: "Expense Name",
          width: 100,
          // callback function support for column rendering
          template: function(row) {
              return row.name;
          }
      },{
          field: 'cost',
          title: 'cost',
          width:70,
          autoHide: true,
          template: function(row) {
              return row.cost;
          },
      },{
          field: 'date',
          title: 'Date',
          width: 100,
          template: function(row) {
              return row.date;  
          },
      },{
          field: 'Actions',
          title: 'Actions',
          sortable: false,
          width: 125,
          overflow: 'visible',
          autoHide: false,
          template: function(row) {
              return '<a href="javascript:;" id="'+row.ETID+'"    class="edit_tran btn btn-sm btn-clean btn-icon mr-2 " title="Edit details">\
                      <span class="svg-icon svg-icon-md">\
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                  <rect x="0" y="0" width="24" height="24"/>\
                                  <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
                                  <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
                              </g>\
                          </svg>\
                      </span>\
                  </a>\
                  <a href="javascript:;" id="'+row.ETID+'"  class="delete_tran btn btn-sm btn-clean btn-icon edit_pr"\
                 title="Delete">\
                      <span class="svg-icon svg-icon-md">\
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                  <rect x="0" y="0" width="24" height="24"/>\
                                  <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                  <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                              </g>\
                          </svg>\
                      </span>\
                  </a><script></script>\
              ';
          },
      }
  ],

};
  

  // basic demo
  var kt_extension = function() {
    
      // enable extension
      kt_expense.extensions = {
          // boolean or object (extension options)
          checkbox: true,
      };

      kt_expense.search = {
          input: $('#kt_datatable_search_query'),
          key: 'generalSearch'
      };

  datatable1 = $('#kt_datatable_exp').KTDatatable(kt_expense);

      $('#kt_datatable_search_status').on('change', function() {
          datatable.search($(this).val().toLowerCase(), 'number');
      });


      $('#kt_datatable_search_status').selectpicker();

      datatable1.on(
          'datatable-on-check datatable-on-uncheck',
          function(e) {
            
              var checkedNodes = datatable1.rows('.datatable-row-active').nodes();
              var count = checkedNodes.length;
              $('#kt_datatable_selected_records').html(count);
              if (count > 0) {
                  $('#kt_datatable_group_action_form').collapse('show');
              } else {
                  $('#kt_datatable_group_action_form').collapse('hide');
              }
          });




  };


  // basic demo
  var edit_expense = function() {//edit the transaction from the table
 
  // follow this principle 
    $(document).on("click", ".edit_tran", function () { 
        $("#edittransactionmodal").modal("show");

        $.ajax({//get the transactio attribute and them to the form
          url: "action/expense_tran/getexp.php",
          type: "POST",
          data: { id: this.id},
          dataType: "json",
          success: function (response) {
            if (response != "0") {
              $("#transactionid").val(response.ETID);//fill the input values 
              $("#liste").val(response.fk_EID);
              $("#costedit").val(response.cost);
             
            }else{$("#edittransactionmodal").modal("hide");}//if couldnt retrieve transaction from database
          },
        });

      
      
        $("#editextrans").on("submit", function (event) {//update transaction form get 3 attributes and update them
      
          event.preventDefault();
          post_url = $(this).attr("action"); //get form action url
          form_data = $(this).serialize(); //Encode form elements for submission
  
          Swal.fire({
            title: "Are you sure?",
            text: "You want to insert this transactions",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, Insert it!",
          }).then(function (e) {
            if (e.value) {
              $.post(post_url, form_data, function (response) {
                if (response == '1') {
                 
                  Swal.fire(
                    "Updated!",
                    "Transaction has been Updated.",
                    "success"
                  );
                  $("#edittransactionmodal").modal("hide");
                  $("#editextrans")
                    .closest("form")
                    .find("input[type=text], textarea")
                    .val("");
                    // TODO : later on 
                    // datatable.reload();
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

}



  // basic demo
  var delete_expense = function() {
    ////////delete button for expense transaction 
 $(document).on("click", ".delete_tran", function () {
  did=this.id;
      Swal.fire({
        title: "Are you sure?",
        text: "You want to delete this Transaction",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, Delete it!",
      }).then(function (e) {
        if (e.value) {
          $.ajax({
            url: "action/expense_tran/delete.php",
            type: "POST",
            data: { id: did},
            dataType: "json",
            success: function (response) {
            if (response == "1") {
              Swal.fire(
                "Deleted!",
                "Income Transaction has been Deleted.",
                "success"
              );
              // datatable.reload();
              location.reload();
            } else {
              Swal.fire(
                "Error",
                "there is an error Call the developer)",
                "error"
              );
            }
          },
        });
        }
      });
   
  });
}
  return {
      // public functions
      init: function() {
        delete_expense();
        kt_extension();
        edit_expense();

      },
  };
}();
// module var  is init at the top of the page //




var KTDatatable_income = function() {

  var kt_income={
  data: {
      type: 'remote',
      source: {
          read: {
              url: path+'action/income/get.php',
      
              map: function(raw) {
                  // sample data mapping
                  var dataSet = raw;
                  if (typeof raw.data !== 'undefined') {
                      dataSet = raw.data;
                  }
                  return dataSet;
              },
          },
      },
      pageSize: 10,
      serverPaging: true,
      serverFiltering: true,
      serverSorting: true,
  },

  // layout definition
  layout: {
      scroll: false,
      footer: false,
  },

  // column sorting
  sortable: true,

  pagination: true,

  search: {
      input: $('#kt_datatable_search_query_inc'),
      key: 'generalSearch'
  },

  // columns definition
  columns: [
      {
          field: 'ITID',
          title: '#',
          sortable: false,
          width: 20,
          selector: {
              class: 'kt-checkbox--solid'
          },
          textAlign: 'center',
      },{
          field: 'cost',
          title: 'cost',
          width:70,
          autoHide: true,
          template: function(row) {
              return row.cost;
          },
      },{
          field: 'created_at',
          title: 'Date',
          width: 100,
          template: function(row) {
              return row.created_at;  
          },
      },{
          field: 'Actions',
          title: 'Actions',
          sortable: false,
          width: 125,
          overflow: 'visible',
          autoHide: false,
          template: function(row) {
              return '<a href="javascript:;" id="'+row.ITID+'"    class="edit_inc btn btn-sm btn-clean btn-icon mr-2 " title="Edit details">\
                      <span class="svg-icon svg-icon-md">\
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                  <rect x="0" y="0" width="24" height="24"/>\
                                  <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
                                  <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
                              </g>\
                          </svg>\
                      </span>\
                  </a>\
                  <a href="javascript:;" id="'+row.ITID+'"  class="delete_inc btn btn-sm btn-clean btn-icon edit_pr"\
                 title="Delete">\
                      <span class="svg-icon svg-icon-md">\
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                  <rect x="0" y="0" width="24" height="24"/>\
                                  <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                  <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                              </g>\
                          </svg>\
                      </span>\
                  </a><script></script>\
              ';
          },
      }
  ],

};
  

  // basic demo
  var kt_extension = function() {
    
      // enable extension
      kt_income.extensions = {
          // boolean or object (extension options)
          checkbox: true,
      };

      kt_income.search = {
          input: $('#kt_datatable_search_query_inc'),
          key: 'generalSearch'
      };

  datatable2 = $('#kt_datatable_inc').KTDatatable(kt_income);

      $('#kt_datatable_search_status_inc').on('change', function() {
          datatable.search($(this).val().toLowerCase(), 'number');
      });


  




  };


  // basic demo
  var edit_income = function() {//edit the transaction from the table
 // follow this principle 
 $(document).on("click", ".edit_inc", function () { 
  $("#incomemodalupdate").modal("show");

  $.ajax({//get the transactio attribute and them to the form
    url: "action/income/getincm.php",
    type: "POST",
    data: { id: this.id},
    dataType: "json",
    success: function (response) {
      if (response != "0") {
        
        $("#incometransactionidupdate").val(response.ITID);//fill the input values 
        $("#incometransactioncostupdate").val(response.cost);

      }else{$("#incomemodalupdate").modal("hide");}//if couldnt retrieve transaction from database
    },
  });



  $("#updateincmform").on("submit", function (event) {//update transaction form get 3 attributes and update them

    event.preventDefault();
    post_url = $(this).attr("action"); //get form action url
    form_data = $(this).serialize(); //Encode form elements for submission

    Swal.fire({
      title: "Are you sure?",
      text: "You want to Update this transactions",
      icon: "warning",
      showCancelButton: !0,
      confirmButtonText: "Yes, Update it!",
    }).then(function (e) {
      if (e.value) {
        $.post(post_url, form_data, function (response) {
          if (response == '1') {
           
            Swal.fire(
              "Updated!",
              "Transaction has been Updated.",
              "success"
            );
            $("#incomemodalupdate").modal("hide");
            $("#updateincmform")
              .closest("form")
              .find("input[type=text], textarea")
              .val("");
              // TODO : later on 
              // datatable.reload();
              // location.reload();
         
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

}



  // basic demo
  
 

var delete_income = function() {
  ////////delete button for expense transaction 
$(document).on("click", ".delete_inc", function () {
  incmdid=this.id;
    Swal.fire({
      title: "Are you sure?",
      text: "You want to delete this income",
      icon: "warning",
      showCancelButton: !0,
      confirmButtonText: "Yes, Delete it!",
    }).then(function (e) {
      if (e.value) {
        $.ajax({
          url: "action/income/delete.php",
          type: "POST",
          data: { id: incmdid},
          dataType: "json",
          success: function (response) {
          if (response == "1") {
            Swal.fire(
              "Deleted!",
              "Income Transaction has been Deleted.",
              "success"
            );
            // datatable.reload();
         
          } else {
            Swal.fire(
              "Error",
              "there is an error Call the developer)",
              "error"
            );
          }
        },
      });
      }
    });
 
});
}
  return {
      // public functions
      init: function() {
        delete_income();
        kt_extension();
        edit_income();

      },
  };
}();
// module var  is init at the top of the page //





















var KTSweetAlert = {
  init: function () {
    $("#etransactions").click(function (e) {
      $("#insertmodal").modal("show");
      $("#projectidinput").val(PID);
      $("#insrtextrans").on("submit", function (event) {
    
        event.preventDefault();
        post_url = $(this).attr("action"); //get form action url
        form_data = $(this).serialize(); //Encode form elements for submission

        Swal.fire({
          title: "Are you sure?",
          text: "You want to insert this transactions",
          icon: "warning",
          showCancelButton: !0,
          confirmButtonText: "Yes, Insert it!",
        }).then(function (e) {
          if (e.value) {
            $.post(post_url, form_data, function (response) {
              if (response == '1') {
                
                Swal.fire(
                  "Inserted!",
                  "Transaction has been Inserted.",
                  "success"
                );
                $("#insertmodal").modal("hide");
                $("#insrtextrans")
                  .closest("form")
                  .find("input[type=text], textarea")
                  .val("");
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
    }),
      $("#nproject").click(function (e) {
        $.ajax({
          url: "action/project/edit_project.php",
          type: "POST",
          data: { id: PID },
          dataType: "json",
          success: function (response) {
            if (response != "0") {
              $("#clientname1").val(response.client_name);
              $("#phonenumber1").val(response.client_phone);
              $("#city1").val(response.city);
              $("#number1").val(response.number);
              $("#PID1").val(response.PID);

              $("#updatemodal").modal("show");
            }
          },
        });
        $("#project_form").on("submit", function (event) {
          event.preventDefault();
          var post_url = $(this).attr("action"); //get form action url
          var form_data = $(this).serialize(); //Encode form elements for submission

          Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, Update it!",
          }).then(function (e) {
            if (e.value) {
              $.post(post_url, form_data, function (response) {
                if (response == "1") {
                  Swal.fire(
                    "Inserted!",
                    "Transaction has been Inserted.",
                    "success"
                  );
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
      }),$("#incomebttn").click(function (e) {
        $("#incomemodal").modal("show");
        $("#projectidinputinc").val(PID);
        $("#insrtincmtrans").on("submit", function (event) {
          $("#incomemodal").modal("hide");
          event.preventDefault();
          post_url = $(this).attr("action"); //get form action url
          form_data = $(this).serialize(); //Encode form elements for submission
  
          Swal.fire({
            title: "Are you sure?",
            text: "You want to insert this Income",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, Insert it!",
          }).then(function (e) {
            if (e.value) {
              $.post(post_url, form_data, function (response) {
                if (response == "1") {
                  Swal.fire(
                    "Inserted!",
                    "Income has been Inserted.",
                    "success"
                  );
                  $("#incomemodal")
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
            }
          });
        });
      });

  },
};

jQuery(document).ready(function () {


// TODO : aync await 
// income and expense in fetch ajax 
  $.ajax({
    url: "action/expense_tran/fetch.php",
    type: "POST",
    data: { PID: PID },
    success: function (response) {
      if(response=='1'){

        KTDatatable_expense.init();
    
      }
    },
  });




  $("#income_tabbed").on('click',function(){
    
    KTDatatable_income.init();
  

  });
    

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
        $("#exp").append(Math.round(response.trns));
        $("#incm").append(  Math.round(response.incm));

        $("#total").append(response.trns - response.incm);
        $("#transnumber").append(response.trnscount + " Transactions");
        $("#incmnumber").append(response.incmcount + " income Trans.");
      }
    },
  });


   




















});
