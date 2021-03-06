<div class="container">
	<div class="row page_row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<?php if($this->session->flashdata('msg')): ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
						×</button>
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
				<?php endif; ?>
			
			<div class="row page_row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="form-example-wrap">
			
			<form method="post" action="<?php echo base_url(); ?>admin/createstaff" class="form-horizontal" enctype="multipart/form-data" id="staffform">
				<div class="cmp-tb-hd cmp-int-hd">
					<h2>Create Staff Profile</h2>
				</div>
						
				 <div class="form-example-int form-horizental">
                            <div class="form-group">
           
		   
							<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Name <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<input type="text" placeholder="Name" name="name" class="form-control input-sm" maxlength="30">
                                    </div>
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Date of Birth <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<input type="text" placeholder="Date of Birth " name="dob" id="dob" class="form-control dob input-sm" />
                                    </div>
                                </div>
								
								<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Mobile Number <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<input type="text" placeholder="Mobile Number" name="mobile" class="form-control input-sm" maxlength="10">
                                    </div>
									
									
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Alternate Mobile Number</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                             <input type="text" placeholder="Alternate Mobile Numbe" name="sec_phone" class="form-control input-sm" maxlength="10">
                                    </div>
                                </div>
								
								<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Email ID <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<input type="text" placeholder="Email ID" name="email" class="form-control input-sm" maxlength="30">
                                    </div>
									
									
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Gender <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                           <select name="sex" class="form-control" id="sex">
													<option value="">Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
										</select>
                                    </div>
                                </div>
								
								<div class="row page_row">
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Caste</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                         <input type="text" placeholder="Caste" name="community" class="form-control input-sm" maxlength="30">
                                    </div>
									<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Community</label>
                                    </div>	
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<select name="community_class" class="form-control" id="community_class">
													<option value="">Select</option>
													<option value="SC">SC</option>
													<option value="ST">ST</option>
													<option value="BC">BC</option>
													<option value="MBC">MBC</option>
													<option value="OC">OC</option>
										</select>
										<!--<input type="text" placeholder="Community" name="community" class="form-control input-sm" maxlength="30">-->
                                    </div>
                                </div>
								
								<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Religion</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<input type="text" placeholder="Religion" name="religion" class="form-control input-sm" maxlength="30">
                                    </div>
									
									
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nationality <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                           <select name="nationality" class="form-control" id="nationality">
													<option value="">Select</option>
													<option value="Indian">Indian</option>
													<option value="Others">Others</option>
										</select>
                                    </div>
                                </div>
								
								<div class="row page_row">
								<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
									<label class="hrzn-fm">Qualification <span class="error">*</span></label>
								</div>
								 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<input type="text" placeholder="Qualification" name="qualification" class="form-control input-sm" maxlength="30">
                                    </div>
								<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Address <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                           <textarea name="address" MaxLength="150" class="form-control" rows="2" cols="80" placeholder="Address"></textarea>
                                    </div>
                                </div>
								
								<div class="row page_row">
								 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Profile Picture <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                           <input type="file" name="staff_pic" placeholder="" class="form-control" accept="image/*" data-msg-accept="Please Select Image Files" >
                                    </div>
								
								<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
									<label class="hrzn-fm">Status <span class="error">*</span></label>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<select name="status" class="form-control" id="status">
												<option value="Active">Active</option>
												<option value="Inactive">Inactive</option>
									</select>
								</div>
							</div>
							
							<div class="row page_row">
								 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                           <button class="btn btn-success notika-btn-success waves-effect">Create</button>
                                    </div>
								<div class="col-lg-5 col-md-3 col-sm-3 col-xs-12">
								</div>
							</div>
							
								
					</div>
                </div>	
              </form>
                    
            </div>
		</div>
	</div>
	
</div>
</div>
</div>
<style>
.page_row{
  margin-bottom: 20px;
}
</style>
<script type="text/javascript">
    $('#staff').addClass('active');
    $('#staffmenu').addClass('active');
	$('#create_staff').addClass('active');

	
	$.validator.addMethod('filesize', function (value, element, param) {
		return this.optional(element) || (element.files[0].size <= param)
	}, 'File size must be less than 1 MB');
  
	
		$('#staffform').validate({
					rules: {
						select_role: {
								required: true
						},
							name: {
									required: true
							},
							address: {
									required: true
							},
							email: {
									required: true,
									email: true,
									remote: {
												 url: "<?php echo base_url(); ?>admin/checkemail",
												 type: "post"
											}
							},
							sex: {
									required: true
							},
							dob: {
									required: true
							},
							nationality:{required:true},
							mobile: {
									required: true,
									maxlength: 10,
									minlength:10,
									number:true,
									remote: {
												 url: "<?php echo base_url(); ?>admin/checkmobile",
												 type: "post"
											}
							},
							//subject:{required:true },
							qualification: {
									required: true
							},
							staff_pic:{required:true,accept: "jpg,jpeg,png", filesize: 1048576  },
							status: {
									required: true
							}
					},
					messages: {
							name: "Enter staff name",
							select_role: "Select role",
							address: "Enter address",
							admission_date: "Select Admission Date",
							email: {
									 required: "Enter email ID",
									 email: "Enter valid email ID",
									 remote: "email ID already in use!"
							 },
							sex: "Select gender",
							dob: "Select date of birth",
							//age: "Enter AGE",
							nationality: "Select nationality",
							religion: "Enter religion",
							mother_tongue: "Enter The Mother tongue",
							qualification: "Enter qualification ",
							mobile: {
								required: "Enter mobile number",
								maxlength:"Invalid mobile number",
								minlength:"Invalid mobile number",
								remote: "Mobile number already exist",
								number:"Invalid mobile number"
							 },
							 staff_pic:{
								  required:"Select profile picture",
								  accept:"Please upload .jpg or .png .",
								  filesize:"File must be JPG or PNG, less than 1MB"
								},
							status: "Set a status"
					}
		});
</script>
