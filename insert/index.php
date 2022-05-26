<?php
    include("../components/_dbConnect.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $USER=$_POST["user"];
        $PASS=$_POST["password"];
        $sql="SELECT * FROM `users` WHERE username='$USER'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                if (password_verify($PASS, $row["password"])) {
                    session_start();
                    echo password_verify($USER, $row["password"]);
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$USER;
                    header('location: insert.php');  
                }
                else{
                    die("not ok");
                }
            }
            
        }
        
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iMovies - login</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center my-4 text-light ">Login to iMovies</h2>
    <div class="container my-4 ">
        <form class="box" action="index.php" method="post">
            <div class="mb-3">
                <label for="user" class="form-label">@USER ID</label>
                <input type="text" name="user" class="form-control" id="user" placeholder="Enter your userid">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">PASSWORD</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="button">
                <button type="submit" class="btn btn-success mt-3">Login</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>