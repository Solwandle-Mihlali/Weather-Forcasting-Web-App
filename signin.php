<!--<?php 

include 'config.php';

session_start();

if(isset($_POST['signUpBtn'])){
   
  $firstName= mysqli_real_escape_string($conn,$_POST["fName"]);
  $lastName= mysqli_real_escape_string($conn,$_POST["lName"]);
  $Email= mysqli_real_escape_string($conn,$_POST["email"]);
  $pass= mysqli_real_escape_string($conn,md5($_POST["pass"]));
  $confirm_Pass= mysqli_real_escape_string($conn,md5($_POST["confPass"]));
  $email_Check = mysqli_num_rows(mysqli_query($conn,"SELECT email FROM userdetails WHERE email='$Email'"));

  if($pass!== $confirm_Pass)
  {
      echo "<script>
                 alert('Passwords Dont Match ');
           </script>";
  }
  elseif($email_Check > 0){
        
    echo "<script>
    alert('EMAIL ALREADY IN USE  ');
            </script>";
  }
  else{

    $sql  = "INSERT INTO userdetails (firstName,lastName,email,password) 
            VALUES('$firstName','$lastName','$Email','$pass')";
    $result = mysqli_query($conn,$sql); 
    
    if($result){
      echo "<script>
      alert('Registration Successful');
              </script>";
    }
    else{
      echo "<script>
      alert('Registration Failed');
              </script>";
    }
  }
}

//sigin

if(isset($_POST['loginBtn'])){
   
 
  $Email= mysqli_real_escape_string($conn,$_POST["signinEmail"]);
  $pass= mysqli_real_escape_string($conn,md5($_POST["password"]));

  $email_Check = mysqli_query($conn,"SELECT id FROM userdetails WHERE email='$Email' AND password = '$pass'");

  if(mysqli_num_rows($email_Check) > 0)
  {
    $row = mysqli_fetch_assoc($email_Check);
    $_SESSION['user_id'] = $row['id'];
    header('Location: home.php');

    echo "<script>
    alert('welcome ');
            </script>";
  }
  else{
    echo "<script>
    alert('login details incorrect ');
            </script>";
  }
  
}

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>

  
  <div class="container">
    <div class="socials">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-github"></a>
      <a href="#" class="fa fa-twitter"></a>
   </div>


   <form action="#" method="post" class="signInForm" id="signIn">
     <input type="text" name="signinEmail" placeholder="EMAIL" required >
     <input type="password" name="password" placeholder="PASSWORD" required >
     <button type="submit" class="fa fa-check" name="loginBtn"></button>
     <a href="#" onclick="signUp()"> CREATE ACCOUNT </a>
   </form>

   <form action="#" method="post" class="signUpForm" id="signUp">
    <input type="text" name="fName" placeholder="FIRST NAME" required style="color: black;">
    <input type="text" name="lName" placeholder="LAST NAME" required style="color: black;">
    <input type="text" name="email" placeholder="EMAIL" required style="color: black;">
    <input type="password" name="pass" placeholder="PASSWORD" required style="color: black;" >
    <input type="password" name="confPass" placeholder=" CONFIRM PASSWORD" required style="color: black;">
    <button type="submit" class="fa fa-check" name="signUpBtn"></button>

  </form>
  </div>

  <style>

body, html {

background:white;
margin: 0;
padding: 0;
width: 100%;
height: 100%;
overflow: hidden;
scroll-behavior: smooth;
color: black;
}

nav{
width: 100%;
height: 100px;
background: rgb(255, 255, 255);
position: absolute;
top: 0;
display: flex;
animation-name: navAnimate;
animation-duration: 5s;
}

@keyframes navAnimate {

from{

    top: -100%;
}

}

.imageContainer{

height: 150px;
width: 150px;
position:absolute;
top: 35%;
left: 14%;
animation-name: fromLeft;
animation-duration: 5s;
}

.imageContainer img{
height: 100%;
width: 100%;
}

ul{
display: flex;
justify-content: space-between;
position: absolute;
right: 30%;
}

li{
list-style: none;
margin: 30px;
}

nav ul li a{

text-decoration: none;
font-size: 20px;
font-weight: bolder;
color: rgb(0, 0, 0);
font-family: sans-serif;
}

.OVE{

color: blue;
font-size: 50px;
font-family: sans-serif;
line-height: 110px;
position: absolute;
left: 22%;
font-weight: bolder;
position: absolute;
top: 37%;

animation-name: oveAnimate;
animation-iteration-count: infinite;
animation-duration: 5s;

}

@keyframes oveAnimate {

0%{
    color: black;
}

25%{
    color: red;
}
50%{
    color: green;
}
75%{
    color: orange;
}
100%{
    color: blue;
}


}

.IT{

color: black;
font-size: 60px;
line-height: 110px;
position: absolute;
left: 30%;
top: 37%;
font-family: sans-serif;
font-weight: bolder;
animation-name: fromLeft;
animation-duration: 5s;
}

.welcomeImage{

height: 700px;
width: 800px;
position: absolute;
right: 0%;
top: 0%;
animation-name: imageRight;
animation-duration: 5s; 
}

@keyframes imageRight {

from{

    right: -100%;
}
}

.welcomeImage img{
height: 100%;
width: 100%;
}

.welcomeText{
animation-name: fromLeft;
animation-duration: 5s;
width: 400px;
height: 50px;
position: absolute;
left: 7.5%;
bottom: 43%;
box-shadow: 3px 3px 10px rgb(14, 70, 0) ;
border-radius: 15px;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.welcomeText p{

text-align: center;
text-transform: capitalize;
font-size:15px;
font-family: sans-serif;
font-weight: bolder;
color: rgb(65, 62, 62);

}
::placeholder{
  color: black;
}
.think{

position: absolute;
width: 500px;
height: 100px;
top: 30%;
left: 5%;
font-size: 60px;
font-weight: bolder;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

animation-name: fromLeft;
animation-duration: 5s;
}

@keyframes fromLeft {

    from{
        left: -50%;
    }
    
}

.WE{
position: absolute;
width: 100px;
height: 100px;
top:39%;
left: 9%;
font-size: 60px;
font-weight: bolder;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
animation-name: fromLeft;
animation-duration: 5s;
}

.active{

color: rgb(19, 42, 255);
animation-name: oveAnimate;
animation-duration: 10s;
animation-iteration-count: infinite;
}

.btnSignIn{

position: absolute;
width: 200px;
height: 60px;
text-align: center;
background: white;
border-radius: 10px;
box-shadow: 1px 1px 15px rgb(0, 0, 0);
bottom: 30%;
left: 7.5%;
border-style: solid;
border-color: red;
border-width: 2px;
animation-name: fromLeft;
animation-duration: 5s;
}

.btnSignUp{

position: absolute;
width: 200px;
height: 60px;
text-align: center;
background: white;
border-radius: 10px;
box-shadow: 1px 1px 15px rgb(0, 0, 0);
bottom: 30%;
left: 21%;
border-style: solid;
border-color: rgb(0, 95, 40);
border-width: 2px;
animation-name: fromLeft;
animation-duration: 5s;
}

.btnSignIn a{

color: black;
text-decoration: none;
font-weight: bolder;
font-family:cursive;
font-size: 30px;
}


.btnSignUp a{

color: black;
text-decoration: none;
font-weight: bolder;
font-family:cursive;
font-size: 30px;
}
input{
  color: black;
}
  </style>

    <script>
       
       let signInForm = document.getElementById("signIn");
       let signUpForm = document.getElementById("signUp")
       signUpForm.style.display = "none";
      function signUp()
       {
         
         signInForm.style.display = "none";
         signUpForm.style.display = "";
       }

    </script>
</body>
</html>
