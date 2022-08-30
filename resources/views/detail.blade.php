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

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="index.html" class="logo m-0 float-start">Kampung Buricak Burinong</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li class="active"><a href="contact.html">Kembali</a></li>
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

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_3.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
                {{ $post->name }}
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="properties.html">Properties</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  {{ $post->name }}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                @foreach ($photo as $ph)
                <img src="{{ asset('storage/' . $ph->image) }}" alt="{{ $ph->name }}" class="img-fluid mt-3">
                <img src="{{ $ph->link }}" alt="{{ $ph->name }}" class="img-fluid mt-3">
                    
                @endforeach
                {{-- @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                </div>
                @elseif ($post->link)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ $post->link }}" alt="{{ $post->name }}" class="img-fluid mt-3">
                        <img src="{{ $post->link }}" alt="{{ $post->name }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->name }}" alt="{{ $post->name }}"
                        class="img-fluid mt-3">
                @endif   --}}
                {{-- <img src="images/img_2.jpg" alt="Image" class="img-fluid" />
                <img src="images/img_3.jpg" alt="Image" class="img-fluid" /> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="heading text-primary">5232 California Ave. 21BC</h2>
            <p class="meta">California, United States</p>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione
              laborum quo quos omnis sed magnam id, ducimus saepe, debitis error
              earum, iste dicta odio est sint dolorem magni animi tenetur.
            </p>
            <p class="text-black-50">
              Perferendis eligendi reprehenderit, assumenda molestias nisi eius
              iste reiciendis porro tenetur in, repudiandae amet libero.
              Doloremque, reprehenderit cupiditate error laudantium qui, esse
              quam debitis, eum cumque perferendis, illum harum expedita.
            </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
