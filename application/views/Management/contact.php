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
                                    <p class="card-heading">문의사항</p>
                                    <div class="card-table">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-stripe" title="Table with Hover and Stripe Rows">
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>제목</th>
                                                    <th>생성일</th>
                                                    <th>작성자</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                foreach($contacts as $item) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $item->_contactid ?></td>
                                                        <td>
                                                            <a href="/NEWGENERATION/Management/contact_detail?contactid=<?php echo $item->_contactid ?>">
                                                                <?php echo $item->title ?>
                                                            </a>
                                                        </td>
                                                        <td><?php echo $item->created ?></td>
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
                                                href="/NEWGENERATION/Management/contact?page=<?php echo $page-1 ?>&perPage=<?php echo $perPage?>">
                                                <span class="icon">chevron_left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a <?php if ($page == $last_page) echo "class='ng-disabled-btn'"; ?>
                                                href="/NEWGENERATION/Management/contact?page=<?php echo $page+1 ?>&perPage=<?php echo $perPage?>">
                                                <span class="icon">chevron_right</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>