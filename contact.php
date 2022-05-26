<?php
    include('components/_dbConnect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>iMovies -Contact US</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .msg{
            height: 60px;
        }
        .container1{
            width: 80%;
            margin: auto;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-wrap: wrap;
        }
        .card{
            min-height: 430px;
        }
    </style>
  </head>
  <body>
   
  <?php
    //Include nav bar
    include('components/_nav.php');
?>

    <div class="msg">
        
    </div>
    <div class="container1">
        <div class="card my-4 mx-4" style="width: 20rem;">
            <img src="https://source.unsplash.com/300x170/?admin,programmer" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center text-primary">Developer</h5>
              <p class="card-text"><strong class="text-primary">Developer </strong>: <strong>Pallab Karmakar</strong>, also he is the owner of code with soul youtube channel. Do follow him on youtube.</p>
              <a href="https://www.youtube.com/channel/UCgI9UbQ4IinAZIdd0dLENEA" class="btn btn-primary">Follow on Youtube</a>
            </div>
        </div>
        <div class="card my-4 mx-4" style="width: 20rem;">
            <img src="https://source.unsplash.com/300x170/?maintainer,man" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center text-primary">Maintainer</h5>
              <p class="card-text"><strong class="text-primary">Maintainer </strong>: <strong>Mannan Hossen</strong>, is the Maintainer of our movie site also he uploads regular movie on our website. Do follow him on facebook</p>
              <a href="https://www.facebook.com/mannan.hossen.522" class="btn btn-primary">Follow on facebook</a>
            </div>
        </div>
        <div class="card my-4 mx-4" style="width: 20rem;">
            <img src="https://source.unsplash.com/300x170/?laptop,chat" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center text-primary">WhatsApp</h5>
              <p class="card-text"><strong class="text-primary">Information </strong>: Our website mainterner has a WhatsApp group, if any one interested to get instant notification about our movie website, then make sure to join our group</p>
              <a href="https://chat.whatsapp.com/Fv60jkWR3bA6Cl8mUuqVA6" class="btn btn-primary">JOIN GROUP</a>
            </div>
        </div>
    </div>
    <h1 class="text-center text-primary">Give Your Feadback</h1>
    <form method="post" id="frmSubmit" class="container my-4">

        <div class="row my-4">
            <div class="col">
                <input type="text" class="form-control" name="first" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="last" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="row my-4">
            <div class="col">
                <input type="text" class="form-control" name="topic" placeholder="Enter your topic" aria-label="topic">
            </div>
            <div class="col">
                <input type="email" class="form-control" name="email" placeholder="Enter your Email" aria-label="Email address">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Your Massage</label>
            <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary" id="btnSubmit" type="submit">Submit</button>

    </form>
    <footer class="container text-center my-3 mb-1">
        <strong class="text-primary">CodeWithSoul ||</strong> Copyright © 2022 iMovies.com
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/contact.js"></script>
  </body>
</html>