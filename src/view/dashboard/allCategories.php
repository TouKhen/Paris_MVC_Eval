<?php include 'partial/sidebar.php'; ?>

<div class="col">
	<div class="container">
		<!-- Breadcrumbs-->
		<h2>Your Categories</h2>
		
		<!-- DataTables Example -->
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th colspan="3">Category Options</th>
				</tr>
				</thead>
				<tbody>
				<?php if(empty($this->allCategories)): ?>
					<p>No category submitted yet</p>
				<?php else : ?>
					<?php foreach($this->allCategories as $category) : ?>
						<tr>
							<td><?= $category->id ?></td>
							<td><?= $category->category_name ?></td>
							<td><a href="<?= URL; ?>dashboard/view/<?= $category->id; ?>" class="btn btn-dark">View</a></td>
							<td><a href="<?= URL; ?>dashboard/editCategory/<?= $category->id; ?>" class="btn btn-primary">Edit</a></td>
							<td><a href="<?= URL; ?>dashboard/deleteCategory/<?= $category->id; ?>" class="btn btn-danger">Delete</a></td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>







