<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'connection.php'; 
        $conn = OpenCon(); //connect to the db
       
        $username = test_input($_POST["username"]); 


        $checkuser = "SELECT user_id FROM user WHERE username=?;";
        $stmt =$conn->prepare($checkuser);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $res = $stmt->get_result();
        $num = mysqli_num_rows($res);

        if($num == 0){
            $checkuser2 = "SELECT * FROM guest_user WHERE username=?;";
            $stmt2 =$conn->prepare($checkuser2);
            $stmt2->bind_param("s", $username);
            $stmt2->execute();
            $res2 = $stmt2->get_result();
            $num2 = mysqli_num_rows($res2);
            
            if($num2 == 0){
                $sql = "INSERT INTO guest_user (username)
                    VALUES (?)";
                $stmt = $conn->prepare($sql);

                $stmt->bind_param("s",$username);

                if($stmt->execute()){
                    
                    echo "0";   //user insert into the guest_user table
                }
            }else{
                echo "1"; //username already exists in the guest_user
            }
        } else {
             echo "2"; //username already exists in the user table
        }
              
    } 
    
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>


 