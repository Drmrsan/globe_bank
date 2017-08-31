<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Pages - Show Page'; ?>

<?php 
	$id = $_GET['id'] ?? '1';
?>

<?php include( SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
	<a href="<?= url_for('staff/pages/index.php'); ?>" class="back-link"> &laquo; Back to List</a>

	<div class="page show">	
		Page ID: <?= h($id); ?>
	</div>
</div>

<?php include( SHARED_PATH . '/staff_footer.php'); ?>
