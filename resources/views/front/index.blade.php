@extends('front.layout.master')

@section('title', 'Home')

@section('body')
    <!-- -->
    <!--home begin -->
    <div class="grid-container no-sidebar">
        <div class="content row">
            <!-- start: .epcl-page-wrapper -->
            <div class="epcl-page-wrapper">
              <!-- start: .content -->
              <div class="center left-content">
                <article class="main-article">
                  {{-- @dd($category['content']['0']['slug']); --}}
                  @if ($category && $category['type'] == 'DIVISION')
                    @foreach($category['content'] as $item)
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
                          <h1 class="main-title text-center">
                            <a href="{{ route('detail_feature', ['slug' => $item['slug']]) }}">SÁCH THEO CHỦ ĐỀ</a>
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
                          <h1 class="">
                            <a href="{{ route('detail_feature', ['slug' => $item['slug']]) }}">{{ $item['title'] ?? '' }}</a>
                          </h1>
                          <p class="crop-long-text">
                            {{ $item['excerpt'] ?? ''}}
                          </p>
                        </div>
                      </section>
                    @endforeach
                  @endif
                </article>
              </div>
              <!-- end: .content -->
            </div>
            <!-- end: .center -->
          </div>
    </div>

    <!--home end -->
@endsection
