<div class='row'>
	<div class='col-md-12'>
		<div class='col-md-10 col-md-offset-1'>
			<div style='display:inline-block; width:100%; min-height:750px; background:#fff; padding:30px;'>
				<h4 style='margin:0;'>ข้อมูลตรวจสอบบัญชีรายรับ - รายจ่าย</h4>
				<div style='color:#aaa;'>เจ้าหน้าที่ดูแลระบบ</div>
				<hr style='margin:20px 0; margin-top:5px;'>
				<div style='padding:20px; padding-top:10px; background:#eee; margin:10px 0; border:solid 1px #aaa; margin-bottom:25px;'>
					<div style='font-weight:bold;'>ค้นหา</div>
					<form class="form-horizontal" action="#" method="post">
						<div class="col-sm-12">
							<div class="col-sm-2">หน่วยงานราชการ : </div>
							<div class="col-sm-2">
								<input type='text' placeholder='หน่วยงานราชการ' class='form-control' style="display:inline-block;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">สถานะ : </div> 
							<div class="col-sm-3">
								<select class='form-control'>
									<option>--แสดงทั้งหมด--</option>
									<option>ปกติ</option>
									<option>เฝ้าระวัง 100 - 49</option>
									<option>เกินกำหนด</option>
								</select>
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">ปีงบประมาณโครงการ : </div>
							<div class="col-sm-4">
								<input type='text' placeholder='ปีงบประมาณโครงการ' class='form-control' style="display:inline-block;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">งบประมาณ : </div>
							<div class="col-sm-4">
								<input type='text' placeholder='งบประมาณ' class='form-control' style="display:inline-block;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">ชื่อโครงการ :</div>
							<div class="col-sm-4">
								<input type='text' placeholder='ปีงบประมาณโครงการ' class='form-control' style="display:inline-block;">
							</div>
						</div>
						<div class="div_index_search col-sm-12">
							<div class="col-sm-2">เลขที่สัญญา :</div>
							<div class="col-sm-4">
								<input type='text' placeholder='เลขที่สัญญา' class='form-control' style="display:inline-block;">
							</div>
						</div>

						<div class="div_btn_search">
							<button type="button" class='btn btn-inverse'>ค้นหา</button>
						</div>
					</form>
				</div>
				
				<?php include('template/pagination.php'); ?>

				<div class='tableLayout list'>
					<div class='header'>
						<div class="text-center" style="width:50px;">#</div>
						<div style='width:160px;'>เลขที่สัญญา</div>
						<div style='width:160px;'>โครงการ</div>
						<div style='width:160px;'>วันที่สิ้นสุดโครงการ</div>
						<div>วันที่ยื่นแบบ ชช 1</div>
						<div style='width:200px;'>
							สถานะ
						</div>
					</div>


					<?php 
						$dataList = array(
							array('2/2557', 'N555000023', '1100701061554', 'ชื่อคู่สัญญา4 นามสมมุติ', '<button class="btn btn-success" style="min-width:80px;">ปกติ</button>'),
							array('1/2557', 'N555000022', '1100705648690', 'ชื่อคู่สัญญา3 นามสมมุติ', '<button class="btn btn-danger" style="min-width:80px;">เฝ้าระวัง</button>'),
							array('2/2556', 'N554000023', '1100705001221', 'ชื่อคู่สัญญา2 นามสมมุติ', '<button class="btn btn-warning" style="min-width:80px;">เกินกำหนด</button>'),
							array('1/2556', 'N554000022', '1055801061554', 'ชื่อคู่สัญญา1 นามสมมุติ', '<button class="btn btn-success" style="min-width:80px;">ปกติ</button>'),
							array('', '', '', '', '<button class="btn btn-success" style="min-width:80px;">ปกติ</button>'),
							array('', '', '', '', '<button class="btn btn-success" style="min-width:80px;">ปกติ</button>'),
							array('', '', '', '', '<button class="btn btn-success" style="min-width:80px;">ปกติ</button>'),
							array('', '', '', '', '<button class="btn btn-success" style="min-width:80px;">ปกติ</button>'),
							array('', '', '', '', '<button class="btn btn-success" style="min-width:80px;">ปกติ</button>'),
							array('', '', '', '', '<button class="btn btn-success" style="min-width:80px;">ปกติ</button>')
						);

						foreach($dataList as $key => $item) {
							echo '<div>';
								echo '<div class="text-center">'.((empty($no))?$no = 1:++$no).'</div>';
								echo '<div>'.$item[0].'</div>';
								echo '<div>'.$item[1].'</div>';
								echo '<div>'.$item[2].'</div>';
								echo '<div>'.$item[3].'</div>';
								echo '<div class="text-center">';
									echo $item[4];
									echo ' <a href="?p=view&id='.($key+1).'" class="btn btn-inverse" style="min-width:80px;">ตรวจสอบ</a>';
								echo '</div>';
							echo '</div>';
						}
					?>
							
				</div>
				
				<?php include('template/pagination.php'); ?>

			</div>
		</div>
	</div>
</div>
<br>
<script language='javascript'>
	$(function(){
		$('[name=date_start]').on('change', function(){
			date_start = $('[name=date_start]').val();
			datepicker_($('[name=date_end]'), $('[name=date_start]').val());
		});
		
		$('[name=date_end]').on('change', function(){
			date_end = $('[name=date_end]').val();
			datepicker_($('[name=date_start]'), $('[name=date_start]').val(), $('[name=date_end]').val());
		});
	});
</script>