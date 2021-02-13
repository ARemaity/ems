<?php
require_once (dirname(__FILE__, 2)) . '/base.php';
require_once (dirname(__FILE__, 2)) . '/' . DIR_INC . 'DB_Manage.php';
$db=new DB_Manage();
$module='expensetransaction';
$id=911;
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
	<script>
		var PID =<?= $id ?>;
		var Total = 0;
		var path = "<?php echo DIR_ROOT ?>";	
	</script>
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
								<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Single Project (number)</h5>
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
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
						<div
							class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
							<!--begin::Info-->
							<div class="d-flex align-items-center flex-wrap mr-2">
								<!--begin::Page Title-->
								<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Action Toolbar</h5>
								<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200">
								</div>
								<a href="javascript:;" id="nproject"
									class="btn btn-light-primary font-weight-bolder btn-sm">Update Project</a>
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
						<div class="container-fluid">
							<!--begin::Card-->
							<div class="card card-custom gutter-b">
								<div class="card-body">
									<div class="d-flex">
										<!--begin: Pic-->
										<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
											<div class="symbol symbol-50 symbol-lg-120">
												<img alt="Pic" src="assets/media/project-logos/3.png" />
											</div>
											<div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
												<span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
											</div>
										</div>
										<!--end: Pic-->
										<!--begin: Info-->
										<div class="flex-grow-1">
											<!--begin: Title-->
											<div class="d-flex align-items-center justify-content-between flex-wrap">
												<div class="mr-3">
													<!--begin::Name-->
													<h3 id="clientname"
														class="text-dark font-weight-bold mt-2 mb-2 mr-5"></h3>

													<!--end::Name-->
													<!--begin::Contacts-->
													<div class="d-flex flex-wrap my-2">

														<a id="phone" href="#"
															class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">

															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<svg xmlns="http://www.w3.org/2000/svg"
																	xmlns:xlink="http://www.w3.org/1999/xlink"
																	width="24px" height="24px" viewBox="0 0 24 24"
																	version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
																		fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path
																			d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z"
																			fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span></a>
														<a id="city" href="#"
															class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-02-01-052524/theme/html/demo1/dist/../src/media/svg/icons/Map/Marker1.svg--><svg
																	xmlns="http://www.w3.org/2000/svg"
																	xmlns:xlink="http://www.w3.org/1999/xlink"
																	width="24px" height="24px" viewBox="0 0 24 24"
																	version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
																		fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path
																			d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z"
																			fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span></a>

													</div>
													<!--end::Contacts-->
												</div>
												<div class="my-lg-0 my-1">
													<button id="etransactions"
														class="btn btn-sm btn-light-danger font-weight-bolder text-uppercase mr-3">
														New Expense</button>
													<button id="incomebttn"
														class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">New
														Income</button>
												</div>
											</div>
											<!--end: Title-->
											<!--begin: Content-->
											<div class="d-flex align-items-center flex-wrap justify-content-between">

												<div class="d-flex flex-wrap align-items-center py-2">
													<div class="d-flex align-items-center mr-10">
														<div class="mr-6">
															<div class="font-weight-bold mb-2">Created on : </div>
															<span id="date"
																class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold"></span>
														</div>
														<div class="">
															<div class="font-weight-bold mb-2">Number : </div>
															<span id="landnumber"
																class="btn btn-sm btn-text btn-light-info text-uppercase font-weight-bold"></span>
														</div>
													</div>
													<div
														class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0">


													</div>
												</div>
											</div>

											<!--end: Content-->
										</div>
										<!--end: Info-->
									</div>
									<div class="separator separator-solid my-7"></div>
									<!--begin: Items-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin: Item-->
										<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
											<span class="mr-4">
												<i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
											</span>
											<div class="d-flex flex-column text-dark-75">
												<span id="testbtn" class="font-weight-bolder font-size-sm">Transactions
													: </span>
												<span id="exp" class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold">$</span></span>
											</div>
										</div>
										<!--end: Item-->
										<!--begin: Item-->
										<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
											<span class="mr-4">
												<i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
											</span>
											<div class="d-flex flex-column text-dark-75">
												<span class="font-weight-bolder font-size-sm">Income : </span>
												<span id="incm" class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold">$</span></span>
											</div>
										</div>
										<!--end: Item-->
										<!--begin: Item-->
										<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
											<span class="mr-4">
												<i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
											</span>
											<div class="d-flex flex-column text-dark-75">
												<span class="font-weight-bolder font-size-sm">Remaining : </span>
												<span id="total" class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold">$</span></span>
											</div>
										</div>
										<!--end: Item-->
										<!--begin: Item-->
										<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
											<span class="mr-4">
												<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
											</span>
											<div class="d-flex flex-column flex-lg-fill">
												<span id="transnumber"
													class="text-dark-75 font-weight-bolder font-size-sm"></span>
												<a href="#" class="text-primary font-weight-bolder">View</a>
											</div>
										</div>
										<!--end: Item-->
										<!--begin: Item-->
										<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
											<span class="mr-4">
												<i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
											</span>
											<div class="d-flex flex-column">
												<span id="incmnumber"
													class="text-dark-75 font-weight-bolder font-size-sm"></span>
												<a href="#" class="text-primary font-weight-bolder">View</a>
											</div>
										</div>
										<!--end: Item-->
										<!--begin: Item-->

										<!--end: Item-->
									</div>
									<!--begin: Items-->
								</div>
							</div>
							<!--end::Card-->
							<!--begin::Row-->
							<div class="row">
								<div class="col-lg-12">


									<div class="card card-custom gutter-b">
										<div class="card-header">
											<div class="card-title">
												<h3 class="card-label">Transaction Records</h3>
											</div>
											<div class="card-toolbar">
												<ul class="nav nav-bold nav-pills">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab"
															href="#kt_tab_expense">Expense</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" id="income_tabbed"
															href="#kt_tab_income">Income</a>
													</li>

												</ul>
											</div>
										</div>
										<div class="card-body">
											<div class="tab-content">
												<div class="tab-pane fade show active" id="kt_tab_expense"
													role="tabpanel" aria-labelledby="kt_tab_expense">
													<div class="card-body">

														<div class="mb-7">
															<div class="row align-items-center">
																<div class="col-lg-9 col-xl-8">
																	<div class="row align-items-center">
																		<div class="col-md-4 my-2 my-md-0">
																			<div class="input-icon">
																				<input type="text" class="form-control"
																					placeholder="Search..."
																					id="kt_datatable_search_query" />
																				<span>
																					<i
																						class="flaticon2-search-1 text-muted"></i>
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
														<div class="alert alert-warning" id="no_data_message"
															role="alert" style="display: none;">
															<div class="alert-icon"><i class="flaticon-warning"></i>
															</div>
															<div class="alert-text">No data to Display , previous
																Displayed</div>
														</div>
														<div class="kt-section__content kt-section__content--border"
															id="loader_table" style="text-align: center;display: none;">
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
														<div class="mt-10 mb-5 collapse"
															id="kt_datatable_group_action_form">
															<div class="d-flex align-items-center">
																<div class="font-weight-bold text-danger mr-3">Selected
																	<span
																		id="kt_datatable_selected_records">0</span>records:
																</div>
																<div class="dropdown mr-2" id="kt_status_change">
																	<button type="button"
																		class="btn btn-primary btn-sm dropdown-toggle"
																		data-toggle="dropdown">Update status</button>
																	<div class="dropdown-menu dropdown-menu-sm">
																		<ul class="nav nav-hover flex-column">
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="1">
																					<span class="nav-text">Hold</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="8">
																					<span
																						class="nav-text">Ordered</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="3">
																					<span
																						class="nav-text">Rejected</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="2">
																					<span
																						class="nav-text">Approved</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="4">
																					<span
																						class="nav-text">Duplicated</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="5">
																					<span
																						class="nav-text">Trashed</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="6">
																					<span class="nav-text">No
																						Answer</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="9">
																					<span
																						class="nav-text">Postponed</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
																<!-- <button class="btn btn-sm btn-danger mr-2" type="button" id="kt_datatable_delete_all">Delete All</button> -->
															</div>
														</div>
														<div class="datatable datatable-bordered datatable-head-custom"
															id="kt_datatable_exp">


														</div>



													</div>

												</div>
												<div class="tab-pane fade" id="kt_tab_income" role="tabpanel"
													aria-labelledby="kt_tab_income">

													<div class="card-body">
														<!--begin: Search Form-->
														<!--begin::Search Form-->
														<div class="mb-7">
															<div class="row align-items-center">
																<div class="col-lg-9 col-xl-8">
																	<div class="row align-items-center">
																		<div class="col-md-4 my-2 my-md-0">
																			<div class="input-icon">
																				<input type="text" class="form-control"
																					placeholder="Search..."
																					id="kt_datatable_search_query_inc" />
																				<span>
																					<i
																						class="flaticon2-search-1 text-muted"></i>
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
														<div class="alert alert-warning" id="no_data_message_inc"
															role="alert" style="display: none;">
															<div class="alert-icon"><i class="flaticon-warning"></i>
															</div>
															<div class="alert-text">No data to Display , previous
																Displayed</div>
														</div>
														<div class="kt-section__content kt-section__content--border"
															id="loader_table_inc"
															style="text-align: center;display: none;">
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
														<div class="mt-10 mb-5 collapse"
															id="kt_datatable_group_action_form">
															<div class="d-flex align-items-center">
																<div class="font-weight-bold text-danger mr-3">Selected
																	<span
																		id="kt_datatable_selected_records">0</span>records:
																</div>
																<div class="dropdown mr-2" id="kt_status_change">
																	<button type="button"
																		class="btn btn-primary btn-sm dropdown-toggle"
																		data-toggle="dropdown">Update status</button>
																	<div class="dropdown-menu dropdown-menu-sm">
																		<ul class="nav nav-hover flex-column">
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="1">
																					<span class="nav-text">Hold</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="8">
																					<span
																						class="nav-text">Ordered</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="3">
																					<span
																						class="nav-text">Rejected</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="2">
																					<span
																						class="nav-text">Approved</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="4">
																					<span
																						class="nav-text">Duplicated</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="5">
																					<span
																						class="nav-text">Trashed</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="6">
																					<span class="nav-text">No
																						Answer</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a href="javascript:void(0)"
																					class="nav-link"
																					data-toggle="status-change"
																					data-status="9">
																					<span
																						class="nav-text">Postponed</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
																<button class="btn btn-sm btn-danger mr-2" type="button"
																	id="kt_datatable_delete_all_inc">Delete All</button>
															</div>
														</div>
														<div class="datatable datatable-bordered datatable-head-custom"
															id="kt_datatable_inc">


														</div>



													</div>
























												</div>

											</div>
										</div>
									</div>


								</div>
							</div>


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

	<?php     require_once("layout/sp_modals.php")       ?>
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
	<script src="assets/js/pages/s_pr.js"></script>






	<script>

		$("#nproject1").on("click", function () {
			$.ajax({
				url: "action/project/edit_project.php",
				type: "POST",
				data: { id: PID },
				dataType: 'json',
				success: function (response) {
					if (response != '0') {
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
				event.preventDefault(); //prevent default action 
				var post_url = $(this).attr("action"); //get form action url
				var form_data = $(this).serialize(); //Encode form elements for submission

				$.post(post_url, form_data, function (response) {


					if (response == '1') {
						console.log('nice');

					} else {

						console.log("there is an error");
					}
				});

			});



		});

	</script>


</body>

</html>