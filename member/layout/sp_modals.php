<!-- 3 modal for s_pr  -->

<!-- START: insert income transcation -->
<div class="modal fade" id="incomemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Income Transaction</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

					<!--begin::Container-->
					<div class="container">
						<!--begin::Card-->
						<div class="card card-custom card-transparent">
							<div class="card-body p-0">
								<!--begin::Wizard-->
								<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="first"
									data-wizard-clickable="true">
									<!--begin::Wizard Nav-->

									<!--end::Wizard Nav-->
									<!--begin::Card-->
									<div class="card card-custom card-shadowless rounded-top-0">
										<!--begin::Body-->
										<div class="card-body p-0">
											<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
												<div class="col-xl-12 col-xxl-10">
													<!--begin::Wizard Form-->
													<form
														action="<?='action/income/new.php'?>"
														method="POST"
														class="form fv-plugins-bootstrap fv-plugins-framework"
														id="insrtincmtrans">
														<div class="row justify-content-center">
															<div class="col-xl-9">
																<!--begin::Wizard Step 1-->
																<div class="my-5 step" data-wizard-type="step-content"
																	data-wizard-state="current">
																	<h5 class="text-dark font-weight-bold mb-10">Income transactions :
																		</h5>
																	<!--begin::Group-->

																	<!--end::Group-->
																	<!--begin::Group-->
                                                                    </div>


																	<div>
																	<div
																		class="form-group row fv-plugins-icon-container">
																		
																		<div class="col-lg-9 col-xl-9">
																			<input type="hidden" id="projectidinputinc"
																				class="form-control form-control-solid form-control-lg"
																				name="projectid" type="text" readonly>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>


                                                                    <div
																		class="form-group row fv-plugins-icon-container">
																		<label
																			class="col-xl-3 col-lg-3 col-form-label">Cost</label>
																		<div class="col-lg-9 col-xl-9">
																			<input
																				class="decimalonly form-control form-control-solid form-control-lg"
																				name="cost" type="text" id = "numeric1" required>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>


																			</div>

																<!--end::Wizard Actions-->
															</div>
														</div>



													<!--end::Wizard Form-->
												</div>
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Wizard-->
							</div>
						</div>
						<!--end::Card-->
					</div>
					<!--end::Container-->


				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Add IncomeTransaction</button>
			</div>
			</form>

		</div>
	</div>
</div>







<!-- Modal -->

<!-- start : insert expense transaction -->


<div class="modal fade" id="insertmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Expense Transaction</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!-- this is dummmmmmmmmmmmmmmmmmmmmm -->


					<!--begin::Container-->
					<div class="container">
						<!--begin::Card-->
						<div class="card card-custom card-transparent">
							<div class="card-body p-0">
								<!--begin::Wizard-->
								<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="first"
									data-wizard-clickable="true">
									<!--begin::Wizard Nav-->

									<!--end::Wizard Nav-->
									<!--begin::Card-->
									<div class="card card-custom card-shadowless rounded-top-0">
										<!--begin::Body-->
										<div class="card-body p-0">
											<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
												<div class="col-xl-12 col-xxl-10">
													<!--begin::Wizard Form-->
													<form
														action="<?='action/expense_tran/new.php'?>"
														method="POST"
														class="form fv-plugins-bootstrap fv-plugins-framework"
														id="insrtextrans">
														<div class="row justify-content-center">
															<div class="col-xl-9">
																<!--begin::Wizard Step 1-->
																<div class="my-5 step" data-wizard-type="step-content"
																	data-wizard-state="current">
																	<h5 class="text-dark font-weight-bold mb-10">Expense transactions :
																		</h5>
																	<!--begin::Group-->

																	<!--end::Group-->
																	<!--begin::Group-->
                                                                    </div>





																	<div>
																	<div
																		class="form-group row fv-plugins-icon-container">
																		
																		<div class="col-lg-9 col-xl-9">
																			<input type="hidden" id="projectidinput"
																				class="form-control form-control-solid form-control-lg"
																				name="projectid" type="text" readonly>
																			<div class="fv-plugins-message-container">
																			<input type="hidden" id="expnsname"
																				class="form-control form-control-solid form-control-lg"
																				name="expnsname" type="text" readonly>
																			</div>
																		</div>
																	</div>

                                                                    <div
																		class="form-group row fv-plugins-icon-container">
                                                                        <label
																			class="col-xl-3 col-lg-3 col-form-label">Expense</label>
																		<div class="col-lg-9 col-xl-9">

																		<select name="dropdown" id="dropdownexpns" class="form-control form-control-lg form-control-solid">
																			<option >Out the list...</option>

                                                                                   <?php

$result = $db->getallexpense()->get_result();
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['EID'] . "'>" . $row['name'] . "</option>";}

?>






																		</select>
																	</div>
																</div>


																	<!--end::Group-->


                                                                    <div
																		class="form-group row fv-plugins-icon-container">
																		<label
																			class="col-xl-3 col-lg-3 col-form-label">Cost</label>
																		<div class="col-lg-9 col-xl-9">
																			<input
																				class="decimalonly form-control form-control-solid form-control-lg"
																				name="cost" type="text" id = "numeric1" required>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>




																			</div>

																<!--end::Wizard Actions-->
															</div>
														</div>



													<!--end::Wizard Form-->
												</div>
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Wizard-->
							</div>
						</div>
						<!--end::Card-->
					</div>
					<!--end::Container-->


				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Add ExpenseTransaction</button>
			</div>
			</form>

		</div>
	</div>
</div>




<!-- END: insert expense transaction -->


<!-- Start: Update s_pr modal -->

<!-- Modal -->
<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Project</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!-- this is dummmmmmmmmmmmmmmmmmmmmm -->


					<!--begin::Container-->
					<div class="container">
						<!--begin::Card-->
						<div class="card card-custom card-transparent">
							<div class="card-body p-0">
								<!--begin::Wizard-->
								<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="first" data-wizard-clickable="true">
									<!--begin::Wizard Nav-->

									<!--end::Wizard Nav-->
									<!--begin::Card-->
									<div class="card card-custom card-shadowless rounded-top-0">
										<!--begin::Body-->
										<div class="card-body p-0">
											<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
												<div class="col-xl-12 col-xxl-10">
													<!--begin::Wizard Form-->
													<form action="<?='action/project/update_project.php'?>" method="POST" class="form fv-plugins-bootstrap fv-plugins-framework" id="project_form">
														<div class="row justify-content-center">
															<div class="col-xl-9">
																<!--begin::Wizard Step 1-->
																<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
																	<h5 class="text-dark font-weight-bold mb-10">Project's
																		Profile Details:</h5>
																	<!--begin::Group-->

																	<!--end::Group-->
																	<!--begin::Group-->
																</div>


																<input type="hidden" class="form-control form-control-solid form-control-lg" name="PID" type="text" id="PID1" required>


																<div>
																	<div class="form-group row fv-plugins-icon-container">
																		<label class="col-xl-3 col-lg-3 col-form-label">Client Name</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="form-control form-control-solid form-control-lg" name="clientname" type="text" id="clientname1" required>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>




																	<div class="form-group row">
																		<label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
																		<div class="col-lg-9 col-xl-9">
																			<div class="input-group input-group-solid input-group-lg">
																				<div class="input-group-prepend">
																					<span class="input-group-text">
																						<i class="la la-phone"></i>
																					</span>
																				</div>
																				<input type="text" class="numberonly form-control form-control-solid form-control-lg" name="phonenumber" placeholder="Phone" id="phonenumber1" required />

																			</div>

																		</div>



																	</div>










																	<!--end::Group-->
																	<!--begin::Group-->
																	<div class="form-group row fv-plugins-icon-container">
																		<label class="col-xl-3 col-lg-3 col-form-label">City</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="form-control form-control-solid form-control-lg" name="city" type="text" id="city1" required>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>

																	<div class="form-group row fv-plugins-icon-container">
																		<label class="col-xl-3 col-lg-3 col-form-label">Number</label>
																		<div class="col-lg-9 col-xl-9">
																			<input class="numberonly form-control form-control-solid form-control-lg" name="number" type="text" id="number1" required>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>







																	<!--end::Group-->
																	<!--begin::Group-->





																</div>


																<!--end::Wizard Actions-->
															</div>
														</div>

												</div>
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Wizard-->
							</div>
						</div>
						<!--end::Card-->
					</div>
					<!--end::Container-->


				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>

		</div>
	</div>
</div>

<!-- start :  edit transaction -->


<div class="modal fade" id="edittransactionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Expense Transaction</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!-- this is dummmmmmmmmmmmmmmmmmmmmm -->


					<!--begin::Container-->
					<div class="container">
						<!--begin::Card-->
						<div class="card card-custom card-transparent">
							<div class="card-body p-0">
								<!--begin::Wizard-->
								<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="first"
									data-wizard-clickable="true">
									<!--begin::Wizard Nav-->

									<!--end::Wizard Nav-->
									<!--begin::Card-->
									<div class="card card-custom card-shadowless rounded-top-0">
										<!--begin::Body-->
										<div class="card-body p-0">
											<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
												<div class="col-xl-12 col-xxl-10">
													<!--begin::Wizard Form-->
													<form
														action="<?='action/expense_tran/update.php'?>"
														method="POST"
														class="form fv-plugins-bootstrap fv-plugins-framework"
														id="editextrans">
														<div class="row justify-content-center">
															<div class="col-xl-9">
																<!--begin::Wizard Step 1-->
																<div class="my-5 step" data-wizard-type="step-content"
																	data-wizard-state="current">
																	<h5 class="text-dark font-weight-bold mb-10">Expense transactions :
																		</h5>
																	<!--begin::Group-->

																	<!--end::Group-->
																	<!--begin::Group-->
                                                                    </div>





																	<div>
																	<div
																		class="form-group row fv-plugins-icon-container">
																		
																		<div class="col-lg-9 col-xl-9">
																			<input type="hidden" id="transactionid"
																				class="form-control form-control-solid form-control-lg"
																				name="transactionid" type="text" readonly>
																			<div class="fv-plugins-message-container">
																			<input type="hidden" id="transactionname"
																				class="form-control form-control-solid form-control-lg"
																				name="transactionname" type="text" readonly>
																			</div>
																		</div>
																	</div>

                                                                    <div
																		class="form-group row fv-plugins-icon-container">
                                                                        <label
																			class="col-xl-3 col-lg-3 col-form-label">Expense</label>
																		<div class="col-lg-9 col-xl-9">

																		<select name="liste" id="liste" class="form-control form-control-lg form-control-solid">
																			<option >Out the list...</option>

                                                                                   <?php

$result = $db->getallexpense()->get_result();
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row['EID'] . "'>" . $row['name'] . "</option>";}

?>






																		</select>
																	</div>
																</div>


																	<!--end::Group-->


                                                                    <div
																		class="form-group row fv-plugins-icon-container">
																		<label
																			class="col-xl-3 col-lg-3 col-form-label">Cost</label>
																		<div class="col-lg-9 col-xl-9">
																			<input
																				class="decimalonly form-control form-control-solid form-control-lg"
																				name="costedit" type="text" id = "costedit" required>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>




																			</div>

																<!--end::Wizard Actions-->
															</div>
														</div>



													<!--end::Wizard Form-->
												</div>
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Wizard-->
							</div>
						</div>
						<!--end::Card-->
					</div>
					<!--end::Container-->


				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Update ExpenseTransaction</button>
			</div>
			</form>

		</div>
	</div>
</div>




<!-- END:edit expense transaction -->

<!-- START: Update income transcation -->
<div class="modal fade" id="incomemodalupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Income Transaction</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

					<!--begin::Container-->
					<div class="container">
						<!--begin::Card-->
						<div class="card card-custom card-transparent">
							<div class="card-body p-0">
								<!--begin::Wizard-->
								<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="first"
									data-wizard-clickable="true">
									<!--begin::Wizard Nav-->

									<!--end::Wizard Nav-->
									<!--begin::Card-->
									<div class="card card-custom card-shadowless rounded-top-0">
										<!--begin::Body-->
										<div class="card-body p-0">
											<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
												<div class="col-xl-12 col-xxl-10">
													<!--begin::Wizard Form-->
													<form
														action="<?='action/income/update.php'?>"
														method="POST"
														class="form fv-plugins-bootstrap fv-plugins-framework"
														id="updateincmform">
														<div class="row justify-content-center">
															<div class="col-xl-9">
																<!--begin::Wizard Step 1-->
																<div class="my-5 step" data-wizard-type="step-content"
																	data-wizard-state="current">
																	<h5 class="text-dark font-weight-bold mb-10">Update Income transactions :
																		</h5>
																	<!--begin::Group-->

																	<!--end::Group-->
																	<!--begin::Group-->
                                                                    </div>


																	<div>
																	<div
																		class="form-group row fv-plugins-icon-container">
																		
																		<div class="col-lg-9 col-xl-9">
																			<input type="hidden" id="incometransactionidupdate"
																				class="form-control form-control-solid form-control-lg"
																				name="incometransactionidupdate" type="text" readonly>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>


                                                                    <div
																		class="form-group row fv-plugins-icon-container">
																		<label
																			class="col-xl-3 col-lg-3 col-form-label">Cost</label>
																		<div class="col-lg-9 col-xl-9">
																			<input
																				class="decimalonly form-control form-control-solid form-control-lg"
																				name="incometransactioncostupdate" type="text" id = "incometransactioncostupdate" required>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>


																			</div>

																<!--end::Wizard Actions-->
															</div>
														</div>



													<!--end::Wizard Form-->
												</div>
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Wizard-->
							</div>
						</div>
						<!--end::Card-->
					</div>
					<!--end::Container-->


				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Update IncomeTransaction</button>
			</div>
			</form>

		</div>
	</div>
</div>











<!--End : Update s_pr modal -->











