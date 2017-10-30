<!DOCTYPE html>
<html lang="en">

<!-- Giao dien duoc chia se mien phi tai www.ptheme.net [Free HTML Download]. SKYPE[ptheme.net] - EMAIL[ptheme.net@gmail.com].-->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>PB & PG</title>

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<!--<link rel="stylesheet" href="css/animate.css" type="text/css">-->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" type="text/css">
<style type="text/css">
  .detail-recruitment{
    border: 1px solid black;
    background-color: #f9f9f9;
    margin-bottom: 1%;
  }
  .city_and_posted_date{
    padding-top: 15%;
  }
  .detail-recruitment:hover{
    box-shadow: 5px 3px 10px rgba(0, 0, 0, .5);
  }

</style>
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index">
<div class="page"> 
  <!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-xs-6"> 
            
            <!-- Header Language -->
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="images/english.png" alt="language"> English <i class="icon-angle-down"></i> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{ asset('/images/english.png') }}" alt="language"> English </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{ asset('/images/francais.png') }}" alt="language"> French </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{ asset('/images/german.png') }}" alt="language"> German </a></li>
              </ul>
            </div>
            
            <!-- End Header Language --> 
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <i class="icon-angle-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
              </ul>
            </div>
            
            <!-- End Header Currency -->
            <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
          </div>
          <div class="col-lg-7 col-md-7 col-xs-6"> 
            
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href=""><span>My Account</span></a></div>
                <!-- <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span>Wishlist</span></a></div>
                <div class="check"><a href="checkout.html" title="Checkout"><span>Checkout</span></a></div>
                <div class="demo"><a href="#" title="Demo"><span>Demo</span></a></div> -->
                <!-- Header Company -->
                <div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="dropdown-toggle" href="#"> <span>Company</span> <i class="icon-angle-down"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="about_us.html"> About Us </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Customer Service </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Privacy Policy </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="site_map.html">Site Map </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Search Terms </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Advanced Search </a></li>
                  </ul>
                </div>
                <!-- End Header Company -->

                <div class="dropdown block-company-wrapper hidden-xs">
                  @guest
                    <a href="{{ route('login') }}">Login</a>
                  @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
                    <ul class="dropdown-menu" role="menu">
                      @if (Auth::user()->permission == 3)
                          <li>
                              <a href="{{ route('updatePbPg.create') }}">
                                  create thong tin
                              </a>

                          </li>
                          <li>
                              <a href="{{ route('updatePbPg.edit',App\User::find(Auth::user()->id)->pbpg->id) }}">
                                  Update thong tin
                              </a>

                          </li>
                      @endif
                      <li role="presentation">
                        <a href="{{ route('logout') }}">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                  @endguest
                </div>
                  
                                   

              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
   
    <div class="header container">
      <div class="row">
        <div class="col-lg-3 col-sm-4 col-md-3"> 
          <!-- Header Logo -->
          <div class="logo"> <a title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="images/logo.png"></a> </div>
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-9 col-xs-12">
          <!-- <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"><span>Shopping Cart (5)</span></a></div>
              <div>
                <div style="display: none;" class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    <li class="item odd"> <a href="product_detail.html" title="Sample Product" class="product-image"><img src="products-images/product3.jpg" alt="Sample Product" width="55"></a>
                      <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a> <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                        <p class="product-name"><a href="product_detail.html">Sample Product</a> </p>
                        <strong>1</strong> x <span class="price">$20.00</span> </div>
                    </li>
                    <li class="item even"> <a href="product_detail.html" title="Sample Product" class="product-image"><img src="products-images/product1.jpg" alt="Sample Product" width="55"></a>
                      <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a> <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                        <p class="product-name"><a href="product_detail.html">Sample Product</a> </p>
                        <strong>1</strong> x <span class="price">$230.00</span> </div>
                    </li>
                    <li class="item last odd"> <a href="product_detail.html" title="Sample Product" class="product-image"><img src="products-images/product5.jpg" alt="Sample Product" width="55"></a>
                      <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a><a class="btn-edit" title="Edit item" href="#">Edit item</a>
                        <p class="product-name"><a href="product_detail.html">Sample Product</a> </p>
                        <strong>2</strong> x <span class="price">$420.00</span> </div>
                    </li>
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                  <div class="actions">
                    <button class="btn-checkout" ><span>Checkout</span></button>
                    <button class="view-cart" ><span>View Cart</span></button>
                  </div>
                </div>
              </div>
            </div> -->
            <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
        </div>
      </div>
    </div>
   </header>
  <!-- end header --> 
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="nav-inner"> 
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
              </div>
              <ul style="display:none;" class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-1 level-top first parent"> <a href="grid.html" class="level-top"> <span>Women</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-1-1 first parent"> <a href="grid.html"> <span>Stylish Bag</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-1-1 first"> <a href="grid.html"> <span>Clutch Handbags</span> </a> </li>
                            <li class="level2 nav-1-1-2"> <a href="grid.html"> <span>Diaper Bags</span> </a> </li>
                            <li class="level2 nav-1-1-3"> <a href="grid.html"> <span>Bags</span> </a> </li>
                            <li class="level2 nav-1-1-4 last"> <a href="grid.html"> <span>Hobo Handbags</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-2 parent"> <a href="grid.html"> <span>Material Bag</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-2-5 first"> <a href="grid.html"> <span>Beaded Handbags</span> </a> </li>
                            <li class="level2 nav-1-2-6"> <a href="grid.html"> <span>Fabric Handbags</span> </a> </li>
                            <li class="level2 nav-1-2-7"> <a href="grid.html"> <span>Handbags</span> </a> </li>
                            <li class="level2 nav-1-2-8 last"> <a href="grid.html"> <span>Leather Handbags</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-3 parent"> <a href="grid.html"> <span>Shoes</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-3-9 first"> <a href="grid.html"> <span>Flat Shoes</span> </a> </li>
                            <li class="level2 nav-1-3-10"> <a href="grid.html"> <span>Flat Sandals</span> </a> </li>
                            <li class="level2 nav-1-3-11"> <a href="grid.html"> <span>Boots</span> </a> </li>
                            <li class="level2 nav-1-3-12 last"> <a href="grid.html"> <span>Heels</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-4 parent"> <a href="grid.html"> <span>Jwellery</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-4-13 first"> <a href="grid.html"> <span>Bracelets</span> </a> </li>
                            <li class="level2 nav-1-4-14"> <a href="grid.html"> <span>Necklaces &amp; Pendants</span> </a> </li>
                            <li class="level2 nav-1-4-15"> <a href="grid.html"> <span>Pendants</span> </a> </li>
                            <li class="level2 nav-1-4-16 last"> <a href="grid.html"> <span>Pins &amp; Brooches</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-5 parent"> <a href="grid.html"> <span>Dresses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-5-17 first"> <a href="grid.html"> <span>Casual Dresses</span> </a> </li>
                            <li class="level2 nav-1-5-18"> <a href="grid.html"> <span>Evening</span> </a> </li>
                            <li class="level2 nav-1-5-19"> <a href="grid.html"> <span>Designer</span> </a> </li>
                            <li class="level2 nav-1-5-20 last"> <a href="grid.html"> <span>Party</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-6 last parent"> <a href="grid.html"> <span>Swimwear</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-6-21 first"> <a href="grid.html"> <span>Swimsuits</span> </a> </li>
                            <li class="level2 nav-1-6-22"> <a href="grid.html"> <span>Beach Clothing</span> </a> </li>
                            <li class="level2 nav-1-6-23"> <a href="grid.html"> <span>Clothing</span> </a> </li>
                            <li class="level2 nav-1-6-24 last"> <a href="grid.html"> <span>Bikinis</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-2 level-top parent"> <a href="grid.html" class="level-top"> <span>Men</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-2-1 first parent"> <a href="grid.html"> <span>Shoes</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-1-1 first"> <a href="grid.html"> <span>Sport Shoes</span> </a> </li>
                            <li class="level2 nav-2-1-2"> <a href="grid.html"> <span>Casual Shoes</span> </a> </li>
                            <li class="level2 nav-2-1-3"> <a href="grid.html"> <span>Leather Shoes</span> </a> </li>
                            <li class="level2 nav-2-1-4 last"> <a href="grid.html"> <span>canvas shoes</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-2 parent"> <a href="grid.html"> <span>Dresses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-2-5 first"> <a href="grid.html"> <span>Casual Dresses</span> </a> </li>
                            <li class="level2 nav-2-2-6"> <a href="grid.html"> <span>Evening</span> </a> </li>
                            <li class="level2 nav-2-2-7"> <a href="grid.html"> <span>Designer</span> </a> </li>
                            <li class="level2 nav-2-2-8 last"> <a href="grid.html"> <span>Party</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-3 parent"> <a href="grid.html"> <span>Jackets</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-3-9 first"> <a href="grid.html"> <span>Coats</span> </a> </li>
                            <li class="level2 nav-2-3-10"> <a href="grid.html"> <span>Formal Jackets</span> </a> </li>
                            <li class="level2 nav-2-3-11"> <a href="grid.html"> <span>Leather Jackets</span> </a> </li>
                            <li class="level2 nav-2-3-12 last"> <a href="grid.html"> <span>Blazers</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-4 parent"> <a href="grid.html"> <span>Watches</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-4-13 first"> <a href="grid.html"> <span>Fastrack</span> </a> </li>
                            <li class="level2 nav-2-4-14"> <a href="grid.html"> <span>Casio</span> </a> </li>
                            <li class="level2 nav-2-4-15"> <a href="grid.html"> <span>Titan</span> </a> </li>
                            <li class="level2 nav-2-4-16 last"> <a href="grid.html"> <span>Tommy-Hilfiger</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-5 parent"> <a href="grid.html"> <span>Sunglasses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-5-17 first"> <a href="grid.html"> <span>Ray Ban</span> </a> </li>
                            <li class="level2 nav-2-5-18"> <a href="grid.html"> <span>Fastrack</span> </a> </li>
                            <li class="level2 nav-2-5-19"> <a href="grid.html"> <span>Police</span> </a> </li>
                            <li class="level2 nav-2-5-20 last"> <a href="grid.html"> <span>Oakley</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-6 last parent"> <a href="grid.html"> <span>Accessories</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-6-21 first"> <a href="grid.html"> <span>Backpacks</span> </a> </li>
                            <li class="level2 nav-2-6-22"> <a href="grid.html"> <span>Wallets</span> </a> </li>
                            <li class="level2 nav-2-6-23"> <a href="grid.html"> <span>Laptop Bags</span> </a> </li>
                            <li class="level2 nav-2-6-24 last"> <a href="grid.html"> <span>Belts</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-3 level-top parent"> <a href="grid.html" class="level-top"> <span>Electronics</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-3-1 first parent"> <a href="grid.html"> <span>Mobiles</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-3-1-1 first"> <a href="grid.html"> <span>Samsung</span> </a> </li>
                            <li class="level2 nav-3-1-2"> <a href="grid.html"> <span>Nokia</span> </a> </li>
                            <li class="level2 nav-3-1-3"> <a href="grid.html"> <span>iPhone</span> </a> </li>
                            <li class="level2 nav-3-1-4 last"> <a href="grid.html"> <span>Sony</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-2 parent"> <a href="grid.html"> <span>Accessories</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-3-2-5 first"> <a href="grid.html"> <span>Mobile Memory Cards</span> </a> </li>
                            <li class="level2 nav-3-2-6"> <a href="grid.html"> <span>Cases &amp; Covers</span> </a> </li>
                            <li class="level2 nav-3-2-7"> <a href="grid.html"> <span>Mobile Headphones</span> </a> </li>
                            <li class="level2 nav-3-2-8 last"> <a href="grid.html"> <span>Bluetooth Headsets</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-3 parent"> <a href="grid.html"> <span>Cameras</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-3-3-9 first"> <a href="grid.html"> <span>Camcorders</span> </a> </li>
                            <li class="level2 nav-3-3-10"> <a href="grid.html"> <span>Point &amp; Shoot</span> </a> </li>
                            <li class="level2 nav-3-3-11"> <a href="grid.html"> <span>Digital SLR</span> </a> </li>
                            <li class="level2 nav-3-3-12 last"> <a href="grid.html"> <span>Camera Accessories</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-4 parent"> <a href="grid.html"> <span>Audio &amp; Video</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-3-4-13 first"> <a href="grid.html"> <span>MP3 Players</span> </a> </li>
                            <li class="level2 nav-3-4-14"> <a href="grid.html"> <span>iPods</span> </a> </li>
                            <li class="level2 nav-3-4-15"> <a href="grid.html"> <span>Speakers</span> </a> </li>
                            <li class="level2 nav-3-4-16 last"> <a href="grid.html"> <span>Video Players</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-5 parent"> <a href="grid.html"> <span>Computer</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-3-5-17 first"> <a href="grid.html"> <span>External Hard Disks</span> </a> </li>
                            <li class="level2 nav-3-5-18"> <a href="grid.html"> <span>Pendrives</span> </a> </li>
                            <li class="level2 nav-3-5-19"> <a href="grid.html"> <span>Headphones</span> </a> </li>
                            <li class="level2 nav-3-5-20 last"> <a href="grid.html"> <span>PC Components</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-6 last parent"> <a href="grid.html"> <span>Appliances </span> </a>
                          <ul class="level1">
                            <li class="level2 nav-3-6-21 first"> <a href="grid.html"> <span>Vacuum Cleaners</span> </a> </li>
                            <li class="level2 nav-3-6-22"> <a href="grid.html"> <span>Indoor Lighting</span> </a> </li>
                            <li class="level2 nav-3-6-23"> <a href="grid.html"> <span>Kitchen Tools</span> </a> </li>
                            <li class="level2 nav-3-6-24 last"> <a href="grid.html"> <span>Water Purifiers</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-4 level-top parent"> <a href="grid.html" class="level-top"> <span>Furniture</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-4-1 first parent"> <a href="grid.html"> <span>Living Room</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-4-1-1 first"> <a href="grid.html"> <span>Racks &amp; Cabinets</span> </a> </li>
                            <li class="level2 nav-4-1-2"> <a href="grid.html"> <span>Sofas</span> </a> </li>
                            <li class="level2 nav-4-1-3"> <a href="grid.html"> <span>Chairs</span> </a> </li>
                            <li class="level2 nav-4-1-4 last"> <a href="grid.html"> <span>Tables</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-4-2 parent"> <a href="grid.html"> <span>Dining &amp; Bar</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-4-2-5 first"> <a href="grid.html"> <span>Dining Table Sets</span> </a> </li>
                            <li class="level2 nav-4-2-6"> <a href="grid.html"> <span>Serving Trolleys</span> </a> </li>
                            <li class="level2 nav-4-2-7"> <a href="grid.html"> <span>Bar Counters</span> </a> </li>
                            <li class="level2 nav-4-2-8 last"> <a href="grid.html"> <span>Dining Cabinets</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-4-3 parent"> <a href="grid.html"> <span>Bedroom</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-4-3-9 first"> <a href="grid.html"> <span>Beds</span> </a> </li>
                            <li class="level2 nav-4-3-10"> <a href="grid.html"> <span>Chest of Drawers</span> </a> </li>
                            <li class="level2 nav-4-3-11"> <a href="grid.html"> <span>Wardrobes &amp; Almirahs</span> </a> </li>
                            <li class="level2 nav-4-3-12 last"> <a href="grid.html"> <span>Nightstands</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-4-4 last parent"> <a href="grid.html"> <span>Kitchen</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-4-4-13 first"> <a href="grid.html"> <span>Kitchen Racks</span> </a> </li>
                            <li class="level2 nav-4-4-14"> <a href="grid.html"> <span>Kitchen Fittings</span> </a> </li>
                            <li class="level2 nav-4-4-15"> <a href="grid.html"> <span>Wall Units</span> </a> </li>
                            <li class="level2 nav-4-4-16 last"> <a href="grid.html"> <span>Benches &amp; Stools</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-5 level-top"> <a href="grid.html" class="level-top"> <span>Fashion</span> </a> </li>
                    <li class="level0 nav-6 level-top first parent last"> <a class="level-top" href="#"> <span>Pages</span> </a>
                      <ul class="level0">
                        <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                        <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                        <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                        <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                        <li class="level1 first"><a href="checkout.html"><span>Checkout</span></a> </li>
                        <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                        <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                        <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                        <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>
              <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
                        <li class="level1"> <a href="compare.html"> <span>Compare</span> </a> </li>
              <li class="level1"> <a href="delivery.html"> <span>Delivery</span> </a> </li>
              <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
              <li class="level1"> <a href="quick_view.html"> <span>Quick view </span> </a> </li>
              <li class="level1"> <a href="newsletter.html"> <span>Newsletter</span> </a> </li>
                        <li class="level1"><a href="blog.html"><span>Blog</span></a> </li>
                        <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                        <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        
        <!--End mobile-menu -->
        <ul id="nav" class="hidden-xs">
          <li id="nav-home" class="level0 parent drop-menu active"><a href="{{route('home')}}"><span>Trang chủ</span> </a>
            <!-- <ul class="level1" style="display: none;">
              <li class="level1 first parent"><a href="index.html"><span>Full Width Layout</span></a> </li>
              <li class="level1 parent"><a href="http://htmldemo.magikcommerce.com/ecommerce/accord_html/boxed-width/red/index.html"><span>Boxed Layout</span></a> </li>
              <li class="level1 parent"><a href="http://htmldemo.magikcommerce.com/ecommerce/accord_html/full-width/blue/index.html"><span>Blue Color</span></a> </li>
              <li class="level1 parent"><a href="http://htmldemo.magikcommerce.com/ecommerce/accord_html/full-width/aqua/index.html"><span>Aqua Color</span></a> </li>
              <li class="level1 parent"><a href="http://htmldemo.magikcommerce.com/ecommerce/accord_html/full-width/orange/index.html"><span>Orange Color</span></a> </li>
              <li class="level1 parent"><a href="index.html"><span>Red Color</span></a> </li>
              <li class="level1 parent"><a href="http://htmldemo.magikcommerce.com/ecommerce/accord_html/full-width/green/index.html"><span>Green Color</span></a> </li>
            </ul> -->
          </li>
          @guest
                <!-- <ul style="display: none;" class="level1">
                  <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                  <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                  <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                  <li class="lepvel1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                  <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                    <ul class="level2">
                      <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                      <li class="level2 nav-2-1-5 last"><a href="checkout_billing_info.html"><span>Checkout Billing Info</span></a></li>
                    </ul>
                  </li>
                  <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                  <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                  <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                  <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>
                  <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
                  <li class="level1"> <a href="compare.html"> <span>Compare</span> </a> </li>
                  <li class="level1"> <a href="delivery.html"> <span>Delivery</span> </a> </li>
                  <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
                  <li class="level1"> <a href="quick_view.html"> <span>Quick view </span> </a> </li>
                  <li class="level1"> <a href="newsletter.html"> <span>Newsletter</span> </a> </li>
                  <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                    <ul class="level2">
                      <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>
                    </ul>
                  </li>
                  <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                  <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                </ul> -->
              </li>
              <li class="level0 nav-7 level-top parent"> <a href="{{route('pb')}}" class="level-top"> <span>PB</span> </a>
                <!-- <div style="display: none; left: 0px;" class="level0-wrapper dropdown-6col">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-7-1 first parent item"> <a href="grid.html"> <span>Gents Purses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-3-15 first"> <a href="grid.html"> <span>Digital Cameras</span> </a> </li>
                            <li class="level2 nav-7-3-16"> <a href="grid.html"> <span>Camcorders</span> </a> </li>
                            <li class="level2 nav-7-3-17"> <a href="grid.html"> <span>Lenses</span> </a> </li>
                            <li class="level2 nav-7-3-18"> <a href="grid.html"> <span>Filters</span> </a> </li>
                            <li class="level2 nav-7-3-19 last"> <a href="grid.html"> <span>Tripods</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-7-3 parent item"> <a href="grid.html"> <span>Gents Purses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-3-15 first"> <a href="grid.html"> <span>Digital Cameras</span> </a> </li>
                            <li class="level2 nav-7-3-16"> <a href="grid.html"> <span>Camcorders</span> </a> </li>
                            <li class="level2 nav-7-3-17"> <a href="grid.html"> <span>Lenses</span> </a> </li>
                            <li class="level2 nav-7-3-18"> <a href="grid.html"> <span>Filters</span> </a> </li>
                            <li class="level2 nav-7-3-19 last"> <a href="grid.html"> <span>Tripods</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-7-3 parent item"> <a href="grid.html"> <span>Gents Purses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-3-15 first"> <a href="grid.html"> <span>Digital Cameras</span> </a> </li>
                            <li class="level2 nav-7-3-16"> <a href="grid.html"> <span>Camcorders</span> </a> </li>
                            <li class="level2 nav-7-3-17"> <a href="grid.html"> <span>Lenses</span> </a> </li>
                            <li class="level2 nav-7-3-18"> <a href="grid.html"> <span>Filters</span> </a> </li>
                            <li class="level2 nav-7-3-19 last"> <a href="grid.html"> <span>Tripods</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-7-4 parent item"> <a href="grid.html"> <span>Gifts</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-2-8 first"> <a href="grid.html"> <span>Headsets</span> </a> </li>
                            <li class="level2 nav-7-2-9"> <a href="grid.html"> <span>Batteries</span> </a> </li>
                            <li class="level2 nav-7-2-10"> <a href="grid.html"> <span>Screen Protectors</span> </a> </li>
                            <li class="level2 nav-7-2-11"> <a href="grid.html"> <span>Memory Cards</span> </a> </li>
                            <li class="level2 nav-7-2-14 last"> <a href="grid.html"> <span>Cases</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-7-4 last parent item"> <a href="grid.html"> <span>Accessories</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-2-8 first"> <a href="grid.html"> <span>Headsets</span> </a> </li>
                            <li class="level2 nav-7-2-9"> <a href="grid.html"> <span>Batteries</span> </a> </li>
                            <li class="level2 nav-7-2-10"> <a href="grid.html"> <span>Screen Protectors</span> </a> </li>
                            <li class="level2 nav-7-2-11"> <a href="grid.html"> <span>Memory Cards</span> </a> </li>
                            <li class="level2 nav-7-2-14 last"> <a href="grid.html"> <span>Cases</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> -->
              </li>
              <li class="level0 nav-6 level-top parent"> <a href="{{route('pg')}}" class="level-top"> <span>PG</span> </a>
                <!-- <div style="display: none; left: 0px;" class="level0-wrapper dropdown-6col">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center grid13-8 itemgrid itemgrid-4col">
                      <ul class="level0">
                        <li class="level1 nav-6-3 parent item"> <a href="grid.html"> <span>Shoes </span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-3-9 first"> <a href="grid.html"> <span>Flat Shoes</span> </a> </li>
                            <li class="level2 nav-6-3-10"> <a href="grid.html"> <span>Flat Sandals</span> </a> </li>
                            <li class="level2 nav-6-3-11"> <a href="grid.html"> <span>Boots</span> </a> </li>
                            <li class="level2 nav-6-3-11"> <a href="grid.html"> <span>Boots</span> </a> </li>
                            <li class="level2 nav-6-3-12 last"> <a href="grid.html"> <span>Heels</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-4 parent item"> <a href="grid.html"> <span>Jewelry</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-4-13 first"> <a href="grid.html"> <span>Bracelets</span> </a> </li>
                            <li class="level2 nav-6-4-14"> <a href="grid.html"> <span>Necklaces &amp; Pendants</span> </a> </li>
                            <li class="level2 nav-6-4-14"> <a href="grid.html"> <span>Necklaces</span> </a> </li>
                            <li class="level2 nav-6-4-14"> <a href="grid.html"> <span>Pendants</span> </a> </li>
                            <li class="level2 nav-6-4-15 last"> <a href="grid.html"> <span>Pins &amp; Brooches</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-5 parent item"> <a href="grid.html"> <span>Dresses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-5-16 first"> <a href="grid.html"> <span>Casual Dresses</span> </a> </li>
                            <li class="level2 nav-6-5-17"> <a href="grid.html"> <span>Evening</span> </a> </li>
                            <li class="level2 nav-6-5-18"> <a href="grid.html"> <span>Designer</span> </a> </li>
                            <li class="level2 nav-6-5-18"> <a href="grid.html"> <span>Designer</span> </a> </li>
                            <li class="level2 nav-6-5-19 last"> <a href="grid.html"> <span>Party</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-6 last parent item"> <a href="grid.html"> <span>Jackets</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-7-24 first"> <a href="grid.html"> <span>Coats</span> </a> </li>
                            <li class="level2 nav-6-7-25"> <a href="grid.html"> <span>Jackets</span> </a> </li>
                            <li class="level2 nav-6-7-26"> <a href="grid.html"> <span>Leather Jackets</span> </a> </li>
                            <li class="level2 nav-6-7-26"> <a href="grid.html"> <span>Leather Jackets</span> </a> </li>
                            <li class="level2 nav-6-7-27 last"> <a href="grid.html"> <span>Blazers</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="nav-block nav-block-right std grid12-3"> <a class="product-image" title="Stablished fact reader" href="#"> <img alt="Stablished fact reader" src="products-images/product2.jpg" width="150"></a>
                      <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div> -->
              </li>
            @else
            @if (Auth::user()->permission != 3)

                <!-- <ul style="display: none;" class="level1">
                  <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                  <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                  <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                  <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                  <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                    <ul class="level2">
                      <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                      <li class="level2 nav-2-1-5 last"><a href="checkout_billing_info.html"><span>Checkout Billing Info</span></a></li>
                    </ul>
                  </li>
                  <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                  <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                  <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                  <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>
                  <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
                  <li class="level1"> <a href="compare.html"> <span>Compare</span> </a> </li>
                  <li class="level1"> <a href="delivery.html"> <span>Delivery</span> </a> </li>
                  <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
                  <li class="level1"> <a href="quick_view.html"> <span>Quick view </span> </a> </li>
                  <li class="level1"> <a href="newsletter.html"> <span>Newsletter</span> </a> </li>
                  <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                    <ul class="level2">
                      <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>
                    </ul>
                  </li>
                  <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                  <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                </ul> -->
              </li>
              <li class="level0 nav-7 level-top parent"> <a href="{{route('pb')}}" class="level-top"> <span>PB</span> </a>
                <!-- <div style="display: none; left: 0px;" class="level0-wrapper dropdown-6col">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center">
                      <ul class="level0">
                        <li class="level1 nav-7-1 first parent item"> <a href="grid.html"> <span>Gents Purses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-3-15 first"> <a href="grid.html"> <span>Digital Cameras</span> </a> </li>
                            <li class="level2 nav-7-3-16"> <a href="grid.html"> <span>Camcorders</span> </a> </li>
                            <li class="level2 nav-7-3-17"> <a href="grid.html"> <span>Lenses</span> </a> </li>
                            <li class="level2 nav-7-3-18"> <a href="grid.html"> <span>Filters</span> </a> </li>
                            <li class="level2 nav-7-3-19 last"> <a href="grid.html"> <span>Tripods</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-7-3 parent item"> <a href="grid.html"> <span>Gents Purses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-3-15 first"> <a href="grid.html"> <span>Digital Cameras</span> </a> </li>
                            <li class="level2 nav-7-3-16"> <a href="grid.html"> <span>Camcorders</span> </a> </li>
                            <li class="level2 nav-7-3-17"> <a href="grid.html"> <span>Lenses</span> </a> </li>
                            <li class="level2 nav-7-3-18"> <a href="grid.html"> <span>Filters</span> </a> </li>
                            <li class="level2 nav-7-3-19 last"> <a href="grid.html"> <span>Tripods</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-7-3 parent item"> <a href="grid.html"> <span>Gents Purses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-3-15 first"> <a href="grid.html"> <span>Digital Cameras</span> </a> </li>
                            <li class="level2 nav-7-3-16"> <a href="grid.html"> <span>Camcorders</span> </a> </li>
                            <li class="level2 nav-7-3-17"> <a href="grid.html"> <span>Lenses</span> </a> </li>
                            <li class="level2 nav-7-3-18"> <a href="grid.html"> <span>Filters</span> </a> </li>
                            <li class="level2 nav-7-3-19 last"> <a href="grid.html"> <span>Tripods</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-7-4 parent item"> <a href="grid.html"> <span>Gifts</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-2-8 first"> <a href="grid.html"> <span>Headsets</span> </a> </li>
                            <li class="level2 nav-7-2-9"> <a href="grid.html"> <span>Batteries</span> </a> </li>
                            <li class="level2 nav-7-2-10"> <a href="grid.html"> <span>Screen Protectors</span> </a> </li>
                            <li class="level2 nav-7-2-11"> <a href="grid.html"> <span>Memory Cards</span> </a> </li>
                            <li class="level2 nav-7-2-14 last"> <a href="grid.html"> <span>Cases</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-7-4 last parent item"> <a href="grid.html"> <span>Accessories</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-7-2-8 first"> <a href="grid.html"> <span>Headsets</span> </a> </li>
                            <li class="level2 nav-7-2-9"> <a href="grid.html"> <span>Batteries</span> </a> </li>
                            <li class="level2 nav-7-2-10"> <a href="grid.html"> <span>Screen Protectors</span> </a> </li>
                            <li class="level2 nav-7-2-11"> <a href="grid.html"> <span>Memory Cards</span> </a> </li>
                            <li class="level2 nav-7-2-14 last"> <a href="grid.html"> <span>Cases</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> -->
              </li>
              <li class="level0 nav-6 level-top parent"> <a href="{{route('pg')}}" class="level-top"> <span>PG</span> </a>
                <!-- <div style="display: none; left: 0px;" class="level0-wrapper dropdown-6col">
                  <div class="level0-wrapper2">
                    <div class="nav-block nav-block-center grid13-8 itemgrid itemgrid-4col">
                      <ul class="level0">
                        <li class="level1 nav-6-3 parent item"> <a href="grid.html"> <span>Shoes </span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-3-9 first"> <a href="grid.html"> <span>Flat Shoes</span> </a> </li>
                            <li class="level2 nav-6-3-10"> <a href="grid.html"> <span>Flat Sandals</span> </a> </li>
                            <li class="level2 nav-6-3-11"> <a href="grid.html"> <span>Boots</span> </a> </li>
                            <li class="level2 nav-6-3-11"> <a href="grid.html"> <span>Boots</span> </a> </li>
                            <li class="level2 nav-6-3-12 last"> <a href="grid.html"> <span>Heels</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-4 parent item"> <a href="grid.html"> <span>Jewelry</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-4-13 first"> <a href="grid.html"> <span>Bracelets</span> </a> </li>
                            <li class="level2 nav-6-4-14"> <a href="grid.html"> <span>Necklaces &amp; Pendants</span> </a> </li>
                            <li class="level2 nav-6-4-14"> <a href="grid.html"> <span>Necklaces</span> </a> </li>
                            <li class="level2 nav-6-4-14"> <a href="grid.html"> <span>Pendants</span> </a> </li>
                            <li class="level2 nav-6-4-15 last"> <a href="grid.html"> <span>Pins &amp; Brooches</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-5 parent item"> <a href="grid.html"> <span>Dresses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-5-16 first"> <a href="grid.html"> <span>Casual Dresses</span> </a> </li>
                            <li class="level2 nav-6-5-17"> <a href="grid.html"> <span>Evening</span> </a> </li>
                            <li class="level2 nav-6-5-18"> <a href="grid.html"> <span>Designer</span> </a> </li>
                            <li class="level2 nav-6-5-18"> <a href="grid.html"> <span>Designer</span> </a> </li>
                            <li class="level2 nav-6-5-19 last"> <a href="grid.html"> <span>Party</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-6-6 last parent item"> <a href="grid.html"> <span>Jackets</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-6-7-24 first"> <a href="grid.html"> <span>Coats</span> </a> </li>
                            <li class="level2 nav-6-7-25"> <a href="grid.html"> <span>Jackets</span> </a> </li>
                            <li class="level2 nav-6-7-26"> <a href="grid.html"> <span>Leather Jackets</span> </a> </li>
                            <li class="level2 nav-6-7-26"> <a href="grid.html"> <span>Leather Jackets</span> </a> </li>
                            <li class="level2 nav-6-7-27 last"> <a href="grid.html"> <span>Blazers</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="nav-block nav-block-right std grid12-3"> <a class="product-image" title="Stablished fact reader" href="#"> <img alt="Stablished fact reader" src="products-images/product2.jpg" width="150"></a>
                      <div class="item-title"> <a href="#" title="Sample Product"> Sample Product </a> </div>
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div> -->
              </li>
            @endif
          @endguest
          
          <!-- <li class="nav-custom-link level0 level-top parent"> <a class="level-top" href="#"><span>Custom</span></a>
            <div style="display: none; left: 0px;" class="level0-wrapper">
              <div class="header-nav-dropdown-wrapper clearer">
                <div class="grid12-5">
                  <h4 class="heading">HTML5 + CSS3</h4>
                  <div class="ccs3-html5-box"><em class="icon-html5">&nbsp;</em> <em class="icon-css3">&nbsp;</em></div>
                  <p>Our designed to deliver almost everything you want to do online without requiring additional plugins.CSS3 has been split into "modules".</p>
                </div>
                <div class="grid12-5">
                  <h4 class="heading">Responsive Design</h4>
                  <a href="#//">
                  <div class="icon-custom-reponsive"></div>
                  </a>
                  <p>Responsive design is a Web design to provide an optimal navigation with a minimum of resizing, and scrolling across a wide range of devices.</p>
                </div>
                <div class="grid12-5">
                  <h4 class="heading">Google Fonts</h4>
                  <a href="#//">
                  <div class="icon-custom-google-font"></div>
                  </a>
                  <p>Our font delivery service is built upon a reliable, global network of servers. Our flexible solution provides multiple implementation options.</p>
                </div>
                <div class="grid12-5">
                  <h4 class="heading">Smart Product Grid</h4>
                  <a href="#//">
                  <div class="icon-custom-grid"></div>
                  </a>
                  <p>Smart Product Grid is uses maximum available width of the screen to display content. It can be displayed on any screen or any devices.</p>
                </div>
                <br>
              </div>
            </div>
          </li> -->
        </ul>
        <!-- Search-col -->
        <div class="search-box">
          <form action="http://htmldemo.magikcommerce.com/ecommerce/accord_html/full-width/red/cat" method="POST" id="search_mini_form" name="Categories">
            <input type="text" placeholder="Search entire store here..." value="Search" maxlength="70" name="search" id="search">
            <button  class="btn btn-default  search-btn-bg"> <span class="glyphicon glyphicon-search"></span>&nbsp;</button>
          </form>
        </div>
        <!-- End Search-col --> 
      </div>
    </div>
  </nav>
  <!-- end nav --> 

@yield('content')
  @yield('footer')