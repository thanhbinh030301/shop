@extends('front.layout.master')

@section('title', 'Home')

@section('body')
    <!--banner -->
    <div class="grid-container">
      <div id="carouselExampleSlidesOnly" class="carousel slide content row" data-ride="carousel">
        @if ($data && $data['type'] == 'DIVISION' && $data['banners'] != [])
          <div class="carousel-inner epcl-overlay epcl-decoration-border" style="height: 280px">
            @foreach($data['banners'] as $key => $item)
              <div class="carousel-item @if($key == 0) active @endif">
                <img class="d-block w-100" src="{{ $item['image'] }}">
              </div>
            @endforeach
          </div>
        @endif
      </div>
    </div>
    <!--end banner -->
    <!--home begin -->
    <div class="grid-container no-sidebar">
      <div class="content row">
        @if ($data && $data['type'] == 'DIVISION' && $data['content'] != [])
          <!-- start: .epcl-page-wrapper -->
          <div class="epcl-page-wrapper">
            <!-- start: .content -->
            <div class="center left-content">
              <article class="main-article">
                  @foreach($data['content'] as $item)
                    <header>
                      <!-- start: .post-format-image -->
                      <div class="post-format-image post-style-standard-image">
                        <div class="featured-image epcl-flexr">
                          <a href="{{ route('detail_feature', ['slug' => $item['slug']]) }}" class="thumb translate-effect loaded">
                            <img src="{{ $item['image'] ?? '' }}" class="fullwidth">
                            <span class="decoration"></span>
                          </a>
                        </div>
                      </div>
                      <!-- end: .post-format-image -->
                      <div class="info">
                        <h1 class="main-title title text-center">
                          <a href="{{ route('detail_feature', ['slug' => $item['slug']]) }}">{{ $item['title'] ?? '' }}</a>
                        </h1>
                        <!-- start: .meta -->
                        <div class="meta">
                          <p class="meta-info" datetime="">{{ Illuminate\Support\Carbon::now()->toFormattedDateString() }}
                            <img src="/front/img/fire-solid.svg" alt="">
                            10
                          </p>
                        </div>
                        <!-- end: .meta -->
                      </div>
                    </header>
                    <section class="post-content">
                      <div class="text">
                        <p class="crop-long-text">
                          {{ $item['excerpt'] ?? ''}}
                        </p>
                      </div>
                    </section>
                  @endforeach
              </article>
            </div>
            <!-- end: .content -->
          </div>
          <!-- end: .center -->
        @endif
      </div>
      <!-- pagination -->
      <div class="text-center py-5">
        <span>Page {{ $data['page'] }} of {{ $data['page'] }}</span>
      </div>
    </div>
    <!--home end -->
@endsection
