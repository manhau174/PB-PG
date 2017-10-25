{{-- {{dd($pgs)}} --}}
@extends('layouts.header')

@section('content')
  
  <!-- Slider -->
  <section class="slider-intro">
    <div class="container">
      <div class="the-slideshow slideshow-wrapper">
        <ul style="overflow: hidden;" class="slideshow">
          <li class="slide">
            <p><a href="#"> <img src="images/banner-img2.jpg" alt=""></a></p>
            
          </li>
          <li class="slide">
            <p><a href="#"> <img src="images/banner-img3.jpg" alt=""></a></p>
            <div class="caption light top-right">
              <div class="caption-inner">
                <p class="normal-text">Collection 2014</p>
                <h2 class="heading permanent">You like this theme</h2>
                <p class="normal-text1">tristique senectus </p>
                <p class="intro-btn"><a  href="#" title="Click to see all features">Buy Now</a> </p>
              </div>
            </div>
          </li>
          <li class="slide">
            <p><a title="#" href="#"> <img src="images/banner-img2.jpg" alt=""> </a></p>
            <div class="caption light2 top-right">
              <div class="caption-inner">
                <p class="heading">Responsive Layout</p>
              </div>
            </div>
          </li>
        </ul>
        <a href="#" id="home-slides-prev" class="backward browse-button">previous</a> <a href="#" id="home-slides-next" class="forward browse-button">next</a>
        <div id="home-slides-pager" class="tab-pager tab-pager-img tab-pager-ring-lgray"></div>
      </div>
    </div>
  </section>
  <!-- end Slider --> 
  <!-- service section  -->
  <div class="service-section">
    <div class="container">
      <div id="store-messages">
        <div class="message col-lg-3 col-sm-6 col-xs-12"><i class="icon-refresh">&nbsp;</i> <span><strong>Return &amp; Exchange</strong> in 3 days </span> </div>
        <div class="message col-lg-3 col-sm-6 col-xs-12"><i class="icon-truck">&nbsp;</i><span><strong>Free Shipping</strong> order over $99</span> </div>
        <div class="message col-lg-3 col-sm-6 col-xs-12"><i class="icon-discount">&nbsp;</i><span><strong>50% off</strong> on all products</span> </div>
        <div class="phone col-lg-3 col-sm-6 col-xs-12"><i class="icon-phone"></i>&nbsp;<span><strong>Need help?</strong> +1 800 123 1234</span> </div>
      </div>
    </div>
  </div>
  
  <!-- End service section  --> 
  <!-- Offer Banner  -->
  
  <div class="offer-banner-section">
    <div class="container">
      <div class="new_title center">
          <h2>Tin nổi bật</h2>
      </div>
      <div class="col-1"><img src="images/offer-banner6.jpg" alt="offer banner"></div>
      <div class="col-2">
        <div class="add-banner"><img src="images/offer-banner7.jpg" alt="offer banner"></div>
      </div>
      <div class="col-3">
        <div class="add-banner1">
          <div class="add-banner2"><img src="images/offer-banner3.png" alt="offer banner"></div>
          <div class="add-banner3"><img src="images/offer-banner4.png" alt="offer banner"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Offer Banner  --> 
  
  <!-- main container -->
  
  <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="row">
        <div class="std">
          <div class="best-pro col-lg-12">
            <div class="slider-items-products">
              <div class="new_title center">
                <h2>Danh sách PB</h2>
              </div>
              <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4"> 
                  
                  @foreach ($pbs as $pb)


                    <!-- Item -->
                  
                  <div class="item">
                    <div class="col-item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a href="product_detail.html"  title="Sample Product" class="product-image"> <img src="{{$pb->profile_picture}}" alt="Sample Product"></a>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"> <span> Quick View</span></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="product_detail.html" title="Sample Product"> {{$pb->full_name}} </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                                <!-- <div class="item-price">
                                  <div class="price-box"> <span class="regular-price" id="product-price-1"> <span class="price">$125.00</span> </span> </div>
                                </div> -->
                            </div>
                          </div>
                          <div class="actions"><span class="add-to-links"> <!-- <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> -->
                            <button  title="show info" class="button btn-cart"><span><a href="{{route('profile')}}">Xem thông tin</a></span></button>
                            <!-- <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a> --></span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Item --> 
                  @endforeach
                  
                  
                  <!-- Item -->
                  
                  <!-- End Item --> 
                  
                </div>
              </div>
            </div>
          </div>
          <div class="featured-pro col-lg-12">
            <div class="slider-items-products">
              <div class="new_title center">
                <h2>Danh sách PG</h2>
              </div>
              <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4"> 
                  @foreach ($pgs as $pg)
                    <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a href="product_detail.html"  title="Sample Product" class="product-image"> <img src="{{$pg->profile_picture}}" alt="Sample Product"> </a>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"> <span> Quick View</span></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="product_detail.html" title="Sample Product"> {{$pg->full_name}} </a>  </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                                <!-- <div class="item-price">
                                  <div class="price-box"> <span class="regular-price" id="product-price-1"> <span class="price">$125.00</span> </span> </div>
                                </div> -->
                            </div>
                          </div>
                          <div class="actions"><span class="add-to-links"> <!-- <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> -->
                            <button  title="Add to Cart" class="button btn-cart"><span>Xem thông tin</span></button>
                            <!-- <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a> --></span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- End Item --> 
                  @endforeach
                  
                  
                </div>
              </div>
            </div>
          </div>
          <div class="featured-pro col-lg-12">
            <div class="slider-items-products">
              <div class="new_title center">
                <h2>Tin tuyển dụng</h2>
              </div>
              <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4"> 
                  @foreach ($jobs as $job)
                    <!-- Item -->
                  <div class="item">
                    <div class="col-item">
                      <div class="item-inner">
                        {{-- <div class="item-img">
                          <div class="item-img-info"> <a href="product_detail.html"  title="Sample Product" class="product-image"> <img src="{{$job}}" alt="Sample Product"> </a>
                            <div class="item-box-hover">
                              <div class="box-inner">
                                <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"> <span> </span></a></div>
                              </div>
                            </div>
                          </div>
                        </div> --}}
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a href="product_detail.html" title=""> {{$job->title}} </a>  </div>
                            <div class="item-content">
                              <div class=""><i class="icon-calendar"></i><b>Thời gian:</b> {{$job->time}}</div>
                                <p><b>Mô tả công việc:</b> {{$job->description}} </p>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price" id="product-price-1"> <span class="price">{{number_format($job->salary)}} VNĐ</span> </span> </div>
                                </div>
                            </div>
                          </div>
                          <div class="actions"><span class="add-to-links"> <!-- <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> -->
                            <button  title="Add to Cart" class="button btn-cart"><span>Đọc thêm</span></button>
                            <!-- <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a> --></span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- End Item --> 
                  @endforeach
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End main container --> 
  
  <!-- Latest Blog -->
{{--   <section class="latest-blog wow bounceInDown animated">
    <div class="container">
      <div class="row">
        <div class="new_title center">
          <h2><span>Tin Tuyển dụng</span></h2>
        </div>
        @foreach ($jobs as $job)
         <div class="col-xs-12 col-sm-3">
          <div class="blog_inner">
            <div class="blog-img blog-l"> <img src="images/blog-img1.jpg" alt="Blog image">
              <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
            </div>
            <h2><a href="blog_detail.html">{{$job->title}}</a> </h2>
            <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
            <p>{{$job->description}} </p>
          </div>
        </div>
        @endforeach
        
        
      </div>
    </div>
  </section> --}}
  <!-- End Latest Blog -->
  <div class="our-features-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="feature-box">
            <div class="icon-reponsive">&nbsp;</div>
            <div class="content">Responsive Theme<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span> </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="feature-box">
            <div class="icon-admin">&nbsp;</div>
            <div class="content">Powerful Admin Panel <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span></div>
          </div>
        </div>
        <div class="col-lg-4col-md-4 col-sm-4  col-xs-12">
          <div class="feature-box">
            <div class="icon-support">&nbsp;</div>
            <div class="content">Premium Support <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
  @section('footer')
  @include('layouts.footer')
  @endsection