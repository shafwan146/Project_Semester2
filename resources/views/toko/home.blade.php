@extends('toko.app')

@section('content')
    <body>
        <div class="container-fluid">    
        <div class="row featurette p-4 p-md-5 mb-4 text-white rounded">
            <div class="col-md-7">
              <h1 class="display-4 fst-italic">
                Play Games & Enjoy The Gaming Experience
              </h1>
              <p class="lead my-3">
                Welcome to WANS STORE, a trusted laptop store with a complete collection of high-quality laptops. 
                Discover your dream laptop at our convenient physical store or through our intuitive website. 
                Get assistance from our expert team in selecting the laptop that suits your needs. 
                Happy shopping at WANS STORE, where technology and satisfaction meet!
              </p>
              <p class="lead mb-0"><a href="{{ url('store') }}" class="text-white fw-bold" style="text-decoration: none">Go to Store</a></p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid rounded mx-auto" width="500" height="300" src="{{ URL('images/one.jpg') }}" alt="description of myimage">
            </div>
          </div>
          <div class="row align-items-md-stretch">
            <div class="col-md-6">
              <div class="h-100 p-5 text-white bg-dark rounded-3 text-center">
                <div class="text-center mb-4">
                    <img class="rounded" width="100" height="100" src="{{ URL('images/c1.png') }}" alt="">
                </div>
                <h1>09:00 AM - 09:00 PM</h1>
                <h4>Working Hours</h4>
              </div>
            </div>
            <div class="col-md-6">
              <div class="h-100 p-5 bg-light border rounded-3 text-center">
                <div class="text-center mb-4">
                    <img class="rounded" width="100" height="100" src="{{ URL('images/c3.png') }}" alt="">
                </div>
                <h1>081276458745</h1>
                <h4>Call Us Now</h4>
              </div>
            </div>
          </div>
        </div>
    </body>
@endsection
