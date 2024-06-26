<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Owl-carousel Cards Slider | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  </head>
  <body>
  
  <div class="slider owl-carousel">
      <div class="card">
        <div class="img">
<img src="assets\images\p1.png" alt=""></div>
<div class="content">
          <div class="title"> Briana Tozour</div>
<div class="sub-title"> Graphic Designer</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="assets\images\p2.png" alt=""></div>
<div class="content">
          <div class="title">
Pricilla Preez</div>
<div class="sub-title">
Web Developer</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="assets\images\p3.png" alt=""></div>
<div class="content">
          <div class="title">
Eliana Maia</div>
<div class="sub-title">
App Developer</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
</div>


<script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}

.slider{
  max-width: 100%;
  display: flex;
}
.slider .card{
  flex: 1;
  margin: 0 10px;
  background: #fff;
}
.slider .card .img{
  height: 200px;
  width: 100%;
}
.slider .card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slider .card .content{
  padding: 10px 20px;
}
.card .content .title{
  font-size: 25px;
  font-weight: 600;
}
.card .content .sub-title{
  font-size: 20px;
  font-weight: 600;
  color: #e74c3c;
  line-height: 20px;
}
.card .content p{
  text-align: justify;
  margin: 10px 0;
}
.card .content .btn{
  display: block;
  text-align: left;
  margin: 10px 0;
}
.card .content .btn button{
  background: #e74c3c;
  color: #fff;
  border: none;
  outline: none;
  font-size: 17px;
  padding: 5px 8px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.2s;
}
.card .content .btn button:hover{
  transform: scale(0.9);
}

    </style>

  </body>
</html>

