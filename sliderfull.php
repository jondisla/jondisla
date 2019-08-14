   <!-- Demo styles -->
   <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
  
  <!-- Swiper -->
  <div class="swiper-container slider" id="sliderfull">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/mpMw53ymwmI?start=8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/wG5RWz74XFQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      <div class="swiper-slide"><iframe width="580" height="315" src="https://www.youtube.com/embed/7kO0i7PrkHs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/FLw2omKeo4U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    </div>
     <!-- Add Pagination -->
     <center><div class="holdslide";">grab to slide</center>
    <div class="swiper-pagination holdslide"></div></div>
    
    <!-- Add Arrows -->
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    
    
  </div>
  <!-- Swiper JS -->
  <script src="../dist/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>