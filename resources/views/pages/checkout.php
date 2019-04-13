<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>View Product/open cart</title>
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/style-en.css')}}" rel="stylesheet">
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
                            if($customer_id != NULL){?>
                                <li><a href="{{URL::to('/customer_logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                            <?php  }else{?>
                                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
                            <?php } ?>
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
                <div class="col-lg-10" id="contant">
                    <div class="row">
                        <div class="add-product-layout col-lg-9 col-sm-6 col-xs-12">
                            <p class="alert-success">
                                <?php
                                    $message=Session::get('message');
                                    if($message)
                                    {
                                        echo $message;
                                        Session::put('message',null);
                                    }
                                ?>
                            </p>
                            <form class="form-horizontal" action="{{ url('/save-product') }}" method="post" 
                            enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Product Name" class="input-xlarge" name="product_name" required="">
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <select id="selectError3" name="category"> 
                                            <option>Category</option> 
                                            <option value="Man">Man</option>
                                            <option value="Woman">Woman</option>    
                                            <option value="Child">Child</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Product description" class="input-xlarge" name="description" required="">
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Product Price" class="input-xlarge" name="price" required="">
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <p class="image-xlargel">Product image</p>
                                    </div>
                                    
                                        <div class="col-sm-6 col-lg-6">
                                            <div class="control-group">
                                                <label for="files" id="uploadimage" class="btn btn-warning image">Select Image</label>
                                                <input id="files" name="prodcut-image" style="visibility:hidden;" type="file">
                                            </div>
                                           
                                        </div>
                                        <div class="col-sm-6 col-lg-6">
                                            <button id="add" type="submit" class="btn">Add Product</button>
                                        </div>
                                    
                              </div>
                            </form>   
                        </div>   
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
                                <li><a href="{{URL::to('/admin')}}">Contact us</a></li>
                                <li><a href="{{URL::to('/admin')}}">Terms of service </a></li>
                                <li><a href="{{URL::to('/admin')}}">Pravicy Policy</a></li>
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
