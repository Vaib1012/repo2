<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="MainpageStyle.css"/>
    <script type="text/javascript" src="MainpageScript.js"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>


<body class="main">
   
    <div class="nav">
        <button class="button1 signup" onclick="document.getElementById('id03').style.display='block'">Sign Up</a>     
    </div>
       
    <div class="Container1">
        <p id="errorField" class="error"></p>
       <img src="images/Edurater2.0.png" alt="logo">
        <h2>Rate your professor anonymously</h2>
        <button class="button1" onclick="document.getElementById('id01').style.display='block'">Login</button>
        <button class="button1" onclick="document.getElementById('id02').style.display='block'">Guest</button>
    </div>

    <!--Login pop up-->
    <div id="id01" class="modal">

        <form id="loginForm" class="modal-content animate" method="post">

            <div class="container">
                <label for="username"><b>Username</b></label>
                <input id="username1" type="text" placeholder="Enter Username" name="username" required>

                <label for="password"><b>Password</b></label>
                <input id="password1" type="password" placeholder="Enter Password" name="password" required>
                <p id="errorField1" class="error"></p>
                <button type="submit" onclick="login();return false;">Login</button>
            </div>
            
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none';document.getElementById('id01').reset();document.getElementById('loginForm').reset();" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>

    <!--Guest Login pop-up-->
    <div id="id02" class="modal">

        <form id="guestLoginForm" class="modal-content animate"  method="post">

            <div class="container">
                 <label for="username"><b>Username</b></label>
                <input id="username2" type="text" placeholder="Enter Username" name="username" required>

                <p id="errorField2" class="error"></p>
                <button type="submit" onclick="guestLogin();return false;">Login</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none';document.getElementById('guestLoginForm').reset();" class="cancelbtn">Cancel</button>

            </div>
        </form>
    </div>


    <!--Signup pop up-->
    <div id="id03" class="modal"  method="post">

        <form id="signupForm" class="modal-content animate" method="post">

            <div class="container">
                <label for="university"><b>University Name</b></label>
                <input  id="university" type="text" placeholder="Enter Name" name="university" required>
                <label for="username"><b>Username</b></label>
                <input id="username3" type="text" placeholder="Enter Username" name="username" required>

                <label for="password"><b>Password</b></label>
                <input id="password3" type="password" placeholder="Enter Password" name="password" required>
                <p id="errorField3" class="error"></p>
                <button type="submit" onclick="signUp();return false;">Sign up</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button  type="button" onclick="document.getElementById('id03').style.display='none';document.getElementById('signupForm').reset();" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var loginModal = document.getElementById('id01');
        var guestModal = document.getElementById('id02');
        var signupModal = document.getElementById('id03');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == loginModal) {
                document.getElementById("loginForm").reset();
                loginModal.style.display = "none";
            }

            if (event.target == guestModal) {
                document.getElementById("guestLoginForm").reset();
                guestModal.style.display = "none";
            }

            if (event.target == signupModal) {
                document.getElementById("signupForm").reset();
                signupModal.style.display = "none";
            }


        }
    </script>

</body>
</html>