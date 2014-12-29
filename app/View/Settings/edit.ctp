	


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
				<li><a href=""> Edit </a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Edit Image Settings</h2>
						<div class="box-icon">
							<a href="<?php echo $this->webroot; ?>settings/edit" class="btn-plus"><i class="halflings-icon plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						       <?php
					echo $this->Form->create('Settings', array('action' => 'Edit'));
					echo $this->Form->input('Name', array('label' => 'Name'));
					echo $this->Form->input('ImageOneTitle', array('label' => 'Image One Title'));
					echo $this->Form->input('ImageOneWidth', array('title' => 'Image One Width'));
   					echo $this->Form->input('ImageOneHeight', array('title' => 'Image One Height'));
  					
  					echo $this->Form->input('ImageTwoTitle', array('label' => 'Image Two Title'));
					echo $this->Form->input('ImageTwoWidth', array('label' => 'Image Two Width'));
   					echo $this->Form->input('ImageTwoHeight', array('label' => 'Image Two Height'));

   					echo $this->Form->input('ImageThreeTitle', array('label' => 'Image Three Title'));
					echo $this->Form->input('ImageThreeWidth', array('label' => 'Image Three Width'));
   					echo $this->Form->input('ImageThreeHeight', array('label' => 'Image Three Height'));
					echo $this->Form->end('Save New Setting');
?>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
			
				
			
			
			</div><!--/row-->
			
			
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		


