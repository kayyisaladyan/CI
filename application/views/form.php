<body>
	<h1>TEST</h1>

	<?php echo form_open('coba/proses_input', array ('method' => 'POST')) ?>
	<label for="exampleInputEmail"> Input Pesan</label>
	<input type="text" autocomplete="off" name="pesan">
	<button type="submit">Submit</button>

	<?php echo form_close() ?>
</body>