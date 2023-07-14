@extends('toko.app')

@section('content')
    <body>
        <div class="container-fluid p-4 p-md-5 mb-4 text-white rounded">
          <div class="row featurette mb-5">
            <div class="col-md-7 order-md-2 text-white">
              <h1 class="featurette-heading fw-bold">About Us</h1>
              <p class="lead">Wans Store, a laptop store founded in 2017, 
                has become one of the leading stores in the laptop retail industry. 
                Known for its excellent reputation, Wans Store offers laptops from 
                renowned brands as well as customized built-to-order laptops to cater 
                to customers' specific needs. With a skilled staff and extensive knowledge, 
                Wans Store is committed to providing top-notch service to customers 
                and continuously innovating to maintain its position as a key player in the industry.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid rounded mx-auto" width="500" height="500" src="{{ URL('images/mouse.jpg') }}" alt="description of myimage">
            </div>
          </div>
            <div class="col-md text-center">
                <div class="contact-text mt-3 mb-3">
                    <h1 class="fw-bold">Contact Us</h1>
                </div>
            </div>          
          <div class="row align-items-md-stretch">
            <div class="col-md-4">
              <div class="h-100 p-5 text-white bg-dark rounded-3 text-center">
                <div class="text-center mb-4">
                    <img class="rounded" width="110" height="100" src="{{ URL('images/ig1.png') }}" alt="">
                </div>
                <h1>WANS_STORE</h1>
              </div>
            </div>
            <div class="col-md-4">
              <div class="h-100 p-5 bg-light text-black border rounded-3 text-center">
                <div class="text-center mb-4">
                    <img class="rounded" width="100" height="100" src="{{ URL('images/fc1.png') }}" alt="">
                </div>
                <h1>WANS STORE</h1>
              </div>
            </div>
            <div class="col-md-4">
              <div class="h-100 p-5 bg-dark border rounded-3 text-center">
                <div class="text-center mb-4">
                    <img class="rounded" width="120" height="100" src="{{ URL('images/yt1.png') }}" alt="">
                </div>
                <h1>WANS STORE</h1>
              </div>
            </div>
          </div>
        </div>
    </body>
@endsection