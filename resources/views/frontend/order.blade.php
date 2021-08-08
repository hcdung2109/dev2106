<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/img/favicon.png">

    <!-- FONTS
    ============================================ -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/animate.css">

    <!-- FANCYBOX CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/jquery.fancybox.css">

    <!-- BXSLIDER CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/jquery.bxslider.css">

    <!-- MEANMENU CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/meanmenu.min.css">

    <!-- JQUERY-UI-SLIDER CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/jquery-ui-slider.css">

    <!-- NIVO SLIDER CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/nivo-slider.css">

    <!-- OWL CAROUSEL CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/owl.carousel.css">

    <!-- OWL CAROUSEL THEME CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/owl.theme.css">

    <!-- BOOTSTRAP CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">

    <!-- FONT AWESOME CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css">

    <!-- NORMALIZE CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/normalize.css">

    <!-- MAIN CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/main.css">

    <!-- STYLE CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/style.css">

    <!-- RESPONSIVE CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/responsive.css">

    <!-- IE CSS
    ============================================ -->
    <link rel="stylesheet" href="/frontend/css/ie.css">

    <!-- MODERNIZR JS
    ============================================ -->
    <script src="/frontend/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/frontend/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- HEADER-TOP START -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- HEADER-LEFT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-left-menu">
                    <div class="welcome-info">
                        Welcome <span>BootExperts</span>
                    </div>
                    <div class="currenty-converter">
                        <form method="post" action="#" id="currency-set">
                            <div class="current-currency">
                                <span class="cur-label">Currency : </span><strong>USD</strong>
                            </div>
                            <ul class="currency-list currency-toogle">
                                <li>
                                    <a title="Dollar (USD)" href="/frontend/#">Dollar (USD)</a>
                                </li>
                                <li>
                                    <a title="Euro (EUR)" href="/frontend/#">Euro (EUR)</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="selected-language">
                        <div class="current-lang">
                            <span class="current-lang-label">Language : </span><strong>English</strong>
                        </div>
                        <ul class="languages-choose language-toogle">
                            <li>
                                <a href="/frontend/#" title="English">
                                    <span>English</span>
                                </a>
                            </li>
                            <li>
                                <a href="/frontend/#" title="Français (French)">
                                    <span>Français</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- HEADER-LEFT-MENU END -->
            <!-- HEADER-RIGHT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-right-menu">
                    <nav>
                        <ul class="list-inline">
                            <li><a href="/frontend/checkout.html">Check Out</a></li>
                            <li><a href="/frontend/wishlist.html">Wishlist</a></li>
                            <li><a href="/frontend/my-account.html">My Account</a></li>
                            <li><a href="/frontend/cart.html">My Cart</a></li>
                            <li><a href="/frontend/registration.html">Sign in</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- HEADER-RIGHT-MENU END -->
        </div>
    </div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<section class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- LOGO START -->
                <div class="logo">
                    <a href="/frontend/index.html"><img src="/frontend/img/logo.png" alt="bstore logo" /></a>
                </div>
                <!-- LOGO END -->
                <!-- HEADER-RIGHT-CALLUS START -->
                <div class="header-right-callus">
                    <h3>call us free</h3>
                    <span>0123-456-789</span>
                </div>
                <!-- HEADER-RIGHT-CALLUS END -->
                <!-- CATEGORYS-PRODUCT-SEARCH START -->
                <div class="categorys-product-search">
                    <form action="#" method="get" class="search-form-cat">
                        <div class="search-product form-group">
                            <select name="catsearch" class="cat-search">
                                <option value="">Categories</option>
                                <option value="2">--Women</option>
                                <option value="3">---T-Shirts</option>
                                <option value="4">--Men</option>
                                <option value="5">----Shoose</option>
                                <option value="6">--Dress</option>
                                <option value="7">----Tops</option>
                                <option value="8">---Casual</option>
                                <option value="9">--Evening</option>
                                <option value="10">--Summer</option>
                                <option value="11">---sports</option>
                                <option value="12">--day</option>
                                <option value="13">--evening</option>
                                <option value="14">-----Blouse</option>
                                <option value="15">--handba</option>
                                <option value="16">--phone</option>
                                <option value="17">-house</option>
                                <option value="18">--Beauty</option>
                                <option value="19">--health</option>
                                <option value="20">---clothing</option>
                                <option value="21">---kids</option>
                                <option value="22">--Dresse</option>
                                <option value="22">---Casual</option>
                                <option value="23">--day</option>
                                <option value="24">--evening</option>
                                <option value="24">---Blouse</option>
                                <option value="25">-handb</option>
                                <option value="66">--phone</option>
                                <option value="27">---house</option>
                            </select>
                            <input type="text" class="form-control search-form" name="s" placeholder="Enter your search key ... " />
                            <button class="search-button" value="Search" name="s" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- CATEGORYS-PRODUCT-SEARCH END -->
            </div>
        </div>
    </div>
</section>
<!-- HEADER-MIDDLE END -->
<!-- MAIN-MENU-AREA START -->
<header class="main-menu-area">
    <div class="container">
        <div class="row">
            <!-- SHOPPING-CART START -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
                <div class="shopping-cart-out pull-right">
                    <div class="shopping-cart">
                        <a class="shop-link" href="/frontend/cart.html" title="View my shopping cart">
                            <i class="fa fa-shopping-cart cart-icon"></i>
                            <b>My Cart</b>
                            <span class="ajax-cart-quantity">2</span>
                        </a>
                        <div class="shipping-cart-overly">
                            <div class="shipping-item">
                                <span class="cross-icon"><i class="fa fa-times-circle"></i></span>
                                <div class="shipping-item-image">
                                    <a href="/frontend/#"><img src="/frontend/img/shopping-image.jpg" alt="shopping image" /></a>
                                </div>
                                <div class="shipping-item-text">
                                    <span>2 <span class="pro-quan-x">x</span> <a href="/frontend/#" class="pro-cat">Watch</a></span>
                                    <span class="pro-quality"><a href="/frontend/#">S,Black</a></span>
                                    <p>$22.95</p>
                                </div>
                            </div>
                            <div class="shipping-item">
                                <span class="cross-icon"><i class="fa fa-times-circle"></i></span>
                                <div class="shipping-item-image">
                                    <a href="/frontend/#"><img src="/frontend/img/shopping-image2.jpg" alt="shopping image" /></a>
                                </div>
                                <div class="shipping-item-text">
                                    <span>2 <span class="pro-quan-x">x</span> <a href="/frontend/#" class="pro-cat">Women Bag</a></span>
                                    <span class="pro-quality"><a href="/frontend/#">S,Gary</a></span>
                                    <p>$19.95</p>
                                </div>
                            </div>
                            <div class="shipping-total-bill">
                                <div class="cart-prices">
                                    <span class="shipping-cost">$2.00</span>
                                    <span>Shipping</span>
                                </div>
                                <div class="total-shipping-prices">
                                    <span class="shipping-total">$24.95</span>
                                    <span>Total</span>
                                </div>
                            </div>
                            <div class="shipping-checkout-btn">
                                <a href="/frontend/checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOPPING-CART END -->
            <!-- MAINMENU START -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
                <div class="mainmenu">
                    <nav>
                        <ul class="list-inline mega-menu">
                            <li><a href="/frontend/index.html">Home</a>
                                <!-- DROPDOWN MENU START -->
                                <div class="home-var-menu">
                                    <ul class="home-menu">
                                        <li><a href="/frontend/index.html">Home variation 1</a></li>
                                        <li><a href="/frontend/index-2.html">Home variation 2</a></li>
                                    </ul>
                                </div>
                                <!-- DROPDOWN MENU END -->
                            </li>
                            <li>
                                <a href="/frontend/shop-gird.html">Women</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">TOPS</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">Prodect</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Watch</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li>
                                <a href="/frontend/shop-gird.html">Men</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li>
                                <a href="/frontend/shop-gird.html">clothing</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">TOPS</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">new product</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">Prodect</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Watch</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">best sale month</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li>
                                <a href="/frontend/shop-gird.html">Tops</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-4">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">TOPS</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-4">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">best sale month</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-4">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">top rate product</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">Latest product</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">popular product</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li>
                                <a href="/frontend/shop-gird.html">T-shirts</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">TOPS</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">new product</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">Prodect</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Watch</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="/frontend/shop-gird.html">best sale month</a>
                                            <ul>
                                                <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                                                <li><a href="/frontend/shop-gird.html">clothing</a></li>
                                                <li><a href="/frontend/shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li><a href="/frontend/#">Delivery</a></li>
                            <li><a href="/frontend/about-us.html">About us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- MAINMENU END -->
        </div>
        <div class="row">
            <!-- MOBILE MENU START -->
            <div class="col-sm-12 mobile-menu-area">
                <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                    <span class="mobile-menu-title">MENU</span>
                    <nav>
                        <ul>
                            <li><a href="/frontend/index.html">Home</a>
                                <ul>
                                    <li><a href="/frontend/index.html">Home variation 1</a></li>
                                    <li><a href="/frontend/index-2.html">Home variation 2</a></li>
                                </ul>
                            </li>
                            <li><a href="/frontend/shop-gird.html">Women</a>
                                <ul>
                                    <li><a href="/frontend/shop-gird.html">Tops</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">T-Shirts</a></li>
                                            <li><a href="/frontend/shop-gird.html">Blouses</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/frontend/shop-gird.html">Dresses</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">Casual Dresses</a></li>
                                            <li><a href="/frontend/shop-gird.html">Summer Dresses</a></li>
                                            <li><a href="/frontend/shop-gird.html">Evening Dresses</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="/frontend/shop-gird.html">men</a>
                                <ul>
                                    <li><a href="/frontend/shop-gird.html">Tops</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">Sports</a></li>
                                            <li><a href="/frontend/shop-gird.html">Day</a></li>
                                            <li><a href="/frontend/shop-gird.html">Evening</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/frontend/shop-gird.html">Blouses</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">Handbag</a></li>
                                            <li><a href="/frontend/shop-gird.html">Headphone</a></li>
                                            <li><a href="/frontend/shop-gird.html">Houseware</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/frontend/shop-gird.html">Accessories</a>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html">Houseware</a></li>
                                            <li><a href="/frontend/shop-gird.html">Home</a></li>
                                            <li><a href="/frontend/shop-gird.html">Health & Beauty</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/frontend/shop-gird.html">clothing</a></li>
                            <li><a href="/frontend/shop-gird.html">tops</a></li>
                            <li><a href="/frontend/shop-gird.html">T-shirts</a></li>
                            <li><a href="/frontend/#">Delivery</a></li>
                            <li><a href="/frontend/about-us.html">About us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- MOBILE MENU END -->
        </div>
    </div>
</header>
<!-- MAIN-MENU-AREA END -->
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="/frontend/index.html">HOMe</a>
                    <span><i class="fa fa-caret-right	"></i></span>
                    <span>Your shopping cart</span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- SHOPPING-CART SUMMARY START -->
                <h2 class="page-title">Shopping-cart summary <span class="shop-pro-item">Your shopping cart contains: 2 products</span></h2>
                <!-- SHOPPING-CART SUMMARY END -->
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- SHOPING-CART-MENU START -->
                <div class="shoping-cart-menu">
                    <ul class="step">
                        <li class="step-current first">
                            <span>01. Summary</span>
                        </li>
                        <li class="step-todo second">
                            <span>02. Sign in</span>
                        </li>
                        <li class="step-todo third">
                            <span>03. Address</span>
                        </li>
                        <li class="step-todo four">
                            <span>04. Shipping</span>
                        </li>
                        <li class="step-todo last" id="step_end">
                            <span>05. Payment</span>
                        </li>
                    </ul>
                </div>
                <!-- SHOPING-CART-MENU END -->
                <!-- CART TABLE_BLOCK START -->
                <div class="table-responsive">
                    <!-- TABLE START -->
                    <table class="table table-bordered" id="cart-summary">
                        <!-- TABLE HEADER START -->
                        <thead>
                        <tr>
                            <th class="cart-product">Product</th>
                            <th class="cart-description">Description</th>
                            <th class="cart-avail text-center">Availability</th>
                            <th class="cart-unit text-right">Unit price</th>
                            <th class="cart_quantity text-center">Qty</th>
                            <th class="cart-delete">&nbsp;</th>
                            <th class="cart-total text-right">Total</th>
                        </tr>
                        </thead>
                        <!-- TABLE HEADER END -->
                        <!-- TABLE BODY START -->
                        <tbody>
                        <!-- SINGLE CART_ITEM START -->
                        <tr>
                            <td class="cart-product">
                                <a href="/frontend/#"><img alt="Blouse" src="/frontend/img/product/cart-image1.jpg"></a>
                            </td>
                            <td class="cart-description">
                                <p class="product-name"><a href="/frontend/#">Faded Short Sleeves T-shirt</a></p>
                                <small>SKU : demo_1</small>
                                <small><a href="/frontend/#">Size : S, Color : Orange</a></small>
                            </td>
                            <td class="cart-avail"><span class="label label-success">In stock</span></td>
                            <td class="cart-unit">
                                <ul class="price text-right">
                                    <li class="price">$16.51</li>
                                </ul>
                            </td>
                            <td class="cart_quantity text-center">
                                <div class="cart-plus-minus-button">
                                    <input class="cart-plus-minus" type="text" name="qtybutton" value="0">
                                </div>
                            </td>
                            <td class="cart-delete text-center">
											<span>
												<a href="/frontend/#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
											</span>
                            </td>
                            <td class="cart-total">
                                <span class="price">$16.51</span>
                            </td>
                        </tr>
                        <!-- SINGLE CART_ITEM END -->
                        <!-- SINGLE CART_ITEM START -->
                        <tr>
                            <td class="cart-product">
                                <a href="/frontend/#"><img alt="Blouse" src="/frontend/img/product/cart-image2.jpg"></a>
                            </td>
                            <td class="cart-description">
                                <p class="product-name"><a href="/frontend/#">Blouse</a></p>
                                <small>SKU : demo_2</small>
                                <small><a href="/frontend/#">Size : S, Color : Black</a></small>
                            </td>
                            <td class="cart-avail"><span class="label label-success">In stock</span></td>
                            <td class="cart-unit">
                                <ul class="price text-right">
                                    <li class="price special-price">$24.00</li>
                                    <li class="price-percent-reduction small">&nbsp;-3%&nbsp;</li>
                                    <li class="old-price">$27.00</li>
                                </ul>
                            </td>
                            <td class="cart_quantity text-center">
                                <div class="cart-plus-minus-button">
                                    <input class="cart-plus-minus" type="text" name="qtybutton" value="0">
                                </div>
                            </td>
                            <td class="cart-delete text-center">
                                <a href="/frontend/#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                            </td>
                            <td class="cart-total">
                                <span class="price">$22.95</span>
                            </td>
                        </tr>
                        <!-- SINGLE CART_ITEM END -->
                        <!-- SINGLE CART_ITEM START -->
                        <tr>
                            <td class="cart-product">
                                <a href="/frontend/#"><img alt="Blouse" src="/frontend/img/product/cart-image3.jpg"></a>
                            </td>
                            <td class="cart-description">
                                <p class="product-name"><a href="/frontend/#">Printed Summer Dress</a></p>
                                <small>SKU : demo_5</small>
                                <small><a href="/frontend/#">Size : M, Color : Blue</a></small>
                            </td>
                            <td class="cart-avail"><span class="label label-success">In stock</span></td>
                            <td class="cart-unit">
                                <ul class="price text-right">
                                    <li class="price special-price">$30.45</li>
                                    <li class="price-percent-reduction small">&nbsp;-7.05%&nbsp;</li>
                                    <li class="old-price">$37.50</li>
                                </ul>
                            </td>
                            <td class="cart_quantity text-center">
                                <div class="cart-plus-minus-button">
                                    <input class="cart-plus-minus" type="text" name="qtybutton" value="0">
                                </div>
                            </td>
                            <td class="cart-delete text-center">
                                <a href="/frontend/#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                            </td>
                            <td class="cart-total">
                                <span class="price">$30.45</span>
                            </td>
                        </tr>
                        <!-- SINGLE CART_ITEM END -->
                        </tbody>
                        <!-- TABLE BODY END -->
                        <!-- TABLE FOOTER START -->
                        <tfoot>
                        <tr class="cart-total-price">
                            <td class="cart_voucher" colspan="3" rowspan="4"></td>
                            <td class="text-right" colspan="3">Total products (tax excl.)</td>
                            <td id="total_product" class="price" colspan="1">$76.46</td>
                        </tr>
                        <tr>
                            <td class="text-right" colspan="3">Total shipping</td>
                            <td id="total_shipping" class="price" colspan="1">$5.00</td>
                        </tr>
                        <tr>
                            <td class="text-right" colspan="3">Total vouchers (tax excl.)</td>
                            <td class="price" colspan="1">$0.00</td>
                        </tr>
                        <tr>
                            <td class="total-price-container text-right" colspan="3">
                                <span>Total</span>
                            </td>
                            <td id="total-price-container" class="price" colspan="1">
                                <span id="total-price">$76.46</span>
                            </td>
                        </tr>
                        </tfoot>
                        <!-- TABLE FOOTER END -->
                    </table>
                    <!-- TABLE END -->
                </div>
                <!-- CART TABLE_BLOCK END -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="first_item primari-box mycartaddress-info">
                    <!-- SINGLE ADDRESS START -->
                    <ul class="address">
                        <li>
                            <h3 class="page-subheading box-subheading">
                                Delivery address (BootExperts Office)
                            </h3>
                        </li>
                        <li><span class="address_name">BootExperts</span></li>
                        <li><span class="address_company">Web development Company</span></li>
                        <li><span class="address_address1">Bonossri</span></li>
                        <li><span class="address_address2">D-Block</span></li>
                        <li><span class="">Rampura</span></li>
                        <li><span class="">Dhaka</span></li>
                        <li><span class="address_phone">+880 1735161598</span></li>
                        <li><span class="address_phone_mobile">+880 1975161598</span></li>
                    </ul>
                    <!-- SINGLE ADDRESS END -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="second_item primari-box mycartaddress-info">
                    <!-- SINGLE ADDRESS START -->
                    <ul class="address">
                        <li>
                            <h3 class="page-subheading box-subheading">
                                Invoice address (BootExperts Home)
                            </h3>
                        </li>
                        <li><span class="address_name">BootExperts</span></li>
                        <li><span class="address_company">Web development Company</span></li>
                        <li><span class="address_address1">Dhaka</span></li>
                        <li><span class="address_address2">Bonossri</span></li>
                        <li><span class="">Dhaka-1205</span></li>
                        <li><span class="">Rampura</span></li>
                        <li><span class="address_phone">+880 1735161598</span></li>
                        <li><span class="address_phone_mobile">+880 1975161598</span></li>
                    </ul>
                    <!-- SINGLE ADDRESS END -->
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- RETURNE-CONTINUE-SHOP START -->
                <div class="returne-continue-shop">
                    <a href="/frontend/index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
                    <a href="/frontend/checkout-signin.html" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
                </div>
                <!-- RETURNE-CONTINUE-SHOP END -->
            </div>
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
<!-- BRAND-CLIENT-AREA START -->
<section class="brand-client-area">
    <div class="container">
        <div class="row">
            <!-- BRAND-CLIENT-ROW START -->
            <div class="brand-client-row">
                <div class="center-title-area">
                    <h2 class="center-title">BRAND & CLIENTS</h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- CLIENT-CAROUSEL START -->
                        <div class="client-carousel">
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/1.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/2.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/3.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/4.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/5.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/1.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/3.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/2.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/3.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/4.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/5.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/1.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/3.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/4.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                            <!-- CLIENT-SINGLE START -->
                            <div class="item">
                                <div class="single-client">
                                    <a href="/frontend/#">
                                        <img src="/frontend/img/brand/5.png" alt="brand-client" />
                                    </a>
                                </div>
                            </div>
                            <!-- CLIENT-SINGLE END -->
                        </div>
                        <!-- CLIENT-CAROUSEL END -->
                    </div>
                </div>
            </div>
            <!-- BRAND-CLIENT-ROW END -->
        </div>
    </div>
</section>
<!-- BRAND-CLIENT-AREA END -->
<!-- COMPANY-FACALITY START -->
<section class="company-facality">
    <div class="container">
        <div class="row">
            <div class="company-facality-row">
                <!-- SINGLE-FACALITY START -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-facality">
                        <div class="facality-icon">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="facality-text">
                            <h3 class="facality-heading-text">FREE SHIPPING</h3>
                            <span>on order over $100</span>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-FACALITY END -->
                <!-- SINGLE-FACALITY START -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-facality">
                        <div class="facality-icon">
                            <i class="fa fa-umbrella"></i>
                        </div>
                        <div class="facality-text">
                            <h3 class="facality-heading-text">24/7 SUPPORT</h3>
                            <span>online consultations</span>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-FACALITY END -->
                <!-- SINGLE-FACALITY START -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-facality">
                        <div class="facality-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="facality-text">
                            <h3 class="facality-heading-text">DAILY UPDATES</h3>
                            <span>Check out store for latest</span>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-FACALITY END -->
                <!-- SINGLE-FACALITY START -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-facality">
                        <div class="facality-icon">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <div class="facality-text">
                            <h3 class="facality-heading-text">30-DAY RETURNS</h3>
                            <span>moneyback guarantee</span>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-FACALITY END -->
            </div>
        </div>
    </div>
</section>
<!-- COMPANY-FACALITY END -->
<!-- FOOTER-TOP-AREA START -->
<section class="footer-top-area">
    <div class="container">
        <div class="footer-top-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <!-- FOOTER-TOP-LEFT START -->
                    <div class="footer-top-left">
                        <!-- NEWSLETTER-AREA START -->
                        <div class="newsletter-area">
                            <h2>Newsletter</h2>
                            <p>Subscribe to our mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                            <form action="#">
                                <div class="form-group newsletter-form-group">
                                    <input type="text" class="form-control newsletter-form" placeholder="Enter your e-mail">
                                    <input type="submit" class="newsletter-btn" name="submit" value="Subscribe" />
                                </div>
                            </form>
                        </div>
                        <!-- NEWSLETTER-AREA END -->
                        <!-- ABOUT-US-AREA START -->
                        <div class="about-us-area">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                        <!-- ABOUT-US-AREA END -->
                        <!-- FLLOW-US-AREA START -->
                        <div class="fllow-us-area">
                            <h2>Follow us</h2>
                            <ul class="flow-us-link">
                                <li><a href="/frontend/#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="/frontend/#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="/frontend/#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="/frontend/#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <!-- FLLOW-US-AREA END -->
                    </div>
                    <!-- FOOTER-TOP-LEFT END -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <!-- FOOTER-TOP-RIGHT-1 START -->
                    <div class="footer-top-right-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-sm">
                                <!-- STATICBLOCK START -->
                                <div class="staticblock">
                                    <h2>static block</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s<br />when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                                <!-- STATICBLOCK END -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <!-- STORE-INFORMATION START -->
                                <div class="Store-Information">
                                    <h2>Store Information</h2>
                                    <ul>
                                        <li>
                                            <div class="info-lefticon">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="info-text">
                                                <p>My Company, 42 avenue des Champs Elysées 75000 Paris France </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-lefticon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="info-text call-lh">
                                                <p>Call us now : 0123-456-789</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-lefticon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="info-text">
                                                <p>Email : <a href="/frontend/mailto:sales@yourcompany.com"><i class="fa fa-angle-double-right"></i> sales@yourcompany.com</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- STORE-INFORMATION END -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <!-- GOOGLE-MAP-AREA START -->
                                <div class="google-map-area">
                                    <div class="google-map">
                                        <div id="googleMap" style="width:100%;height:150px;"></div>
                                    </div>
                                </div>
                                <!-- GOOGLE-MAP-AREA END -->
                            </div>
                        </div>
                    </div>
                    <!-- FOOTER-TOP-RIGHT-1 END -->
                    <div class="footer-top-right-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <!-- FOTTER-MENU-WIDGET START -->
                                <div class="fotter-menu-widget">
                                    <div class="single-f-widget">
                                        <h2>Categories</h2>
                                        <ul>
                                            <li><a href="/frontend/shop-gird.html"><i class="fa fa-angle-double-right"></i>Women </a></li>
                                            <li><a href="/frontend/shop-gird.html"><i class="fa fa-angle-double-right"></i>Men</a></li>
                                            <li><a href="/frontend/shop-gird.html"><i class="fa fa-angle-double-right"></i>clothing</a></li>
                                            <li><a href="/frontend/shop-gird.html"><i class="fa fa-angle-double-right"></i>kids</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- FOTTER-MENU-WIDGET END -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <!-- FOTTER-MENU-WIDGET START -->
                                <div class="fotter-menu-widget">
                                    <div class="single-f-widget">
                                        <h2>Information</h2>
                                        <ul>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>Specials</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>New products</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>Best sellers</a></li>
                                            <li><a href="/frontend/contact-us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- FOTTER-MENU-WIDGET END -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <!-- FOTTER-MENU-WIDGET START -->
                                <div class="fotter-menu-widget">
                                    <div class="single-f-widget">
                                        <h2>My account</h2>
                                        <ul>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>My orders</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>My credit slips</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>My addresses</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>My personal info</a></li>
                                            <li><a href="/frontend/#"><i class="fa fa-angle-double-right"></i>Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- FOTTER-MENU-WIDGET END -->
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!-- PAYMENT-METHOD START -->
                                <div class="payment-method">
                                    <img class="img-responsive pull-right" src="/frontend/img/payment.png" alt="payment-method" />
                                </div>
                                <!-- PAYMENT-METHOD END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER-TOP-AREA END -->
<!-- COPYRIGHT-AREA START -->
<footer class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="copy-right">
                    <address>Copyright © 2015 <a href="/frontend/http://bootexperts.com/">BootExperts</a> All Rights Reserved</address>
                </div>
                <div class="scroll-to-top">
                    <a href="/frontend/#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- COPYRIGHT-AREA END -->
<!-- JS
===============================================-->
<!-- jquery js -->
<script src="/frontend/js/vendor/jquery-1.11.3.min.js"></script>

<!-- fancybox js -->
<script src="/frontend/js/jquery.fancybox.js"></script>

<!-- bxslider js -->
<script src="/frontend/js/jquery.bxslider.min.js"></script>

<!-- meanmenu js -->
<script src="/frontend/js/jquery.meanmenu.js"></script>

<!-- owl carousel js -->
<script src="/frontend/js/owl.carousel.min.js"></script>

<!-- nivo slider js -->
<script src="/frontend/js/jquery.nivo.slider.js"></script>

<!-- jqueryui js -->
<script src="/frontend/js/jqueryui.js"></script>

<!-- bootstrap js -->
<script src="/frontend/js/bootstrap.min.js"></script>

<!-- wow js -->
<script src="/frontend/js/wow.js"></script>
<script>
    new WOW().init();
</script>

<!-- Google Map js -->
<script src="/frontend/https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(35.149868, -90.046678)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- main js -->
<script src="/frontend/js/main.js"></script>
</body>

</html>
