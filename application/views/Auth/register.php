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
                                            <h1 class="card-heading">회원가입</h1>
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
                                        <?php echo validation_errors(); ?>
                                        <form class="form" action="/NEWGENERATION/Auth/register" method="POST">
                                            <div class="form-group form-group-label">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <label class="floating-label" for="register-username">이메일</label>
                                                        <input class="form-control" id="register-username" type="email" 
                                                               name="register-username" value="<?php echo set_value('register-username') ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-label">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <label class="floating-label" for="register-password">비밀번호</label>
                                                        <input class="form-control" id="register-password" type="password" name="register-password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-label">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <label class="floating-label" for="register-password">비밀번호 확인</label>
                                                        <input class="form-control" id="register-password-confirm" type="password" name="register-password-confirm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <button type="submit" class="ng-register-btn-submit btn btn-block btn-blue waves-button waves-effect waves-light">회원가입</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="margin-no-top pull-left"><a href="javascript:void(0)">아이디/비밀번호 찾기</a></p>
                            <p class="margin-no-top pull-right"><a href="javascript:void(0)">로그인하기</a></p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>  