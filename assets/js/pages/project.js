"use strict";
// Class definition
var pidd;//project to be deleted inorder to azcess it inside firemethod
var datatable;
var KTDatatableproject = function() {

    var kt_lead={
    data: {
        type: 'remote',
        source: {
            read: {
                url: path+'action/project/get_project.php',
        
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
            field: 'PID',
            title: '#',
            sortable: false,
            width: 20,
            selector: {
                class: 'kt-checkbox--solid'
            },
            textAlign: 'center',
        }, {
            field: "number",
            title: "Property Number",
            width: 70,
            // callback function support for column rendering
       template: function(row) {
                return '<a href="member/project_single.php?pid='+row.PID+'" class="btn btn-sm btn-clean btn-icon"\
                   title="Delete">'+row.client_name+'</a>';

       }
        
            },{
            field: 'city',
            title: 'city',
            width:70,
            autoHide: true,
            template: function(row) {
                return row.city;
            },
        }, {
            field: 'client_name',
            title: 'client Name',
            width: 100,
            template: function(row) {
                return row.client_name;
            },
        },{
            field: 'client_phone',
            title: 'Client Phone',
            width: 80,

            template: function(row) {
                return row.client_phone;
            },
        },{
            field: 'created_at',
            title: 'Date',
            width: 60,
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
                return '<a href="javascript:;" id="'+row.PID+'" class="delete_pr btn btn-sm btn-clean btn-icon"\
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
                    </a>\
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


  // basic demo
//   TODO : add delete btn with sweet alert
  var kt_delete = function() {
    // $(document).on("click", ".edit_tran", function () { 
        $(document).on("click", ".delete_pr", function () {
            pidd=this.id;
              Swal.fire({
                title: "Are you sure?",
                text: "You want to delete this project",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, Delete it!",
              }).then(function (e) {
                if (e.value) {
                  $.ajax({
                    url: "action/project/delete.php",
                    type: "POST",
                    data: { id: pidd},
                    dataType: "json",
                    success: function (response) {
                    if (response == "1") {
                      Swal.fire(
                        "Deleted!",
                        "Income Project has been Deleted.",
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
}

    return {
        // public functions
        init: function() {
   
            kt_extension();
            kt_delete();
         

        },
    };
}();
// module var  is init at the top of the page //

      
jQuery(document).ready(function () {

  $(".numberonly").on("keypress keyup blur", function (event) {
    $(this).val($(this).val().replace(/[^\d].+/, ""));
    if ((event.which < 48 || event.which > 57)) {
      $(".error").css("display", "inline");
      event.preventDefault();
    } else {
      $(".error").css("display", "none");
    }
  });



   //to show the modal auto
    $.ajax({
        url: "action/project/fetch.php",
        type: "POST",
        data: { get_json: 1 },
        success: function (response) {
          if(response=='1'){
  
            KTDatatableproject.init();
  
          }
        },
      });

    


      $('#nproject').on('click',function(){
     
        $('#addprojectmodal').modal('show');
     
        $("#newprojectform").on("submit", function (event) {
      
          event.preventDefault();
          var post_url = $(this).attr("action"); //get form action url
          var form_data = $(this).serialize(); //Encode form elements for submission
  
          Swal.fire({
            title: "Are you sure?",
            text: "You want to insert this transactions",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, Insert it!",
          }).then(function (e) {
            if (e.value) {
              $.post(post_url, form_data, function (response) {
                if (typeof response !== "boolean") {
                  
                  Swal.fire(
                    "Inserted!",
                    "Transaction has been Inserted.",
                    "success"
                  );
                  $("#addprojectmodal").modal("hide");
               datatable.reload();
                  $("#newprojectform")
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
    
    });
    


