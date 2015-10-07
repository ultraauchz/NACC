<?php 
	$getValue = '';
	if(!empty($_GET)) {
	foreach($_GET as $key => $item) {
		if(!empty($item) && $key != 'p') {
			$getValue .= (((empty($i))?$i=1:++$i) == 1)?'?':'&';
			$getValue .= $key.'='.$item;
		}
	}	
	}
?>
<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>บันทึกข้อมูลคู่สัญญา</h4>
				<div style='color:#aaa;'>เจ้าหน้าที่ดูแลระบบ</div>
				<hr style='margin:20px 0; margin-top:5px;'>

				<div class='row'>
					<div class='col-md-12'>
						<ul class="nav nav-tabs" role="tablist">
							<li><a href="blacklist.php<?php echo @$getValue; ?>&p=content&type=contract" role="tab" data-toggle="tab"> <icon class="fa fa-"></icon> ข้อมูลสัญญา </a></li>
							<li><a href="blacklist.php<?php echo @$getValue; ?>&p=content&type=list" role="tab" data-toggle="tab"> <i class="fa fa-archive"></i> รายรับ-รายจ่าย </a></li>
							<li class="active"><a href="blacklist.php<?php echo @$getValue; ?>&p=content&type=depaccount" role="tab" data-toggle="tab"> <i class="fa fa-book"></i> บัญชีเงินฝากที่ใช้ในการรับจ่ายเงินตามสัญญา </a></li>
						</ul>
					</div>
				</div>
						
				<div class='row'>
					<div class='col-md-12'>
						<div style='border:solid 1px #ddd; border-top:none; border-bottom:none; padding:20px; min-height:520px;' id='contractContent'>
							Error: 404
						</div>
					</div>
					<div class='col-md-12'>
						<div style='border:solid 1px #ddd; border-top:none; padding:10px 20px; text-align:center;'>
							<hr>
								
							<div style='display:inline-block; text-align:left;'>
								<div>หน่วยงาน: </div>
								<div>
									<select class='form-control' style="display:inline-block; width:auto;">
										<option>--เลือกสถานะ--</option>
										<option>ปกติ</option>
										<option>เฝ้าระวัง 100 - 49</option>
										<option>เกินกำหนด</option>
									</select>
								</div>
							</div>

							<div>
								<input type="checkbox" checked="checked" value="" id="checkbox2" data-toggle="checkbox" checked="">
					            เป็น Blacklist
							</div>

							<div>
								<a href="blacklist.php" class="btn btn-primary">บันทึก</a>
								<a href="blacklist.php" class="btn btn-default">ย้อนกลับ</a>
							</div>
								
						</div>
					</div>
				</div>
						
			</div>
		</div>
	</div>
</div>
<br>

<script type="text/javascript">
	function getForm() {
		$.get($('.nav.nav-tabs li.active>a').attr('href'), function(data){
			$('#contractContent').html(data);
		});
	}
	$(function(){
		getForm();
		$('.nav.nav-tabs>li>a').on('click', function(){
			$('.active').removeClass('active');
			$(this).parent().addClass('active');
			getForm();
		});
	});
		
</script>
