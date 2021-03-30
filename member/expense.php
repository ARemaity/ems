
<?php
if (session_status() == PHP_SESSION_NONE) {
   session_start();
   
}
require_once (dirname(__FILE__,2)).'/base.php';
// enabled on the production phase
if(isset($_SESSION)&&isset($_SESSION["usertype"])){
   $module='project';
?>

<!DOCTYPE html>

<html lang="en">
   <!--begin::Head-->
   <head><base href="../">
       <meta charset="utf-8" />
       <title>EMS</title>
       <meta name="description" content="Initialized via remote ajax json data" />
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       <link rel="canonical" href="https://keenthemes.com/metronic" />
       <!--begin::Fonts-->
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
       <!--end::Fonts-->
       <!--begin::Global Theme Styles(used by all pages)-->
       <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
       <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
       <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
       <!--end::Global Theme Styles-->
       <!--begin::Layout Themes(used by all pages)-->
       <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
       <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
       <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
       <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
       <!--end::Layout Themes-->
       <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

           <script type="text/javascript">
           
               var path="<?php echo DIR_ROOT ?>";
             var modulz="<?= basename(__FILE__);?>";
               </script>
       </head>
   <!--end::Head-->
   <!--begin::Body-->
   <body id="kt_body" class="page-loading-enabled header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
   
       <div class="page-loader page-loader-base">
               <div class="blockui">
                   <span>Please wait...</span>
                   <span>
                       <div class="spinner spinner-primary"></div>
                   </span>
               </div>
           </div>
       <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
           <!--begin::Logo-->
           <a href="index.html">
               <img alt="Logo" src="assets/media/logos/logo-light.png" />
           </a>
           <!--end::Logo-->
           <!--begin::Toolbar-->
           <div class="d-flex align-items-center">
               <!--begin::Aside Mobile Toggle-->
               <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                   <span></span>
               </button>
               <!--end::Aside Mobile Toggle-->
               <!--begin::Header Menu Mobile Toggle-->
               <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                   <span></span>
               </button>
               <!--end::Header Menu Mobile Toggle-->
               <!--begin::Topbar Mobile Toggle-->
               <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                   <span class="svg-icon svg-icon-xl">
                       <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                               <polygon points="0 0 24 0 24 24 0 24" />
                               <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                               <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                           </g>
                       </svg>
                       <!--end::Svg Icon-->
                   </span>
               </button>
               <!--end::Topbar Mobile Toggle-->
           </div>
           <!--end::Toolbar-->
       </div>
       <!--end::Header Mobile-->
       <div class="d-flex flex-column flex-root">
           <!--begin::Page-->
           <div class="d-flex flex-row flex-column-fluid page">
           <?php include("layout/sidebar.php")?>
               <!--end::Aside-->
               <!--begin::Wrapper-->
               <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                   <!--begin::Header-->
                   <div id="kt_header" class="header header-fixed">
                       <!--begin::Container-->
                       <div class="container-fluid d-flex align-items-stretch justify-content-between">
                           <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                               <!--begin::Details-->
                               <div class="d-flex align-items-center flex-wrap mr-2">
                                   <!--begin::Title-->
                                   <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Expense</h5>
                                   <!--end::Title-->
                                   <!--begin::Separator-->
                                   <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
                                   </div>
                                   <!--end::Separator-->
                                   <!--begin::Search Form-->
   
                                   <!--end::Search Form-->
   
                                   <!--end::Group Actions-->
                               </div>
   
   
                               <!--end::Details-->
                               <!--begin::Toolbar-->
   
                               <!--end::Toolbar-->
                           </div>
                       </div>
                       <!--end::Container-->
                       <div class="topbar">
   
                           <div class="topbar-item">
   
                           </div>
   
                           <div class="topbar-item">
                               <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                   <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                   <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Admin</span>
                               </div>
                           </div>
                           <!--end::User-->
                       </div>
                   </div>
                   <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                       <!--begin::Subheader-->
                       <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                           <div
                               class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                               <!--begin::Info-->
                               <div class="d-flex align-items-center flex-wrap mr-2">
                                   <!--begin::Page Title-->
                               
                                   <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200">
                                   </div>
                                   <a href="javascript:;" id="nexpense"
                                       class="btn btn-light-primary font-weight-bolder btn-sm">Add Expense</a>
                                   <!--end::Action-->
                               </div>
                               <!--end::Info-->
                               <!--begin::Toolbar-->
   
                               <!--end::Toolbar-->
                           </div>
                       </div>
                       <!--end::Subheader-->
                       <!--begin::Entry-->
                       <div class="d-flex flex-column-fluid">
                           <!--begin::Container-->
                           <div class="container">
                           
                               <!--end::Notice-->
                               <!--begin::Card-->
                               <div class="card card-custom">
                               
                                   <div class="card-body">
                                       <!--begin: Search Form-->
                                       <!--begin::Search Form-->
                                       <div class="mb-7">
                                           <div class="row align-items-center">
                                               <div class="col-lg-9 col-xl-8">
                                                   <div class="row align-items-center">
                                                       <div class="col-md-4 my-2 my-md-0">
                                                           <div class="input-icon">
                                                               <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                               <span>
                                                                   <i class="flaticon2-search-1 text-muted"></i>
                                                               </span>
                                                           </div>
                                                       </div>
                                                   
                                                   
                                                   </div>
                                               </div>
                                       
                                           </div>
                                       </div>
                                       <!--end::Search Form-->
                                       <!--end: Search Form-->
                                       <!--begin: Datatable-->
                                       <div class="alert alert-warning" id="no_data_message" role="alert" style="display: none;">
                                           <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                             <div class="alert-text">No data to Display , previous Displayed</div>
                                       </div>
                                       <div class="kt-section__content kt-section__content--border" id="loader_table" style="text-align: center;display: none;" >
                                           <div class="spinner-grow text-primary" role="status">
                                               <span class="sr-only">Loading...</span>
                                           </div>
                                           <div class="spinner-grow text-secondary" role="status">
                                               <span class="sr-only">Loading...</span>
                                           </div>
                                           
                                           <div class="spinner-grow text-secondary" role="status">
                                               <span class="sr-only">Loading...</span>
                                           </div>
                                           <div class="spinner-grow text-secondary" role="status">
                                               <span class="sr-only">Loading...</span>
                                           </div>
                                           <div class="spinner-grow text-primary" role="status">
                                               <span class="sr-only">Loading...</span>
                                           </div>
                                           
                                           
                                       </div>
                                       
                                       <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">

                                       </div>
                                       
                                   
                           
                                   </div>
                               </div>
                               <!--end::Card-->
                           </div>
                           <!--end::Container-->
                       </div>
                       <!--end::Entry-->
                   </div>
                   <!--end::Content-->
                   <!--begin::Footer-->
                   <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                       <!--begin::Container-->
                       <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                           <!--begin::Copyright-->
                           <div class="text-dark order-2 order-md-1">
                               <span class="text-muted font-weight-bold mr-2">2020©</span>
                               <a href="#" target="_blank" class="text-dark-75 text-hover-primary">Codvers</a>
                           </div>
                           <!--end::Copyright-->
                           <!--begin::Nav-->
                           <div class="nav nav-dark">
                               <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
                               <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                               <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                           </div>
                           <!--end::Nav-->
                       </div>
                       <!--end::Container-->
                   </div>
                   <!--end::Footer-->
               </div>
               <!--end::Wrapper-->
           </div>
           <!--end::Page-->
       </div>
       <!--end::Main-->
       <!-- begin::User Panel-->
   
       <!-- end::User Panel-->
       <!--begin::Quick Cart-->
       <div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
           <!--begin::Header-->
           <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
               <h4 class="font-weight-bold m-0">Shopping Cart</h4>
               <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
                   <i class="ki ki-close icon-xs text-muted"></i>
               </a>
           </div>
           <!--end::Header-->
           <!--begin::Content-->
           <div class="offcanvas-content">
               <!--begin::Wrapper-->
               <div class="offcanvas-wrapper mb-5 scroll-pull">
                   <!--begin::Item-->
                   <div class="d-flex align-items-center justify-content-between py-8">
                       <div class="d-flex flex-column mr-2">
                           <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
                           <span class="text-muted">The best kitchen gadget in 2020</span>
                           <div class="d-flex align-items-center mt-2">
                               <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
                               <span class="text-muted mr-1">for</span>
                               <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                   <i class="ki ki-minus icon-xs"></i>
                               </a>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                   <i class="ki ki-plus icon-xs"></i>
                               </a>
                           </div>
                       </div>
                       <a href="#" class="symbol symbol-70 flex-shrink-0">
                           <img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
                       </a>
                   </div>
                   <!--end::Item-->
                   <!--begin::Separator-->
                   <div class="separator separator-solid"></div>
                   <!--end::Separator-->
                   <!--begin::Item-->
                   <div class="d-flex align-items-center justify-content-between py-8">
                       <div class="d-flex flex-column mr-2">
                           <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
                           <span class="text-muted">Smart tool for cooking</span>
                           <div class="d-flex align-items-center mt-2">
                               <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                               <span class="text-muted mr-1">for</span>
                               <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                   <i class="ki ki-minus icon-xs"></i>
                               </a>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                   <i class="ki ki-plus icon-xs"></i>
                               </a>
                           </div>
                       </div>
                       <a href="#" class="symbol symbol-70 flex-shrink-0">
                           <img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
                       </a>
                   </div>
                   <!--end::Item-->
                   <!--begin::Separator-->
                   <div class="separator separator-solid"></div>
                   <!--end::Separator-->
                   <!--begin::Item-->
                   <div class="d-flex align-items-center justify-content-between py-8">
                       <div class="d-flex flex-column mr-2">
                           <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
                           <span class="text-muted">Professional camera for edge cutting shots</span>
                           <div class="d-flex align-items-center mt-2">
                               <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
                               <span class="text-muted mr-1">for</span>
                               <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                   <i class="ki ki-minus icon-xs"></i>
                               </a>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                   <i class="ki ki-plus icon-xs"></i>
                               </a>
                           </div>
                       </div>
                       <a href="#" class="symbol symbol-70 flex-shrink-0">
                           <img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
                       </a>
                   </div>
                   <!--end::Item-->
                   <!--begin::Separator-->
                   <div class="separator separator-solid"></div>
                   <!--end::Separator-->
                   <!--begin::Item-->
                   <div class="d-flex align-items-center justify-content-between py-8">
                       <div class="d-flex flex-column mr-2">
                           <a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
                           <span class="text-muted">Manufactoring unique objects</span>
                           <div class="d-flex align-items-center mt-2">
                               <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
                               <span class="text-muted mr-1">for</span>
                               <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                   <i class="ki ki-minus icon-xs"></i>
                               </a>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                   <i class="ki ki-plus icon-xs"></i>
                               </a>
                           </div>
                       </div>
                       <a href="#" class="symbol symbol-70 flex-shrink-0">
                           <img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
                       </a>
                   </div>
                   <!--end::Item-->
                   <!--begin::Separator-->
                   <div class="separator separator-solid"></div>
                   <!--end::Separator-->
                   <!--begin::Item-->
                   <div class="d-flex align-items-center justify-content-between py-8">
                       <div class="d-flex flex-column mr-2">
                           <a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
                           <span class="text-muted">Perfect animation tool</span>
                           <div class="d-flex align-items-center mt-2">
                               <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                               <span class="text-muted mr-1">for</span>
                               <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                   <i class="ki ki-minus icon-xs"></i>
                               </a>
                               <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                   <i class="ki ki-plus icon-xs"></i>
                               </a>
                           </div>
                       </div>
                       <a href="#" class="symbol symbol-70 flex-shrink-0">
                           <img src="assets/media/stock-600x400/img-8.jpg" title="" alt="" />
                       </a>
                   </div>
                   <!--end::Item-->
               </div>
               <!--end::Wrapper-->
               <!--begin::Purchase-->
               <div class="offcanvas-footer">
                   <div class="d-flex align-items-center justify-content-between mb-4">
                       <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
                       <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
                   </div>
                   <div class="d-flex align-items-center justify-content-between mb-7">
                       <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
                       <span class="font-weight-bolder text-primary text-right">$5640.00</span>
                   </div>
                   <div class="text-right">
                       <button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
                   </div>
               </div>
               <!--end::Purchase-->
           </div>
           <!--end::Content-->
       </div>
       <!--end::Quick Cart-->
       <!--begin::Quick Panel-->
   
       <!--end::Quick Panel-->
       <!--begin::Chat Panel-->
     

       <div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog"
       aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
       <div class="modal-dialog modal-lg update-leads-modal" role="document">
           <form method="post" action="action/edit-lead.php" id="editleads-form">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Edit User Details</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   </button>
               </div>
               <div class="modal-body">
                               <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?= $_SESSION['userId']?>"
                                   required>

                                   <input type="hidden" class="form-control" id="lead_id" name="lead_id" 
                                   required>
                                   <input type="hidden" class="form-control" id="pr_id" name="pr_id"
                                   required>	
                               
                                   <input type="hidden" class="form-control" id="user_country" name="user_country"
                                   required>
                                   <input type="hidden" class="form-control" id="user_lp" name="user_lp"
                                   required>
                                   <input type="hidden" class="form-control" id="user_status" name="user_status"
                                   required>
                       
               
                       <div class="form-group">
                           <label for="user_fullName" class="form-control-label">Name:</label>
                           <input type="text" class="form-control" id="user_fullName"
                               name="user_fullName" required>
                       </div>
                       <div class="form-group">
                           <label for="user_email" class="form-control-label">Email:</label>
                           <input type="email" class="form-control" id="user_email"
                               name="user_email">
                       </div>
                       <div class="form-group">
                           <label for="user_phone" class="form-control-label">Phone:</label>
                           <input type="number" class="form-control" id="user_phone"
                               name="user_phone" required>
                       </div>
                       <div class="form-group">
                                   <label for="address" class="form-control-label">Address:</label>
                                   <input type="text" class="form-control" id="address" name="address">
                               </div>
                       <hr>
                               <h3>Order</h3>
                               <div class="form-group">
                                   <label for="addproduct" class="form-control-label">Products & Quantities:</label>
                                   <input type="text" class="form-control" id="order_user" name="order">
                               </div>
                           
                               <div class="form-group">
                                   <label for="quantity" class="form-control-label">Total Quantities:</label>
                                   <input type="number" class="form-control" id="quantity" name="quantity">
                               </div>
                               <div class="form-group">
                               <label for="total" class="form-control-label">Total Price:</label>
                                   <input type="number" class="form-control" id="total_user" name="total">
                               </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary"
                       data-dismiss="modal">Close</button>
                   <button type="submit" name="submit"  class="btn btn-primary">Update</button>
               </div>
           </div>
       </form>
       </div>
   </div>
       <!--end: Datatable-->
       <div class="modal fade" id="kt_modal_11" tabindex="-1" role="dialog"
       aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
       <div class="modal-dialog modal-sm update-leads-modal" role="document">
       
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i aria-hidden="true" class="ki ki-close"></i>
</button>
               </div>
               <div class="modal-body">
                   
                       <div class="form-group">
                               <label for="user_phone" class="form-control-label">Phone:</label>
                               <input  style="direction: ltr;" type="number" class="form-control" id="call_lead"
                                   name="user_phone" required>
                           </div>
                   <button type="button" class="btn btn-success btn-lg calllead-btn"><i class="kt-nav__link-icon flaticon-whatsapp"></i>
                               <span class="kt-nav__link-text">Call</span></button>
                   
               </div>
               
           </div>
       
       </div>
   </div>
       <!--end::Chat Panel-->
       <!--begin::Scrolltop-->
       <div id="kt_scrolltop" class="scrolltop">
           <span class="svg-icon">
               <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                       <polygon points="0 0 24 0 24 24 0 24" />
                       <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                       <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                   </g>
               </svg>
               <!--end::Svg Icon-->
           </span>
       </div>




















       <!--begin::Global Config(global config for global JS scripts)-->
       <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
       <!--end::Global Config-->
       <!--begin::Global Theme Bundle(used by all pages)-->
       <script src="assets/plugins/global/plugins.bundle.js"></script>
       <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
       <script src="assets/js/scripts.bundle.js"></script>
       <!--end::Global Theme Bundle-->
       <!--begin::Page Scripts(used by this page)-->
       <script src="assets/js/scripts.bundle.js"></script>
       <script src="assets/js/pages/expense.js"></script>





       <?php     require_once("layout/expensesmodals.php")       ?>





















   
       <!--end::Page Scripts-->
   </body>
   <!--end::Body-->
</html>
<?php
}else{

header("Location: ../index.php");
exit();
}

?>