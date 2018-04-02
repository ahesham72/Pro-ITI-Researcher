<?php
define("Myheader" , TRUE);
include("header.php");
include("navbar.php");

?>

<!-- Start Slider -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" class="slider-header">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active overlay">
        <img src="img/slide1.jpg" alt="Los Angeles" style="width:100%;" >
        <div class="carousel-caption">
        <h1></h1>
        <p></p>
        </div>
      </div>

      <div class="item overlay">
        <img src="img/slide3.jpg" alt="Chicago" style="width:100%;"`>
        <div class="carousel-caption">
        <h1></h1>
        <p></p>
        </div>
      </div>

      <div class="item">
        <img src="img/slide2.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
        <h1></h1>
        <p></p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- End Slider -->

<!-- start Search Div -->
<?php
include("searchbox.php");
?>
<!-- End Search Div -->

<!-- Start Content -->
<div class="awesome text-center">
<div class="container">
<?php
include("home_content_re.php");
include("home_content_ma.php");
include("home_content_phd.php");
?>
</div>
</div>
<!-- End Content -->

<!-- Start Contact Us -->
<?php
include("contact.php");
?>
<!-- End Contact Us -->

<?php
include("footer.php");
?>
