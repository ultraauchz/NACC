<?php
	include('template/header.php');

	if (empty($_GET['p']) || $_GET['p'] == 'list') {
		include('modules/contract/list.php');
	}

	include('template/footer.php');
?>