"use strict";
// Class definition

var datatable;
var Did;//id of the expense to be deleted
var KTDatatablexpense = function() {

    var kt_lead={
    data: {
        type: 'remote',
        source: {
            read: {
                url: path+'action/projecttype/get.php',
        
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
            field: 'EID',
            title: '#',
            sortable: false,
            width: 20,
            selector: {
                class: 'kt-checkbox--solid'
            },
            textAlign: 'center',
        }, {
            field: "name",
            title: "Name",
            width: 100,
            // callback function support for column rendering
           template: function(row) {
             return row.name;

               }
            },{
            field: 'description',
            title: 'Description',
            width:100,
            autoHide: true,
            template: function(row) {
                return row.description;
            },
        },{
            field: 'Actions',
            title: 'Actions',
            sortable: false,
            width: 125,
            overflow: 'visible',
            autoHide: false,
            template: function(row) {
              return '<a href="javascript:;" id="'+row.TID+'"    class="edit_exp btn btn-sm btn-clean btn-icon mr-2 " title="Edit details">\
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
                  <a href="javascript:;" id="'+row.TID+'"  class="delete_exp btn btn-sm btn-clean btn-icon edit_pr"\
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
    

var kt_extension = function() {
    // enable extension
    kt_lead.extensions = {
        // boolean or object (extension options)
        checkbox: true,
    };

    kt_lead.search = {
        input: $('#kt_datatable_search_query'),
        key: 'generalSearch'
    };

     datatable = $('#kt_datatable').KTDatatable(kt_lead);

    $('#kt_datatable_search_status').on('change', function() {
        datatable.search($(this).val().toLowerCase(), 'number');
    });


    $('#kt_datatable_search_status').selectpicker();

    datatable.on(
        'datatable-on-check datatable-on-uncheck',
        function(e) {
            var checkedNodes = datatable.rows('.datatable-row-active').nodes();
            var count = checkedNodes.length;
            $('#kt_datatable_selected_records').html(count);
            if (count > 0) {
                $('#kt_datatable_group_action_form').collapse('show');
            } else {
                $('#kt_datatable_group_action_form').collapse('hide');
            }
        });

};


 
var kt_delete = function() {
    $(document).on("click", ".delete_exp", function () {
        Did=this.id;
          Swal.fire({
            title: "Are you sure?",
            text: "You want to delete this expns",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, Delete it!",
          }).then(function (e) {
            if (e.value) {
              $.ajax({
                url: "action/expense/delete.php",
                type: "POST",
                data: { id: Did},
                dataType: "json",
                success: function (response) {
                if (response == "1") {
                  Swal.fire(
                    "Deleted!",
                    "Expense has been Deleted.",
                    "success"
                  );
                 
                  datatable.reload();
               
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
 

};

var kt_update = function() {

    $(document).on("click", ".edit_exp", function () { 
       
        
        $.ajax({//get the transactio attribute and them to the form
          url: "action/expense/getexpense.php",
          type: "POST",
          data: { id: this.id},
          dataType: "json",
          success: function (response) {
            if (response != "0") {
              $("#uexpenseid").val(response.EID);
              $("#uexpensename").val(response.name);//fill the input values 
              $("#uexpensedescription").val(response.description);
              $("#updateexpense").modal("show");
            }else{}//if couldnt retrieve transaction from database
          },
        });
      
      
      
        $("#updateexpenseform").on("submit", function (event) {//update transaction form get 3 attributes and update them
      
          event.preventDefault();
          var post_url = $(this).attr("action"); //get form action url
          var form_data = $(this).serialize(); //Encode form elements for submission
      
          Swal.fire({
            title: "Are you sure?",
            text: "You want to Update this expense",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, Update it!",
          }).then(function (e) {
            if (e.value) {
              $.post(post_url, form_data, function (response) {
                if (response == '1') {
                 
                  Swal.fire(
                    "Updated!",
                    "Expense has been Updated.",
                    "success"
                  );
                  $("#updateexpense").modal("hide");
                  $("#updateincmform")
                    .closest("form")
                    .find("input[type=text], textarea")
                    .val("");
                    
                    datatable.reload();
                 
               
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



































};





    return {
        // public functions
        init: function() {
   
            kt_extension();
            kt_delete();
            kt_update();
       

        },
    };
}();
// module var  is init at the top of the page //

      
jQuery(document).ready(function () {

   //to show the modal auto
   $.ajax({
    url: "action/projecttype/fetch.php",
    type: "POST",
    data: { get_json: 1 },
    success: function (response) {
      if(response=='1'){

        KTDatatablexpense.init();

      }
    },
  });
  $('#nexpense').on('click',function(){//insert new expense
    $("#addexpense").modal("show");
   
   
    $("#newexpense").on("submit", function (event) {
    $("#incomemodal").modal("hide");
    event.preventDefault();
    var post_url = $(this).attr("action"); //get form action url
     var form_data = $(this).serialize(); //Encode form elements for submission

    Swal.fire({
      title: "Are you sure?",
      text: "You want to insert this expense",
      icon: "warning",
      showCancelButton: !0,
      confirmButtonText: "Yes, Insert it!",
    }).then(function (e) {
      if (e.value) {
        $.post(post_url, form_data, function (response) {
          if (response==1) {
            Swal.fire(
              "Inserted!",
              "expense has been Inserted.",
              "success"
            );
            $("#newexpense")
              .closest("form")
              .find("input[type=text], textarea")
              .val("");
              datatable.reload();
              $("#addexpense").modal("hide");
          
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


























    });
    


