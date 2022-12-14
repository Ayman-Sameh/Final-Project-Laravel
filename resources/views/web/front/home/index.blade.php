@extends('web.front.master')

@section('title' , 'Home Page')

@section('section-hero')
    
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Impact</span></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->
    
@endsection

@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">

      @foreach ($about as $abouts)

        <div class="container" data-aos="fade-up" id="{{$abouts->id}}">
  
          <div class="section-header">
            <h2>About Us</h2>
            <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
          </div>
  
          <div class="row gy-4">
            <div class="col-lg-6">
              <h3>{{$abouts->title}}</h3>
              <img src="/uploads/{{$abouts->img}}" class="img-fluid rounded-4 mb-4" alt="">
              <p>{{$abouts->description}}</p>
            </div>
            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>
  
                <div class="position-relative mt-4 ratio ratio-4x3 " >
                  <iframe src="/uploads/{{$abouts->video}}" class="rounded-4" ></iframe>
                </div> 
              </div>
            </div>
          </div>

      @endforeach
        </div>
      </section><!-- End About Us Section -->
  
      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">
  
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              @foreach ($client as $clients)
              <div class="swiper-slide"><img src="/uploads/{{$clients->img}}" class="img-fluid" alt=""></div>
              @endforeach
            </div>
          </div>
  
        </div>
      </section><!-- End Clients Section -->
  
      <!-- ======= Stats Counter Section ======= -->
      <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4 align-items-center">
  
            <div class="col-lg-6">
              <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
            </div>
  
            <div class="col-lg-6">
  
              <div class="stats-item d-flex align-items-center">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
              </div><!-- End Stats Item -->
  
              <div class="stats-item d-flex align-items-center">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Projects</strong> adipisci atque cum quia aut</p>
              </div><!-- End Stats Item -->
  
              <div class="stats-item d-flex align-items-center">
                <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
              </div><!-- End Stats Item -->
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Stats Counter Section -->
  
      <!-- ======= Call To Action Section ======= -->
      <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out">
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </section><!-- End Call To Action Section -->
  
      <!-- ======= Our Services Section ======= -->
      <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Services</h2>
            <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
          </div>
  
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
  
            @foreach ($service as $services)

            <div class="col-lg-4 col-md-6">
              <div class="service-item  position-relative" id="{{$services->id}}">
                <div class="image mb-3">
                  <img src="/uploads/{{$services->img}}"  width="90">
                </div>
                <h3>{{$services->title}}</h3>
                <p>{{$services->description}}</p>
                <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->

          @endforeach

          </div>
  
        </div>
      </section><!-- End Our Services Section -->
  
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Testimonials</h2>
            <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
          </div>
  
          <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100"> 
          <div class="swiper-wrapper">

            @foreach ($testimonial as $testimonials)

             <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="/uploads/{{$testimonials->img}}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>{{$testimonials->title}}</h3>
                      <h4>{{$testimonials->position}}</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <p>{{$testimonials->description}}</p>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            
            @endforeach
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Portfolio</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
          </div>
  
          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
  
            <div>
              <ul class="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                @foreach($category as $categories)
                    <li data-filter="">{{$categories->name}}</li>
                    @endforeach
                {{-- <li data-filter=".filter-product">Product</li>
                <li data-filter=".filter-branding">Branding</li>
                <li data-filter=".filter-books">Books</li> --}}
              </ul><!-- End Portfolio Filters -->
            </div>
  
            <div class="row gy-4 portfolio-container">
  
              @foreach($portfolio as $portfolios)
                   
                  <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                      <a href="/uploads/{{$portfolios->img}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="/uploads/{{$portfolios->img}}" class="img-fluid" alt=""></a>
                      <div class="portfolio-info">
                        <h4><a href="portfolio-details.html" title="More Details">{{$portfolios->name}}</a></h4>
                        <p>{{$portfolios->description}}</p>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->

                  @endforeach
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
  
      <!-- ======= Our Team Section ======= -->
      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Team</h2>
            <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
          </div>
  
          <div class="row gy-4">
  
            @foreach($team as $teams)
            
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="/uploads/{{$teams->img}}" class="img-fluid" alt="">
                <h4>{{$teams->name}}</h4>
                <span>{{$teams->position}}</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div><!-- End Team Member -->

            @endforeach
          </div>
  
        </div>
      </section><!-- End Our Team Section -->
  
      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing sections-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Pricing</h2>
            <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
          </div>
  
          <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">
  
            <div class="col-lg-4">
              <div class="pricing-item">
                <h3>Free Plan</h3>
                <div class="icon">
                  <i class="bi bi-box"></i>
                </div>
                <h4><sup>$</sup>0<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                  <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
              </div>
            </div><!-- End Pricing Item -->
  
            <div class="col-lg-4">
              <div class="pricing-item featured">
                <h3>Business Plan</h3>
                <div class="icon">
                  <i class="bi bi-airplane"></i>
                </div>
  
                <h4><sup>$</sup>29<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                  <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                  <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                </ul>
                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
              </div>
            </div><!-- End Pricing Item -->
  
            <div class="col-lg-4">
              <div class="pricing-item">
                <h3>Developer Plan</h3>
                <div class="icon">
                  <i class="bi bi-send"></i>
                </div>
                <h4><sup>$</sup>49<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                  <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                  <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                </ul>
                <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
              </div>
            </div><!-- End Pricing Item -->
  
          </div>
  
        </div>
      </section><!-- End Pricing Section -->
  
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4">
  
            <div class="col-lg-4">
              <div class="content px-xl-5">
                <h3>Frequently Asked <strong>Questions</strong></h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
              </div>
            </div>
  
            <div class="col-lg-8">
  
              <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      <span class="num">1.</span>
                      Non consectetur a erat nam at lectus urna duis?
                    </button>
                  </h3>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      <span class="num">2.</span>
                      Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                    </button>
                  </h3>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      <span class="num">3.</span>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                    </button>
                  </h3>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                      <span class="num">4.</span>
                      Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                    </button>
                  </h3>
                  <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                      <span class="num">5.</span>
                      Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                    </button>
                  </h3>
                  <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
              </div>
  
            </div>
          </div>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->
  
      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Recent Blog Posts</h2>
            <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
          </div>
  
          <div class="row gy-4">
  
            <div class="col-xl-4 col-md-6">
              <article>
  
                <div class="post-img">
                  <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>
  
                <p class="post-category">Politics</p>
  
                <h2 class="title">
                  <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                </h2>
  
                <div class="d-flex align-items-center">
                  <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Maria Doe</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jan 1, 2022</time>
                    </p>
                  </div>
                </div>
  
              </article>
            </div><!-- End post list item -->
  
            <div class="col-xl-4 col-md-6">
              <article>
  
                <div class="post-img">
                  <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                </div>
  
                <p class="post-category">Sports</p>
  
                <h2 class="title">
                  <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                </h2>
  
                <div class="d-flex align-items-center">
                  <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Allisa Mayer</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 5, 2022</time>
                    </p>
                  </div>
                </div>
  
              </article>
            </div><!-- End post list item -->
  
            <div class="col-xl-4 col-md-6">
              <article>
  
                <div class="post-img">
                  <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                </div>
  
                <p class="post-category">Entertainment</p>
  
                <h2 class="title">
                  <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>
  
                <div class="d-flex align-items-center">
                  <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Mark Dower</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 22, 2022</time>
                    </p>
                  </div>
                </div>
  
              </article>
            </div><!-- End post list item -->
  
          </div><!-- End recent posts list -->
  
        </div>
      </section><!-- End Recent Blog Posts Section -->
  
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Contact</h2>
            <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
          </div>
  
          <div class="row gx-lg-0 gy-4">
  
            <div class="col-lg-4">
  
              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Location:</h4>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 55</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>Open Hours:</h4>
                    <p>Mon-Sat: 11AM - 23PM</p>
                  </div>
                </div><!-- End Info Item -->
              </div>
  
            </div>
  
            <div class="col-lg-8">
              <form action="{{route('contact.store')}}" method="post" role="form" class="p-5 mb-3 border border-5 rounded">

                @csrf
                @include('web.front.massage')

                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="7" placeholder="Message" ></textarea>
                </div>
                <div class="text-center mt-3"><button type="submit" class="btn p-2 col-6 mt-4" style="background-color: #008374; color:white; ">Add Message</button></div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
 
@endsection