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
    if(isset($_POST['submitgame']))
    {
        $image = $_FILES['image']['name']; 
        $target = "dbimages/".basename($image); 
        $image=basename( $_FILES["image"]["name"],".jpg");
        $Name = $_POST['Name'];
        $description = $_POST['description'];
        $features = $_POST['features'];
        $requirement = $_POST['requirement'];

        $sql4 = "INSERT into games (`image`,`Name`,`description`,`features`,`requirement`) 
                        VALUES ('$image','$Name','$description','$features','$requirement')";
        
        mysqli_query($con,$sql4);

        if(mysqli_query($con,$sql4))
        {
            echo "successful";
            header('location: available.php');
        }
        else
        {
            echo "something went wrong";
        }
      
    }
?>