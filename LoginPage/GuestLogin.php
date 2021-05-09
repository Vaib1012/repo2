<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../../Edurater/connection.php';
        $conn = OpenCon(); //connect to the db
       
        $username = test_input($_POST["username"]); 

        
        $checkuser = "SELECT user_id FROM user WHERE username=?";
        $stmt =$conn->prepare($checkuser);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $res = $stmt->get_result();
        $num = mysqli_num_rows($res);

        if($num == 0){
            $checkuser = "SELECT * FROM guest_user WHERE username=?;";
            $stmt =$conn->prepare($checkuser);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $res = $stmt->get_result();
            $num = mysqli_num_rows($res);
            
            if($num == 0){
               $sql = "INSERT INTO guest_user (username)
                VALUES (?)";
                $stmt2 = $conn->prepare($sql);

                $stmt2->bind_param("s",$username);

                if($stmt2->execute()){
                    echo "0";   //username added in guest_user table
                } 
            }
            else {
                echo "1";   //username already exists in guest_user table
            }
                   
            
        } else {
             echo "2";      //username already exists in user table
        }          
    }
    
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>
