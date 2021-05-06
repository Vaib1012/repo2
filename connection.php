<?php
    function OpenCon()
     {
        $dbhost = "localhost";
        $dbuser = "user10";
        $dbpass = "KIzdOXhDEWnyJV5s";
        $db = "userdb";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
        
        return $conn;
     }
    function CloseCon($conn)
     {
        $conn -> close();
     }
     
     
     //KIzdOXhDEWnyJV5s
?>
