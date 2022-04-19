<?php
    // echo session_id();
    // echo "<hr>";
    // echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    // echo "<hr>";
    // echo "Mijn id is: " . $_SESSION["id"];
?>
<div class="super-container">
  <div class="carousel">
    <div class="carousel-container">

      <div class="myCarousel fade">
        <div class="numbertext">1 / 3</div>
        <img src="/img/catfished.jpg" style="width:60vw">
        <div class="text">Dj GEEN DJ?!?!!</div>
      </div>

      <div class="myCarousel fade">
        <div class="numbertext">2 / 3</div>
        <img src="/img/salemandersander" style="width:60vw">
        <div class="text">Geen Sander Maar Salamander Sander</div>
      </div>

      <div class="myCarousel fade">
        <div class="numbertext">3 / 3</div>
        <img src="https://images.unsplash.com/photo-1440342359743-84fcb8c21f21?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" style="width:60vw">
        <div class="text">Caption Three</div>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </div>
</div>
