<?php
     include('components/_dbConnect.php');
     $movieFetchCate=$_GET["query"];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iMovies -Category</title>
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <?php   
        //Include nav bar
        include('components/_nav.php');
    ?>
    <div class="main-btn my-3 text-center">
        <a href="category.php?query=bolly"><button type="button" class="btn btn-outline-success my-2 mx-2"><strong>Bollywood</strong></button></a>
        <a href="category.php?query=south"><button type="button" class="btn btn-outline-success my-2 mx-2"><strong>South Indian</strong></button></a>
        <a href="category.php?query=holly"><button type="button" class="btn btn-outline-success my-2 mx-2"><strong>Hollywood</strong></button></a>
        <a href="category.php?query=series"><button type="button" class="btn btn-outline-success my-2 mx-2"><strong>Web Series</strong></button></a>
        <!-- <a href="category.html?query=bolly"><button type="button" class="btn btn-outline-warning my-2 mx-2"><strong>Bollywood</strong></button></a> -->

    </div>
    <!-- main container to display the movies. -->
    <div class="container">
        <?php
            $sql="SELECT * FROM `movie_information`";
            $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0) {
                # code...
                while ($row=mysqli_fetch_assoc($result)) {
                   
                    if($movieFetchCate==$row["movieCate"]){
                        echo '<a class="text-dark" href="details.php?query='.$row["movieKey"].'"><div class="card mx-3 my-3">
                    <img src="'.$row["moviePoster"].'" class="card-img-top" alt="'.$row["movieTitle"].'s image">
                    <div class="card-body">
                    <p class="card-text text-uppercase">Download <strong>'.$row["movieTitle"].'</strong> <strong>'.$row["movieDate"].'</strong> in Dual Audio (Hindi-English) Bluray  '.$row["movieQuality"].' quality</p>
                    </div>
                    </div></a>';
                    }
                }
            }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>


