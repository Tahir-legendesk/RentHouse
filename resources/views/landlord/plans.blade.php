@extends('layouts.frontend.app')
@section('content')
<style>
    .price-box {
    background: #F1F9F9;
    padding: 21px;
    border-radius: 10px;
    text-align: center;
}
.price-titile {
    border-bottom: 1px solid #480069;
    margin-bottom: 14px;
}
.price-content p{
    margin-bottom: 15px;
}
.price-content a{
    text-transform: capitalize;
}
.price-titile h2 {
    font-size: 40px;
    text-transform: capitalize;
}

ul.price-feature {
    margin: 0 0 16px;
    padding: 0;
    list-style: none;
}

ul.price-feature li {
    font-size: 16px;
}
</style>
  <section class="pricing-sec spad">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="price-box">
              <div class="price-titile">
                 <h2> silver </h2>
              </div>
              <div class="price-content">
                  <p>Lorem ipsum dolor sit amet consectetur </p>
                  <ul class="price-feature">
                      <li>ipsum dolor sit</li>
                      <li>ipsum dolor sit</li>
                      <li>ipsum dolor sit</li>
                      <li>ipsum dolor sit</li>
                      <li>ipsum dolor sit</li>
                  </ul>
                  <a href="/billing" class="theme-btn">buy now</a>
              </div>
          </div>
        </div>

        <div class="col-md-3">
            <div class="price-box">
                <div class="price-titile">
                   <h2> silver </h2>
                </div>
                <div class="price-content">
                    <p>Lorem ipsum dolor sit amet consectetur </p>
                    <ul class="price-feature">
                        <li>ipsum dolor sit</li>
                        <li>ipsum dolor sit</li>
                        <li>ipsum dolor sit</li>
                        <li>ipsum dolor sit</li>
                        <li>ipsum dolor sit</li>
                    </ul>
                    <a href="/billing" class="theme-btn">buy now</a>
                </div>
            </div>
          </div>

      </div>
    </div>
  </section>
 
@endsection