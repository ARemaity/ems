<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
	
 }
require_once (dirname(__FILE__, 2)) . '/base.php';
require_once (dirname(__FILE__, 2)) . '/' . DIR_INC . 'DB_Manage.php';
$db=new DB_Manage();
if(isset($_SESSION)&&isset($_SESSION["usertype"])){

?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<base href="../">

	<!-- End Google Tag Manager -->
	<meta charset="utf-8" />
	<title>Single Project</title>
	<meta name="description" content="View project page example" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="https://keenthemes.com/metronic" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css?v=7.1.8" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.1.8" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css?v=7.1.8" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="assets/css/themes/layout/header/base/light.css?v=7.1.8" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/layout/header/menu/light.css?v=7.1.8" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/layout/brand/dark.css?v=7.1.8" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/layout/aside/dark.css?v=7.1.8" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
	class="page-loading-enabled page-loading header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<div class="page-loader">
		<div class="spinner spinner-primary"></div>
	</div>
	<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
		<!--begin::Logo-->
		<a href="/metronic/demo1/index.html">
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
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
						height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path
								d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
								fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path
								d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
								fill="#000000" fill-rule="nonzero" />
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
			<!--begin::Aside-->
			<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
				<!--begin::Brand-->
				<div class="brand flex-column-auto" id="kt_brand">
					<!--begin::Logo-->
					<a href="/metronic/demo1/index.html" class="brand-logo">
						<img alt="Logo" src="assets/media/logos/logo-light.png" />
					</a>
					<!--end::Logo-->
					<!--begin::Toggle-->
					<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
						<span class="svg-icon svg-icon svg-icon-xl">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path
										d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
										fill="#000000" fill-rule="nonzero"
										transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
									<path
										d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
										fill="#000000" fill-rule="nonzero" opacity="0.3"
										transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</button>
					<!--end::Toolbar-->
				</div>
				<!--end::Brand-->
				<!--begin::Aside Menu-->

				<!--begin::Menu Container-->
				<?php include("layout/sidebar.php")?>
				<!--end::Menu Container-->

				<!--end::Aside Menu-->
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header header-fixed">
					<!--begin::Container-->
					<div class="container-fluid d-flex align-items-stretch justify-content-between">
						<div
							class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
							<!--begin::Details-->
							<div class="d-flex align-items-center flex-wrap mr-2">
								<!--begin::Title-->
								<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Home Page</h5>
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

			
						<div class="d-flex align-items-right flex-wrap mr-2">
							<a href="javascript:void(0);" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_daterangepicker"
								data-toggle="tooltip" title="" data-placement="left" data-original-title="Select  daterange">
								<span class="text-muted font-size-base font-weight-bold mr-2"
									id="kt_dashboard_daterangepicker_title">Today:</span>
								<span class="text-primary font-size-base font-weight-bolder"
									id="kt_dashboard_daterangepicker_date">Jul 29</span>
							</a>
							<!--end::Daterange-->
			
			
						</div>
				

						<div class="topbar-item">
							<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
								id="kt_quick_user_toggle">
								<span
									class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
								<span
									class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Admin</span>
							</div>
						</div>
						<!--end::User-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Subheader-->
				
					<!--end::Subheader-->
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class=" container ">
							<!--begin::Dashboard-->
							<!--begin::Row-->
						
							<!--end::Row-->
							<div class="row">
								<div class="col-xl-3 home-widget">
									<!--begin::Stats Widget 22-->
									<div class="card card-custom bgi-no-repeat card-stretch gutter-b"
										style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-3.svg)">
										<!--begin::Body-->
										<div class="card-body my-1">
											<a href="#"
												class="card-title font-weight-bolder text-info font-size-h6 mb-4 text-hover-state-dark d-block">Total Project<i
													class="fa fa-info-circle " data-html="true" data-toggle="tooltip"
													data-placement="right" title="" data-original-title="UC2"
													style="margin-left: 10px;"></i></a>
											<div class="font-weight-bold text-muted font-size-sm">
												<span class="text-dark-50 font-weight-bolder font-size-h1 mr-2" id="total_projects">Null</span></div>
											<!-- <div class="progress progress-xs mt-7 bg-info-o-60">
												<div class="progress-bar bg-info" role="progressbar" style="width: 67%;"
													aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div> -->
											<!-- <div class="percentage-container">
												<span class="font-size-h4 mr-2" style="float: right;">20%</span>
												<span class="font-weight-bold text-muted font-size-sm">Change</span>
											</div> -->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Stats Widget 22-->
								</div>
								<div class="col-xl-3 home-widget">
									<!--begin::Stats Widget 23-->
									<div class="card card-custom bg-info card-stretch gutter-b">
										<!--begin::Body-->
										<div class="card-body my-1">
											<a href="#"
												class="card-title font-weight-bolder text-white font-size-h6 mb-4 text-hover-state-dark d-block">Total Expense<i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
												title=""
												data-original-title="UC3"
												style="margin-left: 10px;"></i> </a>
											<div class="font-weight-bold text-white font-size-sm">
												<span id="total_expenses" class="font-size-h2 mr-2">--</span></div>
											<!-- <div class="progress progress-xs mt-7 bg-white-o-90" style="margin-bottom: 10px;">
												<div class="progress-bar bg-white" role="progressbar" style="width: 53%;"
													aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div> -->
											<!-- <div class="percentage-container">
												<span class="font-size-h4 mr-2 text-white" style="float: right;">53%</span>
												<span class="font-weight-bold text-white font-size-sm">Change</span>
											</div> -->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Stats Widget 23-->
								</div>
								<div class="col-xl-3 home-widget">
									<!--begin::Stats Widget 24-->
									<div class="card card-custom bg-dark card-stretch gutter-b">
										<!--begin::Body-->
										<div class="card-body my-1">
											<a href="#"
												class="card-title font-weight-bolder text-white font-size-h6 mb-4 text-hover-state-dark d-block">
												Total Income <i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
												title=""
												data-original-title="UC4"
												style="margin-left: 10px;"></i></a>
											<div class="font-weight-bold text-white font-size-sm">
												<span id="total_income" class="font-size-h2 mr-2">--</span></div>
											<!-- <div class="progress progress-xs mt-7 bg-white-o-90" style="margin-bottom: 10px;">
												<div class="progress-bar bg-white" role="progressbar" style="width: 52%;"
													aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div> -->
											<!-- <div class="percentage-container">
												<span class="font-size-h4 text-white mr-2" style="float: right;">52%</span>
												<span class="font-weight-bold text-muted font-size-sm">Change</span>
											</div> -->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Stats: Widget 24-->
								</div>
								<div class="col-xl-3 home-widget">
									<!--begin: Stats Widget 19-->
									<div class="card card-custom bg-light-success card-stretch gutter-b">
										<!--begin::Body-->
										<div class="card-body my-1">
											<a href="#"
												class="card-title font-weight-bolder text-success text-hover-state-dark font-size-h6 mb-4 d-block">Total Profit <i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
												title=""
												data-original-title="UC5"
												style="margin-left: 10px;"></i></a>
											<div class="font-weight-bold text-muted font-size-sm">
												<span id="total_profit" class="text-dark-75 font-size-h2 font-weight-bolder mr-2">--</span></div>
											<!-- <div class="progress progress-xs mt-7 bg-success-o-60" style="margin-bottom: 10px;">
												<div class="progress-bar bg-success" role="progressbar" style="width: 90%;"
													aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<div class="percentage-container">
												<span class="font-size-h4 mr-2" style="float: right;">90%</span>
												<span class="font-weight-bold text-muted font-size-sm">Change</span>
											</div> -->
										</div>
										<!--end:: Body-->
									</div>
									<!--end: Stats:Widget 19-->
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-xxl-4">
									<!--begin::Mixed Widget 1-->
									<div class="card card-custom bg-gray-100 card-stretch gutter-b">
										<!--begin::Header-->
										<div class="card-header border-0 bg-danger py-5">
											<h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>
											<div class="card-toolbar">
												<div class="dropdown dropdown-inline">
													<a href="#" class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
													<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
														<!--begin::Navigation-->
														<ul class="navi navi-hover">
															<li class="navi-header pb-1">
																<span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-shopping-cart-1"></i>
																	</span>
																	<span class="navi-text">Order</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-calendar-8"></i>
																	</span>
																	<span class="navi-text">Event</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-graph-1"></i>
																	</span>
																	<span class="navi-text">Report</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-rocket-1"></i>
																	</span>
																	<span class="navi-text">Post</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-writing"></i>
																	</span>
																	<span class="navi-text">File</span>
																</a>
															</li>
														</ul>
														<!--end::Navigation-->
													</div>
												</div>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body p-0 position-relative overflow-hidden">
											<!--begin::Chart-->
											<div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px; min-height: 200px;"><div id="apexchartsxmw1jot3" class="apexcharts-canvas apexchartsxmw1jot3 apexcharts-theme-light" style="width: 413px; height: 200px;"><svg id="SvgjsSvg1272" width="413" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1274" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1273"><clipPath id="gridRectMaskxmw1jot3"><rect id="SvgjsRect1277" width="420" height="203" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskxmw1jot3"><rect id="SvgjsRect1278" width="417" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1284" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1285" flood-color="#d13647" flood-opacity="0.5" result="SvgjsFeFlood1285Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1286" in="SvgjsFeFlood1285Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1286Out"></feComposite><feOffset id="SvgjsFeOffset1287" dx="0" dy="5" result="SvgjsFeOffset1287Out" in="SvgjsFeComposite1286Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1288" stdDeviation="3 " result="SvgjsFeGaussianBlur1288Out" in="SvgjsFeOffset1287Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1289" in="SourceGraphic" in2="SvgjsFeGaussianBlur1288Out" mode="normal" result="SvgjsFeBlend1289Out"></feBlend></filter><filter id="SvgjsFilter1291" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1292" flood-color="#d13647" flood-opacity="0.5" result="SvgjsFeFlood1292Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1293" in="SvgjsFeFlood1292Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1293Out"></feComposite><feOffset id="SvgjsFeOffset1294" dx="0" dy="5" result="SvgjsFeOffset1294Out" in="SvgjsFeComposite1293Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1295" stdDeviation="3 " result="SvgjsFeGaussianBlur1295Out" in="SvgjsFeOffset1294Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1296" in="SourceGraphic" in2="SvgjsFeGaussianBlur1295Out" mode="normal" result="SvgjsFeBlend1296Out"></feBlend></filter></defs><g id="SvgjsG1297" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1298" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1307" class="apexcharts-grid"><g id="SvgjsG1308" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1310" x1="0" y1="0" x2="413" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1311" x1="0" y1="20" x2="413" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1312" x1="0" y1="40" x2="413" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1313" x1="0" y1="60" x2="413" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1314" x1="0" y1="80" x2="413" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1315" x1="0" y1="100" x2="413" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1316" x1="0" y1="120" x2="413" y2="120" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1317" x1="0" y1="140" x2="413" y2="140" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1318" x1="0" y1="160" x2="413" y2="160" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1319" x1="0" y1="180" x2="413" y2="180" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1320" x1="0" y1="200" x2="413" y2="200" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1309" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1322" x1="0" y1="200" x2="413" y2="200" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1321" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1279" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1280" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1283" d="M 0 200L 0 125C 24.091666666666665 125 44.74166666666666 87.5 68.83333333333333 87.5C 92.925 87.5 113.57499999999999 120 137.66666666666666 120C 161.75833333333333 120 182.40833333333333 25 206.5 25C 230.59166666666667 25 251.24166666666665 100 275.3333333333333 100C 299.42499999999995 100 320.075 100 344.16666666666663 100C 368.2583333333333 100 388.9083333333333 100 413 100C 413 100 413 100 413 200M 413 100z" fill="transparent" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxmw1jot3)" filter="url(#SvgjsFilter1284)" pathTo="M 0 200L 0 125C 24.091666666666665 125 44.74166666666666 87.5 68.83333333333333 87.5C 92.925 87.5 113.57499999999999 120 137.66666666666666 120C 161.75833333333333 120 182.40833333333333 25 206.5 25C 230.59166666666667 25 251.24166666666665 100 275.3333333333333 100C 299.42499999999995 100 320.075 100 344.16666666666663 100C 368.2583333333333 100 388.9083333333333 100 413 100C 413 100 413 100 413 200M 413 100z" pathFrom="M -1 200L -1 200L 68.83333333333333 200L 137.66666666666666 200L 206.5 200L 275.3333333333333 200L 344.16666666666663 200L 413 200"></path><path id="SvgjsPath1290" d="M 0 125C 24.091666666666665 125 44.74166666666666 87.5 68.83333333333333 87.5C 92.925 87.5 113.57499999999999 120 137.66666666666666 120C 161.75833333333333 120 182.40833333333333 25 206.5 25C 230.59166666666667 25 251.24166666666665 100 275.3333333333333 100C 299.42499999999995 100 320.075 100 344.16666666666663 100C 368.2583333333333 100 388.9083333333333 100 413 100" fill="none" fill-opacity="1" stroke="#d13647" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxmw1jot3)" filter="url(#SvgjsFilter1291)" pathTo="M 0 125C 24.091666666666665 125 44.74166666666666 87.5 68.83333333333333 87.5C 92.925 87.5 113.57499999999999 120 137.66666666666666 120C 161.75833333333333 120 182.40833333333333 25 206.5 25C 230.59166666666667 25 251.24166666666665 100 275.3333333333333 100C 299.42499999999995 100 320.075 100 344.16666666666663 100C 368.2583333333333 100 388.9083333333333 100 413 100" pathFrom="M -1 200L -1 200L 68.83333333333333 200L 137.66666666666666 200L 206.5 200L 275.3333333333333 200L 344.16666666666663 200L 413 200"></path><g id="SvgjsG1281" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1328" r="0" cx="68.83333333333333" cy="87.5" class="apexcharts-marker w1vsdeqf2i no-pointer-events" stroke="#d13647" fill="#ffe2e5" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1282" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1323" x1="0" y1="0" x2="413" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1324" x1="0" y1="0" x2="413" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1325" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1326" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1327" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1306" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1275" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 100px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 79.8333px; top: 90.5px;"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;">Mar</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: transparent; display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Net Profit: </span><span class="apexcharts-tooltip-text-value">$45 thousands</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
											<!--end::Chart-->
											<!--begin::Stats-->
											<div class="card-spacer mt-n25">
												<!--begin::Row-->
												<div class="row m-0">
													<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
														<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
																	<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
																	<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
																	<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
														<a href="#" class="text-warning font-weight-bold font-size-h6">Weekly Sales</a>
													</div>
													<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
														<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"></polygon>
																	<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																	<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
														<a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">New Users</a>
													</div>
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row m-0">
													<div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
														<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"></polygon>
																	<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
																	<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
														<a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Item Orders</a>
													</div>
													<div class="col bg-light-success px-6 py-8 rounded-xl">
														<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Urgent-mail.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"></path>
																	<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
														<a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Bug Reports</a>
													</div>
												</div>
												<!--end::Row-->
											</div>
											<!--end::Stats-->
										<div class="resize-triggers"><div class="expand-trigger"><div style="width: 414px; height: 462px;"></div></div><div class="contract-trigger"></div></div></div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 1-->
								</div>
								<div class="col-lg-6 col-xxl-4">
									<!--begin::List Widget 9-->
									<div class="card card-custom card-stretch gutter-b">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0 mt-4">
											<h3 class="card-title align-items-start flex-column">
												<span class="font-weight-bolder text-dark">My Activity</span>
												<span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
											</h3>
											<div class="card-toolbar">
												<div class="dropdown dropdown-inline">
													<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="ki ki-bold-more-hor"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
														<!--begin::Navigation-->
														<ul class="navi navi-hover">
															<li class="navi-header font-weight-bold py-4">
																<span class="font-size-lg">Choose Label:</span>
																<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
															</li>
															<li class="navi-separator mb-3 opacity-70"></li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-text">
																		<span class="label label-xl label-inline label-light-success">Customer</span>
																	</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-text">
																		<span class="label label-xl label-inline label-light-danger">Partner</span>
																	</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-text">
																		<span class="label label-xl label-inline label-light-warning">Suplier</span>
																	</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-text">
																		<span class="label label-xl label-inline label-light-primary">Member</span>
																	</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-text">
																		<span class="label label-xl label-inline label-light-dark">Staff</span>
																	</span>
																</a>
															</li>
															<li class="navi-separator mt-3 opacity-70"></li>
															<li class="navi-footer py-4">
																<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																<i class="ki ki-plus icon-sm"></i>Add new</a>
															</li>
														</ul>
														<!--end::Navigation-->
													</div>
												</div>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-4">
											<!--begin::Timeline-->
											<div class="timeline timeline-6 mt-3">
												<!--begin::Item-->
												<div class="timeline-item align-items-start">
													<!--begin::Label-->
													<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-warning icon-xl"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item align-items-start">
													<!--begin::Label-->
													<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-success icon-xl"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Content-->
													<div class="timeline-content d-flex">
														<span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item align-items-start">
													<!--begin::Label-->
													<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-danger icon-xl"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Desc-->
													<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make deposit 
													<a href="#" class="text-primary">USD 700</a>. to ESL</div>
													<!--end::Desc-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item align-items-start">
													<!--begin::Label-->
													<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-primary icon-xl"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item align-items-start">
													<!--begin::Label-->
													<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-danger icon-xl"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Desc-->
													<div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order placed 
													<a href="#" class="text-primary">#XF-2356</a>.</div>
													<!--end::Desc-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item align-items-start">
													<!--begin::Label-->
													<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-info icon-xl"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item align-items-start">
													<!--begin::Label-->
													<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-primary icon-xl"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item align-items-start">
													<!--begin::Label-->
													<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-danger icon-xl"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Desc-->
													<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">New order placed 
													<a href="#" class="text-primary">#XF-2356</a>.</div>
													<!--end::Desc-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Timeline-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end: List Widget 9-->
								</div>
								<div class="col-lg-6 col-xxl-4">
									<!--begin::Stats Widget 11-->
									<div class="card card-custom card-stretch card-stretch-half gutter-b">
										<!--begin::Body-->
										<div class="card-body p-0" style="position: relative;">
											<div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
												<span class="symbol symbol-50 symbol-light-success mr-2">
													<span class="symbol-label">
														<span class="svg-icon svg-icon-xl svg-icon-success">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
																	<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
												</span>
												<div class="d-flex flex-column text-right">
													<span class="text-dark-75 font-weight-bolder font-size-h3">750$</span>
													<span class="text-muted font-weight-bold mt-2">Weekly Income</span>
												</div>
											</div>
											<div id="kt_stats_widget_11_chart" class="card-rounded-bottom" data-color="success" style="height: 150px; min-height: 150px;"><div id="apexcharts9qnz4jivh" class="apexcharts-canvas apexcharts9qnz4jivh apexcharts-theme-light" style="width: 413px; height: 150px;"><svg id="SvgjsSvg1180" width="413" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1182" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1181"><clipPath id="gridRectMask9qnz4jivh"><rect id="SvgjsRect1185" width="420" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask9qnz4jivh"><rect id="SvgjsRect1186" width="417" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1193" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1194" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1203" class="apexcharts-grid"><g id="SvgjsG1204" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1206" x1="0" y1="0" x2="413" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1207" x1="0" y1="15" x2="413" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1208" x1="0" y1="30" x2="413" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1209" x1="0" y1="45" x2="413" y2="45" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1210" x1="0" y1="60" x2="413" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1211" x1="0" y1="75" x2="413" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1212" x1="0" y1="90" x2="413" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1213" x1="0" y1="105" x2="413" y2="105" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1214" x1="0" y1="120" x2="413" y2="120" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1215" x1="0" y1="135" x2="413" y2="135" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1216" x1="0" y1="150" x2="413" y2="150" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1205" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1218" x1="0" y1="150" x2="413" y2="150" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1217" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1187" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1188" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1191" d="M 0 150L 0 40.90909090909091C 24.091666666666665 40.90909090909091 44.74166666666666 40.90909090909091 68.83333333333333 40.90909090909091C 92.925 40.90909090909091 113.57499999999999 68.18181818181817 137.66666666666666 68.18181818181817C 161.75833333333333 68.18181818181817 182.40833333333333 68.18181818181817 206.5 68.18181818181817C 230.59166666666667 68.18181818181817 251.24166666666665 54.54545454545453 275.3333333333333 54.54545454545453C 299.42499999999995 54.54545454545453 320.075 54.54545454545453 344.16666666666663 54.54545454545453C 368.2583333333333 54.54545454545453 388.9083333333333 13.636363636363626 413 13.636363636363626C 413 13.636363636363626 413 13.636363636363626 413 150M 413 13.636363636363626z" fill="rgba(201,247,245,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9qnz4jivh)" pathTo="M 0 150L 0 40.90909090909091C 24.091666666666665 40.90909090909091 44.74166666666666 40.90909090909091 68.83333333333333 40.90909090909091C 92.925 40.90909090909091 113.57499999999999 68.18181818181817 137.66666666666666 68.18181818181817C 161.75833333333333 68.18181818181817 182.40833333333333 68.18181818181817 206.5 68.18181818181817C 230.59166666666667 68.18181818181817 251.24166666666665 54.54545454545453 275.3333333333333 54.54545454545453C 299.42499999999995 54.54545454545453 320.075 54.54545454545453 344.16666666666663 54.54545454545453C 368.2583333333333 54.54545454545453 388.9083333333333 13.636363636363626 413 13.636363636363626C 413 13.636363636363626 413 13.636363636363626 413 150M 413 13.636363636363626z" pathFrom="M -1 150L -1 150L 68.83333333333333 150L 137.66666666666666 150L 206.5 150L 275.3333333333333 150L 344.16666666666663 150L 413 150"></path><path id="SvgjsPath1192" d="M 0 40.90909090909091C 24.091666666666665 40.90909090909091 44.74166666666666 40.90909090909091 68.83333333333333 40.90909090909091C 92.925 40.90909090909091 113.57499999999999 68.18181818181817 137.66666666666666 68.18181818181817C 161.75833333333333 68.18181818181817 182.40833333333333 68.18181818181817 206.5 68.18181818181817C 230.59166666666667 68.18181818181817 251.24166666666665 54.54545454545453 275.3333333333333 54.54545454545453C 299.42499999999995 54.54545454545453 320.075 54.54545454545453 344.16666666666663 54.54545454545453C 368.2583333333333 54.54545454545453 388.9083333333333 13.636363636363626 413 13.636363636363626" fill="none" fill-opacity="1" stroke="#1bc5bd" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9qnz4jivh)" pathTo="M 0 40.90909090909091C 24.091666666666665 40.90909090909091 44.74166666666666 40.90909090909091 68.83333333333333 40.90909090909091C 92.925 40.90909090909091 113.57499999999999 68.18181818181817 137.66666666666666 68.18181818181817C 161.75833333333333 68.18181818181817 182.40833333333333 68.18181818181817 206.5 68.18181818181817C 230.59166666666667 68.18181818181817 251.24166666666665 54.54545454545453 275.3333333333333 54.54545454545453C 299.42499999999995 54.54545454545453 320.075 54.54545454545453 344.16666666666663 54.54545454545453C 368.2583333333333 54.54545454545453 388.9083333333333 13.636363636363626 413 13.636363636363626" pathFrom="M -1 150L -1 150L 68.83333333333333 150L 137.66666666666666 150L 206.5 150L 275.3333333333333 150L 344.16666666666663 150L 413 150"></path><g id="SvgjsG1189" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1224" r="0" cx="0" cy="0" class="apexcharts-marker wj4mic7c4 no-pointer-events" stroke="#1bc5bd" fill="#c9f7f5" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1190" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1219" x1="0" y1="0" x2="413" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1220" x1="0" y1="0" x2="413" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1221" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1222" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1223" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1202" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1183" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 75px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(201, 247, 245);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Poppins; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
										<div class="resize-triggers"><div class="expand-trigger"><div style="width: 414px; height: 258px;"></div></div><div class="contract-trigger"></div></div></div>
										<!--end::Body-->
									</div>
									<!--end::Stats Widget 11-->
									<!--begin::Stats Widget 12-->
									<div class="card card-custom card-stretch card-stretch-half gutter-b">
										<!--begin::Body-->
										<div class="card-body p-0" style="position: relative;">
											<div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
												<span class="symbol symbol-50 symbol-light-primary mr-2">
													<span class="symbol-label">
														<span class="svg-icon svg-icon-xl svg-icon-primary">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"></polygon>
																	<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																	<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
												</span>
												<div class="d-flex flex-column text-right">
													<span class="text-dark-75 font-weight-bolder font-size-h3">+6,5K</span>
													<span class="text-muted font-weight-bold mt-2">New Users</span>
												</div>
											</div>
											<div id="kt_stats_widget_12_chart" class="card-rounded-bottom" data-color="primary" style="height: 150px; min-height: 150px;"><div id="apexchartsxo1pplxb" class="apexcharts-canvas apexchartsxo1pplxb apexcharts-theme-light" style="width: 413px; height: 150px;"><svg id="SvgjsSvg1226" width="413" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1228" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1227"><clipPath id="gridRectMaskxo1pplxb"><rect id="SvgjsRect1231" width="420" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskxo1pplxb"><rect id="SvgjsRect1232" width="417" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1239" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1240" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1249" class="apexcharts-grid"><g id="SvgjsG1250" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1252" x1="0" y1="0" x2="413" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1253" x1="0" y1="15" x2="413" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1254" x1="0" y1="30" x2="413" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1255" x1="0" y1="45" x2="413" y2="45" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1256" x1="0" y1="60" x2="413" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1257" x1="0" y1="75" x2="413" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1258" x1="0" y1="90" x2="413" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1259" x1="0" y1="105" x2="413" y2="105" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1260" x1="0" y1="120" x2="413" y2="120" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1261" x1="0" y1="135" x2="413" y2="135" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1262" x1="0" y1="150" x2="413" y2="150" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1251" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1264" x1="0" y1="150" x2="413" y2="150" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1263" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1233" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1234" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1237" d="M 0 150L 0 40.90909090909091C 24.091666666666665 40.90909090909091 44.74166666666666 40.90909090909091 68.83333333333333 40.90909090909091C 92.925 40.90909090909091 113.57499999999999 68.18181818181817 137.66666666666666 68.18181818181817C 161.75833333333333 68.18181818181817 182.40833333333333 68.18181818181817 206.5 68.18181818181817C 230.59166666666667 68.18181818181817 251.24166666666665 54.54545454545453 275.3333333333333 54.54545454545453C 299.42499999999995 54.54545454545453 320.075 54.54545454545453 344.16666666666663 54.54545454545453C 368.2583333333333 54.54545454545453 388.9083333333333 13.636363636363626 413 13.636363636363626C 413 13.636363636363626 413 13.636363636363626 413 150M 413 13.636363636363626z" fill="rgba(225,240,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxo1pplxb)" pathTo="M 0 150L 0 40.90909090909091C 24.091666666666665 40.90909090909091 44.74166666666666 40.90909090909091 68.83333333333333 40.90909090909091C 92.925 40.90909090909091 113.57499999999999 68.18181818181817 137.66666666666666 68.18181818181817C 161.75833333333333 68.18181818181817 182.40833333333333 68.18181818181817 206.5 68.18181818181817C 230.59166666666667 68.18181818181817 251.24166666666665 54.54545454545453 275.3333333333333 54.54545454545453C 299.42499999999995 54.54545454545453 320.075 54.54545454545453 344.16666666666663 54.54545454545453C 368.2583333333333 54.54545454545453 388.9083333333333 13.636363636363626 413 13.636363636363626C 413 13.636363636363626 413 13.636363636363626 413 150M 413 13.636363636363626z" pathFrom="M -1 150L -1 150L 68.83333333333333 150L 137.66666666666666 150L 206.5 150L 275.3333333333333 150L 344.16666666666663 150L 413 150"></path><path id="SvgjsPath1238" d="M 0 40.90909090909091C 24.091666666666665 40.90909090909091 44.74166666666666 40.90909090909091 68.83333333333333 40.90909090909091C 92.925 40.90909090909091 113.57499999999999 68.18181818181817 137.66666666666666 68.18181818181817C 161.75833333333333 68.18181818181817 182.40833333333333 68.18181818181817 206.5 68.18181818181817C 230.59166666666667 68.18181818181817 251.24166666666665 54.54545454545453 275.3333333333333 54.54545454545453C 299.42499999999995 54.54545454545453 320.075 54.54545454545453 344.16666666666663 54.54545454545453C 368.2583333333333 54.54545454545453 388.9083333333333 13.636363636363626 413 13.636363636363626" fill="none" fill-opacity="1" stroke="#3699ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxo1pplxb)" pathTo="M 0 40.90909090909091C 24.091666666666665 40.90909090909091 44.74166666666666 40.90909090909091 68.83333333333333 40.90909090909091C 92.925 40.90909090909091 113.57499999999999 68.18181818181817 137.66666666666666 68.18181818181817C 161.75833333333333 68.18181818181817 182.40833333333333 68.18181818181817 206.5 68.18181818181817C 230.59166666666667 68.18181818181817 251.24166666666665 54.54545454545453 275.3333333333333 54.54545454545453C 299.42499999999995 54.54545454545453 320.075 54.54545454545453 344.16666666666663 54.54545454545453C 368.2583333333333 54.54545454545453 388.9083333333333 13.636363636363626 413 13.636363636363626" pathFrom="M -1 150L -1 150L 68.83333333333333 150L 137.66666666666666 150L 206.5 150L 275.3333333333333 150L 344.16666666666663 150L 413 150"></path><g id="SvgjsG1235" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1270" r="0" cx="0" cy="0" class="apexcharts-marker w60ye7qmq no-pointer-events" stroke="#3699ff" fill="#e1f0ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1236" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1265" x1="0" y1="0" x2="413" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1266" x1="0" y1="0" x2="413" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1267" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1268" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1269" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1248" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1229" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 75px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(225, 240, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Poppins; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
										<div class="resize-triggers"><div class="expand-trigger"><div style="width: 414px; height: 258px;"></div></div><div class="contract-trigger"></div></div></div>
										<!--end::Body-->
									</div>
									<!--end::Stats Widget 12-->
								</div>
								<div class="col-lg-6 col-xxl-4 order-1 order-xxl-1">
									<!--begin::List Widget 1-->
									<div class="card card-custom card-stretch gutter-b">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label font-weight-bolder text-dark">Tasks Overview</span>
												<span class="text-muted mt-3 font-weight-bold font-size-sm">Pending 10 tasks</span>
											</h3>
											<div class="card-toolbar">
												<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
													<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="ki ki-bold-more-hor"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
														<!--begin::Navigation-->
														<ul class="navi navi-hover py-5">
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-drop"></i>
																	</span>
																	<span class="navi-text">New Group</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-list-3"></i>
																	</span>
																	<span class="navi-text">Contacts</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-rocket-1"></i>
																	</span>
																	<span class="navi-text">Groups</span>
																	<span class="navi-link-badge">
																		<span class="label label-light-primary label-inline font-weight-bold">new</span>
																	</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-bell-2"></i>
																	</span>
																	<span class="navi-text">Calls</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-gear"></i>
																	</span>
																	<span class="navi-text">Settings</span>
																</a>
															</li>
															<li class="navi-separator my-3"></li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-magnifier-tool"></i>
																	</span>
																	<span class="navi-text">Help</span>
																</a>
															</li>
															<li class="navi-item">
																<a href="#" class="navi-link">
																	<span class="navi-icon">
																		<i class="flaticon2-bell-2"></i>
																	</span>
																	<span class="navi-text">Privacy</span>
																	<span class="navi-link-badge">
																		<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																	</span>
																</a>
															</li>
														</ul>
														<!--end::Navigation-->
													</div>
												</div>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-8">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-10">
												<!--begin::Symbol-->
												<div class="symbol symbol-40 symbol-light-primary mr-5">
													<span class="symbol-label">
														<span class="svg-icon svg-icon-xl svg-icon-primary">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
																	<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column font-weight-bold">
													<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Project Briefing</a>
													<span class="text-muted">Project Manager</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-10">
												<!--begin::Symbol-->
												<div class="symbol symbol-40 symbol-light-warning mr-5">
													<span class="symbol-label">
														<span class="svg-icon svg-icon-lg svg-icon-warning">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																	<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column font-weight-bold">
													<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Concept Design</a>
													<span class="text-muted">Art Director</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-10">
												<!--begin::Symbol-->
												<div class="symbol symbol-40 symbol-light-success mr-5">
													<span class="symbol-label">
														<span class="svg-icon svg-icon-lg svg-icon-success">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
																	<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column font-weight-bold">
													<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Functional Logics</a>
													<span class="text-muted">Lead Developer</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-10">
												<!--begin::Symbol-->
												<div class="symbol symbol-40 symbol-light-danger mr-5">
													<span class="symbol-label">
														<span class="svg-icon svg-icon-lg svg-icon-danger">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Attachment2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)"></path>
																	<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)"></path>
																	<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)"></path>
																	<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column font-weight-bold">
													<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Development</a>
													<span class="text-muted">DevOps</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-2">
												<!--begin::Symbol-->
												<div class="symbol symbol-40 symbol-light-info mr-5">
													<span class="symbol-label">
														<span class="svg-icon svg-icon-lg svg-icon-info">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Shield-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
																	<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
																	<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Text-->
												<div class="d-flex flex-column font-weight-bold">
													<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Testing</a>
													<span class="text-muted">QA Managers</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 1-->
								</div>
								<div class="col-xxl-8 order-2 order-xxl-1">
									<!--begin::Advance Table Widget 2-->
									<div class="card card-custom card-stretch gutter-b">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label font-weight-bolder text-dark">New Arrivals</span>
												<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
											</h3>
											<div class="card-toolbar">
												<ul class="nav nav-pills nav-pills-sm nav-dark-75">
													<li class="nav-item">
														<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_1">Month</a>
													</li>
													<li class="nav-item">
														<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_2">Week</a>
													</li>
													<li class="nav-item">
														<a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_11_3">Day</a>
													</li>
												</ul>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2 pb-0 mt-n3">
											<div class="tab-content mt-5" id="myTabTables11">
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
													<!--begin::Table-->
													<div class="table-responsive">
														<table class="table table-borderless table-vertical-center">
															<thead>
																<tr>
																	<th class="p-0 w-40px"></th>
																	<th class="p-0 min-w-200px"></th>
																	<th class="p-0 min-w-100px"></th>
																	<th class="p-0 min-w-125px"></th>
																	<th class="p-0 min-w-110px"></th>
																	<th class="p-0 min-w-150px"></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">Laravel, Metronic</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-success label-inline">Success</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-bold">AngularJS, C#</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-danger label-inline">Rejected</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">ReactJS, Ruby</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-warning label-inline">In Progress</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light mr-1">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">ReactJs, HTML</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-primary label-inline">Approved</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">Python, MySQL</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-warning label-inline">In Progress</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
													<!--begin::Table-->
													<div class="table-responsive">
														<table class="table table-borderless table-vertical-center">
															<thead>
																<tr>
																	<th class="p-0 w-40px"></th>
																	<th class="p-0 min-w-200px"></th>
																	<th class="p-0 min-w-100px"></th>
																	<th class="p-0 min-w-125px"></th>
																	<th class="p-0 min-w-110px"></th>
																	<th class="p-0 min-w-150px"></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">Python, MySQL</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-warning label-inline">In Progress</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">Laravel, Metronic</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-success label-inline">Success</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-bold">AngularJS, C#</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-danger label-inline">Rejected</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light mr-1">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">ReactJs, HTML</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-primary label-inline">Approved</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">ReactJS, Ruby</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-warning label-inline">In Progress</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
													<!--begin::Table-->
													<div class="table-responsive">
														<table class="table table-borderless table-vertical-center">
															<thead>
																<tr>
																	<th class="p-0 w-40px"></th>
																	<th class="p-0 min-w-200px"></th>
																	<th class="p-0 min-w-100px"></th>
																	<th class="p-0 min-w-125px"></th>
																	<th class="p-0 min-w-110px"></th>
																	<th class="p-0 min-w-150px"></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light mr-1">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">ReactJs, HTML</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-primary label-inline">Approved</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">Python, MySQL</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-warning label-inline">In Progress</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">Laravel, Metronic</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-success label-inline">Success</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-bold">AngularJS, C#</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-danger label-inline">Rejected</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="pl-0 py-4">
																		<div class="symbol symbol-50 symbol-light">
																			<span class="symbol-label">
																				<img src="/metronic/theme/html/demo1/dist/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="">
																			</span>
																		</div>
																	</td>
																	<td class="pl-0">
																		<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
																		<div>
																			<span class="font-weight-bolder">Email:</span>
																			<a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
																		</div>
																	</td>
																	<td class="text-right">
																		<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
																		<span class="text-muted font-weight-bold">Paid</span>
																	</td>
																	<td class="text-right">
																		<span class="text-muted font-weight-500">ReactJS, Ruby</span>
																	</td>
																	<td class="text-right">
																		<span class="label label-lg label-light-warning label-inline">In Progress</span>
																	</td>
																	<td class="text-right pr-0">
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																						<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																						<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																		<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24"></rect>
																						<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																						<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</a>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Advance Table Widget 2-->
								</div>
				
							
					
							</div>
				
							
							<!--end::Row-->
				
							<!--end::Dashboard-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div
						class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted font-weight-bold mr-2">2021©</span>
							<a href="http://keenthemes.com/metronic" target="_blank"
								class="text-dark-75 text-hover-primary">Keenthemes</a>
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

	<div id="kt_scrolltop" class="scrolltop">
		<span class="svg-icon">
			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
				height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
					<path
						d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
						fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</div>

	<!--begin::Global Config(global config for global JS scripts)-->
	<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js?v=7.1.8"></script>
	<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.1.8"></script>
	<script src="assets/js/scripts.bundle.js?v=7.1.8"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="assets/js/pages/widgets.js?v=7.1.8"></script>
	<!--end::Page Scripts-->
	<script src="assets/js/pages/home.js"></script>
	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.7"></script>
<!--begin::Page Scripts(used by this page)-->
<!-- <script src="../assets/js/pages/widgets.js?v=7.0.6"></script> -->

<!--end::Page Scripts-->

<!--begin::Page Vendors(used by this page)-->
<script src="assets/plugins/custom/flot/flot.bundle.js?v=7.0.6"></script>
<!--end::Page Vendors-->
<script src="assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js?"></script>

</body>

</html>
<?php
}else{

header("Location: ../index.php");
exit();
}

?>