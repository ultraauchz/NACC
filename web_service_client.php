<html>
<head>
<title></title>
</head>
<body>
<?php
        require_once("lib/nusoap.php");
        $client = new nusoap_client("http://localhost:70/nacc/web_service.php?wsdl",true); 
       $data = $client->call("DisplayBlackList"); 
       echo $data;
?>
</body>
</html>