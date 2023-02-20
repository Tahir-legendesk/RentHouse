@extends('layouts.frontend.app')
@section('content')
    <main id="main-content">
        <section class="mainBanner innerBanner">
            <div class="container">
                <div class="mb_1 wow fadeInUp">
                    <div class="section_head">
                        <span>Find best <strong>dream home.</strong></span>
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_sec spad">
            <div class="container">
                <div class="row align-items-xxl-center">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                        <div class="img_wrap">
                            <img src="assets/images/about-side-i.jpg" alt="" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.25s">
                        <div class="text_wrap_l">
                            <div class="section_head">
                                <h2>About Us Real Estate & ATV’s</h2>
                            </div>
                            <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                vitae dicta sunt explicabo. Nemo enim consectetur ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                                exercitation ci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis consectetur nostrum
                                exercitat consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                                quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                                pariatur</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 has_mt text-center wow fadeInUp" data-wow-delay="0.15s">
                        <div class="img_wrap">
                            <img src="assets/images/rent-a-house.jpg" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="section_head mt-4">
                            <h3 class="h2">Rent a house</h3>
                        </div>
                        <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                            sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                            quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                            eius </p>
                        <a href="{{route('house-all')}}" class=" theme-btn">View More</a>
                    </div>
                    <div class="col-md-6 has_mt text-center wow fadeInUp" data-wow-delay="0.25s">
                        <div class="img_wrap">
                            <img src="assets/images/rent-a-atvs.jpg" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="section_head mt-4">
                            <h3 class="h2">Rent a ATV’s</h3>
                        </div>
                        <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasiperspiciatis unde omnis iste
                            natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                            ab illo inventore veritatis et quasi architecto beatae </p>
                        <a href="{{route('atv-rental')}}" class="theme-btn">View More</a>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
