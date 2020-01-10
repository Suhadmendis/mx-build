<html>
	<head>
		<title>Insert</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h3>Operation</h3>

			<form method="post" action="<?php echo base_url()?>pages/form_validation">
				<?php 
				if ($this->uri->segment(2) == "inserted") {
					echo "<p class='text-success'>Data Inserted </p>";
				}
				 ?>
				<div class="form-group">
					<label>Enter First Name</label>
					<input type="text" name="first_name" class="form-control" />
					<span class="text-danger"><?php echo form_error("first_name"); ?></span>
				</div>

				<div class="form-group">
					<label>Enter Last Name</label>
					<input type="text" name="last_name" class="form-control" />
					<span class="text-danger"><?php echo form_error("last_name"); ?></span>
				</div>

				<div class="form-group">
					<input type="submit" name="insert" value="insert" class="btn-info" />
				</div>

			</form>

			
		</div>
		
	</body>
</html>