<!-- 

<div class="container-fluid back ">
    
<div class="row">
    <div class="col-lg-12">
    <h1 class="title">Carousel Custom style</h1>
  <div class="owl-container">
    <div class="owl-carousel owl-theme">
      <div class="item"><h4><img src="./image/1.png" alt=""></h4></div>
      <div class="item"><h4><img src="./image/2.png" alt=""></h4></div>
      <div class="item"><h4><img src="./image/3.png" alt=""></h4></div>
      <div class="item"><h4><img src="./image/4.png" alt=""></h4></div>
      <div class="item"><h4><img src="./image/5.png" alt=""></h4></div>
      <div class="item"><h4><img src="./image/5.png" alt=""></h4></div>

  
    </div>
  </div>
    </div>
</div>

</div>

  
 -->
 <div class="container" id="prof">
 <!-- start slidecours         -->


 <div class="swiper-container mySwiper " data-aos="zoom-in-left">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="./image/1.png" />
      </div>
      <div class="swiper-slide">
        <img src="./image/2.png" />
      </div>
      <div class="swiper-slide">
        <img src="./image/3.png" />
      </div>
      <div class="swiper-slide">
        <img src="./image/4.png" />
      </div>
      <div class="swiper-slide">
        <img src="./image/5.png" />
      </div>
      <div class="swiper-slide">
      <img src="./image/6.png" />
      </div>
      <div class="swiper-slide">
      <img src="./image/image7.png" />
      </div>
      <div class="swiper-slide">
      <img src="./image/images8.jpg" />
      </div>
   



      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- end slidecours         -->

</div>




  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      autoplay:true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },

    });

  </script>

