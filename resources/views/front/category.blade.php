@extends('front.layout.master')

@section('title', 'Category')

@section('body')
    <!-- -->
    <!--home begin -->
    <div class="grid-container no-sidebar">
        @foreach ($categoryList as $item)
            <div class="content row">
                <!-- start: .epcl-page-wrapper -->
                <div class="epcl-page-wrapper">
                    <!-- start: .content -->
                    <div class="left-content grid-70 np-mobile">
                        <article
                            class="main-article primary-cat-3 post type-post status-publish format-standard has-post-thumbnail hentry">
                            <header>
                                <!-- start: .post-format-image -->
                                <div class="post-format-image">
                                    <div class="featured-image epcl-decoration-border">
                                        <div class="epcl-loader">
                                            <img src="{{ $item['image'] }}" class="fullwidth">
                                        </div>
                                    </div>
                                </div>
                                <!-- end: .post-format-image -->
                                <div class="info">
                                    <h1 class="main-title title text-center">
                                        <a href={{ route('detail_feature', ['slug' => $item['slug']]) }}>
                                            {{ $item['title'] ?? '' }}
                                        </a>
                                    </h1>
                                    <!-- start: .meta -->
                                    <div class="meta">
                                        <p class="meta-info" datetime="">{{ $now }}
                                            <img src="/front/img/fire-solid.svg" alt="">
                                            10
                                        </p>
                                    </div>
                                    <!-- end: .meta -->
                                </div>
                            </header>
                            <section class="post-content">
                                <div class="text">
                                    <p>
                                        {!! $item['excerpt'] !!}
                                    </p>
                                </div>
                            </section>
                        </article>
                    </div>
                    <!-- end: .content -->
                </div>
                <!-- end: .center -->
            </div>
        @endforeach
    </div>

    <!--home end -->
@endsection