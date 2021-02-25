<?php
require_once (dirname(__FILE__, 2)) . '/base.php';
require_once (dirname(__FILE__, 2)) . '/' . DIR_INC . 'DB_Manage.php';
$db=new DB_Manage();
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
	class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

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
				
				
				
							<a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker"
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
									class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Ali</span>
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
												<span id="total_expenses" class="font-size-h2 mr-2">Null</span></div>
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
												<span id="total_income" class="font-size-h2 mr-2">Null</span></div>
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
												<span id="total_profit" class="text-dark-75 font-size-h2 font-weight-bolder mr-2">Null</span></div>
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
							<!--begin::Row-->
							<div class="row">
								<div class="col-xl-6">
									<!--begin::Charts Widget 2-->
									<div class="card card-custom bg-gray-100 card-stretch gutter-b">
										<!--begin::Header-->
										<div class="card-header h-auto border-0">
											<!--begin::Title-->
											<div class="card-title py-5">
												<h3 class="card-label">
													<span class="d-block text-dark font-weight-bolder"> Orders <i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
														title=""
														data-original-title="UC7"
														style="margin-left: 10px;"></i></span>
				
												</h3>
											</div>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<ul class="nav nav-pills nav-pills-sm nav-dark-75" role="tablist">
												<li class="nav-item">
														<a class="nav-link py-2 px-4 active" id="kt_daterangepicker" data-toggle="tab"
															href="#kt_charts_widget_2_chart_tab_1">
															<span class="nav-text font-size-sm">Date</span>
														</a>
													</li>
													
													
												   
												</ul>
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body" style="position: relative;">
											<div class="tab-content">
											<div class="tab-pane fade show active" id="kt_charts_widget_2_chart_tab_1" role="tabpanel"
													aria-labelledby="kt_charts_widget_2_chart_tab_1">
													<div id="kt_charts_day_order" style="min-height: 365px;"> </div>
												</div>
												<div class="tab-pane fade " id="kt_charts_widget_2_chart_tab_3"
													role="tabpanel" aria-labelledby="kt_charts_widget_2_chart_tab_3">
													<div id="kt_charts_month_order" style="min-height: 365px;"> </div>
												</div>
											 
												<div class="tab-pane fade" id="kt_charts_widget_2_chart_tab_2" role="tabpanel"
													aria-labelledby="kt_charts_widget_2_chart_tab_2">
													<div id="kt_charts_week_order" style="min-height: 365px;"> </div>
												</div>
											   
											</div>
											<!--begin::Chart-->
				
											<!--end::Chart-->
											<div class="resize-triggers">
												<div class="expand-trigger">
													<div style="width: 634px; height: 418px;"></div>
												</div>
												<div class="contract-trigger"></div>
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Charts Widget 2-->
								</div>
				
								<div class="col-xl-6">
									<!--begin::Advance Table Widget 1-->
									<div class="card card-custom card-stretch gutter-b">
										<!--begin::Header-->
										<div class="card-header border-0 py-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label font-weight-bolder text-dark">Top Product <i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
													title=""
													data-original-title="UC9"
													style="margin-left: 10px;"></i></span>
												<span class="text-muted mt-3 font-weight-bold font-size-sm">Top 5 Product According to
													latest Data</span>
											</h3>
				
										</div>
										<!--end::Header-->
				
										<!--begin::Body-->
										<div class="card-body py-0">
											<div id="chart_product"></div>
											<!--end::Table-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Advance Table Widget 1-->
								</div>
				
							</div>
							<!--end::Row-->
				
							<!--begin::Row-->
							<div class="row">
								<div class="col-xl-4">
									<!--begin::Mixed Widget 13-->
									<div class="card card-custom gutter-b card-stretch">
										<!--begin::Beader-->
										<div class="card-header border-0 py-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label font-weight-bolder text-dark">Sales <i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
													title=""
													data-original-title="UC8"
													style="margin-left: 10px;"></i></span>
												<span class="text-muted mt-3 font-weight-bold font-size-sm">Sales Data for the Current
													Month</span>
											</h3>
				
				
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div id="blockui_mix_sales"  class="card-body p-0 d-flex flex-column" style="position: relative;">
											<!--begin::Stats-->
											<div class="card-spacer pt-5 bg-white flex-grow-1">
												<!--begin::Row-->
												<div class="row row-paddingless">
													<div class="col mr-8">
														<div class="font-size-sm text-muted font-weight-bold">Gross Sales</div>
														<div id="gross_sales" class="font-size-h4 font-weight-bolder">$650</div>
													</div>
													<div class="col">
														<div class="font-size-sm text-muted font-weight-bold">Net Sales</div>
														<div id="net_sales" class="font-size-h4 font-weight-bolder">$233,600</div>
													</div>
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row row-paddingless mt-8">
													<div class="col mr-8">
														<div class="font-size-sm text-muted font-weight-bold">Gross Margin</div>
														<div id="gross_margin" class="font-size-h4 font-weight-bolder">$29,004</div>
													</div>
													<div class="col">
														<div class="font-size-sm text-muted font-weight-bold">Net Quantity</div>
														<div id="net_quantity" class="font-size-h4 font-weight-bolder">$1,480,00</div>
													</div>
												</div>
												<!--end::Row-->
											</div>
											<!--end::Stats-->
											<!--begin::Chart-->
											<div id="chart_sales_mixed" class="card-rounded-bottom"
												style="height: 200px; min-height: 200px;">
				
											</div>
											<!--end::Chart-->
											<div class="resize-triggers">
												<div class="expand-trigger">
													<div style="width: 414px; height: 394px;"></div>
												</div>
												<div class="contract-trigger"></div>
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 13-->
								</div>
								<div class="col-xl-4">
									<!--begin::List Widget 20-->
									<div class="card card-custom card-stretch gutter-b" id="kt_blockui_card">
										<!--begin::Header-->
										<div class="card-header border-0 pt-6 mb-2">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3">Latest
													Orders <i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
													title=""
													data-original-title="UC10"
													style="margin-left: 10px;"></i></span>
				
											</h3>
											<div class="card-toolbar">
												<button id="order_list_btn" type="button" class="btn btn-secondary">Veiw All</button>
											</div>
				
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
											<!--begin::Table-->
											<div class="table-responsive">
												<table id="latest_order" class="table table-borderless mb-0">
													<tbody>
														<!--begin::Item-->
														<tr>
															<!--begin::Icon-->
															<td class="text-left align-left pb-6">
				
																<div class="font-size-lg font-weight-bolder text-dark-75">Customer Name
																</div>
															</td>
				
															<td class="text-right align-middle pb-6">
				
																<div class="font-size-lg font-weight-bolder text-dark-75">#Item</div>
															</td>
															<td class="text-right align-middle pb-6">
				
																<div class="font-size-lg font-weight-bolder text-dark-75">Total</div>
															</td>
				
															<!--end::Content-->
														</tr>
														
													   
														<!--end::Item-->
													</tbody>
												</table>
											</div>
											<!--end::Table-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 20-->
								</div>
								<div class="col-xl-4">
									<div class="row">
										<div class="col-xl-12">
				
											<!--begin::Stats Widget 29-->
											<div class="card card-custom bgi-no-repeat card-stretch gutter-b"
												style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg);padding: 3rem 4rem;">
												<!--begin::Body-->
												<div class="card-body">
													<i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
													title=""
													data-original-title="UC11"
													style="margin-left: 10px;"></i>
													<span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 d-block"
														style="color: #8950FC;">+24%</span>
													<span
														class="card-title font-weight-bolder text-dark-75 font-size-h3 mb-0 mt-6 d-block">Visitors
														Margin</span>
													<span class="font-weight-bold text-muted font-size-sm">Compares visitors' number in
														last 2 months</span>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Stats Widget 29-->
				
										</div>
				
										<div class="col-xl-12">
											<!--begin::Stats Widget 30-->
											<div class="card card-custom bg-info card-stretch gutter-b" style="padding: 3rem 4rem;">
												<!--begin::Body-->
												<div class="card-body">
													<i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
													title=""
													data-original-title="UC12"
													style="margin-left: 10px;"></i>
													<span
														class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">-10%</span>
													<span
														class="card-title font-weight-bolder text-white font-size-h3 mb-0 mt-6 d-block">Abandoned
													   checkouts</span>
													<span class="font-weight-bold text-white font-size-sm">Monthly rate comparision
													</span>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Stats Widget 30-->
										</div>
									</div>
									<!--end::Mixed Widget 14-->
								</div>
				
							</div>
							<!--end::Row-->
				
							<!--begin::Row-->
							<div class="row">
								<div class="col-lg-6">
									<!--begin::List Widget 10-->
									<div class="card card-custom  card-stretch gutter-b" id="kt_wh_logs_card">
										<!--begin::Header-->
										<div class="card-header border-0">
											
											<h3 class="card-title font-weight-bolder text-dark">Logs  <i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
												title=""
												data-original-title="UC13"
												style="margin-left: 10px;"></i></h3>
				
				
												<div class="card-toolbar">
													<button type="button" class="btn btn-secondary">Veiw All</button>
												</div>
				
				
										</div>
										
										<!--end::Header-->
				
										<!--begin::Body-->
										<div class="card-body pt-0" id="m_wh_logs">
											<!--begin::Item-->
									 
				
									 
				
										
				
										   
										   
										</div>
										<!--end: Card Body-->
									</div>
									<!--end: Card-->
									<!--end: List Widget 10-->
								</div>
								<div class="col-xl-6">
									<!--begin::List Widget 9-->
									<div class="card card-custom card-stretch gutter-b" id='kt_event_logs_card'>
										<!--begin::Header-->
										<div class="card-header align-items-center border-0 mt-4">
											<h3 class="card-title align-items-start flex-column">
												
												<span class="font-weight-bolder text-dark">Events  <i class="fa fa-info-circle " data-html="true" data-toggle="tooltip" data-placement="right"
													title=""
													data-original-title="UC14"
													style="margin-left: 10px;"></i></span>
											   
											</h3>
											
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-4" id="event_main_body">
										   
											<div class="timeline timeline-1" id="event_log_card">
						   
												<div class="timeline-bar"></div>
											  
											   
											   
											</div>
										</div>
										<div class="card-footer d-flex justify-content-between">
											<a href="#" class="btn btn-light-primary font-weight-bold">View More</a>
										  
									 </div>
										<!--end: Card Body-->
									</div>
									<!--end: List Widget 9-->
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