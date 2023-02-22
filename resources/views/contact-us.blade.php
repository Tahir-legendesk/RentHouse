@extends('layouts.frontend.app')
@section('content')
    <main id="main-content">
        <section class="mainBanner innerBanner">
            <div class="container">
                <div class="mb_1 wow fadeInUp">
                    <div class="section_head">
                        <span>Find best <strong>dream home.</strong></span>
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact_sec spad">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                        <div class="map_holder">
                            <iframe
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=usa+(My%20Business%20Name)&amp;t=&amp;z=5&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                                width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.25s">
                        <div class="cont_2">
                            <div class="section_head">
                                <h2>Contact Us</h2><br>
                                @if (session('message'))
                                    <div class="alert alert-success">{{ session('message') }}</div>
                                @endif
                            </div>
                            <div class="form_style">
                                <form action="{{ route('contact') }}" method="post">
                                    @csrf
                                    <input type="text" name="name" placeholder="Name">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="tel" name="phone" placeholder="Phone">
                                    <textarea name="message" placeholder="Type your message here"></textarea>
                                    <input type="submit" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
