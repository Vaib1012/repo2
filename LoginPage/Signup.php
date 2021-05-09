<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         include '../../Edurater/connection.php';
        $conn = OpenCon(); //connect to the db
       
        $username = test_input($_POST["username"]); 
        $password = test_input($_POST["password"]); 
        $university = test_input($_POST["university"]);


        $checkuser = "SELECT user_id FROM user WHERE username=?;";
        $stmt =$conn->prepare($checkuser);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $res = $stmt->get_result();
        $num = mysqli_num_rows($res);

        if($num == 0){
            $sql = "INSERT INTO user (username,password,university_name)
                VALUES (?,?,?)";
            $stmt2 = $conn->prepare($sql);

            $stmt2->bind_param("sss",$username, $password, $university);

            if($stmt2->execute()){
                echo "0";
            } 
        } else {
             echo "-1";
        }
              
    }
    
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>
