@extends('frontend.master')

@section('content') 
<!-- main-area -->
<main>
<!-- banner-area -->
<section id="home" class="banner-area banner-bg fix">
    <div class="container">
        <div class="row align-items-center">
        @foreach ($all_banners as $banner)
            <div class="col-xl-7 col-lg-6">
                <div class="banner-content">
                    <h6 class="wow fadeInUp" data-wow-delay="0.2s">{{$banner->greetings}}</h6>
                    <h2 class="wow fadeInUp" data-wow-delay="0.4s">{{$banner->introduction}}</h2>
                    <div class="banner-shape">
                     <img src="{{asset('public/uploads/banners/')}}/{{$banner->banner_image}}" width="400px" height="400px" class="rotateme" alt="img">
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">{{$banner->description}}</p>
                  <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 d-none d-lg-block">
             <div class="banner-img text-right">
             <img src="{{asset('public/uploads/banners/')}}/{{$banner->banner_image}}" width="350px" height="350px" alt="Banner Image">
            </div>
            <div class="banner-social wow fadeInUp" data-wow-delay="0.9s">
             @foreach ($all_socials as $social)
              <ul>
                <li>
                <div class="social-img text-mid">
                <img src="{{asset('public/uploads/socials/')}}/{{$social->icon_image}}" width="50px" height="50px" class="rotateme" alt="img">
                </div>
               </li>
             </ul>
            @endforeach
           </div>
        </div>
    @endforeach
    </div>
  </div>
</div>
</section>
<!-- banner-area-end -->

<!-- about-area-->
<section id="about" class="about-area primary-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
        @foreach ($all_areas as $area)
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{asset('public/uploads/areas/')}}/{{$area->area_image}}" width="500px" height="500px" alt="Area Image">
                </div>
            </div>
        @endforeach
            <div class="col-lg-6 pr-90">
                <div class="section-title mb-25">
                    <span>Introduction</span>
                    @foreach ($all_introductions as $introduction)
                    <h2>{{$introduction->title}}</h2>
                </div>
                <div class="about-content">
                    <p>{{$introduction->description}}</p>
                    @endforeach
                    <h3>Education:</h3>
                </div>
         @foreach($all_educations as $education)
          <!-- Education Item -->
          <div class="education">
                    <div class="year">{{$education->year}}</div>
                    <div class="line"></div>
                    <div class="location">
                        <span>{{$education->education_type}}</span>
                        <div class="progressWrapper">
                            <div class="progress">
                                <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: {{$education->percentage}}%;" aria-valuenow="{{$education->percentage}}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- End Education Item -->
             @endforeach
             </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- Services-area -->
<section id="service" class="services-area pt-120 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>WHAT WE DO</span>
                    <h2>Services and Solutions</h2>
                </div>
            </div>
        </div>
        <div class="row">
         @foreach($all_services as $service)
            <div class="col-lg-4 col-md-6">
            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="about-img">
                    <img src="{{asset('public/uploads/services/')}}/{{$service->service_image}}" width="350px" height="350px" alt="Service Image">
                </div>
                    <h3>{{$service->title}}</h3>
                    <p>
                    {{$service->description}}</p>
                </div>
            </div>
         @endforeach
         </div>
      </div>
   </div>
</section>
<!-- Services-area-end -->

<!-- Portfolios-area -->
<section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>Portfolio Showcase</span>
                    <h2>My Recent Best Works</h2>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach($all_blogs as $blog)
            <div class="col-lg-4 col-md-6 pitem">
                <div class="speaker-box">
                    <div class="speaker-thumb">
                       <img src="{{asset('public/uploads/blogs/')}}/{{$blog->blog_image}}" width="250px" height="250px" alt="Blog Image">
                    </div>
                    <div class="speaker-overlay">
                        <span>{{$blog->title}}</span>
                        <h4><a href="portfolio-single.html">{{$blog->description}}</a></h4>
                        <a href="portfolio-single.html" class="arrow-btn">{{$blog->created_at-> diffforHumans()}}<span></span></a>
                    </div>
                </div>
            </div>
         @endforeach
            </div>
        </div>
    </div>
</section>
<!-- services-area-end -->


<!-- fact-area -->
<section class="fact-area">
    <div class="container">
        <div class="fact-wrap">
            <div class="row justify-content-between">
            @foreach($all_facts as $fact)
                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="fact-box text-center mb-50">
                    <div class="fact-img">
                       <img src="{{asset('public/uploads/facts/')}}/{{$fact->icon_image}}" width="100px" height="100px" alt="Fact Image">
                      </div>
                        <div class="fact-content">
                            <h2><span class="count">{{$fact->digit}}</span></h2>
                            <span>{{$fact->title}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
<!-- fact-area-end -->

<!-- testimonial-area -->
<section class="testimonial-area primary-bg pt-115 pb-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>testimonial</span>
                    <h2>happy customer quotes</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
         <div class="col-xl-9 col-lg-10">
             <div class="testimonial-active">
                  @foreach($all_testimonials as $testimonial)
                    <div class="single-testimonial text-center">
                        <div class="testi-avatar">
                          <img src="{{asset('public/uploads/testimonials/')}}/{{$testimonial->testimonial_image}}" width="90px" height="90px" alt="Testimonial Image">
                        </div>
                        <div class="testi-content">
                            <h4><span>“</span>{{substr($testimonial->description, 0, 50).'....more'}}<span>”</span></h4>
                            <div class="testi-avatar-info">
                                <h5>{{$testimonial->testimonial_name}}</h5>
                                <span>{{$testimonial->designation}}</span>
                            </div>
                        </div>
                    </div>
                 @endforeach
                </div>
            </section>
<!-- testimonial-area-end -->

<!-- brand-area -->
<div class="barnd-area pt-100 pb-100">
    <div class="container">
        <div class="row brand-active">
        @foreach($all_sponsors as $sponsor)
            <div class="col-xl-2">
                <div class="single-brand">
                  <img src="{{asset('public/uploads/sponsors/')}}/{{$sponsor->sponsor_image}}" width="90px" height="90px" alt="Sponsor Image">
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
<!-- brand-area-end -->

<!-- contact-area -->
<section id="contact" class="contact-area primary-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
        @foreach($all_contacts as $contact)
            <div class="col-lg-6">
                <div class="section-title mb-20">
                    <span>information</span>
                    <h2>{{$contact->title}}</h2>
                </div>
                <div class="contact-content">
                    <p>{{$contact->description}}</p>
                    <h5>OFFICE IN <span>{{$contact->country}}</span></h5>
                    <div class="contact-list">
                        <ul>
                            <li><i class="fas fa-map-marker"></i><span>Address :</span>{{$contact->address}}</li>
                            <li><i class="fas fa-headphones"></i><span>Phone :</span>{{$contact->phone}}</li>
                            <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>{{$contact->email}}</li>
                        </ul>
                    </div>
                </div>
             @endforeach
          </div>
      </div>
   </div>
<div class="col-lg-6">
@foreach($all_messages as $message)
        <div class="contact-form">
                   <input type="text" placeholder="{{$message->name}}">
                   <input type="email" placeholder="{{$message->email}}">
                   <textarea name="message" id="message" placeholder="your message *">{{$message->message}}</textarea>
                   <button class="btn">BUY TICKET</button>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
</section>
<!-- contact-area-end -->
</main>
<!-- main-area-end -->
@endsection