<?php
	if(@$_GET['p'] != 'content') {
		include('template/header.php');
	}
		

	if (empty($_GET['p']) || $_GET['p'] == 'list') {
		include('modules/blacklist/list.php');
	} else if ($_GET['p'] == 'view') {
		include('modules/blacklist/form.php');
	} else if($_GET['p'] == 'content') {
		include('modules/blacklist/content'.$_GET['type'].'.php');
	}

	if($_GET['p'] != 'content') {
		include('template/footer.php');
	}
?>