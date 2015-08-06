<div class="content">
    <div class="content-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
                    <h1 class="heading">NAVER SMARTEDITOR</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2">
                <div class="content-inner ">
                    <form action="<?=site_url('/Management/project_submitted')?>" method="post" id="frm">
                        <fieldset>
                            <div class="form-group form-group-label">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-8">
                                        <label class="floating-label" for="float-text">제목</label>
                                        <input class="form-control ng-title" name="title" id="float-text" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-label control-highlight">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-8">
                                    <textarea class="form-control ng-content"
                                              style="height: 400px; width:100%;"
                                              name="content" id="smarteditor"
                                              rows="10" cols="200"></textarea>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                        <label class="form-label" for="datepicker-adv-1">프로젝트 시작일</label>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-8">
                                        <input class="datepicker-adv datepicker-adv-doc-1 form-control picker__input" id="datepicker-adv-1"
                                               name="start_date"
                                               type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="datepicker-adv-1_root">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                        <label class="form-label" for="datepicker-adv-1">프로젝트 마감일</label>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-8">
                                        <input class="datepicker-adv datepicker-adv-doc-1 form-control picker__input" id="datepicker-adv-1"
                                               name="end_date"
                                               type="text" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="datepicker-adv-1_root">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                        <label class="form-label" for="datepicker-adv-1">담당자</label>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-8">
                                        <p class="ng-modal-container">
                                            <a class="ng-modal-admin-btn btn waves-attach waves-button" data-toggle="modal" href="#modal">사용자들 보기</a>
                                            <span class="ng-admin-username"></span>
                                        </p>
                                        <input id="ng-admin-userid" type="hidden" name="admin_userid" value="-1" />
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group-btn text-center">
                            <a class="btn waves-button waves-effect" href="<?=site_url('/Management/project')?>">뒤로가기</a>
                            <button class="btn btn-blue waves-button waves-light waves-effect" type="button" id="ng-submit">
                                글쓰기
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div aria-hidden="true" class="modal fade" id="modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-heading">
                <a class="modal-close" data-dismiss="modal">&times;</a>
                <h2 class="modal-title">담당자 선택</h2>
            </div>
            <div class="modal-inner">
                <ul id="ng-user-list">
                </ul>
            </div>
            <div class="modal-footer">
                <p class="text-right"><button class="btn btn-flat btn-alt" data-dismiss="modal" type="button">Close</button><button class="btn btn-flat btn-alt" data-dismiss="modal" type="button">OK</button></p>
            </div>
        </div>
    </div>
</div>
