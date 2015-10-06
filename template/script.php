<title>สำนักงานคณะกรรมการป้องกันและปรายปรามการทุจริตแห่งชาติ</title>

	<link rel="shortcut icon" href="media/images/logo.png" /> 

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="media/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- style css -->
	<link rel="stylesheet" href="media/css/style.css">

	<!-- timeline css -->
	<link rel="stylesheet" href="media/css/timeline.css">

	<link href="media/css/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Optional theme -->
	

	<!-- Latest compiled and minified JavaScript -->
	<script src="media/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- Bootstrap plugin (flat design) -->
	<link href="media/Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
    <link href="media/Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">

    <!-- include bootstrap-datepicker -->
    <!-- https://eonasdan.github.io/bootstrap-datetimepicker -->
    <script type="text/javascript" src="media/js/bootstrap-datetimepicker/build/js/moment.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="media/js/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />


	<style type="text/css">	
		@font-face {
			font-family:THSarabunNew;
			src:url(media/fonts/THSarabunNew/THSarabun.woff);
		}
		body {
			background:#eee;
			font-family:THSarabunNew;
			font-size:22px;
		}
		.logo {
			display:inline-block;
			width:90px;
			height:90px;
			background: url(media/images/logo.png) no-repeat center center; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		}
		/*#19174F*/

		.thsarabun {
			font-family:THSarabunNew;
		}

		#sectorHeader {
			background: url(media/images/background2.png) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  color:#fff;
			  font-weight:500;
			  font-size:40px;
			  padding:15px 0;
		}

		.btn {
			min-width:130px;
			font-size:20px;
			padding:5px;
			padding-bottom:2px;
		}

		.formList>div>div {
			margin-top:15px;
		}


		.nav.nav-tabs>li>a {
			font-size:17px;
		}


		.tableLayout {
			display:table;
			width:100%;
		}
			.tableLayout>div {
				display:table-row;

			}
				.tableLayout>div.header>div, .tableLayout.list>div.header:hover>div {
					background:#1A1750;
					color:#fff;
				}
				.tableLayout>div>div {
					display:table-cell;
					vertical-align:top;
					padding:10px;
				}
				.tableLayout>div>div:first-child {
					padding-left:0;
				}
				.tableLayout>div>div:last-child {
					padding-right:0;
				}
		.tableLayout.list>div>div {
			border-bottom:solid 1px #ddd;
		}

		.tableLayout.list>div:hover>div {
			background:#f8f8f8;
		}

	</style>

	<script type="text/javascript">
		$('.datetimepicker').datetimepicker({
                format: 'DD/MM/YYYY',
                showTodayButton: true,
                showClear:true,
                showClose:true,
                useCurrent:false,
                ignoreReadonly:true,
                locale: 'th'
          });
          $('.datetimepicker').find("input").attr('readonly', 'readonly');
	</script>