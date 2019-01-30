<div class="container">
	<div class="row" style="margin-bottom:100px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-element-list">
				<div class="cmp-tb-hd bcs-hd">
					<h2>Update PIA</h2>

				</div>
        <?php if($this->session->flashdata('msg')): ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>
            <?php endif; ?>
			
			<form method="post" action="<?php echo base_url(); ?>admin/update_pia_details" class="form-horizontal" enctype="multipart/form-data" id="piaform">
<?php foreach($result as $rows){} ?>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="nk-int-mk">
							  <h2>PRN Number</h2>
						</div>
						<div class="form-group ic-cmp-int">
							<div class="form-ic-cmp">
								<i class="notika-icon notika-edit"></i>
							</div>
							<div class="nk-int-st">
							  <input type="text" placeholder="Unique Number" name="unique_number" class="form-control" value="<?php echo $rows->pia_unique_number; ?>">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="nk-int-mk">
							  <h2>Name</h2>
						</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp">
									<i class="notika-icon notika-edit"></i>
								</div>
								<div class="nk-int-st">
									<input type="text" placeholder="Name" name="name" class="form-control" value="<?php echo $rows->pia_name; ?>">
									</div>
								</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="nk-int-mk">
							  <h2>Mobile Number</h2>
						</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp">
									<i class="notika-icon notika-edit"></i>
								</div>
								<div class="nk-int-st">
										<input type="text" placeholder="Mobile Number" name="mobile" class="form-control" value="<?php echo $rows->pia_phone; ?>">
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="nk-int-mk">
							  <h2>Email Address</h2>
						</div>
								<div class="form-group ic-cmp-int">
									<div class="form-ic-cmp">
										<i class="notika-icon notika-edit"></i>
									</div>
									<div class="nk-int-st">
							  		<input type="text" name="email" class="form-control" placeholder="Email Address" value="<?php echo $rows->pia_email; ?>" />
									</div>
								</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="nk-int-mk">
							  <h2>State</h2>
						</div>
							<div class="form-group ic-cmp-int">
								<div class="form-ic-cmp">
									<i class="notika-icon notika-edit"></i>
								</div>
								<div class="nk-int-st">
									<input type="text" name="state" class="form-control" placeholder="Enter State" value="<?php echo $rows->pia_state; ?>" />
									</div>
								</div>
							</div>
						
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="nk-int-mk">
							  <h2>Address</h2>
						</div>
									<div class="form-group ic-cmp-int">
										<div class="form-ic-cmp">
											<i class="notika-icon notika-edit"></i>
										</div>
										<div class="nk-int-st">
											<textarea name="address" MaxLength="150" class="form-control" rows="4" cols="80" placeholder="Address"><?php echo $rows->pia_address; ?></textarea>

										</div>
									</div>
								</div>
						
						</div>

					
							
							<div class="row">

								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

									<div class="form-group ic-cmp-int form-elet-mg">
										<div class="form-ic-cmp">
											<i class="notika-icon notika-edit"></i>
										</div>
										<div class="nk-int-st">
											<input type="file" name="staff_new_pic" placeholder="" class="form-control" >
											 <small>Profile Picture</small>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="nk-int-mk">
							  <h2>Status</h2>
						</div>
										<div class="form-group ic-cmp-int form-elet-mg">
											<div class="form-ic-cmp">
												</div>
												<div class="nk-int-st">
													<select name="status" class="selectpicker" id="status">
														<option value="">Status</option>
														<option value="Active">Active</option>
														<option value="Inactive">Inactive</option>
													</select>
													<script> $('#status').val('<?php echo $rows->status; ?>');</script>
												</div>
											</div>
										</div>

								</div>
							<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

										<div class="form-group ic-cmp-int form-elet-mg">
											<div class="form-ic-cmp">
												</div>
												<div class="nk-int-st">
													<?php if($rows->profile_pic==''){

													}else{ ?>
															<img src="<?php echo base_url(); ?>assets/pia/<?php echo $rows->profile_pic; ?>" style="width:100px;">
												<?php	} ?>


												</div>
											</div>
										</div>
								</div>
								<div class="row">
									<div class="col-lg-12 " style="margin-top:10px;">
										<div class="form-group  form-elet-mg text-center">
											<input type="hidden" name="pia_id" value="<?php  echo base64_encode($rows->id); ?>">
											<input type="hidden" name="staff_old_pic" value="<?php  echo $rows->profile_pic; ?>">
											<button  type="submit" class="btn btn-success notika-btn-success waves-effect ">Update </button>
										</div>
									</div>
								</div>
              </form>
						</div>
					</div>
				</div>
			</div>
<style>
.row{
  margin-bottom: 10px;
}
.nk-int-mk h2 {
    font-size: 13px;
    color: #c13b3b;
    margin-left: 22px;
    font-weight: 400;
}
</style>
<script type="text/javascript">
    $('#pia').addClass('active');
    $('#piamenu').addClass('active');
		$('#piaform').validate({
			rules: {
				unique_number: {
						required: true,
						maxlength: 13,
						minlength:13,
						number:true,
						remote: {
									 url: "<?php echo base_url(); ?>admin/check_unique_number_edit/<?php echo base64_encode($rows->id*98765); ?>",
									 type: "post"
								}
				},
				name: {
						required: true
				},
				mobile: {
						required: true,
						maxlength: 10,
						minlength:10,
						number:true,
				},
				email: {
						required: true,
						email: true,
				},
				address: {
						required: true
				},
				state: {
						required: true
				},
				status: {
						required: true
				}
		},
		messages: {
				unique_number: {
					required: "Enter PRN Number",
					maxlength:"Maximum 13 digits",
					minlength:"Minimum 13 digits",
					remote: "PRN Number Already Exist",
					number:"Only Numbers"
				 },
				//unique_number: "Enter Unique Number",
				name: "Enter Name",
				mobile: {
						required: "Enter mobile number",
						maxlength:"Maximum 10 digits",
						minlength:"Minimum 10 digits",
						number:"Only Numbers"
				 },
				email: {
						 required: "Please enter your email address.",
						 email: "Please enter a valid email address."
				 },
				state: "Enter State",
				address: "Enter Address",
				status: "Select Status"
			}
		});
</script>