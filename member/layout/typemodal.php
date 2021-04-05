



<!-- Modal inser start -->


<div class="modal fade" id="addexpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Project Type</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
			
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
														action="<?='action/projecttype/new.php'?>"
														method="POST"
														class="form fv-plugins-bootstrap fv-plugins-framework"
														id="newexpense">
														<div class="row justify-content-center">
															<div class="col-xl-9">
																<!--begin::Wizard Step 1-->
																<div class="my-5 step" data-wizard-type="step-content"
																	data-wizard-state="current">
																	<h5 class="text-dark font-weight-bold mb-10">Add Type
																		:</h5>
																	<!--begin::Group-->

																	<!--end::Group-->
																	<!--begin::Group-->
                                                                    </div>
                                                                
																				
																			
													

																	<div>
																	<div
																		class="form-group row fv-plugins-icon-container">
																		<label
																			class="col-xl-3 col-lg-3 col-form-label">Type</label>
																		<div class="col-lg-9 col-xl-9">
																			<input 
																				class="form-control form-control-solid form-control-lg"
																				name="expensename" type="text" required>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>
																	





















																	
																	<!--end::Group-->
																	<!--begin::Group-->
																	

                                                                    <div
																		class="form-group row fv-plugins-icon-container">
																		<label
																			class="col-xl-3 col-lg-3 col-form-label">Description</label>
																		<div class="col-lg-9 col-xl-9">
																			<input 
																				class="form-control form-control-solid form-control-lg"
																				name="description" type="text"  required>
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
				<button type="submit" class="btn btn-primary">Add Type</button>
			</div>
			</form>

		</div>
	</div>
</div>
	<!--end insert expense-->










<!-- Modal update start -->


<div class="modal fade" id="updateexpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Type Update</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
			
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
														action="<?='action/expense/update.php'?>"
														method="POST"
														class="form fv-plugins-bootstrap fv-plugins-framework"
														id="updateexpenseform">
														<div class="row justify-content-center">
															<div class="col-xl-9">
																<!--begin::Wizard Step 1-->
																<div class="my-5 step" data-wizard-type="step-content"
																	data-wizard-state="current">
																	<h5 class="text-dark font-weight-bold mb-10">Udate Type
																		:</h5>
																	<!--begin::Group-->

																	<!--end::Group-->
																	<!--begin::Group-->
                                                                    </div>
                                                                
																				
																			
																	<input 
																				class="form-control form-control-solid form-control-lg"
																				name="uexpenseid" id="uexpenseid" type="hidden"   >

																	<div>
																	<div
																		class="form-group row fv-plugins-icon-container">
																		<label
																			class="col-xl-3 col-lg-3 col-form-label">Type </label>
																		<div class="col-lg-9 col-xl-9">
																			<input 
																				class="form-control form-control-solid form-control-lg"
																				name="uexpensename" id="uexpensename" type="text" required>
																			<div class="fv-plugins-message-container">
																			</div>
																		</div>
																	</div>
																	





















																	
																	<!--end::Group-->
																	<!--begin::Group-->
																	

                                                                    <div
																		class="form-group row fv-plugins-icon-container">
																		<label
																			class="col-xl-3 col-lg-3 col-form-label">Description</label>
																		<div class="col-lg-9 col-xl-9">
																			<input 
																				class="form-control form-control-solid form-control-lg"
																				name="uexpensedescription" id="uexpensedescription" type="text"  required>
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
				<button type="submit" class="btn btn-primary">Update Type</button>
			</div>
			</form>

		</div>
	</div>
</div>
	<!--end update expense-->


















