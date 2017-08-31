<?php require_once('../../../private/initialize.php'); ?>

<?php 
	$pages = [
		['id' => '1', 'position' => '1', 'visible' => '1', 'page_name' => 'First Page'],
		['id' => '2', 'position' => '2', 'visible' => '1', 'page_name' => 'Second Page'],
		['id' => '3', 'position' => '3', 'visible' => '1', 'page_name' => 'Third Page'],
		['id' => '4', 'position' => '4', 'visible' => '1', 'page_name' => 'Fourth Page'],

	]; 
?>

<?php $page_title = 'Pages'; ?>
<?php include( SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
	<div id="pages listing">
		<h2>Pages</h2>
		
		<div class="actions">
			<a href="<?php echo url_for('staff/pages/new.php') ?>" class="action">Create New Page</a>
		</div>
	</div>

	<table class="list">
		<tr>
			<th>ID</th>
			<th>Position</th>
			<th>Visible</th>
			<th>Page Name</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php foreach($pages as $page): ?>	
			<tr>
				<td><?= h($page['id']); ?></td>
				<td><?= h($page['position']); ?></td>
				<td><?= $page['visible'] ? 'true' : 'false'; ?></td>
				<td><?= h($page['page_name']); ?></td>
				<td><a href="<?php echo url_for('staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
				<td><a href="<?= url_for('staff/pages/edit.php?id=' . h(u($page['id']))); ?>">Edit</a></td>
				<td><a href="">Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</table>


</div>

<?php include( SHARED_PATH .'/staff_footer.php'); ?>