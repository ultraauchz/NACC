<?php
        require_once("lib/nusoap.php");
         
        //Create a new soap server
        $server = new soap_server();
         
        //Define our namespace
        $namespace = "http://localhost:70/nacc/web_service.php";
        $server->wsdl->schemaTargetNamespace = $namespace;
         
        //Configure our WSDL
        $server->configureWSDL("  NACC ::: Web Service");
         
        // Register our method and argument parameters

        $server->register('DisplayBlackList');
         
        function DisplayBlackList($strName,$strEmail)
        {
            return "Hello, World! ";
        }
         
        // Get our posted data if the service is being consumed
        // otherwise leave this data blank.
        $POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
         
        // pass our posted data (or nothing) to the soap service
        $server->service($POST_DATA);
        exit(); 
?>