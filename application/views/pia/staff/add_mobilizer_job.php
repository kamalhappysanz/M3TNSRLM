<?php   foreach($mobilizer_details as $mobi){} ?>
<div class="container">
	<div class="row page_row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				
			<?php if($this->session->flashdata('msg')): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
					×</button>
				<?php echo $this->session->flashdata('msg'); ?>
			</div>
			<?php endif; ?>
		
			
			<div class="row page_row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="form-example-wrap">
			
			 <form method="post" action="<?php echo base_url(); ?>staff/add_mob_job" class="form-horizontal" enctype="multipart/form-data" id="staffform" >
				<div class="cmp-tb-hd cmp-int-hd">
					<h2>Schedule Mobilizer's Work</h2>
				</div>
						
				 <div class="form-example-int form-horizental">
                            <div class="form-group">
           
							<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Date <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<input type="text" placeholder="Task date" name="task_date" id="task_date" class="form-control track_date input-sm" />
                                    </div>
									  <div class="col-lg-5 col-md-3 col-sm-3 col-xs-12"></div>
                                </div>
							<div class="row page_row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Work/Break <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<select name="select_type" class="form-control" id="select_type">
											<option value="">Select</option>
											<?php foreach($work_types as $rows){ ?>
												<option value="<?php echo $rows->id; ?>"><?php echo $rows->work_type; ?></option>
											<?php  } ?>
										</select>
                                    </div>
									 <div class="col-lg-5 col-md-3 col-sm-3 col-xs-12"></div>
								
                                </div>
								<div id="other_work" class="other_work">
									<div class="row page_row">
										<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
											<label class="hrzn-fm">Title <span class="error">*</span></label>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<input type="text" placeholder="Title" name="task_title" class="form-control input-sm" maxlength="50">
										</div>
									
										<div class="col-lg-5 col-md-3 col-sm-3 col-xs-12"></div>
									</div>
								</div>
								
							<div class="row page_row">
								<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Brief <span class="error">*</span></label>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-sm-3 col-xs-12">
                                           <textarea name="task_desc" MaxLength="150" class="form-control" rows="2" cols="80" placeholder="Give a brief"></textarea>
                                    </div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                            </div>
							<div class="row page_row">
								 <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<input type="hidden" name="mob_id" id="mob_id" value="<?php echo $mobi->user_id; ?>">
											<input type="hidden" name="user_master_id" id="user_master_id" value="<?php echo $mobi->user_master_id; ?>">
                                           <button type="submit" class="btn btn-success notika-btn-success waves-effect" id="assign_btn">Schedule</button>
										  <!--<a href="<?php echo base_url(); ?>task/home" class="btn btn-success notika-btn-success waves-effect" id="task_btn">Add Task</a>-->								   
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
	$('#view_mobilizer_list').addClass('active');
	
	var select_type = jQuery('#select_type');

	select_type.change(function () {
		if ($(this).val() == '1' || $(this).val() == '2') {
			$('.other_work').show();
		} else {
			$('.other_work').hide();
		}
	});
	
	$('#staffform').validate({
      rules: {
			select_type: {
				required: true
			},
			task_date: {
			  required: true
			},
			task_title: {
			  required: true
			},
			task_desc: {
			  required: true
			},
			t_title: {
			  required: true
			},
			t_desc: {
			  required: true
			},
			task_status: {
			  required: true
			}
      },
      messages: {
		  task_date: "Select the date",
          select_type: "Select work/break",
          task_title: "Type the title",
          task_desc: "Give a brief about the activity scheduled for the day",
          task_status: "Select status"
      }
	});
	
	/* $("#field_work").hide();
	$("#other_work").hide();
	$('#select_type').prop('disabled', 'disabled');
	$("#task_btn").hide();
	
	var task_date = jQuery('#task_date');
	task_date.change(function () {
		if ($(this).val() != '') {
			$('#select_type').prop('disabled', false);
		}
		else {	
			$('#select_type').prop('disabled', 'disabled');
		}
	});


	var select_type = jQuery('#select_type');
	//var select = this.value;
	select_type.change(function () {
		if ($(this).val() == '2') {
			$('.field_work').show();
			$('.other_work').hide();
		}
		else {
			$('.field_work').hide();
			$('.other_work').show();
			$('#task_btn').hide();
		}
	});
	
	function chktype()
	{ 
			var task_date = document.getElementById('task_date');
			var select_type = document.getElementById('select_type');
			var mob_id = document.getElementById('mob_id');
			
			var task_date = task_date.value;
			var select_type = select_type.value;
			var mob_id = mob_id.value;
		   
			if (select_type=='2')
			{
				$.ajax({
				   type:'post',
				   url:'<?php echo base_url(); ?>staff/chk_jobtype',
				   data:'task_date=' + task_date + '&mob_id=' + mob_id,
				   dataType: 'json',
				   success:function(data)
				   {
					   if (data.status=='Success') {
						   var task_title = data.task_title;
						   var task_id = data.task_id;
						   var leng = task_title.length;
							var i;
							var task_tit = '<option value="">Select</option>';
							
							for (i = 0; i < leng; i++) {
								task_tit  += '<option value="' + task_id[i] + '">' + task_title[i] + '</option>'
							}
							$("#task_title").html(task_tit);
							$('#task_btn').hide();
						} else {
							var task_tit = '<option value="">Select</option>';
							$("#task_title").html(task_tit);
							var task_desc = "";
							$("#task_desc").html(task_desc);
							$('#task_btn').show();
						}
				   }
				});
		   } 
   }
   
   function chktask()
	{ 
			var task_title = document.getElementById('task_title');
			var task_title_id = task_title.value;
			var task_details = "";
		   //alert (task_title_id);
		  // exit;
			if (task_title_id != '')
			{
				$.ajax({
				   type:'post',
				   url:'<?php echo base_url(); ?>staff/chk_task_title',
				   data:'task_title_id=' + task_title_id,
				   dataType: 'json',
				   success:function(data)
				   {
					   if (data.status=='Success') {
						   var task_desc = data.task_desc;
							$("#task_desc").html(task_desc);
						} 
				   }
				});
		   } 
   } */
   
	
	
</script>
