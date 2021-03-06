<?php foreach($result as $rows){
	$sDOB = trim($rows->dob);
} ?>
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
			
			<form method="post" action="<?php echo base_url(); ?>admin/profile_update" class="form-horizontal" enctype="multipart/form-data" id="staffform">
				<div class="cmp-tb-hd cmp-int-hd">
					<h2>Profile</h2>
				</div>
						
				 <div class="form-example-int form-horizental">
                            <div class="form-group">
           
								<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Username</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
										<input type="text" placeholder="user name" name="user_name" class="form-control input-sm" value="<?php echo $rows->user_name; ?>" disabled>
                                        </div>
                                    </div>
									
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12"></div>
                                </div>
		   
							<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Name  <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
										<input type="text" placeholder="Name" name="name" class="form-control input-sm" value="<?php echo $rows->name; ?>" maxlength="30">
                                        </div>
                                    </div>
									
									
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Date of Birth  <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
											<input type="text" placeholder="Date of Birth " name="dob" id="dob" class="form-control dob input-sm" value="<?php if ($sDOB !="0000-00-00") { $date=date_create($sDOB);echo date_format($date,"d-m-Y"); } ?>"/>
                                        </div>
                                    </div>
                                </div>
								
								<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Mobile Number  <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
										<input type="text" placeholder="Mobile Number" name="mobile" class="form-control input-sm" value="<?php echo $rows->phone; ?>" maxlength="10">
                                        </div>
                                    </div>
									
									
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Alternate Mobile Number</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" placeholder="Alternate Mobile Number" name="sec_phone" class="form-control input-sm" value="<?php echo $rows->sec_phone; ?>" maxlength="10">
                                        </div>
                                    </div>
                                </div>
								
								<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Email ID  <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
										<input type="text" placeholder="Email ID" name="email" class="form-control input-sm" value="<?php echo $rows->email; ?>" maxlength="30">
                                        </div>
                                    </div>
									
									
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Gender  <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
                                           <select name="sex" class="form-control" id="sex">
													<option value="">Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
										</select> <script> $('#sex').val('<?php echo $rows->sex; ?>');</script>
                                        </div>
                                    </div>
                                </div>
								
								<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Community</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
										<input type="text" placeholder="Community" name="community" class="form-control input-sm" value="<?php echo $rows->community; ?>" maxlength="30">
                                        </div>
                                    </div>
									
									
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Community Class</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" placeholder="Community Class" name="community_class" class="form-control input-sm" value="<?php echo $rows->community_class; ?>" maxlength="30">
                                        </div>
                                    </div>
                                </div>
								
								<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Religion</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
										<input type="text" placeholder="Religion" name="religion" class="form-control input-sm" value="<?php echo $rows->religion; ?>" maxlength="30">
                                        </div>
                                    </div>
									
									
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nationality <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
                                           <select name="nationality" class="form-control" id="nationality">
													<option value="">Select</option>
													<option value="Indian">Indian</option>
													<option value="Others">Others</option>
										</select><script> $('#nationality').val('<?php echo $rows->nationality; ?>');</script>
                                        </div>
                                    </div>
                                </div>
								
								<div class="row page_row">
                                					<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
									<label class="hrzn-fm">Qualification  <span class="error">*</span></label>
								</div>
								 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
										<input type="text" placeholder="Qualification" name="qualification" class="form-control input-sm" value="<?php echo $rows->qualification; ?>" maxlength="30">
                                        </div>
                                    </div>
									     <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Address  <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
                                           <textarea name="address" MaxLength="150" class="form-control" rows="2" cols="80" placeholder="Address"><?php echo $rows->address; ?></textarea>
                                        </div>
                                    </div>
                                </div>
								
								<div class="row page_row">
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
											<label class="hrzn-fm">Profile Picture</label>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<div class="nk-int-st">
											   <input type="file" name="staff_new_pic" placeholder="" class="form-control" accept="image/*" data-msg-accept="Please Select Image Files" >
											</div>
										</div>
									
									<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
										
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<?php if($rows->profile_pic!=''){?>
											<img src="<?php echo base_url(); ?>assets/profile/<?php echo $rows->user_pic; ?>" style="width:100px;">
										<?php } ?>
									</div>
								</div>
								
								<div class="row page_row">
									 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12"></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<input type="hidden" name="staff_id" value="<?php  echo base64_encode($rows->id); ?>">
											<input type="hidden" name="staff_old_pic" value="<?php  echo $rows->user_pic; ?>">
											<button type="submit" class="btn btn-success notika-btn-success waves-effect ">Save </button>
										</div>
									
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12"></div>
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
												 url: "<?php echo base_url(); ?>admin/checkemail_edit/<?php echo base64_encode($rows->id*98765); ?>",
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
												 url: "<?php echo base_url(); ?>admin/checkmobile_edit/<?php echo base64_encode($rows->id*98765); ?>",
												 type: "post"
											}
							},
							qualification: {
									required: true
							},
							staff_new_pic:{required:false,accept: "jpg,jpeg,png",filesize: 1048576},
							status: {
									required: true
							}
					},
					messages: {
							select_role: "Select role",
							address: "Enter address",
							admission_date: "Select Admission Date",
							name: "Enter name",
							email: {
									 required: "Enter email ID",
									 email: "Enter valid email ID",
									 remote: "Email ID already in use!"
							 },
							sex: "Select Gender",
							dob: "Select date of birth",
							age: "Enter AGE",
							nationality: "Select nationality",
							religion: "Enter religion",
							mother_tongue: "Enter The Mother tongue",
							qualification: "Enter the Qualification ",
							mobile: {
								required: "Enter mobile number",
								maxlength:"Invalid mobile number",
								minlength:"Invalid mobile number",
								remote: "Mobile number already exist",
								number:"Invalid mobile number"

							 },
							  staff_new_pic:{
								  required:"",
								  accept:"Please upload .jpg or .png .",
								  filesize:"File must be JPG or PNG, less than 1MB"
								},
							status: "Select status"
					}
		});



</script>