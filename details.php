<?php
     include('components/_dbConnect.php');
     $movieFetchKey=$_GET["query"];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iMovies Details</title>
    <link rel="stylesheet" href="css/details.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/utility.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <?php   
        //Include nav bar
        include('components/_nav.php');
        $sql="SELECT * FROM `movie_information` JOIN `movie_image` WHERE movie_information.movieKey=$movieFetchKey and movie_image.movieKey=$movieFetchKey";
        $result=mysqli_query($conn,$sql);
    ?>
     <div class="main-btn my-3 text-center">
        <a href="category.php?query=bolly"><button type="button" class="btn btn-outline-success my-2 mx-2"><strong>Bollywood</strong></button></a>
        <a href="category.php?query=south"><button type="button" class="btn btn-outline-success my-2 mx-2"><strong>South Indian</strong></button></a>
        <a href="category.php?query=holly"><button type="button" class="btn btn-outline-success my-2 mx-2"><strong>Hollywood</strong></button></a>
        <a href="category.php?query=series"><button type="button" class="btn btn-outline-success my-2 mx-2"><strong>Web Series</strong></button></a>
        <!-- <a href="category.html?query=bolly"><button type="button" class="btn btn-outline-warning my-2 mx-2"><strong>Bollywood</strong></button></a> -->
    </div>
    <div class="detailsBox">
        <h1><?php 
            if (mysqli_num_rows($result)>0) {
                # code...
                while ($row=mysqli_fetch_assoc($result)) {
                    # code...
                    echo '<h1 class="text-center text-success py-4">Download '.$row["movieTitle"].' '.$row["movieDate"].' (Hindi-English) || '.$row["movieQuality"].'</h1>
                    <p class="tex-center my-3"><strong class="text-danger">iMovies</strong> is The Best Website/Platform For Hollywood, Bollywood and South Indian HD Movies. We Provide Direct Google Drive Download Links For Fast And Secure Downloading. Just Click On Download Button And Follow Steps To Download And Watch Movies Online For Free</p>
                    <p>
                        <Strong class="text-danger">StoryLine:</Strong>
                        <span id="storyLine">
                        '.$row["movieStory"].'</span>
                    </p>
                    <div id="ss1" class="screenShot"><img src="'.$row["screenShot1"].'" alt=""></div>
                    <div id="ss1" class="screenShot"><img src="'.$row["screenShot2"].'" alt=""></div>
                    <div id="ss1" class="screenShot"><img src="'.$row["screenShot3"].'" alt=""></div>
                    <div class="db"><a href="iMoviesCDN.html?query='.$row["movieKey"].'"><button type="button" class="btn btn-success btn-lg">Download</button></a></div>';
                }
            }
        ?></h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>