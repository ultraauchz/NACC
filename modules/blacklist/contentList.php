<div class='formList' style='display:inline-block; width:100%;'>
	<div class='col-md-12' style='padding-left:0;'>
		<?php 
			$listData1 = array(
				array('รายรับโดยตรงตามสัญญา', 0, 100000, 0, 0,1000000),
				array('หักรายจ่ายโดยตรงตามสัญญา (จากรายการที่ 2)', 5000, 700000, 0,0,705000),
				array('กำไร ขาดทุน ตามสัญญา (1-2)',5000,300000,0,0,295000),
			);
			$listData2 = array(
				array('ค่าใช้จ่ายเกี่ยวกับการเสนอราคา', 5000, 0, 0, 0,5000),
				array('ค่าสินค้า', 0, 200000, 0, 0,200000),
				array('ต้นทุนวัตถุดิบ', 0, 500000, 0, 0,500000),
				array('ค่าวัสดุ, อุปกรณ์', 0, 0, 0, 0,0),
				array('ค่าจ้างแรงงาน', 0, 0, 0, 0,0),
				array('ค่าสาธารณูปโภค', 0, 0, 0, 0,0),
				array('ค่าภาชนะบรรจุ, ค่าหีบห่อ', 0, 0, 0, 0,0),
				array('ค่าพาหนะ ค่าใช้จ่ายในการเดินทาง ค่าที่พัก', 0, 0, 0, 0,0),
				array('-', 0, 0, 0, 0,0),
				array('-', 0, 0, 0, 0,0),
				array('-', 0, 0, 0, 0,0),
				array('-', 0, 0, 0, 0,0),
				array('-', 0, 0, 0, 0,0),
				array('-', 0, 0, 0, 0,0),
				array('ค่าหักบัญชี', 0, 0, 0, 0,0),
				array('ค่าประทานบัตร', 0, 0, 0, 0,0),
				array('ดอกเบี้ยจ่าย', 0, 0, 0, 0,0),
				array('ค่าธรรมเนียมในการให้คำแนะนำและปรึกษา', 0, 0, 0, 0,0),
				array('ค่าธรรมเนียมอื่น', 0, 0, 0, 0,0),
				array('ค่าใช้จ่ายอื่นนอกเหนือจาก 1 ถึง 19', 0, 0, 0, 0,0),
				array('รวม 1 ถึง 20', 5000, 700000, 0, 0,705000),
			);
		?>

		<h6 style='margin:0; font-weight:bold;'>รายการที่ 1 รายรับรายจ่าย และกำไรหรือขาดทุน</h6 style='margin:0; font-weight:bold;'>
		<hr>		

		<div class='tableLayout list'>
			<div class='header'>
				<div>รายการ</div>
				<div style='width:160px;'>เงินสด</div>
				<div style='width:160px;'>ธนาคาร</div>
				<div style='width:160px;'>ค้างรับ/ค้างจ่าย</div>
				<div style='width:160px;'>รายการอื่น</div>
				<div style='width:160px;'>รวม</div>
			</div>
			<?php 

				foreach($listData1 as $item) {
					echo '<div>';
						echo '<div>'.((empty($no))?$no = 1:++$no).'. '.$item[0].'</div>';
						echo '<div class="text-right">'.((empty($item[1]))?'-':number_format($item[1], 2)).'</div>';
						echo '<div class="text-right">'.((empty($item[2]))?'-':number_format($item[2], 2)).'</div>';
						echo '<div class="text-right">'.((empty($item[3]))?'-':number_format($item[3], 2)).'</div>';
						echo '<div class="text-right">'.((empty($item[4]))?'-':number_format($item[4], 2)).'</div>';
						echo '<div class="text-right">'.((empty($item[5]))?'-':number_format($item[5], 2)).'</div>';
					echo '</div>';
				}
			?>
		</div>
		<br><br>

		<h6 style='margin:0; font-weight:bold;'>รายการที่ 2 รายจ่ายโดยตรงตามสัญญา</h6 style='margin:0; font-weight:bold;'>
		<hr>	
		<div class='tableLayout list'>
			<div class='header'>
				<div>รายการ</div>
				<div style='width:160px;'>เงินสด</div>
				<div style='width:160px;'>ธนาคาร</div>
				<div style='width:160px;'>ค้างรับ/ค้างจ่าย</div>
				<div style='width:160px;'>รายการอื่น</div>
				<div style='width:160px;'>รวม</div>
			</div>
			<?php 
				unset($no);
				foreach($listData2 as $item) {
					echo '<div>';
						echo '<div>'.((empty($no))?$no = 1:++$no).'. '.$item[0].'</div>';
						echo '<div class="text-right">'.((empty($item[1]))?'-':number_format($item[1], 2)).'</div>';
						echo '<div class="text-right">'.((empty($item[2]))?'-':number_format($item[2], 2)).'</div>';
						echo '<div class="text-right">'.((empty($item[3]))?'-':number_format($item[3], 2)).'</div>';
						echo '<div class="text-right">'.((empty($item[4]))?'-':number_format($item[4], 2)).'</div>';
						echo '<div class="text-right">'.((empty($item[5]))?'-':number_format($item[5], 2)).'</div>';
					echo '</div>';
				}
			?>
		</div>
	</div>
</div>