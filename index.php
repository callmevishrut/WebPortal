<!DOCTYPE html>
<html lang="en">
<?php
    mysql_connect("127.0.0.1","root","") or die("Couldnt connect to database");
    mysql_select_db("simplecounter") or die("Couldnt find database");

    $find_count = mysql_query("SELECT * FROM user_count");

    while ($row = mysql_fetch_assoc($find_count))
    {
        $current_counts = $row['counts'];
        $new_count = $current_counts + 1;
        $update_count = mysql_query("UPDATE 'simplecounter' . 'user_count' SET 'counts' = $new_count");
    }
?>
<head>
  <title>Celebrating 150 years of GandhiJi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
  </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid ncf">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="assets/icon.png"></a><a class="navbar-brand" href="#"><img src="assets/mg.png"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar" style="padding-left:55px;">
        <ul class="nav navbar-nav navbar-right">
          <li class="list-item active"><a href="#"><i class="fa fa-home" style="color: orange"></i> Home</a></li>
          <li class="list-item"><a href=" #"><i class="fa fa-envelope-open" style="color: greenyellow"></i> About</a></li>
          <li class="list-item"><a href=" #"><i class="fa fa-sticky-note" style="color: purple"></i> GandhiPedia</a></li>
          <li class="list-item"><a href=" #"><i class="fa fa-video-camera" style="color: lightcoral"></i> Virtual Tour</a></li>
          <li class="list-item"><a href=" #"><i class="fa fa-comments" style="color: rgb(28, 192, 247)"></i> Play Quiz</a></li>
          <li class="list-item"><a class="navbar-item navbar-icon" href="#"><img src="assets/moc.png"> Ministry of Culture</a></li>
        </ul>
      </div>  
    </div>
  </nav>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active"  style="vertical-align: bottom;">
          <div class="row" style="padding-top:11%;">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-6">
              </div>
              <div class="col-sm-4"> 
              </div>
            </div>
      </div>
    </div>
  </div><!--Image Slider-->
  <footer class="container-fluid text-center navbar-fixed-bottom">
    <div class="row">
      <div class="col-sm-4">
        <h4>Copyright @ All Rights Reserved</h4>
      </div>
      <div class="col-sm-4">
        <h4>Viewer Counter:</h4>
      </div>
      <div class="col-sm-4">
        <h4>Follow Us</h4>
      </div>
    </div>
   
  </footer>
</body>


</html>


