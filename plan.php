<?php
	include('template/header.php');
    if (@$_GET['q'] == 'form') {
        include('modules/plan/form.php');
    }else{
		include('modules/plan/list.php');
	}

	include('template/footer.php');
?>