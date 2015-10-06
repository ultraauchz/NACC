<div style=" padding: 20px;display: inline;width: 100px;">
    มีทั้งหมด 15 รายการ 2 หน้า
</div>
<div class="pagination">
	<ul>
		<li class="previous">
			<a href="#" class="fui-arrow-left"></a>
		</li>
		<?php
            for ($page = 1; $page <= 10; $page++) { echo '<li><a href="#">' . $page . '</a></li>';
            }
		?>
		<!-- Make dropdown appear above pagination -->
		<li class="pagination-dropdown dropup">

			<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fui-triangle-up"></i> </a>
			<!-- Dropdown menu -->
			<ul class="dropdown-menu">

				<li>
					<a href="#">10-20</a>
				</li>
			</ul>
		</li>

		<li class="next">
			<a href="#" class="fui-arrow-right"></a>
		</li>
	</ul>
</div>