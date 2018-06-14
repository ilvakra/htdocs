<!DOCTYPE html>
<html>
<head>
    <title>Welcome!</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>

<body>

    <img class="w-50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfO3N7VeJgDHJr_7JWTVycrUInYuKxKclzxgYWaQPc2N0WdvKV" alt="Third slide">


    <div id="mansKaruselis" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#mansKaruselis" data-slide-to="0" class="active"></li>
        <li data-target="#mansKaruselis" data-slide-to="1"></li>
        <li data-target="#mansKaruselis" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://qph.fs.quoracdn.net/main-qimg-92822f563a92ee06c81c6e7f1d7a2b0c" alt="First slide">
      </div>
      <div class="carousel-item">
          <img class="d-block w-100" src="https://i.ytimg.com/vi/v5KzBPUEgGQ/maxresdefault.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
          <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfO3N7VeJgDHJr_7JWTVycrUInYuKxKclzxgYWaQPc2N0WdvKV" alt="Third slide">
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>



<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
<button type="button" class="btn btn-warning">Warning</button>

aaa bbbb <span class="d-block m-5 bg-dark py-5 px-3 ">ccc</span> ddd

<table class="table table-striped bg-warning text-white text-center">
    <tr>
        <td>1</td>
        <td>2</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2</td>
    </tr>
</table>


<?php
$navigation=['welcome'=>'/galadarbs/public', 'about'=>'/diena1.php', 'contact'=>'/diena1.php'];
?>
<nav>
    <ul>
     <?php

     foreach ($navigation as $name => $url) 
     {
        echo("<li><a href='$url'>$name</a></li>");

            // echo('<li><a href="$url">$name</a></li>');

            // echo('<li><a href="'.$url.'">'.$name.'</a></li>');
    }
    ?> 
</ul>
</nav>

<div class="container">

</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>