<?php
    foreach($notices as $notice) {
?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card card-alt">
                <div class="card-main">
                    <div class="card-inner">
                        <p class="card-heading text-alt">
                            <?php
                                echo $notice->title
                            ?>
                        </p>
                        <p>
                            <?php
                                echo $notice->content
                            ?>
                        </p>
                    </div>
                    <div class="card-action">
                        <ul class="nav nav-list pull-left">
                            <li>
                                <a href="javascript:void(0)"><span class="icon">add</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><span class="icon">delete</span></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown"><span class="icon">settings</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0)"><span class="icon margin-right-half">loop</span>&nbsp;Lorem Ipsum</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><span class="icon margin-right-half">replay</span>&nbsp;Consectetur Adipiscing</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><span class="icon margin-right-half">shuffle</span>&nbsp;Sed Ornare</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
?>
