@extends('toko.app')

@section('content')
    <body>
        <h1 class="text-center text-white fw-bold mb-0">STORE</h1>
        <p class="text-center text-white mb-0">~You Buy You Do Charity~</p>
        <div class="album py-5 bg-black">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100" height="225" src="{{ url('images/asustuf.jpg') }}" alt="">
                    
                    <div class="card-body bg-dark">
                      <p class="card-text text-white fw-bold">
                        Asus TUF Gaming
                        <p class="text-white">Intel Core I5 10500H, GTX 1650, RAM 8GB</p>
                      <p class="text-white fw-bold">Rp.11.700.000</p>  
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <form method="GET" action="{{ url('orderan') }}">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-sm btn-outline-drank bg-white fw-bold">Order</button>
                            </div>
                        </form>
                            <small class="text-white">Stok: 15</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                      <img class="bd-placeholder-img card-img-top" width="100" height="225" src="{{ url('images/lnv3.jpg') }}" alt="">
                      
                      <div class="card-body bg-dark">
                        <p class="card-text text-white fw-bold">
                            Lenovo Ideapad Gaming 3 
                        <p class="text-white">Ryzen 5 5600G, RTX 3050, RAM 16GB</p>
                          <p class="text-white fw-bold">Rp.15.000.000</p>  
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <form method="GET" action="{{ url('orderan') }}">
                              <div class="btn-group">
                                  <button type="submit" class="btn btn-sm btn-outline-drank bg-white fw-bold">Order</button>
                              </div>
                          </form>
                              <small class="text-white">Stok: 15</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <img class="bd-placeholder-img card-img-top" width="100" height="225" src="{{ url('images/pdr.jpg') }}" alt="">
                      
                      <div class="card-body bg-dark">
                        <p class="card-text text-white fw-bold">
                            Acer Predator 
                            <p class="text-white">Ryzen 7 5700G, RTX 3070, RAM 32GB</p>
                          <p class="text-white fw-bold">Rp.24.300.000</p>  
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <form method="GET" action="{{ url('orderan') }}">
                              <div class="btn-group">
                                  <button type="submit" class="btn btn-sm btn-outline-drank bg-white fw-bold">Order</button>
                              </div>
                          </form>
                              <small class="text-white">Stok: 15</small>
                        </div>
                      </div>
                    </div>
                  </div>
        
                                  <div class="col">
                  <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100" height="225" src="{{ url('images/msi.jpg') }}" alt="">
                    
                    <div class="card-body bg-dark">
                      <p class="card-text text-white fw-bold">
                        MSI Cyborg
                        <p class="text-white">Intel Core I7 11700H, RTX 3060, RAM 16GB</p>
                        <p class="text-white fw-bold">Rp.16.700.000</p>  
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <form method="GET" action="{{ url('orderan') }}">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-sm btn-outline-drank bg-white fw-bold">Order</button>
                            </div>
                        </form>
                            <small class="text-white">Stok: 15</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                      <img class="bd-placeholder-img card-img-top" width="100" height="225" src="{{ url('images/sena.jpg') }}" alt="">
                      
                      <div class="card-body bg-dark">
                        <p class="card-text text-white fw-bold">
                            Digital Allience Sena
                          <p class="text-white">6400Dpi, RGB Lighting, Macro With Software Settings</p>
                          <p class="text-white fw-bold">Rp.300.000</p>  
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <form method="GET" action="{{ url('orderan') }}">
                              <div class="btn-group">
                                  <button type="submit" class="btn btn-sm btn-outline-drank bg-white fw-bold">Order</button>
                              </div>
                          </form>
                              <small class="text-white">Stok: 15</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm">
                      <img class="bd-placeholder-img card-img-top" width="100" height="225" src="{{ url('images/rzr.jpg') }}" alt="">
                      
                      <div class="card-body bg-dark">
                        <p class="card-text text-white fw-bold">
                            Razer Blackwidow Chroma
                          <p class="text-white">Mechanical Keyboard, Blue Switch, PBT Keycaps</p>
                          <p class="text-white fw-bold">Rp.1.700.000</p>  
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <form method="GET" action="{{ url('orderan') }}">
                              <div class="btn-group">
                                  <button type="submit" class="btn btn-sm btn-outline-drank bg-white fw-bold">Order</button>
                              </div>
                          </form>
                              <small class="text-white">Stok: 15</small>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <div class="col">
                    <div class="card shadow-sm">
                      <img class="bd-placeholder-img card-img-top" width="100" height="225" src="{{ url('images/stl.jpg') }}" alt="">
                      
                      <div class="card-body bg-dark">
                        <p class="card-text text-white fw-bold">
                            Steel Series Siberia 7
                          <p class="text-white">Virtual Surround Sound, OverEar 50mm Driver, RGB Lightsync</p>
                          <p class="text-white fw-bold">Rp.3.200.000</p>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <form method="GET" action="{{ url('orderan') }}">
                              <div class="btn-group">
                                  <button type="submit" class="btn btn-sm btn-outline-drank bg-white fw-bold">Order</button>
                              </div>
                          </form>
                              <small class="text-white">Stok: 15</small>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
    </body>
@endsection