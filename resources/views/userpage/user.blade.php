<style>
   .bg-img {
      /* The image used */
      background-image: url(backimg.png);
      min-height: 550px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      box-sizing: border-box;
      width: 1357.5px;
      margin-left: -8.5px;
      overflow: hidden;

   }


   /****************************text************************************/
   .search-form-text {
      position: relative;
      z-index: auto;
      text-align: center;
      margin-top: 200px;
      margin-left: 263px;
   }

   .st-heading.text-left {
      font-size: 45px;
      color: white;
      margin-left: -141px;
      font-family: sans-serif;
   }

   .sub-heading.text-left {
      font-size: 31px;
      color: white;
      margin-left: 25px;
   }

   /************slider */
   h2.fw7 {
      color: var(--main-color, #1A2B48);
      font-weight: 500;
      font-family: system-ui;
      line-height: 4;
      text-align: justify;
      font-size: 16px;
      margin-bottom: -32px;
   }

   span.imgtxt {
      color: #1a2b48 !important;
      font-size: 16px;
      font-weight: 600;
      overflow: hidden;
      text-overflow: ellipsis;
      text-align: center;
      font-family: sans-serif;

   }

   /*********************blur image******************** */
   .blurtxt {
      margin-top: -67px;
      margin-right: 305px;
      color: white;
      font-size: 32px;
      font-weight: 500;
      font-family: sans-serif;
   }

   .vc_btn3.vc_btn3-color-warning.vc_btn3-style-modern {
      color: #FFFFFF;
      border-color: #FF9900;
      background-color: #FF9900;
   }

   .vc_btn3.vc_btn3-size-md {
      font-size: 14px;
      padding-top: 8px;
      padding-bottom: 8px;
      padding-left: 15px;
      padding-right: 15px;
      margin-left: 280px;
   }

   .vc_btn3.vc_btn3-shape-rounded {
      border-radius: 5px;
   }

   a.vc_general.vc_btn3.vc_btn3-size-md.vc_btn3-shape-rounded.vc_btn3-style-modern.vc_btn3-color-warning {
      position: absolute;
      margin-top: -5%;
   }

   a.vc_btn3.vc_btn3-size-md:hover {
      color: whitesmoke;

   }

   a.vc_general.vc_btn3:hover {
      /* color: black; */
      background-color: orange;
   }

   img.blurimage {
      height: 120px;
   }

   /***************************float image**************************** */
   .floattxt {
      width: 538px;
      margin-top: 190px;
      margin-left: 79px;
      font-weight: 600;
      text-align: left;
      text-align: justify;
   }

   img.vc_single_image-img {
    position: absolute;
    overflow: hidden;
    margin-top: -485px;
    margin-left: -10px;
}
   span.floatt {
      position: absolute;
      margin-left: 77px;
      margin-top: -87px;
      font-weight: 600;
   }
   b{
    font-weight: 700;
}
.wpb_wrapper {
    margin-left: 83px;
}
img.vc_single_image-img2 {
    margin-left: -541px;
    margin-top: 30px;
}
.wpb_wrappertext {
    margin-left: 641px;
    margin-top: -521px;
    text-align: justify;
    /* text-align: center; */
    width: 538px;
}
.wpb_text_column.wpb_content_element {
    margin-top: 25px;
}
</style>
@extends('layout')
@section('title', 'userpage')
@section('bgimage')
<div class="bg-img">
   <div class="search-form-text">
      <div class="container">
         <h1 class="st-heading text-left">“Our Ingenious Intentions To Make You Travel”</h1>
         <div class="sub-heading text-left">“Reward Yourself : Travel to be lively.”</div>
      </div>
   </div>
</div>

<!-- Top content -->
<div class="top-content">
   <div class="container-fluid">
      <div id="carousel-example" class="carousel slide" data-ride="carousel">
         <h2 class="fw7">
            <span style="font-size: 24pt;">Explore Destinations By Theme</span>
         </h2><br>
         <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
               <img src="assets/img/slider/solo.jpg" class="img-fluid mx-auto d-block" alt="img1">
               <span class="imgtxt" aria-hidden="true">Solo</span><br>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
               <img src="assets/img/slider/Adventure-1.png" class="img-fluid mx-auto d-block" alt="img2">
               <span class="imgtxt" aria-hidden="true">Adventure</span><br>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
               <img src="assets/img/slider/wildlife.jpg" class="img-fluid mx-auto d-block" alt="img3">
               <span class="imgtxt" aria-hidden="true">Wildlife</span><br>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
               <img src="assets/img/slider/Nature-1.png" class="img-fluid mx-auto d-block" alt="img4">
               <span class="imgtxt" aria-hidden="true">Nature</span><br>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
               <img src="assets/img/slider/honeymoon.jpg" class="img-fluid mx-auto d-block" alt="img5">
               <span class="imgtxt" aria-hidden="true">Honeymoon</span><br>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
               <img src="assets/img/slider/water-activity.png" class="img-fluid mx-auto d-block" alt="img6">
               <span class="imgtxt" aria-hidden="true">Water Activities</span><br>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
               <img src="assets/img/slider/family-1.png" class="img-fluid mx-auto d-block" alt="img7">
               <span class="imgtxt" aria-hidden="true">Family</span><br>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
               <img src="assets/img/slider/family.jpeg" class="img-fluid mx-auto d-block" alt="img8">
               <span class="imgtxt" aria-hidden="true">Nature</span><br>
            </div>
         </div>
         <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
</div>
<br>
<div class="blurimage">
   <img class="blurimage" src="assets\img\siteimg\blurimage.png">
   <h2 class="blurtxt" style="text-align: center;">
      <span class="blurtext">Come If You Are Curious To Know More</span>
   </h2><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-warning" href="https://dazonntravels.com/blog/" title="">Read more</a>
</div>
<br>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p style="text-align: left;"><span style="font-size: 18pt; color: #ea3f52;">About Us</span></p>
<h3 style="text-align: left;"><span style="font-size: 26pt;">Be With Dazonn</span></h3>
</div>
</div>
<div class="vc_single_image-wrapper   vc_box_border_grey">
   <img class="vc_single_image-img2 " src="assets\img\siteimg\floatimg-1.png" width="600" height="500" alt="be-with-dazonn" title="Be With Dazonn">
</div>
<div class="wpb_column column_container col-md-6">
   <div class="vc_column-inner wpb_wrapper">
<div class="wpb_text_column wpb_content_element wpb_animate_when_almost_visible wpb_bounceIn bounceIn vc_custom_1635751504908 wpb_start_animation animated">
   
<div class="wpb_wrappertext">
<p><strong>We invite you to be amazed on your travels; when you travel with Dazonn.</strong> “You’ve just found the best resource to find trip &amp; accommodate. We guarantee that this site is not the same as what you have seen elsewhere. We assure you of a safe, well-planned travel plan for your amazing trips.</p>

After booking a Dazonn tour, We will permit you to submit crucial information on your trip so that everything runs smoothly, and we can also enable you to book additional excursions. Our vacation packages include visits and tours of the must-see locations, and we offer you options to customize your trip by adding extra activities and excursions.</p>
<p>We are here to serve you with the best facilities to travel worldwide in your budget and our planning. We are here to assist you with your all queries. We are available for you from the day you plan your booking until you safely return to your hometown. Let’s plan your dream vacation with Dazonn Travels hope you enjoyed your holiday.</p>
</div>
</div>
</div>
</div>
<div class="aligned">
   <h3 style="text-align: left;">
   <span class="floatt" style="color: #ea3f52; font-size: 18pt;">Why Choose Dazonn Travels?</span>
</h3>
   <div class="floattxt">
      <p>When you<span>that leaves you with beautiful memories incredible stories. The love we have for our work is evident! It’s our passion to share our love, and we enjoy meeting people. Here are some reasons why Dazonn!!!</span></p>
      <p><strong>A Great Deal For The Money</strong><br>
         Dazonn Travels offers great value for money, so you can confidently send your travel arrangements to us. We can negotiate the best prices on the most popular attractions thanks to our long-standing relationships with operators and our volume of travellers.</p>
         <p><span><strong>Travel Company You Can Trust</strong></span><br>
Dazonn travels is well focused &amp; to provide you exotic excursions of your life. Our abilities allow us to offer an exceptional travel experience with the right quality and price at the right time. Moreover, We save the customer time and energy. So, that become the best among various <span>tour manager companies.</span></p>
   </div>
   <img class="vc_single_image-img " src="//i0.wp.com/dazonntravels.com/wp-content/uploads/2021/10/About-us-2-1.png" width="600" height="500" alt="why-choose-dazonn-travels" title="Why Choose Dazonn Travels">
</div>

@endsection