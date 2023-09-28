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
                              {{-- @if ($item)
                                <img width="950" height="500" src="env('APP_URL')/{{ $item['image'] }}" class="fullwidth">
                              @else --}}
                                <img src="http://booklover.vn/wp-content/uploads/2019/07/mixkit-woman-in-the-summertime-43-desktop-wallpaper-950x500.jpg" alt="">
                                <span class="decoration"></span>
                              {{-- @endif --}}
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
                            <p class="meta-info" datetime="2023-09-21">September 21, 2023 
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
                            <a href="#">Top 10 cuốn sách hay giúp thay đổi cuộc đời bạn</a>
                          </h1>
                          <p class="crop-long-text">Từ xưa đến nay sách hay
                            luôn được biết đến như là một kho tàng kiến thức quý báu của nhân loại. Mỗi một
                            quyển sách đều mang đến cho chúng ta những giá trị nhất định về tư duy trong
                            công việc, về thái độ sống, …. Nếu bạn đang tìm kiếm những cuốn sách hay giúp
                            thay đổi cuộc đời, thì đừng bỏ qua bài viết dưới đây của chúng tôi nhé!
                            Dưới đây là top 10 cuốn sách hay nhất mà bạn nên đọc, chúng chắc chắn sẽ giúp 
                            bạn thay đổi tư duy và cách nhìn về cuộc sống của mình.
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
