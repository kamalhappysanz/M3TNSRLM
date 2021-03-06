<?php  foreach($mob_details as $mobdetails){} ?>
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
					
					<form method="post" action="<?php echo base_url(); ?>tracking/pia_mobilizer_track/<?php echo $mobid; ?>" class="form-horizontal" enctype="multipart/form-data" id="piaform">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Tracking <?php echo $mobdetails->name; ?>'s Travel<span style="float:right;"><a href="<?php echo base_url(); ?>tracking/mobilizer_track_report/<?php echo base64_encode($mobdetails->user_id*98765); ?>"> Download Report</a></span></h2>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row page_row">
                                    <div class="col-lg-5 col-md-3 col-sm-3 col-xs-12"></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="nk-int-st">
										<input type="text" placeholder="Select Date" name="track_date" id="track_date" class="form-control track_date input-sm" value="<?php $date=date_create($selected_date);echo date_format($date,"d-m-Y");  ?>" />
                                        </div>
                                    </div>						
									 <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
										<input type="hidden" name="mob_id" value="<?php echo $mob_id; ?>">
                                        <button class="btn btn-success notika-btn-success waves-effect">Track</button>
                                    </div>
                                    
                                </div>
							
							<div class="row page_row">
                                    <div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
                                         <div id="map" style="width:750px; height:400px;"></div>
                                    </div>
				
									 <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
										 <div>
										 <h1 style="font-size:18px;">Distance Travelled: <span style="font-size:16px;color:#e02329;">
											<?php
													//$lats= json_encode( $res, JSON_NUMERIC_CHECK );
													if(empty($kms_using_lat)){
															echo "No datas found";
													}else{
													 foreach($kms_using_lat as $mile){}
													   $kms=$mile->km;
													   if(empty($kms)){
														 echo "No datas found";
													   }else{
														 echo number_format($kms,3)." KM";
													   }
													}
											?>
										</span></h1>
										</div>
										
										<div style="padding-top:15px;">
										<?php
										$i = 1;
										foreach($start_stop as $sStatus){
											$time = $sStatus->created_at;;
											$date = DateTime::createFromFormat( 'Y-m-d H:i:s', $time, new DateTimeZone( 'Asia/Kolkata'));
											echo $sStatus->tracking_status; echo " : "; echo $date->format( 'H:i:s');  echo "<br>"; 
											if ($i%2 == '0'){
												echo "<hr>";
											}
											$i++;
										} 
										?>
										</div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD79f4g1cuT6teKfopSTGYBs1-wMm4v4DY&libraries=geometry"></script>


<script>
    $('#tracking').addClass('active');

function initialize() {
		var homeLatlng = new google.maps.LatLng(11.004556,76.961632);

		var map = new google.maps.Map(document.getElementById("map"), {
			zoom: 13,
			center: homeLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		// add start marker



		var startMarker = new google.maps.Marker({
      <?php   foreach($lat_long as $onlylat){
        if ($onlylat === reset($lat_long)){ ?>
        position: new google.maps.LatLng(<?php   echo $onlylat->lat; ?>,<?php   echo $onlylat->lng; ?>),
        <?php    }} ?>
			map: map,
			icon: 'http://maps.google.co.uk/intl/en_ALL/mapfiles/ms/micons/green-dot.png'
		});

		// add end marker
		var endMarker = new google.maps.Marker({
      <?php foreach($lat_long as $onlylat){
        if ($onlylat === end($lat_long)){ ?>
			position: new google.maps.LatLng(<?php echo $onlylat->lat;  ?>,<?php  echo $onlylat->lng; ?>),
      <?php }} ?>
			map: map,
			icon: 'http://maps.google.co.uk/intl/en_ALL/mapfiles/ms/micons/red-dot.png'
		});

		// create an array of coordinates
		var arrCoords = [
        <?php  foreach($lat_long as $onlylat){ ?>
            new google.maps.LatLng(<?php echo $onlylat->lat; ?>,<?php echo $onlylat->lng; ?>),

      <?php  }  ?>
      <?php foreach($lat_long as $onlylat){
        if ($onlylat === end($lat_long)){ ?>
        new google.maps.LatLng(<?php echo $onlylat->lat; ?>,<?php echo $onlylat->lng; ?>)
      <?php }} ?>
		];

		// draw the route
		var route = new google.maps.Polyline({
			path: arrCoords,
			strokeColor: "#0000FF",
			strokeOpacity: 1,
			strokeWeight: 4,
			map: map
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>
