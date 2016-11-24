@extends('Backend.Template.auth')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><img src="{!!asset('logo.png')!!}" class="img-logo"><b>{!!config("app.name")!!}</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">@lang('auth.sub_title')</p>
            <form action="../../index2.html" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="@lang('commonwords.email')">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="@lang('commonwords.password')">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> @lang('auth.remember_me')
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('auth.sign_in')</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- @lang('commonwords.or') -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>@lang('auth.sign_in_fb')</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>@lang('auth.sign_in_gp')</a>
            </div>
            <!-- /.social-auth-links -->

            <a href="#">@lang('auth.forgot_password')</a><br>
            <a href="register.html" class="text-center">@lang('auth.register')</a>
        </div>
  <!-- /.login-box-body -->
</div>

@endsection()