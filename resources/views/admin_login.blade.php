<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>admain/open cart</title>
        <!-- Styles -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/style-en.css')}}" rel="stylesheet">
        <link id="base-style" href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
        <!-- end: CSS -->            
    </head>
       <body>                               
        <div class="container">                
            <div class="row text-center">
                <div class="col-lg-5">
                    <p class="alert-danger">
                        <?php  
                            $messege=Session::get('messege');
                            if($messege){
                                echo $messege;
                                Session::put('messege',null);
                            }
                        ?>
                    </p>
                    <h2>Login to your account</h2>
                            <form class="form-horizontal" action="{{url('/customer_login')}}" method="post">
                                {{ csrf_field() }}
                                <fieldset>                  
                                    <div class="input-prepend" title="Username">
                                        <input class="input-large" name="admin_email"  type="text" placeholder="Ente email address"/>
                                    </div>
                                    <div class="input-prepend" title="Password">
                                            <input class="input-large span10" name="admin_password" id="password" type="password" placeholder="Enter  password"/>
                                    </div>
                                    <div class="button-login">  
                                            <button type="submit" class="btn btn-warning">Login</button>
                                    </div>
                                    <div class="clearfix"></div>
                            </form>
                            <hr>
                            <h3>Forgot Password?</h3>
                                    <p>
                                    No problem, <a href="#">click here</a> to get a new password.
                                </p> 
        </div><!--/row-->
        <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
        <div class="col-lg-5">
                    <p class="alert-danger">
                        <?php  
                            $messege=Session::get('messege');
                            if($messege){
                                echo $messege;
                                Session::put('messege',null);
                            }
                        ?>
                    </p>
                    <h2>New User Signup!</h2>
                            <form class="form-horizontal" action="{{url('/customer_registration')}}" method="post">
                                {{ csrf_field() }}
                                <fieldset>                  
                                    <div class="input-prepend" title="Username">
                                        <input class="input-large" type="text" placeholder="Full Name" name="customer_name" required="" />
                                    </div>
                                    <div class="input-prepend" title="email">
                                        <input class="input-large" type="email" placeholder="Email Address" name="customer_email" required=""/>
                                    </div>
                                    <div class="input-prepend" title="Password">
                                        <input class="input-large" type="password" placeholder="Password" name="password" required=""/>
                                    </div>
                                    <div class="input-prepend" title="Mobile Number">
                                            <input class="input-large span10" type="text" placeholder="Mobile Number" name="mobile_number" required=""/>
                                    </div>
                                    <div class="button-login">  
                                            <button type="submit" class="btn btn-warning">SignUp</button>
                                    </div>
                                    <div class="clearfix"></div>
                            </form>
                            
        </div><!--/row-->
    </div><!--/.fluid-container-->
</div>

       
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
