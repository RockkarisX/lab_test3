<html>
    <title></title>
    <link rel = "stylesheet" href = "css/bootsrap.min.css">
    <body style = "background-color:grey;">
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
            <h1 style = "text-align:center;">RockGames Dashboard</h1><hr></hr>
            <h1 style = "text-align:center;">Available Games</h1><hr></hr>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Features</th>
                        <th scope="col">Requirements</th>
                    </tr>
                </thead>
                <tbody>
               
                <?php 
             $con = mysqli_connect("localhost","root","","lab_test3");
             $query1 = 'SELECT * FROM games';
             $result = mysqli_query($con, $query1);
             while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
                echo '<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td> 
                    <td>'.$row[3].'</td> 
                    <td>'.$row[4].'</td> 
                    <td><button class="btn btn-success">Update</button></td>
                    <td><button class="btn btn-danger">Delete</button></td> 
                    
                </tr>';
             }
             
            ?> 
                      
                </tbody>
            </table>
    </body>
</html>