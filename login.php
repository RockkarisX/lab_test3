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
                            
                                <input type="password" class="form-control" placeholder="Your Password *" name="password"/>
                            </div>
                           
                        </div>
                    </div>
                    <button type="button" class="btnSubmit">Login</button>
                    <h6 style = "color:white;">Don't have an account? <a href = "register.php">Register</a></h6>
                </div>
            </div>
        </div>
</body>
</html>
<?php
    $con = "localhost","root","","lab_test3";
    if (isset($_POST['Login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);

        $sql2 = "SELECT * FROM userrow WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con,$sql2);

        if(mysqli_num_rows($result)>0)
        {
            echo "login succesful";
            header("location:index.php");
        }
        else
        {
            echo "login unsuccesful";
        }

    }
?>