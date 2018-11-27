<?php
/**
 * Template Name: PNTC Medical Page
 * Description: Rightsidebar Dashboard 
 */
$db = new pntc_enrollment;
?>
<?php get_header(); ?>
<?php get_template_part('sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List of the Enrollees with medical results
        <small>Mixed of records enrolled and non-enrolled</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
	          <div class="">
	            <div class="box-header">
	              <span class="fa fa-filter"></span><h3 class="box-title">Filters</h3>
	              <div class="box-tools pull-right">
	                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	                </button>
	              </div>
	              <!-- /.box-tools -->
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
		              <div class="col-md-2">
							<div class="input-group">	 											
								<div class="input-group-btn">
									<button id="gender-dp" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="fa fa-caret-down"></span></button>
									<ul class="dropdown-menu filter-medical-val">
										<li><a href="#">MEDICAL PASSED</a></li>
										<li><a href="#">NO MEDICAL YET</a></li>
										<li><a href="#">SCREENING FAILED</a></li>
										<li><a href="#">DONE MEDICAL</a></li>
										<li><a href="#">NO DATA AVAILABLE</a></li>
									</ul>
								</div>
								<!-- /btn-group -->
								<input placeholder="Filter by Medical Status" id="filterMedicalStatus" name="inputGender" type="text" class="form-control" disabled />
							</div>               	
		              </div> 
		              <div class="col-md-2">
							<div class="input-group">	 											
								<div class="input-group-btn">
									<button id="gender-dp" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="fa fa-caret-down"></span></button>
									<ul class="dropdown-menu filter-name-val">
									   <li><a href="#">A</a></li>
									   <li><a href="#">B</a></li>
									   <li><a href="#">C</a></li>
									   <li><a href="#">D</a></li>
									   <li><a href="#">E</a></li>
									   <li><a href="#">F</a></li>
									   <li><a href="#">G</a></li>
									   <li><a href="#">H</a></li>
									   <li><a href="#">I</a></li>
									   <li><a href="#">J</a></li>
									   <li><a href="#">K</a></li>
									   <li><a href="#">L</a></li>
									   <li><a href="#">M</a></li>
									   <li><a href="#">N</a></li>
									   <li><a href="#">O</a></li>
									   <li><a href="#">P</a></li>
									   <li><a href="#">Q</a></li>
									   <li><a href="#">R</a></li>
									   <li><a href="#">S</a></li>
									   <li><a href="#">T</a></li>
									   <li><a href="#">U</a></li>
									   <li><a href="#">V</a></li>
									   <li><a href="#">W</a></li>
									   <li><a href="#">X</a></li>
									   <li><a href="#">Y</a></li>
									   <li><a href="#">Z</a></li>						   							   							   
									</ul>
								</div>
								<!-- /btn-group -->
								<input placeholder="Letter" id="filterName" name="filterName" type="text" class="form-control" disabled />
							</div>               	
		              </div>	              
		              <div class="col-md-2">
							<div class="input-group">	 											
								<div class="input-group-btn">
									<button id="gender-dp" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="fa fa-caret-down"></span></button>
									<ul class="dropdown-menu filter-region-val">
										<?php 
											$res_areas = $db->_select_results("wp_pntc_RegionalArea"); 
											$loc = array();
										?>									
										<?php foreach($res_areas as $area): ?>		
										<?php $loc[] = $area['Area']; ?>				    									   	
									    <?php endforeach; ?>
										<?php $locs = array_unique($loc); ?>
										<?php foreach($locs as $location ): ?>
											<li><a href="#"><?php echo $location; ?></a></li>
										<?php endforeach; ?>									    
									</ul>
								</div>
								<!-- /btn-group -->
								<input placeholder="Region" id="filterRegion" name="inputRegion" type="text" class="form-control" disabled />
							</div> 		              	
		              </div>
		              <div class="col-md-2">
			                <div class="input-group">
								<div class="input-group-btn">
									<button id="gender-dp" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="fa fa-caret-down"></span></button>
									<ul class="dropdown-menu filter-batchMonth-val">
										<li><a href="#">JANUARY</a></li>
										<li><a href="#">FEBRUARY</a></li>
										<li><a href="#">MARCH</a></li>
										<li><a href="#">APRIL</a></li>
										<li><a href="#">MAY</a></li>
										<li><a href="#">JUNE</a></li>
										<li><a href="#">JULY</a></li>
										<li><a href="#">AUGUST</a></li>
										<li><a href="#">SEPTEMBER</a></li>
										<li><a href="#">OCTOBER</a></li>
										<li><a href="#">NOVEMBER</a></li>
										<li><a href="#">DECEMBER</a></li>								    
									</ul>
								</div>
								<input placeholder="BATCH MONTH" id="filterBatchMonth" name="inputRegion" type="text" class="form-control" disabled />             
			                </div>            	
		              </div>		              
		              <div class="col-md-2">
			                <div class="input-group">
								<div class="input-group-btn">
									<button id="gender-dp" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="fa fa-caret-down"></span></button>
									<ul class="dropdown-menu filter-batchYear-val">
										<?php 
											$res_year = $db->_select_results("wp_pntc_enrollment"); 
											$y = array();
										?>
										<?php foreach($res_year as $year): ?>		
										<?php $y[] = $year['en_BatchYear']; ?>				    									   	
									    <?php endforeach; ?>
										<?php $ys = array_unique($y); ?>
										<?php foreach($ys as $ysr ): ?>
											<li><a href="#"><?php echo $ysr; ?></a></li>
										<?php endforeach; ?>									    
									</ul>
								</div>
								<input placeholder="BATCH YEAR" id="filterBatchYear" name="inputRegion" type="text" class="form-control" disabled />             
			                </div>            	
		              </div>				              
		              <div class="col-md-2">
		              	<button class="btn btn-primary btn-clear-filter">Refresh Table</button>
		              </div>
		              <div class="form-group col-md-12 btn-container-dt"></div>          	              				
	            </div>
	            <!-- /.box-body -->
	          </div> 
            </div>
            <!-- /.box-header -->          	
          </div>
          <div class="box">
            <div class="box-body">
              <table id="tblMedicalPage" class="table table-bordered table-hover" style="width:100%">
                <thead>
                <tr>
                  <th class="medical-stat">Medical Status</th>                   	
                  <th class="fname">First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>                  
                  <th>Age</th>
                  <th class="gender">Gender</th>
                  <th>Contact #</th>
                  <th class="location">Location</th>
                  <th>Date Registered</th>
                  <th>Orientation Date</th>
                  <th>Office Orientation</th>
                  <?php if( current_user_can('encoder') || current_user_can('promoter') || current_user_can('administrator') || current_user_can('admin') ) : ?>    
                  	<th>Action</th>
                  <?php endif; ?>
                </tr>
                </thead>

                <tfoot>
                <tr>
                  <th class="medical-stat">Medical Status</th>  
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Contact #</th>
                  <th>Location</th>
                  <th>Date Registered</th>
                  <th>Orientation Date</th>
                  <th>Office Orientation</th>
                  <?php if( current_user_can('encoder') || current_user_can('promoter') || current_user_can('administrator') || current_user_can('admin') ) : ?>
                  	<th>Action</th>
                  <?php endif; ?>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.modal-default -->        
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog modal-lg">          	
          	<form role="form" action="" method="post" id="editModal">
	            <div class="modal-content">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  <span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Edit Information</h4>
	              </div>
	              <div class="modal-body">
				      <div class="row">
				        <div class="col-md-12">
				          <!-- Custom Tabs -->
				          <div class="nav-tabs-custom">
				            <ul class="nav nav-tabs">
				              <li class="active"><a href="#personalInfo" data-toggle="tab"><i class="fa fa-user"></i> Personal Information</a></li>
				              <li><a href="#MedicalTab" data-toggle="tab" class=""><i class="fa fa-institution"></i> Medical Requirements</a></li>
				              <li><a href="#MedHistoryTab" data-toggle="tab"><i class="fa fa-newspaper-o"></i> Medical History</a></li>
				            </ul>
				            <div class="tab-content">
				              <div class="tab-pane active" id="personalInfo">
						          <div class="box">
						            <div class="box-header with-border">
						              <h3 class="box-title">Enrollee Informations</h3>
						            </div>
						            <!-- /.box-header -->
						            <div class="box-body">
						                <!-- text input -->
						                <div class="form-group">
						                  <div class="col-md-4">
							                  <label>Enrollee Name</label>
							                  <input value="" id="modalEnName" name="modalEnName" type="text" class="form-control" placeholder="Enter ...">							                                    
						                  </div>
										  <div class="col-md-4">
							                  <label>Last Name</label>
							                  <input id="modalEnLastName" name="modalEnLastName" type="text" class="form-control" placeholder="Enter ...">						  	
										  </div>
										  <div class="col-md-4">
							                  <label>Middle Name</label>
							                  <input id="modalEnMidName" name="modalEnMidName" type="text" class="form-control" placeholder="Enter ...">							  	
										  </div>							                  
						                </div>
						                <div class="form-group">
						                  <div class="col-md-6">
							                  <label>Age</label>
							                  <input id="modalEnAge" name="modalEnAge" type="text" class="form-control" placeholder="Enter ...">		                  	
						                  </div>						                	
						                  <div class="col-md-6">
							                  <label>Contact Number#</label>
							                  <input id="modalEnContactNo" name="modalEnContactNo" type="text" class="form-control" placeholder="Enter ...">		                  	
						                  </div>
						                </div>
						                <br />
						                <!-- select -->
						                <div class="form-group">
						                  <div class="col-md-4">
						                  	  <label>Gender</label>
							                  <select id="modalEnGender" name="modalEnGender" class="form-control" value="Gender">
							                    <option>MALE</option>
							                    <option>FEMALE</option>
							                  </select>		                  	
						                  </div>
						                  <div class="col-md-4">
						                  	  <label>Civil Status</label>
							                  <select id="modalEnCivilStatus" name="modalEnCivilStatus" class="form-control" value="Gender">
							                    <option>SINGLE</option>
							                    <option>MARRIED</option>
							                  </select>		                  	
						                  </div>
						                  <div class="col-md-4">
						                  	  <label>Religion</label>
							                  <select id="modalEnReligion" name="modalEnReligion" class="form-control" value="Religion">
							                    <?php $rel_results = $db->_select_results("wp_pntc_Religion"); ?>
							                    <?php foreach( $rel_results as $rel_result ): ?>
							                    	<?php echo $rel_result['Religion']; ?>
							                    	<option value="<?php echo $rel_result['Religion']; ?>"><?php echo $rel_result['Religion']; ?></option>
							                    <?php endforeach; ?>
							                  </select>		                  	
						                  </div>						                  					                  
						                  <input id="eid" type="hidden" name="eid" value="" />   
						                </div>						                
						                <!-- textarea -->
						                <div class="form-group">
						                	<div class="col-md-12">
							                  <label>Remarks</label>
							                  <textarea id="modalEnRemarks" name="modalEnRemarks" class="form-control" rows="3" placeholder="Enter ..."></textarea>
							                  <input id="fieldID" type="hidden" name="fieldID" value="" />	                		
						                	</div>
						                </div>						
						            </div>
						            <div class="overlay loader-spinner">
						            	<i class="fa fa-refresh fa-spin"></i>
						            </div>
						            <!-- /.box-body -->
						          </div>
				              </div>
				              <!-- /.tab-pane -->
				              <div class="tab-pane" id="MedicalTab">
						          <div class="box">
						            <div class="box-header with-border">
							              <table id="tblMedicalHeader" class="table table-bordered table-hover">
							                <thead>
							                <tr>
							                  <th class="text-center">#</th>
							                  <th>Current Status</th>
							                  <th>Action</th>
							                </tr>
							                </thead>
											<tbody id="MedicalHeaderBg">

											</tbody>
											<tfoot></tfoot>
										  </table>
						            </div>						            
						            <!-- /.box-header -->
						            <div class="box-body">
							              <table id="tblMedReq" class="table table-bordered table-hover">
							                <thead>
							                <tr>
							                  <th>Clearance Title</th>
							                  <th class="text-center">Passed</th>
							                  <th class="text-center">Failed</th>
							                  <th class="text-center">Processing</th>
							                </tr>
							                </thead>
											<tbody id="medReqBg">

											</tbody>
											<tfoot>
							                <tr>
							                  <th>Clearance Title</th>
							                  <th class="text-center">Passed</th>
							                  <th class="text-center">Failed</th>
							                  <th class="text-center">Processing</th>
							                </tr>												
											</tfoot>																               
							              </table>					
						            </div>
						            <div class="overlay loader-spinner">
						            	<i class="fa fa-refresh fa-spin"></i>
						            </div>
						            <!-- /.box-body -->
						          </div>
				              </div>
				              <div class="tab-pane" id="MedHistoryTab">
						          <div class="box">
						            <div class="box-header with-border">
						            	<h3 class="box-title">Medical History</h3>
						            </div>							            
						            <!-- /.box-header -->
						            <div class="box-body">
							              <table id="tblMedHistory" class="table table-bordered table-hover">
							                <thead>
							                <tr>
							                  <th>#</th>
							                  <th>Medical Requirement</th>
							                  <th>Status</th>
							                  <th>Nurse</th>
							                  <th>Remarks</th>
							                </tr>
							                </thead>
											<tbody id="medHistoryBg">

											</tbody>
											<tfoot>
							                <tr>
							                  <th>#</th>
							                  <th>Medical Requirement</th>
							                  <th>Status</th>
							                  <th>Nurse</th>
							                  <th>Remarks</th>
							                </tr>												
											</tfoot>																               
							              </table>					
						            </div>
						            <div class="overlay loader-spinner">
						            	<i class="fa fa-refresh fa-spin"></i>
						            </div>
						            <!-- /.box-body -->
						          </div>
				              </div>				              
				            </div>
				            <!-- /.tab-content -->
				          </div>
				          <!-- nav-tabs-custom -->
				        </div>
				        <!-- /.col -->
				      </div><!--ROW END -->	              				          
	              </div>
	              <div class="modal-footer">
	                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	                <input type='button' name="btn_praprint" value="Print Medical History" id="PrintpraBtn" class="btn btn-warning btn-fill btn-success" />
	                <input type="submit" class="btn btn-primary" name="save" value="Save changes" />
	              </div>
	            </div>
	            <?php wp_nonce_field('edit_enrollee','pntc_edit_enrollee_form'); ?>
           	</form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

			
			<!-- PRELIMINARY ASSESMENT FORM -->
			<div id="PrintpraModal" class="modal fade" role="dialog">
							  <div class="print-modal-dialog">
							    <!-- Modal content-->
							    <div class="print-modal-content">
							      <div class="print-modal-header" id="headerIprint">
							        <button type="button" class="close" data-dismiss="modal">&times;</button> 
							      </div>
							      <div class="header-logo" style="display: none;">
							      	<div class="header-left-container">
							      		<img width="30" height="30" src="<?php echo get_stylesheet_directory_uri() . '/img/logo.png'; ?>" class="img-responsive print-logo" />
							      	</div>
							      	<div class="header-right-container">
							      		<p id="print-head-title">Phil-Nippon Technical College</p>
							      		<p id="print-head-title-2">Location : Lot 7-14 Madison South Brgy. Batino Calamba Laguna</p>
							      	</div>
							      	<div class="clear-fix"></div>	      								      							      	
							      </div>							      
							      <div id="printmodalbody" class="print-modal-body text-center">
							      	<h3 class="praform">Medical Record Form</h3>
							     		<table border="1px;" cellpadding="1px;" style="width: 100%">
							     			<tr>
							     				<td>Name</td>
							     				<td><input class="borderbox" type="text" name="pafName" size="15" /></td>
							     			</tr>
							     			<tr>
							     				<td>Age</td>
							     				<td><input class="borderbox" type="text" name="pafAge" size="15" /></td>
							     			</tr>
							     			<tr>
							     				<td>Gender</td>
							     				<td><input class="borderbox" type="text" name="pafGender" size="15" /></td>
							     			</tr>
							     		</table><br/>
							     		<table border="1px;" cellpadding="2px;">
							     			<tr>
							     				<td class="praform"><b>FOR FEMALE ONLY</b></td>
							     				<td>Yes or No</td>
							     				<td  class="praform"><b>FOR MALE ONLY</b></td>
							     				<td>Yes or No</td>
							     			</tr>
							     			<tr>
							     				<td>History of Pregnancy/Miscarriage/Abortion</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="fq1">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="fq1">No
														</label>
							      				</td>
							     				<td>Genetical Problems</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="mq1">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="mq1">No
														</label>
							      				</td>
							     			</tr>
							     			<tr>
							     				<td>Breast Lumps</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="fq2">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="fq2">No
														</label>
							      				</td>
							     				<td>"Bolitas"</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="mq2">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="mq2">No
														</label>
							      				</td>
							     			</tr>
							     			<tr>
							     				<td>Dysmenorrhea</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="fq3">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="fq3">No
														</label>
							      				</td>
							     				<td>Petroleum Jelly</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="mq3">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="mq3">No
														</label>
							      				</td>
							     			</tr>
							     			<tr>
							     				<td>Menstrual Cycle(Regular)</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="fq4">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="fq4">No
														</label>
							      				</td>
							     				<td>Hernia/Rupture(Luslos/Danlak)</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="mq4">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="mq4">No
														</label>
							      				</td>
							     			</tr>
							     			<tr>
							     				<td>How many days?</td>
							     				<td></td>
							     				<td>Undescended Testes</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="mq5">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="mq5">No
														</label>
							      				</td>
							     			</tr>
							     			<tr>
							     				<td>Last Menstrual Period</td>
							     				<td></td>
							     				<td>Single Testicles</td>
							     				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="mq6">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="mq6">No
														</label>
							      				</td>
							     			</tr>
							     			<tr>
							     				<td>Sexual Activity</td>
							     				<td></td>
							     				<td></td>
							     				<td></td>
							     			</tr>
							     		</table>
							     		<table border="1px;" cellpadding="2px;" style="width: 100%">
							     			<tr>
							     				<td  class="praform"><b>GENERAL INFORMATION</b></td>
							     				<td></td>
							     				<td  class="praform"><b>CARDIOVASCULAR</b></td>
							     				<td></td>
							     			</tr>
							     			<tr>
							     				<td>Allergies on food/medicines/skin problem of any part</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med1">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med1">No
														</label>
							      				</td>
							      				<td>Chest pain or heaviness</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med2">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med2">No
														</label>
							      				</td>
						     			</tr>
						     				<tr>
							     				<td>Allergies on metal,oil,rubber,alcohol,organic solvent</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med3">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med3">No
														</label>
							      				</td>
							      				<td>Shortness of breath or difficulty of breathing</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med4">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med4">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Do you have tattoo on any part of your body/frat tattoo</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med5">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med5">No
														</label>
							      				</td>
							      				<td>High blood pressure or hypertension</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med6">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med6">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Do you have Birthmarks on any part of the body?</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med7">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med7">No
														</label>
							      				</td>
							      				<td>Heart trouble or Heart disease</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med8">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med8">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Inborn Disease/congenital disorders/infections</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med9">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med9">No
														</label>
							      				</td>
							      				<td class="praform"><b>RESPIRATORY</b></td>
							      				<td></td>
						     				</tr>
						     				<tr>
							     				<td>Weight loss, loss of apetite,overweight,underweight</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med10">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med10">No
														</label>
							      				</td>
							      				<td>Chronic Cough or coughed of blood</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med11">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med11">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Loss of parts of the body,arm,finger,or legs</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med12">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med12">No
														</label>
							      				</td>
							      				<td>Fever,chills or night sweats</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med13">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med13">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Functional Disorders(inability to walk,write,etc)</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med14">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med14">No
														</label>
							      				</td>
							      				<td>History of Lungs spot/scar on chest xray result</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med15">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med15">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Physical Deformity of any part of the body</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med16">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med16">No
														</label>
							      				</td>
							      				<td>History of pneumonia/bronchitis/tuberculosis/asthma</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med17">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med17">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Joint/Back pain</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med18">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med18">No
														</label>
							      				</td>
							      				<td>History of Primary complex(Childhood)</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med19">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med19">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>History of any physical accident, injury,fracture</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med20">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med20">No
														</label>
							      				</td>
							      				<td  class="praform"><b>HEENT</b></td>
							      				<td></td>
						     				</tr>
						     				<tr>
							     				<td  class="praform"><b>GASTROENTETIC</b></td>
							  					<td></td>
							      				<td>Headaches/migraine</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med21">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med21">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Gallbladder stones/liver disorder/hepatitis</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med22">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med22">No
														</label>
							      				</td>
							      				<td>Blurred Vision/Double Vision</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med23">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med23">No
															</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Abdominal Pain/hyperacidity/ulcer</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med24">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med24">No
														</label>
							      				</td>
							      				<td>Use of eye glasses,contact lenses</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med25">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med25">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Constipation/diarrhea/LBM</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med26">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med26">No
														</label>
							      				</td>
							      				<td>Astigmatism</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med27">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med27">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Stool with blood/black colored stool</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med28">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med29">No
														</label>
							      				</td>
							      				<td>Eye pain, eye injury, redness,burning sensation</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med30">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med30">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Hemorrhoids/almuranas</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med31">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med31">No
														</label>
							      				</td>
							      				<td>Nasal Obstruction, discharge or nose bleed</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med32">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med32">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td  class="praform"><b>GENITOURINARY</b></td>
							  					<td></td>
							      				<td>Sinusitis</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med33">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med33">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Urinary frequency/urinary incontinence/UTI</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med34">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med34">No
														</label>
							      				</td>
							      				<td>Ear pain,discharge,tinnitus or injury</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med35">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med35">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Ureter stones</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med36">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med36">No
														</label>
							      				</td>
							      				<td>Loss of Hearing or with hearing aid</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med37">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med37">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Rectal or anal pain,swelling,protrusion,itchiness</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med38">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med38">No
														</label>
							      				</td>
							      				<td  class="praform"><b>NEUROPSYCHIATRIC</b></td>
							      				<td></td>
						     				</tr>
						     				<tr>
							     				<td>Kidney Stones</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med39">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med39">No
														</label>
							      				</td>
							      				<td>Nervousness/panic attack/phobia</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med40">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med40">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td  class="praform"><b>OTHERS</b></td>
							  					<td></td>
							      				<td>Phobia(Heights? Closed area or place)</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med41">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med41">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Diabetes</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med42">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med42">No
														</label>
							      				</td>
							      				<td>Anxiety/difficulty sleeping or insomia</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med43">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med43">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Cyst, tumor or cancer</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med44">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med44">No
														</label>
							      				</td>
							      				<td>Depression</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med45">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med45">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Thyroid/Goiter disorder</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med46">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med46">No
														</label>
							      				</td>
							      				<td>Dizziness or fainting/anemia</td>
							      				<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med47">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med47">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Immunization/vaccination"bakuna"</td>
							  					<td width="100">
									      					<label class="radio-inline">
														      	<input type="radio" name="med48">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med49">No
														</label>
							      				</td>
							      				<td>Seizures/epilepsy</td>
							      				<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med50">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med50">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Major Operation</td>
							  					<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med51">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med51">No
														</label>
							      				</td>
							      				<td  class="praform"><b>RELATIVES/FAMILY MEDICAL HISTORY</b></td>
							      				<td></td>
						     				</tr>
						     				<tr>
							     				<td>Minor Operation</td>
							  					<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med52">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med52">No
														</label>
							      				</td>
							      				<td>Diabetes</td>
							      				<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med53">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med53">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Drinking of alcohol drinks</td>
							  					<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med54">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med54">No
														</label>
							      				</td>
							      				<td>Tuberculosis/asthma</td>
							      				<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med55">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med56">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>History and present use of prohibited drugs</td>
							  					<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med57">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med57">No
														</label>
							      				</td>
							      				<td>High Blood/heart disease</td>
							      				<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med58">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med58">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Undergone medical examination and result is unfit</td>
							  					<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med59">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med59">No
														</label>
							      				</td>
							      				<td>Cyst, tumor or cancer</td>
							      				<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med60">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med60">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>History of previous infections</td>
							  					<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med61">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med61">No
														</label>
							      				</td>
							      				<td>Kidney Disease</td>
							      				<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med62">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med62">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Admitted to hospital due to medical illness</td>
							  					<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med63">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med63">No
														</label>
							      				</td>
							      				<td>Hematological problem/anemia/leukemia</td>
							      				<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med64">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med64">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>Have you been treated for a medical problem?</td>
							  					<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med65">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med65">No
														</label>
							      				</td>
							      				<td>Thyroid Disorder or goiter</td>
							      				<td>
									      					<label class="radio-inline">
														      	<input type="radio" name="med66">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med66">No
														</label>
							      				</td>
						     				</tr>
						     				<tr>
							     				<td>If Yes, please give us details</td>
							  					<td></td>
							      				<td colspan="1">Mental Health problems</td>
							      				<td colspan="2">
									      					<label class="radio-inline">
														      	<input type="radio" name="med67">Yes
														   	</label>
														    <label class="radio-inline">
														      <input type="radio" name="med67">No
														</label>
							      				</td>
						     				</tr>
							     		</table>
							     		<br />
							     		<table border="1px;" cellpadding="2px;" style="width: 100%">
							      			<tr>
							      				<td>By signing this form, I hereby certify that all information on this form and any additional supporting information submitted with this form are true and correct to the best of my knowledge, and I further acknowledge that it is free and voluntary act and deed. Any false information will cancel my application in Phil. Nippon Technical College.</td>
							      			</tr>							      			
							      		</table>
							      		<table border="1px;" cellpadding="2px;" style="width: 100%">
							      			<tr>
							      				<td><input class="borderbox" type="text" name="ApplicantSignature" size="30" /></td><br/>
							      				<td><input class="borderbox" type="text" name="signature" size="30" /></td><br/>
							      			</tr>
							      			<tr>
							      				<td>Applicant's Signature over printed Name</td>
							      				<td>Nurse's Signature and Date</td>
							      			</tr>
							      		</table>
									    <div class="modal-footer text-center">
									        <button type="button" class="btn btn-success" id="btnpraPrint">Print</button>
									    </div>
							    </div>
							  </div>
							</div>
							<!-- Modal print End -->               
		                </div>			           
	</section>
</div>
<?php get_footer(); ?>