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
                                            <h1 class="card-heading">비밀번호 찾기</h1>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <?php echo validation_errors(); ?>
                                        <form class="form" action="<?=site_url('/Auth/forgot_password')?>" method="POST">
                                            <div class="form-group form-group-label">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <label class="floating-label" for="forgot_email">이메일</label>
                                                        <input class="form-control" id="forgot_email" type="email" name="forgot_email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-push-1">
                                                        <button type="submit" class="btn btn-block btn-blue waves-button waves-effect waves-light">비밀번호 찾기</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>  