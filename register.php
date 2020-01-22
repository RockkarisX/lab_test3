<html>
<title>RockGames register page</title>
<link rel="stylesheet" href="css/bootsrap.min.css">
<link rel="stylesheet" href="css/style.css">
<body style = "background-color:black;">
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <h1 style="text-align:center, width:100%;">RockGames Register Page</h1>
                    <img src="images/loner.jpg" alt="Snow" style="width:100%;">
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="username *" name="username"/>
                            </div>
                            <div class="form-group">
                           
                                <input type="email" class="form-control" placeholder="email *" name="email"/>
                            </div>
                            <div class="form-group">
                            
                                <input type="password" class="form-control" placeholder="Your Password *" name="password"/>
                            </div>
                            <div class="form-group">
                              
                                <input type="password" class="form-control" placeholder="Confirm Password *" name="confirm"/>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btnSubmit">Submit</button>
                    <h6 style = "color:white;">Already have an account? <a href = "login.php">Login</a></h6>
                </div>
            </div>
        </div>
</body>
</html>
<?php
    if(isset(POST['Submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql1 = "INSERT into userrow (username,email,password) VALUES ('$username','$email','$password')";
    }
?>
