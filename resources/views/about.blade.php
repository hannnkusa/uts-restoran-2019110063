@extends('layout.app')
@section('content')
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Some photos from Our Restaurant</h2>
            <h3>Gallery</h3>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
            @foreach($about['gallery'] as $g)
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ $g }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ $g }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Gallery Section -->
<!-- ======= Chefs Section ======= -->
<section id="chefs" class="proff-chefs">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Our Proffesional Chefs</h2>
            <h3>Chefs</h3>
        </div>

        <div class="row">
            @foreach($about['chefs'] as $c)
                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ $c['img'] }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>{{ $c['name'] }}</h4>
                                <span>{{ $c['position'] }}</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Chefs Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h3>Contact Us</h3>
            <h2>Contact</h2>
        </div>
    </div>

    <div class="map" data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.958535343242!2d107.611043315281!3d-6.895563269396825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e651b0d3ffff%3A0xd8b2619a53271e82!2sSTMIK%20LIKMI!5e0!3m2!1sid!2sid!4v1665926871843!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
    </div>

    </div>
</section><!-- End Contact Section -->
@endsection