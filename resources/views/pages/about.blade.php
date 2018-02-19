@extends('layouts.app')
@section('content')
    <h1><?php echo $title ?></h1>

    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active" >
          <img src="/storage/cover_images/chines.jpg" alt="Image">
               
        </div>

        <div class="item">
          <img src="storage/cover_images/atco.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      <p></p>
    </div>
    
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
  <h3>What We Do</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="storage/cover_images/atco.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-3"> 
      <img src="storage/cover_images/chines.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>  
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>Our Partners</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="storage/cover_images/1_1518912671.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Abdussalam Group</p>
    </div>
    <div class="col-sm-2"> 
      <img src="storage/cover_images/1_1518912671.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Golden Toys</p>    
    </div>
    <div class="col-sm-2"> 
      <img src="storage/cover_images/1_1518912671.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Egypt Bike</p>
    </div>
    <div class="col-sm-2"> 
      <img src="storage/cover_images/1_1518912671.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Oman Bike</p>
    </div> 
    <div class="col-sm-2"> 
      <img src="storage/cover_images/1_1518912671.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>United State</p>
    </div>     
    <div class="col-sm-2"> 
      <img src="storage/cover_images/1_1518912671.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Not Specified </p>
    </div> 
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

@endsection
