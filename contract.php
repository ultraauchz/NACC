<?php
	include('template/header.php');

	if (empty($_GET['q']) || $_GET['q'] == 'list') {
		include('modules/contract/list.php');
	}

	include('template/footer.php');
?>