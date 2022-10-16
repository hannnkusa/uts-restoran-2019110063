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

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div data-aos="fade-up">

            <div class="section-title text-center">
                <h2>Check Our Tasty Menu</h2>
                <h3>Menu</h3>
            </div>

            <div class="menu d-flex align-items-center justify-content-around">
                <div class="menu-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><img src="../img/menu/menu-item-1.png" alt="" width="250"></div>
                    <h4 class="title">Menu 1</h4>
                    <p class="description">You Will Get Delicious Food.</p>
                    <button class="btn btn-custom btn-footer">View Details <i class='bx bx-chevron-right'></i></button>
                </div>

                <div class="menu-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><img src="../img/menu/menu-item-2.png" alt="" width="250"></div>
                    <h4 class="title">Menu 2</h4>
                    <p class="description">This Food Has A Really Nice Taste</p>
                    <button class="btn btn-custom btn-footer">View Details <i class='bx bx-chevron-right'></i></button>
                </div>

                <div class="menu-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><img src="../img/menu/menu-item-3.png" alt="" width="250"></div>
                    <h4 class="title">Menu 3</h4>
                    <p class="description">It's A Goddamn Nice Food, Would Mind To Check It Out?</p>
                    <button class="btn btn-custom btn-footer">View Details <i class='bx bx-chevron-right'></i></button>
                </div>

                <div class="menu-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><img src="../img/menu/menu-item-4.png" alt="" width="250"></div>
                    <h4 class="title">Menu 4</h4>
                    <p class="description">Really Spicy Food, Order It To Feel The Taste!</p>
                    <button class="btn btn-custom btn-footer">View Details <i class='bx bx-chevron-right'></i></button>
                </div>

            </div>

        </div>
    </section>

    <section id="menu" class="specials">
        <div data-aos="fade-up">

            <div class="section-title text-center">
                <h2>Check Our Specials</h2>
                <h3>Specials</h3>
                @foreach ($products as $p)
                    {{ $loop->index + 1 }}
                @endforeach
            </div>

            <div class="row list" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        @foreach ($products as $p)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->index + 1 === 1 ? 'active' : '' }}" data-bs-toggle="tab" href="#tab-{{$loop->index + 1}}">{{ $p['head'] }}</a>
                            </li>
                        @endforeach
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Specials 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Specials 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Specials 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Specials 5</a>
                        </li> -->
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        @foreach ($products as $p)
                            <div class="tab-pane active show" id="tab-{{$loop->index + 1}}">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h2 class="head">{{ $p['head'] }}</h2>
                                        <p class="subhead">{{ $p['subhead'] }}</p>
                                        <p class="description">{{ $p['description'] }}</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ $p['image'] }}" alt="" width="250" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="../img/specials/specials-2.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="../img/specials/specials-3.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="../img/specials/specials-4.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="../img/specials/specials-5.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Section -->

</main>
<!-- End #main -->

@endsection