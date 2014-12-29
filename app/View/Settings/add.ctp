	


			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="">Image settings </a>
				<i class="icon-angle-right"></i>
				</li>
				<li><a href=""> Add </a></li>
			</ul>

			<div class="row-fluid sortable ui-sortable">
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span></h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php
					echo $this->Form->create('Settings', array('action' => 'add','class'=>'form-horizontal')); ?>
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Name</label>
								<div class="controls">

								  <?php echo $this->Form->input('name', array('label' => '')); ?>
								</div>
							 </div>

							   <div class="control-group">
								<label class="control-label">Title (Image 1) </label>
								<div class="controls">
								 <?php echo $this->Form->input('imageonetitle', array('label' => '')) ?>
								
								</div>

								<label class="control-label">Width </label>
								<div class="controls">
								
								  <?php echo $this->Form->input('imageonewidth', array('label' => '')) ?>
								 
								</div>

								<label class="control-label">Height </label>
								<div class="controls">
								   <?php echo $this->Form->input('imageoneheight', array('label' => '')) ?>
								</div>
							  </div>
							
						
							  <div class="control-group">
								<label class="control-label">Title (Image 2) </label>
								<div class="controls">
								 <?php echo $this->Form->input('imagetwotitle', array('label' => '')) ?>
								
								</div>

								<label class="control-label">Width </label>
								<div class="controls">
								
								  <?php echo $this->Form->input('imagetwowidth', array('label' => '')) ?>
								 
								</div>

								<label class="control-label">Height </label>
								<div class="controls">
								   <?php echo $this->Form->input('imagetwoheight', array('label' => '')) ?>
								</div>
							  </div>
							
							<div class="control-group">
								<label class="control-label">Title (Image 3) </label>
								<div class="controls">
								 <?php echo $this->Form->input('imagethreetitle', array('label' => '')) ?>
								
								</div>

								<label class="control-label">Width </label>
								<div class="controls">
								
								  <?php echo $this->Form->input('imagethreewidth', array('label' => '')) ?>
								 
								</div>

								<label class="control-label">Height </label>
								<div class="controls">
								   <?php echo $this->Form->input('imagethreeheight', array('label' => '')) ?>
								</div>
							  </div>
							
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add Information</button>
						
							  </div>
							</fieldset>
						  <?php echo $this->Form->end('Save New Setting'); ?>
					
					</div>
				</div><!--/span-->
			
			</div>
					
			
			</div><!--/row-->
			
			
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		


