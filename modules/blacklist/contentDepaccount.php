<div class='formList' style='display:inline-block; width:100%;'>
	<div class='col-md-12' style='padding-left:0;'>
		<h6 style='margin:0; font-weight:bold;'>บัญชีเงินฝากธนาคารที่ใช้ในการรับจ่ายเงินตามสัญญา</h6 style='margin:0; font-weight:bold;'>
		<hr>		
		
		<?php 
			for($i=0; $i<5; $i++) {
				echo '<div class="tableLayout">';
					echo '<div>';
						echo '<div>'.($i+1).'. บัญชีเงินฝากธนาคาร </div>';
						echo '<div><input type="text" class="form-control" style="width:300px;"></div>';
						echo '<div>สาขา</div>';
						echo '<div><input type="text" class="form-control" style="width:300px;"></div>';
						echo '<div>เลขที่</div>';
						echo '<div><input type="text" class="form-control" style="width:300px;"></div>';
					echo '</div>';
				echo '</div>';
			}
		?>

	</div>
</div>