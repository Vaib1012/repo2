<?php
session_start();

include 'connection.php';
$conn = OpenCon();
$username = $_SESSION['username'];
$password = $_SESSION['password'];

$checkuser = "SELECT user_id,name,img_id,gender,preferred_gender FROM users WHERE username = ? AND password = ?;";
$stmt = $conn->prepare($checkuser); 
$stmt->bind_param("ss", $username,$password);
$stmt->execute();
$res=$stmt->get_result();

if($res->num_rows == 1){
    $row = $res->fetch_assoc();
    session_destroy();
    session_start();
    $_SESSION['user_id']=$row["user_id"];
    $_SESSION['username']=$username;
    $_SESSION['name']=$row['name'];
    $_SESSION['img_id']=$row['img_id'];
    $_SESSION['gender']=$row['gender'];
    $_SESSION['pref_gender']=$row['preferred_gender'];
    $_SESSION['loggedin']=true;
    $_SESSION['swiping']=false;
    $_SESSION['errorMsg']="";
    
    //redirect to welcome page
    header("Location: WelcomePage.php");
    
}
else{
    $_SESSION['errorMsg'] = "*Username and password didn't match.";
    header("Location: Login.php");
}

?>
