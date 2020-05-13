<?php

include "header.php";

 ?>


<header>
  <nav class="navbar navbar-expand-lg navbar-light mb-10 mx-auto">
  <a class="navbar-brand flex-grow-1" href="#"> <img src="img/logo.png" alt="logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link text-white" href="index.php">Subscribe<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active text-white bg-dark" href="index.php">Get It Now</a>
    </div>
  </div>
</nav>
<div class="container headercontainer">
  <div class="row mx-auto mb-0">
    <div class="col1"><img src="img/phone.png" alt="phone">
    </div>
    <div class="col2">
      <h1 class="headertitle pb-5">Join more than <span class="text-white">1000+</span> <br> satisfied users</h1>
      <div class="headertext py-5 text-white">
      <a>People are definitely a compagny's greatest asset.<br>It dosen't make any difference<br> wheter the product is cars or cosmetics.<br>
      A compagny is only as good as the people it keeps.</a>
      </div>
      <a href="index.php"
      <img class="androidbutton py-5"src="img/androidappbutton.png" alt="android application download"/>
    </a>
      </div>
  </div>
</div>
</header>


<section class="article1">
  <div class="container section1">
    <div class="row mx-auto mb-0">
      <div class="col1 sectiontext text-white">
        <h1 class="sectiontitle text-white pb-5">What you Get</h1>
        <div class="sectiontext pb-5">
      <a>People are definitely a compagny's greatest asset.<br>It dosen't make any difference<br> wheter the product is cars or cosmetics.<br>
      A compagny is only as good as the people it keeps.</a>
    </div>
      <div>
      <a href="index.php" class="btn btn-primary btn-lg active buttona" role="button" aria-pressed="false">GET IT NOW</a>
      </div>
      </div>

      <div class="col2">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/slide.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/slide2.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/slide3.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

      </div>
</section>

<section class="article2">
  <h1 class="a2title text-white">Some words from our owners</h1>
  <p class=" p2 text-black">People are definitely a compagny's greatest asset.<br>It dosen't make any difference</p>
  <div class="container headercontainer">
    <div class="row mx-auto ">
      <div id="img-right" class="col-sm"><img src="img/phone2.png" alt="phone">
      </div>
      <div class="col-sm">
        <div class="headertext text-black">
          <div class="speech-bubble">
            <div class="quot">&quot;</div>
              <p class="flextexte">People are definitely a compagny's greatest asset.It dosen't make<br>
                any difference wheter the product is cars or cosmetics.<br>
                A compagny is only as good as the people it keeps.<br>
                  <span class="johndoe"> John Doe</span>
              </p>
            <div id="quote-right" class="quot">&quot;</div>
          </div>
        </div>
    </div>
  </div>
</div>
</section>
<section class="joinus py-5 ">
  <h1 class="titrejoinus pb-5">Join us</h1>
  <p class="pb-5">
    we will send you from time to time<br>
    mail about our news and offers
  </p>
  <form>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Mail">
  <button type="submit" class="btn btn-primary buttonb">SEND</button>
</form>
</section>

<footer>

  <img class="pb-4"src="img/logofooter.png" alt="logo">
  <p>
    © 2016-<span class="nordfooter">NORD</span> All Right Reserved
  </p>

</footer>


 <?php

 include "footer.php";
