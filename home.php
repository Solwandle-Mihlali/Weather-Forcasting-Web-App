<?php 
   
   if(array_key_exists('searchBtn',$_GET)){
       //check if input field is empty 
       if(!$_GET['search']){
        $error = "input field is empty";
       }
   }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    

    <video autoplay muted loop id="bgvid">
        <source src="bgvid3.mp4" type="video/mp4">
     </video>

     <div class="container2">
         
       <a href="#" class="fa fa-bars" id="toggle" onclick="showSideBar()"></a> 
        <span>LIVE WEATHER STATS</span>
       <form action="" method="get">
        <input type="text" name="search" placeholder="CITY NAME" id="search">
        <button type="submit" class="fa fa-search" name="searchBtn"></button>
       </form>

       <div class="output">


</div>
      

       <h1>@MIHLALI SOLWANDLE</h1>
     </div>



</body>
</html>