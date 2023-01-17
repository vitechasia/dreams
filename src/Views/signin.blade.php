<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Application</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/assets/img/favicon.ico')}}">
    {!! \Vdes\Dreams\Dream::csslogin() !!}
</head>
<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo">
                            <img src="assets/img/logo.png" alt="img">
                        </div>
                        <div class="login-userheading">
                            <h3>{{__('signin.signin')}}</h3>
                            <h4>{{__('signin.please')}}</h4>
                        </div>
                        <form action="{{url('/proses')}}" method="post">
                            @csrf
                            @method('post')
                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input type="text" placeholder="{{__('signin.placeholder.email')}}" name="email">
                                    <img src="assets/img/icons/mail.svg" alt="img">
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" placeholder="{{__('signin.placeholder.password')}}" name="password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                            <div class="form-login">
                                <div class="alreadyuser">
                                    <h4><a href="forgetpassword.html" class="hover-a">{{__('signin.forgotpass')}}</a></h4>
                                </div>
                            </div>
                            <div class="form-login">
                                <button type="submit" class="btn btn-login">{{__('signin.signin')}}</button>
                            </div>
                            <div class="signinform text-center">
                                <h4>{{__('signin.dont_have_account')}} <a href="signup.html" class="hover-a">{{__('signin.signup')}}</a></h4>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="login-img">
                    <img src="assets/img/login.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>

    {!! \Vdes\Dreams\Dream::jslogin() !!}
    
</body>
</html>
