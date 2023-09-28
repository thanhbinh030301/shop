@extends('front.layout.master')

@section('title', 'Detail')

@section('body')
    <!-- -->
    <!--home begin -->
    <div class="grid-container no-sidebar">
        <div class="content row">
            <!-- start: .epcl-page-wrapper -->
            <div class="epcl-page-wrapper">
              <!-- start: .content -->
              <div class="left-content grid-70 np-mobile">
                <article class="main-article primary-cat-3 post type-post status-publish format-standard has-post-thumbnail hentry">
                  {{-- @dd($category['content']['0']['slug']); --}}
                      <header>
                        <!-- start: .post-format-image -->
                        <div class="post-format-image">
                          <div class="featured-image epcl-decoration-border">
                            <div class="epcl-loader">
                                {{-- <img width="950" height="500" src="env('API_BASE_URL')/{{ $item['image'] }}" class="fullwidth"> --}}
                                <img width="950" height="500" src="http://booklover.vn/wp-content/uploads/2019/07/mixkit-woman-in-the-summertime-43-desktop-wallpaper-950x500.jpg" class="fullwidth" alt="">
                            </div>
                          </div>
                        </div>
                        <!-- end: .post-format-image -->
                        <div class="info">
                          <h1 class="main-title text-center">SÁCH THEO CHỦ ĐỀ</h1>
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
                          <p>Từ xưa đến nay, <a href="#">
                              <strong>sách hay</strong>
                            </a>luôn được biết đến như là một kho tàng kiến thức quý báu của nhân loại. Mỗi một quyển sách đều mang đến cho chúng ta những giá trị nhất định về tư duy trong công việc, về thái độ sống, …. Nếu bạn đang tìm kiếm những cuốn sách hay giúp thay đổi cuộc đời, thì đừng bỏ qua bài viết dưới đây của chúng tôi nhé! <br>
                            <br>Dưới đây là <a href="#">
                              <strong>top 10 cuốn sách hay nhất mà bạn nên đọc</strong>
                            </a>, chúng chắc chắn sẽ giúp bạn thay đổi tư duy và cách nhìn về cuộc sống của mình.
                          </p>
                          <h2 class="">1.Đắc Nhân Tâm - Dale Carnegie</h2>
                          <p>
                            <a href="">
                              <strong>Đắc Nhân Tâm của tác giả Dale Carnegie</strong>
                            </a>được mệnh danh là một trong những <strong>quyển sách hay nhất</strong>, <strong>bán chạy nhấ</strong>t và có tầm ảnh hưởng nhất mọi thời đại. Đây thực sự là một cuốn sách tuyệt với mang lại nhiều giá trị cho người đọc về nghệ thuật thu phục lòng người khiến cho những người xung quanh phải khâm phục và yêu mến mình.
                          </p>
                          <p>Nội dung xuyên suốt quyển sách là những bài học thực tế về cách cư xử, thái độ cũng như kỹ năng giao tiếp để có thể phát triển bản thân lên một taamf cao mới. Cuốn sách này phù hợp với tất cả mọi lứa tuổi, bạn đừng bỏ qua <strong> <a href="">Đắc Nhân Tâm</a>
                            </strong>để biết sống tử tế hơn giúp cuộc đời có ý nghĩa hơn nhé. </p>
                        </div>
                      </section>
                </article>
              </div>
              <!-- end: .content -->
            </div>
            <!-- end: .center -->
          </div>
    </div>

    <!--home end -->
@endsection
