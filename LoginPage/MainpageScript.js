function login() {
    var username=document.getElementById("username1").value;
    var password=document.getElementById("password1").value;
    
    if(username !="" && password!=""){
        
         $.ajax({
            url: "../../Edurater/LoginPage/Login.php",
            method: "POST",
            data: {username:username, 
                password:password
            },
            success: function(data) {
                data=data.trim();
                var errMsgField = document.getElementById('errorField1');
                
                if(data =="0"){
                   window.location.href = "../../Edurater/Home/HomePage.php";
                }else{
                   errMsgField.innerHTML="*Username password does not match";
                } 
            }
         });  
    }
    else {
        document.getElementById('errorField1').innerHTML="blank";
    }
}


function signUp() {
    var username=document.getElementById("username3").value;
    var password=document.getElementById("password3").value;
    var university=document.getElementById("university").value;
    if(username !="" && password!="" && university!=""){
         $.ajax({
            url: "../../Edurater/LoginPage/Signup.php",
            method: "POST",
            data: {username:username, 
                password:password,
                university:university 
            },
            success: function(data) {
                data=data.trim();
                var errMsgField = document.getElementById('errorField3');
                if(data =="0"){
                    errMsgField.style.color='green';
                    errMsgField.innerHTML="Registration Successful";
                    document.getElementById("signupForm").reset();
                }else if(data =="-1"){
                    errMsgField.style.color='red';
                    errMsgField.innerHTML="*Username already taken";
                } 
            }
         });  
    }
    else {
        document.getElementById('errorField3').innerHTML="blank";
    }
}

function guestLogin() {
    var username=document.getElementById("username2").value;
    
    if(username !=""){
        
         $.ajax({
            url: "../../Edurater/LoginPage/GuestLogin.php",
            method: "POST",
            data: {username:username
            },
            success: function(data) {
                data=data.trim();
                var errMsgField = document.getElementById('errorField2');
            
                if(data =="0"){
                   window.location.href = "../../Edurater/Home/HomePage.php";
                }else if(data == "1"){
                   errMsgField.innerHTML="*Please signup";
                }else if(data == "2"){
                   errMsgField.innerHTML="*Username already taken";
                } 
            }
         });  
    }
    else {
        document.getElementById('errorField2').innerHTML="blank";
    }
}



