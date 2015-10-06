<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#menu, #menu * {
			color:#fff;
			font-size:20px;
		}

		#menu>li>ul.dropdown-menu {
			margin-top:0px;
			background:#11102C;
		}


		/*#menu a {
			color:#fff;
		}

		#menu a:hover {
			color:#ddd;
		}*/
	</style>
	<?php 
		include('script.php'); 
		$getValue = '';
		if(!empty($_GET)) {
		foreach($_GET as $key => $item) {
			$getValue .= (((empty($i))?$i=1:++$i) == 1)?'?':'&';
			$getValue .= $key.'='.$item;
		}	
		}
		unset($i);
	?>
</head>
<body>
	<div class='container-fluid'>
		<div class='row'>
			<div id='sectorHeader' class='col-md-12'>
				<div class='col-md-8 col-md-offset-2'>
					<div style='display:table; border-spacing:0px; padding:0px; margin:0px;'>
						<div style='display:table-row;'>
							<div style='display:table-cell; margin-bottom:0;'><img src='media/images/logo.png' style='width:90px;'></div>
							<div style='display:table-cell; padding-left:20px; vertical-align:middle; '>ระบบกำกับดูแลการจัดซื้อจัดจ้างภาครัฐ (Government Procurement System)</div>
						</div>
					</div>
				</div>
			</div>
			<div class='col-md-12' style='background:#2F2E60;'>
				<div class='col-md-8 col-md-offset-2'>
					<ul id='menu' class="nav navbar-nav navbar-left">
            			<li><a href="home.php">หน้าแรก</a></li>
            			<li><a href="contract.php?q=list">ข้อมูลสัญญา</a></li>
            			<li class="dropdown">
            				<a href="#" class="dropdown-toggle" data-toggle="dropdown">รายงาน <b class="caret"></b></a>
            				<span class="dropdown-arrow"></span>
            				<ul class="dropdown-menu">
            					<li><a href="#">รายงาน 1</a></li>
            					<li><a href="#">รายงาน 2</a></li>
            					<li><a href="#">รายงาน 3</a></li>
            				</ul>
            			</li>	
           			</ul>


					<span class='pull-right' style='margin-top:5px; color:#fff;'>
						<span style='margin-right:20px;'>เจ้าหน้าที่ดูแลระบบ</span>
						<a href='index.php' class='btn btn-danger'>ออกจากระบบ</a>
					</span>
				</div>
			</div>
		</div> 
		<br>
