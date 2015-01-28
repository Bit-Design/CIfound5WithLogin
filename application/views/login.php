<div class="row">
	<div class="large-10 medium-10 panel center">
		<div class="large-4 medium-6 small-8 center">
			<h1>Aanmelden</h1>

			<?php
			if($this->session->userdata('melding') != null){
				echo '<p class="red">' . $this->session->userdata('melding') . '</p>';	
				$this->session->unset_userdata('melding');			
			}
			echo form_open('login/aanmelden');
			echo form_label('Email', 'email');
			echo form_input('email', "" ,'id="email"');
			echo form_label('Wachtwoord', 'password');
			echo form_password('password', "" ,'id="password"');
			echo form_submit('mysubmit', 'Aanmelden', 'class="button center block"');
			echo form_close();
			?>
		</div>
	</div>
</div>