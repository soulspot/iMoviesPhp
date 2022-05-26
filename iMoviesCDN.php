<?php
    include('components/_dbConnect.php');
    $movieDownloadFetch=$_GET["query"];
    $loading=TRUE;
    $str="";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iMoviesCDN</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    .heading {
        padding: 30px !important;
        width: 100%;
        min-height: 30vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 3em;
    }

    .container {
        display: flex;
        justify-content: center;
        flex-direction: column;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-block;
    }
    </style>
</head>

<body>
    <?php
    //Include nav bar
    include('components/_nav.php');
    $sql="SELECT * FROM `movie_information` JOIN `movie_download` WHERE movie_information.movieKey=$movieDownloadFetch and movie_download.movieKey=$movieDownloadFetch limit 1";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
            echo '<div class="heading bg-success text-center ">Download, 
                  '.$row["movieTitle"].'  
            </div>';
            if($row["480s1"]!=""){
                $str='<a target="_blank" href="'.$row["480s1"].'"><button type="button" class="btn btn-outline-danger mx-3 my-3">Downlaod in 480p </button></a>';
            }
            if($row["480s2"]!=""){
                $str=$str.'<a target="_blank" href="'.$row["480s2"].'"><button type="button" class="btn btn-outline-danger mx-3 my-3">Downlaod in 480p Server 2 </button></a>';
            }
            if($row["720s1"]!=""){
                $str=$str.'<a target="_blank" href="'.$row["720s1"].'"><button type="button" class="btn btn-outline-danger mx-3 my-3">Downlaod in 720p </button></a>';
            }
            if($row["720s2"]!=""){
                $str=$str.'<a target="_blank" href="'.$row["720s2"].'"><button type="button" class="btn btn-outline-danger mx-3 my-3">Downlaod in 720p server 2 </button></a>';
            }
            if($row["1080s1"]!=""){
                $str=$str.'<a target="_blank" href="'.$row["1080s1"].'"><button type="button" class="btn btn-outline-danger mx-3 my-3">Downlaod in 1080p </button></a>';
            }
            if($row["1080s2"]!=""){
                $str=$str.'<a target="_blank" href="'.$row["1080s2"].'"><button type="button" class="btn btn-outline-danger mx-3 my-3">Downlaod in 1080p server 2 </button></a>';
            }
            $links=$str;
            echo '<div class="container text-center">
                <h2 class="text-center text-success my-4">Download links</h2>  
                '.$links.'
            </div>';
        }
    }
        
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>