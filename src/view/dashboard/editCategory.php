<?php include 'partial/sidebar.php'; ?>
<?php
	$catErr = isset($this->cat_err) ? true : false;
	$catErrMsg = isset($this->cat_err) ? $this->cat_err : '';
?>
<div class="col-md-10">
	<div class="container">
		<!-- Breadcrumbs-->
		<h2>Edit category</h2>
		
		<!-- Edit category -->
		<div class="card card-body bg-light mt-4 mb-5">
			<?php if($catErr) : ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<?= $catErrMsg ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<?php foreach($this->category as $cat) : ?>
			<form action="<?php echo URL; ?>dashboard/updateCategory/<?= $cat->id ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="category_name">Name:</label>
					<input type="text" name="category_name" class="form-control form-control-lg" value="<?= $cat->category_name ?>">
				</div>
				<input type="submit" class="btn btn-success" value="Submit">
			</form>
		</div>
	</div>
</div>
<?php endforeach; ?>





