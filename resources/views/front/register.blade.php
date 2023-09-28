<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Car Shop</title>

    <!-- Bootstrap -->
    <link href="admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="admin_theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="admin_theme/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="admin_theme/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="admin_theme/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
                <div class="mb-3">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach   
                        </div>
                    @endif
                <div>
            <form action = "{{route('user_register')}}" method="post">
              <h1>Create Account</h1>
              @csrf
              <div>
                <input type="text" class="form-control" name = 'name' placeholder="Username" required="" />
              </div>
              
              <div>
                <input type="text" class="form-control" name="email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
             <div>
                <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
                <input type="submit" name="">
                <!--<a class="reset_pass" href="#">Lost your password?</a>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!--<p class="change_link">New to site?
                  <a href="#" class="to_register"> Create Account </a>
                </p>-->
                <a href="{{route('home')}}" > Home </a>
                <div class="clearfix"></div>
                <br />

               <!-- <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>-->
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="" >
              
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" name = 'name' placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name='email' placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name = 'password' placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <!--<div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>-->
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
