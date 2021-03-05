@extends('layouts.site')
@section('content') 

<img src="\images\thumbnails\top.png" style="width: 100%">
<br>

 <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to ComicsOnlinE</h1>
      <h2>We have an online collection of all your favorite comic books.</h2>
      <a href="/about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>



<br>
<h1 style="color:white"><b>Latest Updates: </b></h1>
<br>
<div>
@if(count($comics)>0)
	@foreach($comics as $comic)
  <a href="/titles/{{{$comic->comic}}}">
	<div class="comDiv">
    <div class="member" data-aos="fade-up" data-aos-delay="300">
        <div class="member-img">
            <img src="\images\thumbnails\{{$comic->comic}}.jpg" width="333" height="400" class="img-fluid" alt="">
        </div>
        <div class="member-info">
            <p style="color: white">{{$comic->comic}}</p>
            <span style="color: white">
            	<small>Artist: {{$comic->artist_name}}</small>
            	<p>Geners: <small>{{$comic->gener}}</small></p>
            </span>
        </div>
    </div>
  </div>
  </a>

	@endforeach

@else
<p>no updates yet</p>
@endif
</div>

<br><br>
<section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

          <div class="testimonial-item">
            <img src="\images\thumbnails\Logo.png" class="testimonial-img" alt="">
            <h2>Welcome To ComicsOnLinE</h2>
            <h3>Best place for <br>reading Comics</h3>
          </div>

          <div class="testimonial-item">
            <img src="\images\thumbnails\c2.jpg" class="testimonial-img" alt="">
            <h2>You can both read and Socialize</h2>
            <h3>Don't forget to leave comments <br>and feedback.</h3>
          </div>

          <div class="testimonial-item">
            <img src="\images\thumbnails\c3.jpg" class="testimonial-img" alt="">
            <h2>Enjoy it</h2>
            <h3>We are always open.</h3>
          </div>

        </div>

      </div>
    </section>

@endsection