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
	              	<form action="<?=site_url('/Management/notice_submitted')?>" method="post" id="frm">
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
                        <div class="form-group-btn text-center">
                            <button class="btn waves-button waves-effect" type="button">뒤로가기</button>
                            <button class="btn btn-blue waves-button waves-light waves-effect" type="button" id="ng-submit">
                                  글쓰기   
                            </button>
                        </div>
                        </fieldset>
					</form>
				</div>
            </div>
        </div>
    </div>
</div>
