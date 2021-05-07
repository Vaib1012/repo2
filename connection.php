<?php
    
    function OpenCon()
     {
//        $dbhost = "localhost";
//        $dbuser = "user10";
//        $dbpass = "KIzdOXhDEWnyJV5s";
//        $db = "userdb";
        
        $dbhost = "ID328605_edurater.db.webhosting.be";
        $dbuser = "ID328605_edurater";
        $dbpass = "edurater2021";
        $db = "ID328605_edurater";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
        
        return $conn;
     }
    
     function CloseCon($conn)
     {
        $conn -> close();
     }
 
?>






