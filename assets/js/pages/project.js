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
            width: 100,
            // callback function support for column rendering
            template: function(row) {
              return row.number;

     }
      //  template: function(row) {
      //           return '<a href="member/project_single.php?pid='+row.PID+'" class="btn btn-sm btn-clean btn-icon"\
      //              title="Delete">'+row.number+'</a>';

      //  }
        
            },{
            field: 'city',
            title: 'city',
            width:55,
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
            width: 70,
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
                    <a href="member/project_single.php?pid='+row.PID+'"  class="btn btn-sm btn-clean btn-icon"\
                   title="browse">\
                   <span class="svg-icon svg-icon-primary svg-icon-2x">\
                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                       <rect x="0" y="0" width="24" height="24"></rect>\
                       <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)"></path>\
                       <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)"></path>\
                       <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)"></path>\
                       <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)"></path>\
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
    


