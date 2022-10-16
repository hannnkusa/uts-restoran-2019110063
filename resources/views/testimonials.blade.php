@extends('layout.app')
@section('content')
<section id="menu" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
            <h2>Testimonials</h2>
            <h3>What they're saying about us</h3>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $t)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $t['testimony'] }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{$t['image']}}" class="testimonial-img" alt="">
                            <h3>{{$t['name']}}</h3>
                            <h4>{{$t['who']}}</h4>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->
@endsection