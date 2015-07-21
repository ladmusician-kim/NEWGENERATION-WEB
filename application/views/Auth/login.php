    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-push-4 col-sm-6 col-sm-push-3">
                    <section class="content-inner">
                        <div class="card-wrap">
                            <div class="card">
                                <div class="card-main">
                                    <div class="card-header">
                                        <div class="card-inner">
                                            <h1 class="card-heading">로그인</h1>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                    <!--
                                        <p class="text-center">
                                            <span class="avatar avatar-inline avatar-lg">
                                                <img alt="Login" src="images/users/avatar-001.jpg">
                                            </span>
                                        </p>
                                        --> 
                                        
                                        <form class="form" action="<?=site_url('/Auth/login?returnURL='.rawurlencode($returnURL))?>" method="POST">
                                            <div class="form-group form-group-label">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <label class="floating-label" for="login_email">이메일</label>
                                                        <input class="form-control" id="login_email" type="email" name="login_email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-label">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <label class="floating-label" for="login_password">비밀번호</label>
                                                        <input class="form-control" id="login_password" type="password" name="login_password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <button type="submit" class="btn btn-block btn-blue waves-button waves-effect waves-light">로그인</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <div class="checkbox checkbox-adv">
                                                            <label for="login-remember">
                                                                <input class="access-hide" id="login_remember" name="login_remember" type="checkbox">로그인 유지
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="margin-no-top pull-left"><a href="<?=site_url('/Auth/forgot_password')?>">비밀번호 찾기?</a></p>
                            <p class="margin-no-top pull-right"><a href="<?=site_url('/Auth/register')?>">가입하기</a></p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>  