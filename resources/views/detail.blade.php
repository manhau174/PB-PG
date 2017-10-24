@extends('layouts.header')
@section('content')
	<section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="row">
          <div class="product-view">
            <div class="product-essential">
              <form action="#" method="post" id="product_addtocart_form">
                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                <div class="product-img-box col-sm-4 col-xs-12">
                  <div class="new-label new-top-left"> New </div>
                  <div class="product-image">
                    <div class="large-image"> <a href="products-images/product4.jpg" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img alt="product-image" src="products-images/product27.jpg"> </a> </div>
                    <div class="flexslider flexslider-thumb">
                      <ul class="previews-list slides">
                        <li><a href='products-images/product6.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product6.jpg' "><img src="products-images/product26.jpg" alt="Thumbnail 1"/></a></li>
                        <li><a href='products-images/product10.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product10.jpg' "><img src="products-images/product28.jpg" alt="Thumbnail 2"/></a></li>
                        <li><a href='products-images/product3.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'products-images/product3.jpg' "><img src="products-images/product27.jpg" alt="Thumbnail 1"/></a></li>
                        
                      </ul>
                    </div>
                  </div>
                  <!-- end: more-images -->
                  <div class="clear"></div>
                </div>
                <div class="product-shop col-sm-5 col-xs-12">
                  <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                  <div class="product-name">
                    <h1>Họ và tên</h1>
                  </div>
                  <div class="short-description">
                    <p> Suspendisse eleifend ornare turpis. Sed ante justo, laoreet vel laoreet a, tristique id lacus. Donec iaculis neque vitae augue venenatis venenatis. Curabitur elementum orci justo, nec sollicitudin eros </p>
                  </div>
                  {{-- <div class="ratings">
                    <div class="rating-box">
                      <div style="width:60%" class="rating"></div>
                    </div>
                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                  </div> --}}
                  {{-- <p class="availability in-stock">Availability: <span>In Stock</span></p>
                  <div class="price-block">
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p>
                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $309.99 </span> </p>
                    </div>
                  </div> --}}
                  <div class="add-to-box">
                    
                    <button type="button" title="Add to Cart" class="button btn-cart" onClick="productAddToCartForm.submit(this)"><span>Apply</span></button>
                  </div>
                  <div class="email-addto-box">
                    <p class="email-friend"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Email to a Friend"><span></span></a></p>
                    <ul class="add-to-links">
                      <li><span class="separator">|</span> <a class="link-compare" href="compare.html" data-toggle="tooltip" data-placement="top" data-original-title="Add to Compare"></a></li>
                      <li> <a class="link-wishlist" href="wishlist.html"  data-toggle="tooltip" data-placement="top" data-original-title="Add to Wishlist"></a></li>
                    </ul>
                  </div>
                  <div class="toggle-content">
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Miêu tả</a></h4>
                      <div style="display: none;" class="toggle_container tabcontent">
                        <div class="std">
                          <p>Eastland's heritage, rugged 8-inch moc toe workboot selected from our design archives and crafted from the finest components available; Genuine Vibram&reg; Christy industrial outsole provides slip-resistance, durability and shock-absorbing cushioning for all-day<span class="read-more">… <a href="#">read more</a></span></p>
                          
                          <p>The perfect mix of portability and performance in a slim 1" form factor:</p>
                          <p>Triangular shaped backpack/ shoulder bag with front zip open and croc textured finish. </p>
                          <p>Made from water-repellent Squall fabric, this is one tough travel bag. The efficient bag sports a cushioned shoulder strap for carrying ease. With an exterior pocket running the length of the front and secure zipper closure. 100% nylon with polyester base. Spot clean. Imported.</p>
                        </div>
                      </div>
                    </div>
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Chiều cao</a></h4>
                      <div style="display: none;" class="toggle_container ">
                        <p>Triangular shaped backpack/ shoulder bag with front zip open and croc textured finish. </p>
                        <p>Made from water-repellent Squall fabric, this is one tough travel bag. The efficient bag sports a cushioned shoulder strap for carrying ease. With an exterior pocket running the length of the front and secure zipper closure. 100% nylon with polyester base. Spot clean. Imported. </p>
                      </div>
                    </div>
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Cân nặng</a></h4>
                      <div style="display: none;" class="toggle_container ">
                        <div class="box-collateral box-tags">
                          
                          <!--tags-->
                          <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                        </div>
                      </div>
                    </div>
                    <div class="toggle toggle-white">
                      <h4 class="trigger"><a href="#">Email</a></h4>
                      <div style="display: none;" class="toggle_container ">
                        <p>hitokiri.kenshin00@gmail.com</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-img-box col-sm-3 col-xs-12">
                  <div class="product-additional"><span class="product-additional"><img alt="custom block" src="images/offer-banner5.png"></span></div>
                </div>
              </form>
              
              
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script type="text/javascript" src="js/prototype.js"></script> 
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="js/common.js"></script> 
  <script type="text/javascript" src="js/owl.carousel.min.js"></script> 
  <script type="text/javascript" src="js/toggle.js"></script> 
  <script type="text/javascript" src="js/pro-img-slider.js"></script> 
  <script type="text/javascript" src="js/jquery.flexslider.js"></script> 
  <script type="text/javascript" src="js/cloud-zoom.js"></script> 
  <script>
      new UISearch( document.getElementById( 'form-search' ) );
    </script>
@endsection

@section('footer')
@include('layouts.footer')
@endsection