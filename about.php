<?php include 'common-header.php'; ?>
<?php include 'header.php'; ?>
<div class="innrBreadcrm">
  <div class="container">
    <a href="index.php">Home</a> &gt; About
  </div>
</div>

<!--============== BRD CRM ==============-->


<div class="shifter_page">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
      <?php foreach ($carouselItems as $index => $item): ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $index; ?>"
          class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
      <?php endforeach; ?>
    </ol>
    <div class="carousel-inner">
      <?php foreach ($carouselItems as $index => $item): ?>
        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
          <div class="imgCover"
            style="background-image: url(' <?php echo $item['image']; ?> '); height: 85.5vh !important; "></div>
        </div>
      <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    <div class="bnr-content itemCenter">
      <div class="container">
        <div class="bnr-lft">
          <p class="brn-p1 fa fa-bell"> The Voice of EMS</p>
          <p class="brn-p3"> Caring For People-First The <span> American Guardian Angel </span> </p>
          <p class="p2-bnr">
            American Ambulance Association tools, resources, and advocacy keep EMS rolling. We take care
            of the organizations that take care of people—first
          </p>
          <span>
            <a href="products.php" class="linkBtn btn-white mt-5">Show All</a>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <p class="brn-p3 text-center">The numbers say it all.</p>
    <div class="s2-block mb-5">
      <div class="box">
        <h1 style="color:<?php echo $colors[1] ?>;">+ 6491</h1>
        <p>Missions</p>
      </div>
      <div class="box">
        <h1 style="color:<?php echo $colors[2] ?>;">99.99 %</h1>
        <p>Our Popular</p>
      </div>
      <div class="box">
        <h1 style="color:<?php echo $colors[3] ?>;">$ 7218k</h1>
        <p>Total Gain</p>
      </div>
      <div class="box">
        <h1 style="color:<?php echo $colors[4] ?>;"><span class="fa fa-user"></span> 30187</h1>
        <p>Followed Us</p>
      </div>
    </div>
  </div>

</div>





<?php include 'footer.php' ?>
</div>

<!---------------------Footer Starts Here -------------------->
<?php require_once ('footer.php'); ?>
<!-----------------------Footer End Here---------------------->

</body>

</html>