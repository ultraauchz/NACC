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
         include('function.inc.php'); 
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
				<div class='col-md-10 col-md-offset-1'>
					<div style='display:table; border-spacing:0px; padding:0px; margin:0px;'>
						<div style='display:table-row;'>
							<div style='display:table-cell; margin-bottom:0;'><img src='media/images/logo.png' style='width:90px;'></div>
							<div style='display:table-cell; padding-left:20px; vertical-align:middle; '>ระบบกำกับดูแลการจัดซื้อจัดจ้างภาครัฐ (Government Procurement System)</div>
						</div>
					</div>
				</div>
			</div>
			<div class='col-md-12' style='background:#2F2E60;'>
				<div class='col-md-10 col-md-offset-1'>
					<ul id='menu' class="nav navbar-nav navbar-left">
            			<li><a href="home.php">หน้าแรก</a></li>
            			<li><a href="member.php?q=list">ข้อมูลการสมัครขอใช้บริการ</a></li>
            			<li><a href="plan.php?q=list">ข้อมูลแผนประจำปี</a></li>
            			<li><a href="standard_price.php">ข้อมูล ราคากลาง</a></li>
            			<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลสัญญา <b class="caret"></b></a>
                            <span class="dropdown-arrow"></span>
                            <ul class="dropdown-menu">                                
                                <li><a href="contractparty.php">ข้อมูลคู่สัญญา</a></li>
                                <li><a href="contract.php?q=list">ข้อมูลสัญญา</a></li>
                            </ul>
                        </li>                             
                        <li><a href="blacklist.php?q=list">ข้อมูลตรวจสอบบัญชีรายรับ - รายจ่าย</a></li>                                  		
            			<li class="dropdown">
            				<a href="#" class="dropdown-toggle" data-toggle="dropdown">รายงาน <b class="caret"></b></a>
            				<span class="dropdown-arrow"></span>
            				<ul class="dropdown-menu">
            					<li><a href="#">รายงานสถานะคู่สัญญา</a></li>
            					<li><a href="#">รายงานราคากลาง</a></li>
            					<li><a href="#">ประวัติการใช้งาน</a></li>
            				</ul>
            			</li>	
            			<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ตั้งค่าระบบ <b class="caret"></b></a>
                            <span class="dropdown-arrow"></span>
                            <ul class="dropdown-menu">
                                <li><a href="#">กลุ่มผู้ใช้ และการกำหนดสิทธิ์การใช้งาน</a></li>
                                <li><a href="#">ผู้ใช้</a></li>
                                <li><a href="#">ประเภทหน่วยงาน</a></li>
                                <li><a href="#">หน่วยงาน</a></li>
                                <li><a href="#">ประเทศ</a></li>
                                <li><a href="#">จังหวัด</a></li>
                                <li><a href="#">อำเภอ</a></li>
                                <li><a href="#">ตำบล</a></li>
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
