"use strict";
// Class definition

var KTDatatableRemoteAjaxDemo = function() {

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
                return row.number;
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
            title: 'created AT',
            width: 60,
            template: function(row) {
                return row.lp;
            },
        },{
            field: 'Actions',
            title: 'Actions',
            sortable: false,
            width: 125,
            overflow: 'visible',
            autoHide: true,
            template: function(row) {
                return '\
                    <a href="javascript:;" id="edit-lead-form"   data-toggle="modal"  data-target="#kt_modal_5" class="2i'+row.PID+'" btn  btn-sm btn-clean btn-icon mr-2" title="Edit details">\
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
                ';
            },
        }
    ],

};
    

    // basic demo
    var kt_lead_dt = function() {
        // enable extension
        kt_lead.extensions = {
            // boolean or object (extension options)
            checkbox: true,
        };

        kt_lead.search = {
            input: $('#kt_datatable_search_query'),
            key: 'generalSearch'
        };

        var datatable = $('#kt_datatable').KTDatatable(kt_lead);

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



            	// selected records status update

    

    };


    return {
        // public functions
        init: function() {
   
            kt_lead_dt();


        },
    };
}();
// module var  is init at the top of the page //
jQuery(document).ready(function() {
    $.ajax({
        url: "action/project/fetch.php",
        type: "POST",
        data: { get_json: 1 },
        success: function (response) {
          if(response=='1'){
  
            KTDatatableRemoteAjaxDemo.init();
  
          }
        },
      });

    
    
});
