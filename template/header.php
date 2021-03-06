<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
		</div>
	
		<!-- begin navbar -->
		<div class="row div_main_menu">

	      <!-- Static navbar -->
	      <div class="col-md-10 col-md-offset-1 div_main_menu">
		      <nav class="navbar navbar-default" style='margin-bottom: 0px; div_main_menu'>

		        <div class="container-fluid div_main_menu" style="padding-left: 5px; padding-right: 5px;">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand visible-xs-block" href="#">Menu</a>
		          </div>

		          <div id="navbar" class="navbar-collapse collapse" style="float: left;">
		            <ul class="nav navbar-nav">
		              	<li class="active"><a href="home.php">หน้าแรก</a></li>
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
		          </div><!--/.nav-collapse -->
		          <ul class="nav navbar-nav navbar-right">
		          	<li class="btn" style="float: right;"><a href='index.php' class='btn btn-danger'>ออกจากระบบ</a></li>
	              	<li class="text" style="float: right;">เจ้าหน้าที่ดูแลระบบ</li>
	              </ul>
		        </div><!--/.container-fluid -->
		      </nav>
	      </div>
	      
	    </div>
	    <br>
	    <!-- end navbar -->

