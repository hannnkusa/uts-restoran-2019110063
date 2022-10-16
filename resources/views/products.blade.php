@extends('layout.app')

@section('content')
<!-- ======= Ads Section ======= -->
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
                @foreach ($products['menus'] as $m)
                    <div class="menu-card" data-aos="fade-up" data-aos-delay="{{100 * $loop->index}}">
                        <div class="icon"><img src="{{ $m['image'] }}" alt="" width="250"></div>
                        <h4 class="title">{{ $m['head'] }}</h4>
                        <p class="description">{{ $m['description'] }}</p>
                        <button class="btn btn-custom btn-footer">View Details <i class='bx bx-chevron-right'></i></button>
                    </div>
                @endforeach

                <!-- <div class="menu-card" data-aos="fade-up" data-aos-delay="200">
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
                </div> -->

            </div>

        </div>
    </section>

    <section id="menu" class="specials">
        <div data-aos="fade-up">

            <div class="section-title text-center">
                <h2>Check Our Specials</h2>
                <h3>Specials</h3>
            </div>

            <div class="row list" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        @foreach ($products['specials'] as $s)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->index + 1 === 1 ? 'active' : '' }}" data-bs-toggle="tab" href="#tab-{{$loop->index + 1}}">{{ $s['head'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        @foreach ($products['specials'] as $s)
                            <div class="tab-pane active show" id="tab-{{$loop->index + 1}}">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h2 class="head">{{ $s['head'] }}</h2>
                                        <p class="subhead">{{ $s['subhead'] }}</p>
                                        <p class="description">{{ $s['description'] }}</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ $s['image'] }}" alt="" width="250" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Section -->

</main>
<!-- End #main -->

@endsection