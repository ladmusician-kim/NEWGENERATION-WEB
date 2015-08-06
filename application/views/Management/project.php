<div class="content">
    <div class="content-heading">
        <div class="container">
            <h1 class="heading">
                관리페이지
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10">
                <section class="content-inner">
                    <div class="card-wrap">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <p class="card-heading">프로젝트</p>
                                    <div class="card-table">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-stripe" title="Table with Hover and Stripe Rows">
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>제목</th>
                                                    <th>시작일</th>
                                                    <th>마감일</th>
                                                    <th>생성일</th>
                                                    <th>담당자</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                foreach($projects as $item) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $item->_projectid ?></td>
                                                        <td>
                                                            <a href="/NEWGENERATION/Management/project_detail?projectid=<?php echo $item->_projectid?>">
                                                                <?php echo $item->title ?>
                                                            </a>
                                                        </td>
                                                        <td><?php echo $item->start_date ?></td>
                                                        <td><?php echo $item->end_date ?></td>
                                                        <td><?php echo $item->updated ?></td>
                                                        <td>
                                                            <?php echo $item->username ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <ul class="nav nav-list pull-right">
                                        <li>
                                            <a <?php if ($page == 1) echo "class='ng-disabled-btn'"; ?>
                                                href="/NEWGENERATION/Management/project?page=<?php echo $page-1 ?>&perPage=<?php echo $perPage?>">
                                                <span class="icon">chevron_left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a <?php if ($page == $last_page) echo "class='ng-disabled-btn'"; ?>
                                                href="/NEWGENERATION/Management/project?page=<?php echo $page+1 ?>&perPage=<?php echo $perPage?>">
                                                <span class="icon">chevron_right</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group-btn text-center">
                                    <a class="btn btn-blue waves-button waves-light waves-effect"
                                       href="/NEWGENERATION/Management/project_create">프로젝트 만들기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>