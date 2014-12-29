
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="">Image Settings</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Image Settings</h2>
						<div class="box-icon">
							<a href="<?php echo $this->webroot; ?>settings/add" class="btn-plus"><i class="halflings-icon plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Date Added</th>
								  <th>Dimensions</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
					
							
							 <?php foreach ($settings as $data): ?>
							<tr>
								<td><?php echo $this->Html->link($data['Settings']['name'],array('controller' => 'settings', 'action' => 'view', $data['Settings']['id'])); ?></td>
								<td class="center"><?php echo $data['Settings']['date_added']; ?></td>
				
								<td class="center">
								 	<a class="btn" href="<?php echo $this->webroot; ?>settings/view/<?php echo $data['Settings']['id']; ?>">
										<i class="halflings-icon picture zoom-in"></i>                                            
									</a>
								</td>

								<td class="center">
									<span class="label label-warning"><?php echo $data['Settings']['status']; ?></span>
								</td>
								<td class="center">
									<a class="btn btn-setting" href="<?php echo $this->webroot; ?>settings/view/<?php echo $data['Settings']['id']; ?>">
										<i class="halflings-icon white zoom-in"></i>                                            
									</a>
									<a class="btn btn-info" href="<?php echo $this->webroot; ?>settings/edit/<?php echo $data['Settings']['id']; ?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" href="<?php echo $this->webroot; ?>settings/delete/<?php echo $data['Settings']['id']; ?>">
										<i class="halflings-icon white trash"></i> 
										
									</a>
								</td>
							</tr>
							    <?php endforeach; ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
			
				
			
			
			</div><!--/row-->
			
			
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>View Settings</h3>
		</div>
		<div class="modal-body">
			<?php if($setting){ ?>
			<p>
			Setting Name: <?php echo $setting['Setting']['name']; ?>
			</p>
		<?php } ?>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<!-- <a href="#" class="btn btn-primary">Save changes</a>-->
		</div> 
	</div>

	<div class="modal hide fade" id="myModalAddSettings">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Add Settings</h3>
		</div>
		<div class="modal-body">
			<p>
			<?php
					
				?>
			</p>
		</div>
		<!--<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			 <a href="#" class="btn btn-primary">Save changes</a>
		</div> -->
	</div>
