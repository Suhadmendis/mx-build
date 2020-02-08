<html>
	<head>
		<title>Insert</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
	<br><br>

			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Delete</th>
					</tr>
					<?php
						if ($fetch_data->num_rows() > 0) {
							foreach ($fetch_data->result() as $row) {
								?>
									
									<tr>
										<td><?php echo $row->id; ?></td>
										<td><?php echo $row->first_name; ?></td>
										<td><?php echo $row->last_name; ?></td>
										<td><a href="#" class="delete_data" id="<?php echo $row->id; ?>">Delete</a></td>
									</tr>

								<?php
							}
						}else{
							?>
								<tr >
									<td colspan="4" style="text-align: center;">No Data Found</td>
								</tr>
							<?php
						}
					?>
				</table>


			</div>
			

		<script>
			$(document).ready(function () {
				$('.delete_data').click(function () {
					var id = $(this).attr("id");
					if (confirm("Are you sure?")) {
						window.location = "<?php echo base_url(); ?>pages/delete_data/"+id;
					}else{
						return false;
					}
				});
			})
		</script>



		</div>
		
	</body>
</html>