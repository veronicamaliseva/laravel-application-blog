@extends('layouts.app')  
@section('content')
<section class="bg-top">
  <div class="container">
    <div class="row">
      <div class="col header">
         <h1>WELCOME TO BLOG <br>
        ABOUT ART</h1>
        <p>The main purpose of the blog is to inspire but also promote the world’s best creative <br>
           expressions, to gather a network of top creative minds to review, critique, and to help<br>
           us stay informed of the new trends and ideas taking place in the global visual arts <br>and 
           graphic design arena.</p>
           <p><b>SUBSCRIBE TO OUR WEEKLY NEWSLETTER FOR NEWS:</b></p>
          <div class="col">
           <form action="/" method="Post">
          <input type="email" class="form-control-inline" name="subscribe" placeholder="Enter Your Email">
              <button type="buttonsubscribe" class="btn btn-default">Subscribe <i class="fa fa-envelope"></i></button>
      </form>
      </div>
      </div>
    </div>
  </div>
</section>

<div class="bg-gray">
  <div class="container">
    <div class="row pt-5">
      <div class="col text-center">
        <h5>LATEST BLOG POSTS</h5>
      </div>
      </div>
      <div class="row text-justify pt-5 pb-5">
        <div class="col-12 col-sm-6 col-lg-3 px-1">
        <div class="blog-tumss p-3">
          <img class="blog pb-1" src="/blog/homepage/img/blog2.jpg" alt="">
          <p class="data">November 25, 2019 | by Arnold Baker</p>
          <h6>Artist Mariah Dekkenga Uses a Board Game</h6>
          <p>In order to visit Mariah Dekkenga’s current show, “Non-Zero Sum,” at Situations on the Lower East Side of Manhattan, one has to make a series of choices. What time to leave to make it there? At the subway station, run to make the train? Wait for the walk sign at the crosswalk or jaywalk?</p>
        </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 px-1">
        <div class="blog-tumss p-3">
            <img class="blog pb-1" src="/blog/homepage/img/blog1.jpg" alt="Wall Art from India">
            <p class="data">October 27, 2019 | by Maria Papae</p>
            <h6>Wall Art from India by Sameer Kulkarni</h6>
            <p>Salf-taught illustrator and animator based in Mumbai, India. His beautiful wall art for shops and offices in India but also his personal project “One for blue” made out of love for nature and wildlife in collaboration with other designers and the “Doodlers” a collective project as well, caught my eyes.</p>
          </div>
          </div>
        <div class="col-12 col-sm-6 col-lg-3 px-1">
        <div class="blog-tumss p-3">
            <img class="blog pb-1" src="/blog/homepage/img/blog3.jpg" alt="">
            <p class="data">October 19, 2019 | by David Anderson</p>
            <h6>Pencils – A personal project by André Hutchinson</h6>
            <p>André Hutchinson, is a 37-year-old creative from Jamaica. He has been in the field of Graphic design & Illustration for over 16 years. Attended the Edna Manley College in Kingston, Jamaica, where he discovered his knack for poetry and creative writing. He has always liked reading and researching. </p>
          </div>
          </div>
        <div class="col-12 col-sm-6 col-lg-3 px-1">
        <div class="blog-tumss p-3">
            <img class="blog pb-1" src="/blog/homepage/img/blog4.jpg" alt="">
            <p class="data">October 05, 2019 | by Grand Miller</p>
            <h6>Jerry’s Compelling Map | Check out </h6>
            <p>In the summer of 1963 Jerry Gretzinger began drawing a map of an imaginary city. The work started as a doodle done in the spare time he had while working at a tedious job. He continued to add to that map through the years until, in 1983, Jerry set it aside to put his free time to all other use.</p>
          </div>
          </div>
     </div>
     <div class="row align-items-center justify-content-center pb-5">
        <a href="/blogs" class="button">SEE MORE</a>
     </div>
  </div>
</div>

<div class="bg-black">
  <div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-12 col-sm-6 col-lg-3">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="/blog/homepage/img/slide2.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="/blog/homepage/img/slide1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="/blog/homepage/img/slide3.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>
    
      <div class="col-12 col-sm-6 col-lg-9 text">
        <h5>The Color ‘Blue’: Use the Hidden Meaning for Art & Design</h5>
        <p>Color allows us to create our own individuality and flare. For years, interior decorators, graphic designers, photographers, 
          dvertisers and artists have been using color to enhance our environments. Research shows that color can play a major role in our
           overall state of well-being. In art and design, color can be used to evoke a certain mood, create a message or evoke a strong
           response in the viewer. </p>
        
        <p>The first blue color was produced by ancient Egyptians in 2200 B.C. in an effort to create a permanent pigment that could be
           applied to a variety of surfaces. Since, the color has continued to evolve, and its association with calming, natural elements
           like the sky and clear water have solidifiedt as a universal favorite among artists, interior designers and other disciplines.</p>

        <p>Over the course of art history, artists of all media have utilized the multitude of unique shades of blue as a means of expression. 
          Pablo Picasso himself underwent a “blue period” where all his paintings were created in shades of blue and 
          blue-green to create a subdued, melancholic atmosphere. With the latest blue pigment, YInMn, which was discovered less than 
          a decade ago, the color blue continues to unveil its artistic properties, carrying a rich history and significance for both 
          artists and audiences alike.</p>
          </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row pt-5 pb-5">
    <div class="col text-center ">
      <div class="contact">
        <h3>If you wish to contact me</h3>
        <p>Your information is secure and encrypted, consectetur adipisicing elit, sed do eiusmod<br>
        tempor incididunt ut labore et dolore magna aliquat enim ad minim.</p>
      </div> 
        <a href="/contact" class="buttoncontact">CONTACT ME</a> 
          </div>
    </div>
  </div>
</div>
@endsection

