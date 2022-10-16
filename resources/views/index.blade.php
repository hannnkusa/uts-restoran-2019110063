@extends('layout.app')

@section('content')
<!-- ======= Ads Section ======= -->
<section id="ads" class="d-flex align-items-center">
    <div class="card" data-aos="fade-up" data-aos-delay="400">
        <div class="card-body">
            <div class="card-rating d-flex align-items-center">
                <img src="../icon/Star.svg" alt="Star">
                <img src="../icon/Star.svg" alt="Star">
                <img src="../icon/Star.svg" alt="Star">
                <img src="../icon/Star.svg" alt="Star">
                <img src="../icon/Star.svg" alt="Star">
                <span class="restaurant-star">5.0</span>
                <span class="restaurant-rating">(5.2K+)</span>
            </div>
            <div class="restaurant-name">
                Padang Restaurant
            </div>
            <div class="restaurant-price">
                IDR 49.999 - IDR 560.000
            </div>
            <div class="restaurant-location">
                <img src="../icon/Location.svg" alt="Location"> Padang, Indonesia
            </div>
            <div>
                <button class="btn btn-custom restaurant-button">Make Reservation <i class='bx bx-chevron-right'></i></button>
            </div>
            <div>
                <img src="../icon/Info Square.svg" alt="Location"> No Extra Cost
            </div>
        </div>
    </div>

    <div class="swiper ads-slider" data-aos="fade-up">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../img/ads/ads1.png"></img></div>
            <div class="swiper-slide"><img src="../img/ads/ads2.png"></img></div>
        </div>
    </div>
</section>
<!-- End Ads Section -->

<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div data-aos="fade-up">

            <div class="section-title text-center">
                <h2>special benefit for you</h2>
                <h3>Why Should Choose Us?</h3>
            </div>

            <div class="why-us d-flex align-items-center justify-content-around">
                <div class="why-us-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><img src="../icon/Discount.svg" alt=""></div>
                    <h4 class="title">Extra Discounts</h4>
                    <p class="description">Get your special discount by using our reservation</p>
                    <button class="btn btn-custom btn-footer">View Details <i class='bx bx-chevron-right'></i></button>
                </div>

                <div class="why-us-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><img src="../icon/Restaurant.svg" alt=""></div>
                    <h4 class="title">Come And Eat</h4>
                    <p class="description">Get your own table quickly & without waiting in line</p>
                    <button class="btn btn-custom btn-footer">View Details <i class='bx bx-chevron-right'></i></button>
                </div>

                <div class="why-us-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><img src="../icon/No Fee.svg" alt=""></div>
                    <h4 class="title">No Extra Fee</h4>
                    <p class="description">Get tax free if you want to order food and make a reservation</p>
                    <button class="btn btn-custom btn-footer">View Details <i class='bx bx-chevron-right'></i></button>
                </div>

                <div class="why-us-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><img src="../icon/Clean.svg" alt=""></div>
                    <h4 class="title">Guaranteed Cleanliness</h4>
                    <p class="description">We ensure the cleanliness of the place as well as the food</p>
                    <button class="btn btn-custom btn-footer">View Details <i class='bx bx-chevron-right'></i></button>
                </div>

            </div>

        </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Popular Section ======= -->
    <section id="popular" class="popular section-bg">
        <div data-aos="fade-up">

            <div class="d-flex align-items-center">
                <div class="popular-card">
                    <div class="section-title">
                        <h2>top 3 featured restaurant</h2>
                        <h3>Most Popular Restaurants</h3>
                        <p>The best restaurant in our opinion is how much customers like it in terms of place, price, comfort and of course the taste of
                            the food itself.</p>
                        <button class="btn btn-custom btn-popular">View All Restaurant <i class='bx bx-chevron-right'></i></button>
                    </div>
                </div>
                <div class="popular-image active" data-aos="fade-up">
                    <img src="../img/popular/popular1.png" alt="">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="mr-auto">
                                    <div class="card-rating d-flex align-items-center">
                                        <img src="../icon/Star.svg" alt="Star">
                                        <span class="restaurant-star">5.0</span>
                                        <span class="restaurant-rating">(7.6K+)</span>
                                    </div>
                                    <div class="restaurant-name">
                                        Bind Balorant
                                    </div>
                                    <div class="restaurant-location">
                                        <img src="../icon/Location.svg" alt="Location"> Jakarta, Indonesia
                                    </div>
                                </div>
                                <div>
                                    <a class="btn-restaurant d-flex align-items-center justify-content-center"><i class="bi bi-arrow-right-short"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popular-image" data-aos="fade-up" data-aos-delay="200">
                    <img src="../img/popular/popular2.png" alt="">
                </div>
                <div class="popular-image" data-aos="fade-up" data-aos-delay="300">
                    <img src="../img/popular/popular3.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular Section -->

    <!-- ======= Nearest Section ======= -->
    <section id="nearest" class="nearest section-bg">
        <div data-aos="fade-up">

            <div class="nearest-head d-flex align-items-center justify-content-between">
                <div class="section-title">
                    <h2>restaurant based by city</h2>
                    <h3>Restaurant Near You</h3>
                </div>
                <div>
                    <div class="form-group has-select">
                        <span class="form-icon-left">
                            <img src="../icon/Location.svg"></img>
                        </span>
                        <select class="form-control">
                            <option>Jakarta, Indonesia</option>
                            <option>Bandung, Indonesia</option>
                            <option>Sunda, Indonesia</option>
                            <option>Bali, Indonesia</option>
                            <option>Cirebon, Indonesia</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="nearest-body d-flex align-items-center justify-content-around">
                <div class="nearest-image" data-aos="fade-up">
                    <img src="../img/near/near1.png" alt="">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="mr-auto">
                                    <div class="card-rating d-flex align-items-center">
                                        <img src="../icon/Star.svg" alt="Star">
                                        <span class="restaurant-star">5.0</span>
                                        <span class="restaurant-rating">(6.6K+)</span>
                                    </div>
                                    <div class="restaurant-name">
                                        Batavia Restaurant
                                    </div>
                                    <div class="restaurant-price">
                                        IDR 29.000 - IDR 259.999
                                    </div>
                                </div>
                                <div>
                                    <a class="btn-restaurant d-flex align-items-center justify-content-center"><i class="bi bi-arrow-right-short"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nearest-image" data-aos="fade-up" data-aos-delay="200">
                    <img src="../img/near/near2.png" alt="">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="mr-auto">
                                    <div class="card-rating d-flex align-items-center">
                                        <img src="../icon/Star.svg" alt="Star">
                                        <span class="restaurant-star">5.0</span>
                                        <span class="restaurant-rating">(3.6K+)</span>
                                    </div>
                                    <div class="restaurant-name">
                                        Split Ascent Restaurant
                                    </div>
                                    <div class="restaurant-price">
                                        IDR 49.999 - IDR 560.000
                                    </div>
                                </div>
                                <div>
                                    <a class="btn-restaurant d-flex align-items-center justify-content-center"><i class="bi bi-arrow-right-short"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nearest-image" data-aos="fade-up" data-aos-delay="300">
                    <img src="../img/near/near3.png" alt="">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="mr-auto">
                                    <div class="card-rating d-flex align-items-center">
                                        <img src="../icon/Star.svg" alt="Star">
                                        <span class="restaurant-star">5.0</span>
                                        <span class="restaurant-rating">(11K+)</span>
                                    </div>
                                    <div class="restaurant-name">
                                        Daza Fracture Restaurant
                                    </div>
                                    <div class="restaurant-price">
                                        IDR 29.999 - IDR 560.000
                                    </div>
                                </div>
                                <div>
                                    <a class="btn-restaurant d-flex align-items-center justify-content-center"><i class="bi bi-arrow-right-short"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center near-bottom">
                <button class="btn btn-custom btn-popular">View All Restaurant <i class='bx bx-chevron-right'></i></button>
            </div>

        </div>
    </section>
    <!-- End Nearest Section -->

    <!-- ======= Chef Section ======= -->
    <section id="chef" class="chef section-bg">
        <div data-aos="fade-up">

            <div class="d-flex align-items-center justify-content-between">
                <div class="chef-image ml-auto">
                    <img src="../img/chefs/chefs1.png" alt="">
                    <div class="chef-card-exp">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><img src="../icon/Shield Done.svg" alt=""></div>
                            <h4 class="title">12 Years</h4>
                            <p class="description">Experience</p>
                        </div>
                    </div>
                    <div class="card d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-image">
                            <img src="../img/popular/popular2.png" alt="">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="mr-auto">
                                    <div class="restaurant-location">
                                        Chef at restaurant:
                                    </div>
                                    <div class="restaurant-name">
                                        Pearl Dolphin
                                    </div>
                                    <div class="view-details">
                                        <span>View Details</span> <i class='bx bx-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chef-list">
                    <div class="section-title">
                        <h2>top 4 expert chefs</h2>
                        <h3>Experts Chefs In Fuddy</h3>
                    </div>
                    <ul class="list">
                        <li class="active">
                            <div>
                                <h3>pizza</h3>
                                <h4>Phoenix Satcheup</h4>
                                <span>
                                    <img src="../icon/Location.svg" alt="Location"> Jakarta, Indonesia
                                </span>
                            </div>
                            <div class="view-details">
                                Profile Details <i class='bx bx-chevron-right'></i>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>vegan</h3>
                                <h4>Chamber Botfrag</h4>
                                <span>
                                    <img src="../icon/Location.svg" alt="Location"> Bandung, Indonesia
                                </span>
                            </div>
                            <div class="view-details">
                                <span>Profile Details</span> <i class='bx bx-chevron-right'></i>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>roast chicken</h3>
                                <h4>Asep Vandal</h4>
                                <span>
                                    <img src="../icon/Location.svg" alt="Location"> Sunda, Indonesia
                                </span>
                            </div>
                            <div class="view-details">
                                <span>Profile Details</span> <i class='bx bx-chevron-right'></i>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>beef steak</h3>
                                <h4>I Made Invoker </h4>
                                <span>
                                    <img src="../icon/Location.svg" alt="Location"> Bali, Indonesia
                                </span>
                            </div>
                            <div class="view-details">
                                <span>Profile Details</span> <i class='bx bx-chevron-right'></i>
                            </div>
                        </li>
                    </ul>
                    <div>
                        <button class="btn btn-custom btn-bottom">View All Chef <i class='bx bx-chevron-right'></i></button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Chef Section -->
</main>
<!-- End #main -->

@endsection