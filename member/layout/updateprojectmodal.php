<!-- Modal -->
<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
																				<input type="text" class="form-control form-control-solid form-control-lg" name="phonenumber" placeholder="Phone" id="phonenumber1" required />

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
																			<input class="form-control form-control-solid form-control-lg" name="number" type="text" id="number1" required>
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


<script>


$("#nproject").on("click", function(){
	 

             
                        $.ajax({
                            url: "action/project/edit_project.php",
                            type: "POST",
                            data: { id:PID },
                            dataType: 'json',
                            success: function (response) {
                              if(response!='0'){
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









