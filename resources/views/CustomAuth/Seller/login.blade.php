
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"/>
    <title>Sign Up | Gym-Fitbouncer</title>
    <link rel="stylesheet" href="{{ asset("Gym/assets/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{ asset("Gym/assets/css/main.css") }}" />
  </head>
  <body>
          <div class="row g-0 auth-row">
            <div class="col-lg-6">
              <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                  <div class="title text-center">
                    <h1 class="text-primary mb-10">Get Started</h1>
                    <p class="text-medium">
                      Start creating the best possible user experience
                      <br class="d-sm-block" />
                      for you customers.
                    </p>
                  </div>
                  <div class="cover-image">
                    <img src="{{ asset("Frontend/images/Final-removebg-preview 1 (4).png") }}" alt="" />
                  </div>
                  <div class="shape-image">
                    <img src="{{ asset("Gym/assets/images/auth/shape.svg") }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6">
              <div class="signup-wrapper">
                <div class="form-wrapper">
                  <h6 class="mb-15">Sign In Form</h6>
                  <p class="text-sm mb-25">
                    Start creating the best possible user experience for you
                    customers.
                  </p>
                  @if(Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                  @endif
                  <form action="{{route('mygym.loggedin')}}" method="POST">
                    @csrf
                    <div class="row">
                      
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Email</label>
                          <input type="email" placeholder="Email" name="email" required />
                          @if($errors->has('email'))
                              <div class="alert-danger">{{ $errors->first('email') }}</div>
                          @endif
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Password</label>
                          <input type="password" placeholder="Password" name="password" required/>
                          @if($errors->has('password'))
                              <div class="alert-danger">{{ $errors->first('password') }}</div>
                          @endif
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="form-check checkbox-style mb-30">
                          
                          <a target="_blank" href="javascript:void(0)" class="form-check-label" for="checkbox-not-robot"> Lost your password?</a>
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="button-group d-flex justify-content-center flex-wrap">
                          <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                            Sign Up
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- end row -->
                  </form>
                  <div class="singup-option pt-40">
                    <p class="text-sm text-medium text-center text-gray">
                      Easy Sign Up With
                    </p>
                    <div class="button-group pt-40 pb-40 d-flex justify-content-center flex-wrap">
                      <button class="main-btn primary-btn-outline m-2">
                        <i class="lni lni-facebook-filled mr-10"></i>
                        Facebook
                      </button>
                      <button class="main-btn danger-btn-outline m-2">
                        <i class="lni lni-google mr-10"></i>
                        Google
                      </button>
                    </div>
                    <p class="text-sm text-medium text-dark text-center">
                      Already have an account? <a href="{{route("mygym.showRegisterForm")}}">Sign In</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
         
          <!-- end row -->
        

  </body>
</html>
