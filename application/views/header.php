    <div class="row">
    	<div class="large-9 medium-9 small-9 columns">
    		<img class="center block" alt="Johan Cazier" src="<?php echo base_url() . APPPATH ?>images/header.png" />
    	</div>
    	<?php
    	if ($this->session->userdata('user') != null) {
    		?>
    		<div class="large-3 medium-3 small-3 columns">
    			<div class="panel smalltopmargin textcenter">
    		<img alt="persoon" src="<?php echo base_url() . APPPATH ?>images/person.png" />
    				<?php echo $this->session->userdata('user')->name ?>
    							<?php
    							echo form_open('login/afmelden');
    							echo form_submit('mysubmit', 'Afmelden', 'class="center block"');
    							echo form_close();
    							?>		
    			</div>		
    		</div>
    		<?php
    	}
    ?>
</div>