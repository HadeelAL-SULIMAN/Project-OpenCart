<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Product/open cart</title>
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/style-en.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/dashboard.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/animate.min.css')}}" rel="stylesheet">


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
                </div>
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
        <script type="text/javascript">
            $("#files").change(function() {
                filename = this.files[0].name
            });
        </script>
        <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    </body>
</html>
