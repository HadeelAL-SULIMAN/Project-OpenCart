<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cart Page/open cart</title>
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/style-en.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/cart.css')}}" rel="stylesheet">
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
                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            <?php if($customer_id != NULL){?>
                                <li><a href="{{URL::to('/customer_logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                            <?php  }else{?>
                                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
                            <?php } 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!----End upper bar-->
        <!----Start prodcut--->
        <div class="container" id="first">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image"></td>
                            <td class="description">Product</td>
                            <td class="price">Price</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($manage_published_category as $v_contents) {?>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="{{URL::to($v_contents->options->image)}}" height="80px" width="80px" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{$v_contents->name}}</a></h4>
                                
                            </td>
                            <td class="cart_price">
                                <p>{{$v_contents->price}}</p>
                            </td>
                            <td class="cart_delete">

                                <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_contents->rowId)}}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        
                    </tbody>

                </table>
                <?php $customer_id=Session::get('customer_id'); ?>
                       <?php if($customer_id != NULL){?
                            <a class="bun"  href="{{URL::to('/checkout')}}"><span class="hidden-xs hidden-sm hidden-md">Procced to Check Out</span></a>
                        <?php  }else{?>
                             <a class="bun" href="{{URL::to('/login-check')}}"><span class="hidden-xs hidden-sm hidden-md">Procced to Check Out</span></a>
                        <?php } ?>
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
                                <li><a href="{{URL::to('/admin')}}">Contact us</a></li>
                                <li><a href="{{URL::to('/admin')}}">Terms of service </a></li>
                                <li><a href="{{URL::to('/'admin)}}">Pravicy Policy</a></li>
                                <li><a href="{{URL::to('/admin')}}">Help/FAQ</a></li>
                                <li><a href="{{URL::to('/admin')}}">Customer support</a></li>

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
