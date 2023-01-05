<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FITBOUNCER ADMIN:LOGIN</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    

    <!-- Styles -->
    <link href="{{ asset('Admin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                        <span>FITBOUNCER</span>
                        </div>
                        <div class="login-form">
                            <h4>Administratior Login</h4>
                            <form action="{{ route('admin.loggedin') }}" method="post">
                                @csrf
                                <div class="alert-info">

                                    {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
                                    @if(Session::has('msg'))
                                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                                    @endif
                                    </div>

                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    @if($errors->has('email'))
                                        <div class="alert-danger">{{ $errors->first('email') }}</div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    @if($errors->has('password'))
                                        <div class="alert-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <div class="checkbox">
                                    {{-- <label>
										<input type="checkbox"> Remember Me
									</label> --}}
                                    <label class="pull-right">
										<a href="#">Forgotten Password?</a>
									</label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                {{-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div> 
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                </div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>