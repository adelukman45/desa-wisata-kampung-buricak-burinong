@extends('layouts.main')

@section('container') 
    
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav" style="position: fixed;">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="#" class="logo m-0 float-start">Kampung Buricak Burinong</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li><a href="#">Beranda</a></li>
              {{-- <li class="has-children">
                <a href="properties.html">Properties</a>
                <ul class="dropdown">
                  <li><a href="#">Buy Property</a></li>
                  <li><a href="#">Sell Property</a></li>
                  <li class="has-children">
                    <a href="#">Dropdown</a>
                    <ul class="dropdown">
                      <li><a href="#">Sub Menu One</a></li>
                      <li><a href="#">Sub Menu Two</a></li>
                      <li><a href="#">Sub Menu Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li> --}}
              <li><a href="#sejarah">Sejarah</a></li>
              <li><a href="#wisata">Wisata</a></li>
              <li><a href="#rumah-singgah">Rumah Singgah</a></li>
              <li><a href="#kontak">Kontak</a></li>
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_3.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_2.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_1.jpg')"
        ></div>
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
              Kampung Buricak Burinong Desa Pakualam
            </h1>
            <a href="#sejarah"><button type="submit" class="btn btn-primary">|</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="sejarah">
        <div class="container">
          <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
              <h2 class="font-weight-bold text-primary heading">
                Sejarah Kampung Buricak Burinong
              </h2>
            </div>
            <div class="col-lg-6">
              <p class="text-black-50 mt-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                enim pariatur similique debitis vel nisi qui reprehenderit totam?
                Quod maiores.
              </p>
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                saepe, explicabo nihil. Est, autem error cumque ipsum repellendus
                veniam sed blanditiis unde ullam maxime veritatis perferendis
                cupiditate, at non esse!
              </p>
              <p class="text-black-50">
                Enim, nisi labore exercitationem facere cupiditate nobis quod
                autem veritatis quis minima expedita. Cumque odio illo iusto
                reiciendis, labore impedit omnis, nihil aut atque, facilis
                necessitatibus asperiores porro qui nam.
              </p>
            </div>
            <div class="col-lg-6">
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                saepe, explicabo nihil. Est, autem error cumque ipsum repellendus
                veniam sed blanditiis unde ullam maxime veritatis perferendis
                cupiditate, at non esse!
              </p>
              <p class="text-black-50">
                Enim, nisi labore exercitationem facere cupiditate nobis quod
                autem veritatis quis minima expedita. Cumque odio illo iusto
                reiciendis, labore impedit omnis, nihil aut atque, facilis
                necessitatibus asperiores porro qui nam.
              </p>
            </div>
            <div class="col-lg-6 mx-auto text-center">
              <p>
                <a
                  href="sejarah"
                  target="_blank"
                  class="btn btn-primary text-white pt-3 px-4"
                  >Baca Selengkapnya</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>


    <div class="section section-4 bg-light" id="wisata">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h2 class="font-weight-bold heading text-primary mb-4 mt-5">
              Wisata
            </h2>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              enim pariatur similique debitis vel nisi qui reprehenderit.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-properties">
        <div class="container">
          <div class="row">
            @foreach ($posts as $wst)
                
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
              <div class="property-item">
                <div class="property-content" >
                <a href="/detail/{{ $wst->slug }}" class="img">
                  @if ($wst->image)
                  <div>
                      <img src="{{ asset('storage/' . $wst->image) }}" alt="{{ $wst->name }}" class="img-fluid mt-3">
                  </div>
                  @elseif ($wst->link)
                      <div>
                          <img src="{{ $wst->link }}" alt="{{ $wst->name }}" class="img-fluid mt-3">
                      </div>
                  @else
                      <img src="https://source.unsplash.com/1200x400/?{{ $wst->name }}" alt="{{ $wst->name }}"
                          class="img-fluid mt-3">
                  @endif
                </a>
  
                    <span class="city d-block mb-3">{{ $wst->name }}</span>
                    <span class="d-block mb-2 text-black-50"
                      >{{ $wst->alamat }}</span
                      >
                      
                      <a
                      href="/detail/{{ $wst->slug }}"
                      class="btn btn-primary py-2 px-3"
                      >Lihat Detail</a
                    >
                  </div>
                </div>
              </div>
              @endforeach
              <!-- .item -->
            </div>
          </div>
        </div>
      </div>

    <div class="" id="rumah-singgah"> </div>


    <div class="section mt-5" >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h2 class="font-weight-bold text-primary heading">
                Rumah Singgah
              </h2>
            </div>
            <div class="col-lg-6 text-lg-end">
              <p>
                <a
                  href="#"
                  target="_blank"
                  class="btn btn-primary text-white px-4"
                  >Pesan Rumah Singgah</a
                >
              </p>
            </div>
          </div>
          <div class="row section-counter">
            <div
              class="col-6 col-sm-6 col-md-6 col-lg-8"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="counter-wrap mb-5 mb-lg-0">
                <span class="caption text-black-50"># of Sell Properties</span>
              </div>
            </div>

            <div
              class="col-6 col-sm-6 col-md-6 col-lg-4"
              data-aos="fade-up"
              data-aos-delay="600"
            >
            <div class="counter-wrap mb-5 mb-lg-0">
                <span class="number"
                  ><span class="countup text-primary">21</span></span
                >
                <span class="caption text-black-50">Rumah Siap Huni</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    
    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>


@endsection