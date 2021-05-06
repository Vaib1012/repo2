<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'connection.php'; 
        $conn = OpenCon(); //connect to the db
       
        $username = test_input($_POST["username"]); 
        $password = test_input($_POST["password"]); 


        $checkuser = "SELECT user_id FROM user WHERE username=? AND password=?;";
        $stmt =$conn->prepare($checkuser);
        $stmt->bind_param("ss", $username,$password);
        $stmt->execute();
        $res = $stmt->get_result();
        $num = mysqli_num_rows($res);

        if($num == 1){
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $_SESSION['isLoggedIn']=true;
                   
            echo "0";   
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
