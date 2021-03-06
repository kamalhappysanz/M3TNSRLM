<div class="container">

<div class="row page_row">
<div class="data-table-area">
<div class="container">
			
 <div class="row page_row">
			
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="data-table-list">
             <div class="basic-tb-hd">
                 <h2>Candidates</h2>
             </div>
			 <?php if($this->session->flashdata('msg')): ?>
     <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
             ×</button>
         <?php echo $this->session->flashdata('msg'); ?>
     </div>
     <?php endif; ?>
             <div class="table-responsive">
                 <table id="data-table-basic" class="table table-striped">
                     <thead>
                         <tr>
                             <th>S.No</th>
                             <th>Candidate</th>
                             <th>Aadhaar Card Number</th>
                              <th>Mobile Number</th>
                             <th>Status</th>
                             <th> Profile Created By</th>
                              <th>Actions</th>


                         </tr>
                     </thead>
                     <tbody>
                       <?php $i=1; foreach($result as $rows){ ?>


                         <tr>
                             <td><?php echo $i; ?></td>
                             <td><?php echo $rows->name; ?></td>
                             <td><?php $saathar = $rows->aadhaar_card_number;  echo $var = substr_replace($saathar, str_repeat("X", 8), 0, 8); ?></td>
                             <td><?php echo $rows->mobile; ?></td>
								<td>
									<?php if($rows->status=='Confirmed'){ ?> <span class="green">Qualified</span><?php } ?>
									<?php if($rows->status=='Rejected'){ ?><span class="red">Unqualified</span><?php } ?>
									<?php if($rows->status=='Pending'){ ?><span class="blue">Unverified</span><?php } ?>
								</td>
								<td><?php echo $rows->added_by; ?></td>
                             <td><a href="<?php echo base_url(); ?>admission/view_stu_details/<?php echo base64_encode($rows->id*98765); ?>" data-toggle="tooltip" title="View Candidate Profile"><i class="fa fa-eye" aria-hidden="true" style="font-size:20px;"></i> &nbsp;&nbsp; <a href="<?php echo base_url(); ?>admission/edit_stu_details/<?php echo base64_encode($rows->id*98765); ?>" data-toggle="tooltip" title="Edit Candidate Profile"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:20px;"></i></a></td>


                         </tr>
<?php  $i++; } ?>

                     </tbody>

                 </table>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
<!-- Data Table area End-->
</div>
</div>

<style>
.page_row{
  margin-bottom: 15px;
}
</style>

<script type="text/javascript">
    $('#prospects').addClass('active');
    $('#prospectsmenu').addClass('active');
	 $('#all_prospect').addClass('active');
</script>
