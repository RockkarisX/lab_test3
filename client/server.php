<?php
    $con = mysqli_connect("localhost","root","","lab_test3");

    //REGISTER  USER 
    if(isset($_POST['Submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //$password2 = $_POST['confirm'];




        $password = md5($password);
        
        $sql1 = "INSERT into userrow (username,email,password) 
                        VALUES ('$username','$email','$password')";

        if(mysqli_query($con,$sql1)){
            header('location: index.php');
        }
        

    }

    //Login script
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