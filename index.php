<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!!-- link style css ---!!>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!!--link boxicons for icone user and lock ---!!>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!!--link font awesome--!!>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()"  method="post">
         <label for="username">Username</label>
         <i class='bx bxs-user'></i>
         <input class="input" type="text"  name="user" placeholder="Username" > <br>
         
         <br>
         <label for="password">Password</label>
         <i class='bx bxs-lock-alt'></i>
         <input type="password" name="pass" placeholder="Password" > 
         
         <input class="input" type="submit" id="btn" value="Login" name="submit">
               


        </form>

    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length == "" && pass.length ==""){
            alert("username and password filed is empty!!!");  
            return false  
            }
            else{
                if(user.length == ""){
            alert("username is empty!!!");  
            return false 
            }
            if(pass.length == ""){
            alert("password is empty!!!");  
            return false 
            }

            }



        }
    </script>
</body>
</html>