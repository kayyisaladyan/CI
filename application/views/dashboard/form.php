
	
	<?= form_open_multipart('auth/login_proses', array('method' => 'POST')) ?>
		<div class="form_group">
			<label for="">Username</label>
			<input type="text" name="username" class="form-control" value="<?php echo set_value ('username')?>" autocomplete="off">
			<small class="form-text form-danger"><? = form_error('Username'); ?></small>
		</div> 
		<div class="form_group">
			<label for="">Password</label>
			<input type="text" name="password" class="form-control">
			<small class="form-text form-danger"><? = form_error('Password'); ?></small>
		</div>
		<button class="btn btn-primary">Login</button> 
			<?php echo form_close() ?>

