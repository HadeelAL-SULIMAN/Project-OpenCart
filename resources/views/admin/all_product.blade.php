<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Product/open cart</title>
        <!-- Styles -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/style-en.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/dashboard.css')}}" rel="stylesheet">

    </head>
    <body>
        <!---Start upper bar-->
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{URL::to('/')}}"><img src="{{URL::to('frontend/images/opencart-logo-white.png')}}" alt="" /></a>
                    </div>
                    <div class="col-sm-6">
                        <div class="shop-menu">
                             <ul class="nav navbar-nav">
                                <!-- start: User Dropdown -->
                                <li class="name">
                                     <i class="fa fa-user"></i> 
                                    {{ Session::get('admin_name')}}
                                    <span class="caret"></span>
                                </li>  
                                <li><a href="{{URL::to('/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
                                <!-- end: User Dropdown -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!----End upper bar-->
        <!----Start prodcut--->
        <div class="container-fluid-full">
            <div class="row">
                <div class="col-lg-2" id="dash">
                    <!--------->
                    <li id="menu-catalog">
                        <ul id="menu">
                            <li id="menu-catalog">
                                <a href="{{URL::to('/dashborad')}}"><i class="fa fa-user-friends"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="#collapse1" data-toggle="collapse" class="parent collapsed"><i class="fa fa-tags fw"></i> Products</a> 
                                    <ul id="collapse1" class="collapse">
                                        <li><a href="{{URL::to('/add-product')}}">Add Products</a> </li>
                                        <li><a href="{{URL::to('/all-product')}}">Products</a> </li>
                                    </ul>
                            </li>
                            <li>
                                <a href="{{URL::to('/dashborad')}}"><i class="fa fa-user-friends"></i>Orders  </a>
                            </li>
                            <li>
                                <a href"{{URL::to('/dashborad')}}"><i class="fa fa-user-friends"></i>users  </a>
                            </li>
                        </ul>
                    <!------->
                </div>
                <div class="col-lg-10" id="contant">
                    <div class="row">
                        @foreach( $all_product_info as $v_product)
                        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="{{URL::to('/view-product/'.$v_product->id)}}">
                                        <img src="{{ $v_product->slug}}" alt="MacBook" title="MacBook" class="img-responsive">
                                    </a>
                                </div>
                                <div class="caption">
                                    <h4>
                                    <a href="{{URL::to('/view-product/'.$v_product->id)}}">{{ $v_product->product_name }}</a>
                                    </h4>
                                    <p>
                                       {{ $v_product->description }}
                                    </p>
                                    <h5 class="price">
                                           {{ $v_product->price }}
                                    </h5>
                                </div> 
                            </div>
                        <div class="addcart">
                                <a href="{{URL::to('/view-product/'.$v_product->id)}}" class="bun" type="button" ><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
        <!---End prodcut-->

        <!---Start footer-->
        <div class="footer">
            <div class="container">
                <div class="footer-copyright text-center py-3">
                    <div class="shop-menu">
                             <ul>
                                <li><a href="{{URL::to('/show-cart')}}">Contact us</a></li>
                                <li><a href="{{URL::to('/customer_logout')}}">Terms of service </a></li>
                                <li><a href="{{URL::to('/login-check')}}">Pravicy Policy</a></li>
                                <li><a href="{{URL::to('/login-check')}}">Help/FAQ</a></li>
                                <li><a href="{{URL::to('/login-check')}}">Customer support</a></li>

                            </ul>
                        </div>
                      
                </div>
            </div>
        </div>

        <!---End footer--->
        <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    </body>
</html>
