<?php
include("server.php");
?>
<html>
<title></title>
<link rel = "stylesheet" href = "css/bootsrap.min.css">
<link rel = "stylesheet" href = "css/style.css">
<body id = "bod" style = "background-color:grey;">
<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
  <div class="collapse navbar-collapse" id="navbarNav" style = "bottom:10px;">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand" href="index.php">
            <img src="images/Rlogo.jpg" width="35" height="30" class="d-inline-block align-top" alt="Logo">
            RockGames
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="available.php">Available</a>
      </li>
    </ul>
  </div>
  <br><br><br><br>
</nav>
<div class = "container-fluid" style = "top:10px;height:70px; width:500px;margin-right:auto;margin-left:auto; background-color:#301934;color:cornsilk;">
 <h2 style = "text-align:center">RockGames Dashboard</h2>
</div>
<form class = "form-group" method = "post" action = "index.php" enctype = "multipart/form-data">
<div class = "container" style = "top:20px; background-color:#301934;height:auto;width:auto;">
    <label>Image</label>
    <input class="form-control form-control-lg" type = "file" name = "image">
    <label>Name</label>
    <input class="form-control form-control-lg" type = "text" name = "Name">
    <label>Description</label>
    <textarea class="form-control form-control-lg" type = "text" name = "description"></textarea>
    <label>Features</label>
    <textarea class="form-control form-control-lg" type = "text" name = "features"></textarea>
    <label>Requirements</label>
    <textarea class="form-control form-control-lg" type = "text" name = "requirement"></textarea><br>
    <button type = "submit" name = "submitgame"class = "btnSubmit" style = "text-align:center;">submit game</button>
</div>
</form>
</body>
</html>